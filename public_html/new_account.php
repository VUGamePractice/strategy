<html>
<head>
    <title>Sign up</title>
</head>
<body>

<?php
// define variables and set to empty values
$passwordsOk = true; //passwords is equal
$allOk = false; //all parameters have more than 5 symbols
$DB = true; //database unique
$emailValid = true; //email is regex valid
$username = $password = $password2 = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = test_input($_POST["UserName"]);
    $password = test_input($_POST["Password"]);
    $password2 = test_input($_POST["Password2"]);
    $email = test_input($_POST["Email"]);
    if ($password == $password2)
    {
        $passwordsOk = true;
        if(strlen($username) > 5 && strlen($password) > 5 && strlen($email) > 5)
        {
            $allOk = true;
            $regex = stripslashes("/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}/");
            preg_match($regex, $email, $output_array);
            if(count($output_array) > 0)
            {
                $emailValid = true;
            }
            else
            {
                $emailValid = false;
            }
        }
    }
    else
    {
        $passwordsOk = false;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($DB == false)
    echo "<font color='red'>E-mail or username is already in use.</font>";

if (!$passwordsOk)
    echo "<font color='red'>Passwords must match.</font>";

if (!$allOk)
    echo "<font color='#ff4500'>Some parameters are invalid</font>";

if(!$emailValid)
    echo "<font color='red'>Your specified e-mail is not valid.</font>";

?>

<FORM method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset>
        <legend>Create new account:</legend>
        User Name:<br>
        <input type="text" name="UserName" required />
        <br>
        Password:<br>
        <input type="text" name="Password" required />
        <br>
        Repeat password:<br>
        <input type="text" name="Password2" required />
        <br>
        E-mail:<br>
        <input type="text" name="Email" required />
        <br>
        <input type="submit" name="Create">
    </fieldset>
</FORM>
<FORM>
    <br>
    <a href="/">Back to main page.</a>
</FORM>
</body>
</html>