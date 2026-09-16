<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="content"> </p>
    <input type = "text" id ="name" placeholder ="Enter your Name"> 
    <button onclick ="textsubmit()">Submit</button>
    <script>
        function textsubmit(){
            let name = document.getElementById("name").value;
        document.getElementById("content").innerHTML = "Hello " +name;
        setTimeout(()=> {
            alert("You Entered: " + name)
        },500);
        }
          document.getElementById("name").addEventListener("keydown",function(event){
            if (event.key == "Enter"){
                event.preventDefault();
                textSubmit();
            }
        });
    </script>
</body>
</html>