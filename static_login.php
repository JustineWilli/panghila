<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Peys App</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        form {
            border: 2px solid #000000;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            background-color: #EBEBEBFF;
            text-align: center;
            width: 100%;
            max-width: 400px; /* Limiting form width */
            box-sizing: border-box;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            max-width: 350px; /* Ensures input fields are not too wide */
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box; /* Ensures padding is included in the width */
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .links {
            margin-top: 15px;
            font-size: 0.9em;
        }
        .links a {
            color: #007bff;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form id="loginForm" method="post">
    <h1>Login</h1>
    
    <!-- Username Input -->
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" required>
    
    <!-- Password Input -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
    <br>

    <!-- Login Button -->
    <button type="submit">Login</button>

    <!-- Forgot Password & Register Links -->
    <div class="links">
        <p><a href="#">Forgot Password?</a></p>
        <p>Don't have an account? <a href="#">Register here</a></p>
    </div>
</form>

</body>
</html>
