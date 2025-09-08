<?php 
class UserProfile {

    private $logger;
    
    public function createUser() {
        echo "creating user";
        $this->logger->log("User Created");
    }
    
    public function updateUser() {
        echo "updating user";
        $this->logger->log("User Updated");
    }
    
    public function deleteUser() {
        echo "deleting user";
        $this->logger->log("Deleting User");
    }
    
    public function __construct(LoggerInterface $logger) 
    {
        $this->logger = $logger;
    }

}

?>