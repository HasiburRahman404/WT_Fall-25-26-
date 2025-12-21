<!DOCTYPE html>
<html>
<head>
    <title>PHP Code</title>
</head>

<body>

<h1>Welcome to Registration</h1>

<?php
// Initialize variables
$name = "";
$nameerr = "";
$email="";
$emailerr="";
$gender="";
$gendererr="";
$blood="";
$blooderr="";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check empty name
    if (empty($_POST["name"])) {
        $nameerr = "Name is required";
    } 
    else {
        $name = test_input($_POST["name"]);

        // Allow only letters and spaces
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameerr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailerr = "Email is required";
    } 
    else {
        $email = test_input($_POST["email"]);

        // Allow only letters and spaces
        if (!preg_match("/@/", $email)) {
            $emailerr = "Email must contain @ symbol";
        }
    }
     if (empty($_POST["gender"])) {
        $gendererr = "gender is required";
    } 
    else {
        $gender = test_input($_POST["gender"]);}

        if (empty($_POST["blood"])) {
        $blooderr = "Please select a blood group";
    } else {
        $blood = test_input($_POST["blood"]);
    }


}

// Function to clean input
function test_input($data)
{
    $data = trim($data);   // remove extra spaces
    return $data;
}
?>

<form method="post" action="">
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;"><?php echo $nameerr; ?></span>
    <br><br>
    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;"><?php echo $emailerr; ?></span>
    <br><br>

    Gender:<br>
        <input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="Other" <?php if ($gender=="Other") echo "checked"; ?>> Other
        <br>
        <span style="color:red;"><?php echo $gendererr; ?></span><br><br>

       Blood Group:<br>
    <select name="blood">
        <option value="">Select</option>
        <option value="A+" <?php if($blood=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if($blood=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if($blood=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if($blood=="B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if($blood=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if($blood=="O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if($blood=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if($blood=="AB-") echo "selected"; ?>>AB-</option>
    </select>

    <br>
    <span style="color:red;"><?php echo $blooderr; ?></span><br><br>

    


    

    <input type="submit" value="Submit">
</form>

<?php
// Show output if no error
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameerr)&& empty($emailerr)&& empty($gendererr)&& empty($blooderr)) {
    echo "<h3>Your Input:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Blood: " . $blood . "<br>";
}
?>

</body>
</html>