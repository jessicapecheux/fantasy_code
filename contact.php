<?php include("_header.php"); ?>
<script src="assets/js/script.js"></script>
<link rel="stylesheet" href="/assets/css/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact us</h1>
    <form action="/action.contact.php"method="post">
   <label for="name">Firstame</label>
   <input type="text" id="name"name="name" placeholder="Homer" required>
    <br><br>
    <label for="name">Lastname</label>
    <input type="text" id="name"name=name placeholder="Simpson" required>
   <br><br>
   <label for="email">Email</label>
    <input type="text" id="email"name=email placeholder="homer.simpson@gmail.com" required>
    <br><br>
    <label for="Message">Message</label>
    <textarea id="Message" name="Messsage" rows="10" cols="40">
        Hello, I would like to be able to obtain more information about the data analyst training...
    </textarea>
        
        
    </textarea>
    <br><br>
    <input type="submit">
    </form>

    
</html>





<?php include("_footer.php"); ?>