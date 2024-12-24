<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form action="process.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email address:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="phone">Phone number:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
