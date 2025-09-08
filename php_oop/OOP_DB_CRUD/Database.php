<?php

    class Database {
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $dbname = "crud";

        public $conn;

        public function __construct() {
            $this->connect();
        }

        public function connect() {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);

            if ($this->conn->connect_error) {
                die("❌ Connection failed: " . $this->conn->connect_error);
            } else {
                echo "✅ Connected successfully <br>";
            }

            return $this->conn;
        }

        public function close() {
            $this->conn->close();
        }
    }

?>