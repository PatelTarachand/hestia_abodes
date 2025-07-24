<?php
/**
 * Database Configuration
 * Perfect Contact System - Database Connection
 */

class Database {
    private $host = 'localhost';
    private $db_name = 'realestate_db';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function getConnection() {
        $this->conn = null;
        
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                )
            );
        } catch(PDOException $exception) {
            error_log("Connection error: " . $exception->getMessage());
            return null;
        }
        
        return $this->conn;
    }
}

/**
 * Email Configuration
 */
class EmailConfig {
    // SMTP Configuration
    const SMTP_HOST = 'smtp.gmail.com';
    const SMTP_PORT = 587;
    const SMTP_USERNAME = 'your-email@gmail.com'; // Change this
    const SMTP_PASSWORD = 'your-app-password';    // Change this
    const SMTP_ENCRYPTION = 'tls';
    
    // Email Settings
    const FROM_EMAIL = 'hello@hestiaabodes.in';
    const FROM_NAME = 'Hestia Abodes';
    const ADMIN_EMAIL = 'hello@hestiaabodes.in';
    const ADMIN_NAME = 'Hestia Abodes Admin';
    
    // Auto-reply settings
    const AUTO_REPLY_ENABLED = true;
    const AUTO_REPLY_SUBJECT = 'Thank you for contacting Hestia Abodes';
}

/**
 * General Configuration
 */
class Config {
    // Security
    const ENABLE_RATE_LIMITING = true;
    const MAX_SUBMISSIONS_PER_HOUR = 5;
    const ENABLE_HONEYPOT = true;
    
    // Validation
    const MAX_MESSAGE_LENGTH = 2000;
    const MIN_MESSAGE_LENGTH = 10;
    const ALLOWED_FILE_TYPES = ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'];
    const MAX_FILE_SIZE = 5242880; // 5MB
    
    // Response messages
    const SUCCESS_MESSAGE = 'Thank you! Your message has been sent successfully. We will contact you within 24 hours.';
    const ERROR_MESSAGE = 'Sorry, there was an error sending your message. Please try again or contact us directly.';
    const RATE_LIMIT_MESSAGE = 'Too many submissions. Please wait before sending another message.';
}
?>
