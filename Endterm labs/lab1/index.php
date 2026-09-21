<?php 

if($_SERVER){}
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
            <button type= "submit">Submit</button>
        <p style = color:red>
            <?php echo $errors; ?> 
        </p>

        
    </from>
</body>
</html>