<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>

    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val().trim();
                var email = $("#email").val().trim();
                var password = $("#password").val().trim();
                var valid = true;

                // Reset pesan error
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Validasi Password
                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                // Jika validasi gagal, hentikan proses
                if (!valid) {
                    return;
                }

                // Jika validasi berhasil, kirim data menggunakan AJAX
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: {
                        nama: nama,
                        email: email,
                        password: password
                    },
                    success: function (response) {
                        $("#hasil").html(response);
                        // Reset form setelah berhasil
                        $("#myForm")[0].reset();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        $("#hasil").html("<p style='color:red;'>Terjadi kesalahan: " + textStatus + "</p>");
                    }
                });
            });

            // Fungsi untuk validasi format email
            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
        });
    </script>
</body>

</html>
