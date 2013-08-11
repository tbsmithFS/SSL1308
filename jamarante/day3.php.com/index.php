<!DOCTYPE html>
<html lang="en">
<head>
	<title>Day 3 PHP Lab</title>
	<meta charset="utf-8">
	<link href="css/main.css" rel="stylesheet">
</head>


<body>
	<form id="user_form" action="" name="simple_form" method="post">
		<label>Full Name</label>
		<input type="text" name="full_name" /><br>
		<label>Email</label>
		<input type="text" name="email"/><br>
		<label>Password</label>
        <input type="password" name="password" /><br>
		<label>Confirm Password</label>
        <input type="password" name="confirm_password" /><br>
		<input class="button" type="submit" value="Submit" />
	</form>

    <div id="message">
    <?php
    
    $message = "Please fill all the fields.";

    function validate() {
        include_once("scripts/formvalidator.php");
    
        $formFields = array(
            "full_name" => $_POST['full_name'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "confirm_password" => $_POST['confirm_password']
        );
    
        $formValidator = new FormValidator();
        $message = $formValidator->validate($formFields);
    
        echo "$message";
    }
    
    if (!empty($_POST)) {
        validate();
    } else {
        echo "$message";
    }
    
    ?>
    </div>
</body>

</html>
