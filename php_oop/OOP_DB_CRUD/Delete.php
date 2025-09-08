<?php
    require_once 'Database.php';

    class User {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->connect();
        }

        public function deleteUser($id) {
            $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
            $stmt->bind_param("i", $id); // 'i' for integer

            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    echo "✅ User with ID $id deleted successfully.";
                } else {
                    echo "⚠️ No user found with ID $id.";
                }
            } else {
                echo "❌ Delete failed: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    // 🧪 Test the delete
    $user = new User();
    $user->deleteUser(2); // Deletes user with ID = 2
?>
