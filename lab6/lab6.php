<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <p id = "result"> Enter the score to check your grade </p>
    <input type = "text" id ="grade" placeholder ="Enter your Grade">
    <input type = "text" id ="total" placeholder ="Enter your Total scoore">
    <select name="options" id="op">
        <option value="percentage"> Percentage</option>
        <option value="PassorFail">Pass or Fail</option>
    </select>
    <button onclick ="textsubmit()">Submit</button>
    <img id = image src="light_off.png" class= "bulb" alt="light_off">
    <script>

        function textsubmit(){
            let grade = Number(document.getElementById("grade").value);
            let total = Number(document.getElementById("total").value);
            let message = Number(document.getElementById("result").value);
            let bulb = document.getElementById("image")
            let result = garde/total*100;
        }
        if(option ="percentage"){
            if(result <=75){
            bulb.scr ="light_off.png";
            }
            else if (result <= 100 ){
            bulb.scr ="light_on.png";
            }
        
        }else if(option = "PassorFail"){
            
            if(result >= 75){
            document.getElementById("content").innerHTML = "pass";
            <img class = "bulb" src ="light_on.png"> </img>
            } else{
                document.getElementById("content").innerHTML = "fail ";
                <img class = "bulb" scr ="light_off.png"> </img>
            }
            <img scr ="light_on.png" alt="light_off"> </img>
        }
    </script>
</body>
</html>