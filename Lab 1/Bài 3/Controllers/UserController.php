<?php
$email = isset($_POST['email']) ? $_POST['email'] : null;
if ($email) {
    $user = get_user($email);
}
