<?php 
include("db.php");
$errors = [];
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if(strlen($username)<=8){
        $errors[] = "Username must be equal or greater than 8 characters.";
    } else if (empty($username)){
        $errors[] = "Username is required ";
    }
    $sql = "SELECT 'username' FROM 'users' WHERE 'username = $username'";
    $result = $conn->query($sql);
    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_].{8,})$/';

    if($password != $confirmPassword){
        $errors []= "Password did not match";
    }

    if(!preg_match($pattern,$password)){
        $errors[]="Password must conyain at least 1 lowercase, 1 uppercase,
        1 specail chars.";
    }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <from method ="POST">
        <label for = "UserName">
            <input type="text" name="username" placeholder="Username" >
        </label><br><br>
        <label for="Password">
            <input type="password" name = "password" placeholder="Password">
        </label><br><br>
        <label for="Confirm Password">
            <input type="confirm_password" name = "confirm_password" placeholder="confirm_password">
        </label><br><br>
            <button type= "submit">Submit</button>
        <p style = color:red>
            <?php echo $errors[]; ?> 
        </p>
    </from>
</body>
</html>