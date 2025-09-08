<?php
    require_once 'Database.php';

    class User {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->connect();
        }

        public function updateUser($id, $name, $password) {
            $stmt = $this->conn->prepare("UPDATE users SET name = ?, password = ? WHERE id = ?");
            $stmt->bind_param("ssi", $name, $password, $id); // s = string, s = string, i = integer

            if ($stmt->execute()) {
                echo "✅ User updated successfully!";
            } else {
                echo "❌ Update failed: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    // 🧪 Test the update
    $user = new User();
    $user->updateUser(1, "Abhisek Kumar", "newpass123"); // updates user with id = 1
?>
