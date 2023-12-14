<html >
<head>
   
    <title>User Registration</title>
    <script src="../assets/registration.js"></script>
</head>
<body>

    <h2>User Registration</h2>

    <form id="registrationForm">
        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Phone -->
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Confirm Password -->
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <!-- Submit Button -->
        <button type="button" onclick="register()">Register</button>
    </form>



</body>
</html>
