<!DOCTYPE html>
<html>
<head>
  <title>PHP Form Validation Example</title>
</head>
<body>

  <h2>Form Validation in PHP</h2>

<?php
// PHP VALIDATION LOGIC

$studentName = $userName =$age = $email = $phoneNumber =$studentID = $password = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- Validate Name ---
     if (empty($_POST["studentName"])  ) {
      $nameErr = "Name is required";
    } 
  else if(!preg_match("/^[A-Za-z ]+$/", $studentName)){
    $errorr = "Full name must contain only letters and space";
    else if(strlen("$studentName")< 3){
        $error = Full name must be at least 3 character long;
    }FullName:
    <input type="text" name="Student Name" value="<?php echo $studentName; ?>">
    <span style="color:red">
        * <?php echo $nameErr; ?>
    </span>
 
    <br><br>
FullName:
    <input type="text" name="Student Name" value="<?php echo $studentName; ?>">
    <span style="color:red">
        * <?php echo $nameErr; ?>
    </span>
 
    <br><br>

    else if(strlen("studentName") > 50){
        $errror = Full name cannot exceed 50 characters;
    }
     $name = $_POST["name"];
  
   if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = $_POST["age"];

        if (!is_numeric($age) || $age < 18 || $age > 30) {
            $error = "Enter a valid age between 18 and 30";
        }
    }
 
    if (empty($_POST["email"])) {
        $error = "Email is required";
    } else {
        $email = $_POST["email"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
   }
    if(strlen("password")<8 ){
        $error = "Password must contain at least 8 characters";
    }
}
 if(strlen("userName") < 5 || strlen("userName"< 15)){
    $error = "Username must be between 5-15 characters";
 }
}
?>
 
 
 
<form method="post" action="">
 
    FullName:
    <input type="text" name="Student Name" value="<?php echo $studentName; ?>">
    <span style="color:red">
        * <?php echo $error; ?>
    </span>
 
    <br><br>

    User Name:
    <input type="text" name="User Name" value="<?php echo $userName; ?>">
    <span style="color:red">
        * <?php echo $error; ?>
    </span>
 
    <br><br>

    Age:
    <input type="text" name="age" value="<?php echo $age; ?>">
    <span style="color:red">
        * <?php echo $ageErr; ?>
    </span>
 
    <br><br>
 
    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red">
     * <?php echo $emailErr; ?>
    </span>
 
    <br><br>
 
    <input type="submit" name="submit" value="Submit">

Phone Numer:
    <input type="text" name="Student Name" value="<?php echo $studentName; ?>">
    <span style="color:red">
        * <?php echo $nameErr; ?>
    </span>
 
    <br><br>

 
</form>
 
<?php
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST" &&  
 empty($nameErr) &&    empty($ageErr) &&    empty($emailErr))
    {
 
    echo "<h3>Your Input:</h3>";
    echo "Name: $name <br>";
    echo "Age: $age <br>";
    echo "Email: $email <br>";
}
?>
 
</body>
</html>