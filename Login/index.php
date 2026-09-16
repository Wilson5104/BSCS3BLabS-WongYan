<?php 
    session_start();
    $defaultUsername = "Jhon";
    $defaultPassword = "Pass123";
    
    $message = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
   
        if($defaultUsername == $username && $defaultPassword == $password){
            $_SESSION["username"] == $username;
            header("Location: dashboard.php");
            exit();
        }else{
            $message = "Invalid input";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">

    </script>
    <div class="container border border-primary rounded p-4 my-5">
    <h2 class="text-left" style="padding-bottom: 2px;">Log-in</h2>
    <from method ="POST">
            <label for = "UserName">
                <input type="text" name="username" placeholder="Username" >
            </label><br><br>
            <label for="Password">
                <input type="password" name = "password" placeholder="Password">
            </label><br><br>
            <button type= "submit">Submit</button>
            <p style = color:red>
                <?php echo $message; ?> 
            </p>
        </from>
    </div>      
</body>
</html>