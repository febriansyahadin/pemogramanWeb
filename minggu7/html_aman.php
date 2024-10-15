<?php
// Memeriksa apakah input adalah email yang valid
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    echo "Email valid: " . $email;
} else {
    // Tangani input yang tidak valid
    echo "Email tidak valid!";
}
?>
