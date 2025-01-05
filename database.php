<?php
class Database
{

    public $conn;

    // Method to get the database connection
    public function getConnection()
    {
        $conn = new mysqli('localhost', 'root', '', 'lab_5b');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $conn->close();
    }
}