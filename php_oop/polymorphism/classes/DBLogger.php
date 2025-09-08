<?php 
class DBLogger implements LoggerInterface {
    public function log($message) {
        echo "logging message to DB: $message";
    }
}
?>