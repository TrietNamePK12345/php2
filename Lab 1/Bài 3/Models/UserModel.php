<?php
 function get_user($email)
 {
     require_once __DIR__ . '/../configs/database.php';
     $sql = "SELECT * FROM users WHERE email = ?";
     $stmt = $con->prepare($sql);
     $stmt->bind_param("s", $email);
     $stmt->execute();

     $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row;
     }
     $con->close();
 }

