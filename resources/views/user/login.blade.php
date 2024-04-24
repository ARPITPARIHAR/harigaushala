<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Welcome Back!</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('img/cows.jpg');
    background-repeat: no-repeat;
    background-size: cover; /* छवि को पूरी पृष्ठ के आकार में प्रदर्शित करें */
    background-position: center; /* छवि को पृष्ठ के केंद्र में सेट करें */
    height: 100vh; /* पूरे ऊँचाई में छवि को प्रदर्शित करने के लिए */
}


.login-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>