<?php
/**
 * Perfect Contact Handler
 * Handles all contact form submissions with security, validation, and email functionality
 */

require_once '../config/database.php';
require_once 'EmailService.php';
require_once 'ValidationService.php';
require_once 'SecurityService.php';

class ContactHandler {
    private $db;
    private $emailService;
    private $validator;
    private $security;
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->emailService = new EmailService();
        $this->validator = new ValidationService();
        $this->security = new SecurityService();
    }
    
    /**
     * Handle contact form submission
     */
    public function handleContactForm($data) {
        try {
            // Security checks
            if (!$this->security->checkRateLimit($_SERVER['REMOTE_ADDR'])) {
                return $this->jsonResponse(false, Config::RATE_LIMIT_MESSAGE);
            }
            
            if (!$this->security->checkHoneypot($data)) {
                return $this->jsonResponse(false, 'Security check failed');
            }
            
            // Validate input
            $validation = $this->validator->validateContactForm($data);
            if (!$validation['valid']) {
                return $this->jsonResponse(false, 'Validation failed', $validation['errors']);
            }
            
            // Sanitize data
            $cleanData = $this->sanitizeData($data);
            
            // Save to database
            $contactId = $this->saveToDatabase($cleanData, 'contact');
            if (!$contactId) {
                return $this->jsonResponse(false, 'Database error occurred');
            }
            
            // Send emails
            $emailSent = $this->emailService->sendContactEmail($cleanData, $contactId);
            if (!$emailSent) {
                error_log("Email failed for contact ID: $contactId");
            }
            
            // Update rate limiting
            $this->security->updateRateLimit($_SERVER['REMOTE_ADDR']);
            
            return $this->jsonResponse(true, Config::SUCCESS_MESSAGE, ['id' => $contactId]);
            
        } catch (Exception $e) {
            error_log("Contact form error: " . $e->getMessage());
            return $this->jsonResponse(false, Config::ERROR_MESSAGE);
        }
    }
    
    /**
     * Handle appointment form submission
     */
    public function handleAppointmentForm($data) {
        try {
            // Security checks
            if (!$this->security->checkRateLimit($_SERVER['REMOTE_ADDR'])) {
                return $this->jsonResponse(false, Config::RATE_LIMIT_MESSAGE);
            }
            
            // Validate input
            $validation = $this->validator->validateAppointmentForm($data);
            if (!$validation['valid']) {
                return $this->jsonResponse(false, 'Validation failed', $validation['errors']);
            }
            
            // Sanitize data
            $cleanData = $this->sanitizeData($data);
            
            // Save to database
            $appointmentId = $this->saveToDatabase($cleanData, 'appointment');
            if (!$appointmentId) {
                return $this->jsonResponse(false, 'Database error occurred');
            }
            
            // Send emails
            $emailSent = $this->emailService->sendAppointmentEmail($cleanData, $appointmentId);
            if (!$emailSent) {
                error_log("Email failed for appointment ID: $appointmentId");
            }
            
            // Update rate limiting
            $this->security->updateRateLimit($_SERVER['REMOTE_ADDR']);
            
            return $this->jsonResponse(true, 'Your appointment has been booked successfully! We will call you to confirm the details.', ['id' => $appointmentId]);
            
        } catch (Exception $e) {
            error_log("Appointment form error: " . $e->getMessage());
            return $this->jsonResponse(false, Config::ERROR_MESSAGE);
        }
    }
    
    /**
     * Sanitize input data
     */
    private function sanitizeData($data) {
        $clean = [];
        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $clean[$key] = htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
            } else {
                $clean[$key] = $value;
            }
        }
        return $clean;
    }
    
    /**
     * Save data to database
     */
    private function saveToDatabase($data, $type) {
        try {
            if ($type === 'contact') {
                $sql = "INSERT INTO contact_submissions (
                    first_name, last_name, email, mobile, property_type, 
                    budget_range, message, ip_address, user_agent, created_at
                ) VALUES (
                    :first_name, :last_name, :email, :mobile, :property_type,
                    :budget_range, :message, :ip_address, :user_agent, NOW()
                )";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute([
                    ':first_name' => $data['firstName'],
                    ':last_name' => $data['lastName'],
                    ':email' => $data['email'],
                    ':mobile' => $data['mobile'],
                    ':property_type' => $data['propertyType'],
                    ':budget_range' => $data['budgetRange'],
                    ':message' => $data['message'],
                    ':ip_address' => $_SERVER['REMOTE_ADDR'],
                    ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
                ]);
                
            } else if ($type === 'appointment') {
                $sql = "INSERT INTO appointment_bookings (
                    full_name, email, phone, property_type, preferred_date,
                    preferred_time, additional_info, ip_address, user_agent, created_at
                ) VALUES (
                    :full_name, :email, :phone, :property_type, :preferred_date,
                    :preferred_time, :additional_info, :ip_address, :user_agent, NOW()
                )";
                
                $stmt = $this->db->prepare($sql);
                $stmt->execute([
                    ':full_name' => $data['fullName'],
                    ':email' => $data['email'],
                    ':phone' => $data['phone'],
                    ':property_type' => $data['propertyType'],
                    ':preferred_date' => $data['preferredDate'],
                    ':preferred_time' => $data['preferredTime'],
                    ':additional_info' => $data['additionalInfo'] ?? '',
                    ':ip_address' => $_SERVER['REMOTE_ADDR'],
                    ':user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
                ]);
            }
            
            return $this->db->lastInsertId();
            
        } catch (PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Return JSON response
     */
    private function jsonResponse($success, $message, $data = null) {
        return [
            'success' => $success,
            'message' => $message,
            'data' => $data
        ];
    }
}
?>
