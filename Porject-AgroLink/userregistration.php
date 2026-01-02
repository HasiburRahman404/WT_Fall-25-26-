<!DOCTYPE html>
<html >
<head>
   
    <title>Customer Registration-AgroLink</title>
    <link rel="stylesheet" href="userregistration.css">
</head>
<body>

<div class="container">
    <h2>Create Account</h2>

    <form>
        <label>Full Name</label>
        <input type="text" id="name" name="name">

        <label>Email</label>
        <input type="email" id="email" name="email">

        <label>Phone Number</label>
        <input type="text" id="phonenumber"name="phonenumber">

        <label>Password</label>
        <input type="password"id="password"name="password">

        <label>Confirm Password</label>
        <input type="password"id="confirmpassword"name="confirmpassword">

        <button type="submit" id="button">Register</button>

        <p class="logintext">
            Already have an account? <a href="#">Login</a>
        </p>
    </form>
</div>

</body>
</html>
