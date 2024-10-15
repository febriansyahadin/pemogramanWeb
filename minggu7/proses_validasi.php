<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil dan membersihkan data
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $errors = [];

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Password
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    if (!empty($errors)) {
        // Menampilkan pesan error
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Memproses data (misalnya, menyimpan ke database)
        // **Catatan:** Pastikan untuk mengamankan password dengan hashing sebelum menyimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Contoh: Menampilkan data yang diproses
        echo "<p style='color:green;'>Data berhasil diproses.</p>";
        echo "<p>Nama: " . htmlspecialchars($nama) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        // Jangan menampilkan password asli atau hash kepada pengguna
    }
}
?>
