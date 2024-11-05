<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABC PAVALION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .header {
            background-color: #4169E1;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 1.5em;
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            width: 400px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4169E1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #666666;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .password-container {
            position: relative;
        }
        .password-container input {
            padding-right: 40px; 
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #666;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }
        .toggle-password:hover {
            color: #333;
        }
        .footer {
            background-color: #4169E1;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
        }
    </style>
</head>
<body>

<div class="header">
    HOTEL PAVALION
</div>

<div class="container">
    <div class="login-box">
        <h2>LOGIN</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <div id="usernameError" class="error"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" name="password">
                    <i class="toggle-password fas fa-eye" id="togglePassword"></i>
                </div>
                <div id="passwordError" class="error"></div>
            </div>
            <div class="form-group">
                <button type="submit">LOGIN</button>
            </div>
        </form>
    </div>
</div>

<div class="footer">
    &copy; 2024 PAVALION Hotel. All Rights Reserved.
</div>

<script>
 
    document.getElementById('togglePassword').addEventListener('click', function() {
        const password = document.getElementById('password');
        const icon = this;
        
      
        if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); 

        var username = document.getElementById('username').value.trim();
        var password = document.getElementById('password').value.trim();

        document.getElementById('usernameError').textContent = '';
        document.getElementById('passwordError').textContent = '';

        var isValid = true;

        if (username === '') {
            document.getElementById('usernameError').textContent = 'Harus terisi';
            isValid = false;
        }

        if (password === '') {
            document.getElementById('passwordError').textContent = 'Harus terisi';
            isValid = false;
        } else if (password.length < 5) {
            document.getElementById('passwordError').textContent = 'Password minimal 5 karakter';
            isValid = false;
        } else if (!/[a-zA-Z]/.test(password) || !/\d/.test(password)) {
            document.getElementById('passwordError').textContent = 'Password harus terdiri dari huruf dan angka';
            isValid = false;
        }

        
        if (isValid) {
           
            sessionStorage.setItem('username', username);

            window.location.href = 'Home.php';
        }
    });
</script>

</body>
</html>
