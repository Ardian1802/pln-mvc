<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/listrik.png" type="image/x-icon">
    <style>
		body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f4f4f4;
}

.login-container {
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    width: 300px;
}

.login-form {
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    color: #666;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #217dbb;
}

	</style>
</head>
<body>
    <div class="login-container">
	<?php
		require_once ROOT . "app/views/" . $view . ".php";
		session_destroy();
		?>
    </div>
</body>
</html>

		