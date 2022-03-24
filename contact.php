<?php include("_header.php"); ?>
<script src="assets/js/script.js"></script>
<link rel="stylesheet" href="/assets/css/_contact.css">
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

    <!--<form id="contactForm">
        <label for="name">First name:</label><br />
        <input type="text" id="name" name="name" value="John" /><br />
        <label for="email">Email:</label><br />
        <input
          type="email"
          id="email"
          name="email"
          value="example@seamail.com"
        /><br />
        <label for="message">Message:</label><br />
        <textarea id="message" name="message" rows="10" cols="40></textarea>
        <br /><br />
        <input type="submit" value="Submit" />
      </form> -->

<div class="container_form">
           <form action="/action.contact.php"method="post">
   <label for="name">First name</label><br />
   <input type="text" id="fname"name="firstane" placeholder="Your First name" required><br />
    
    <label for="name">Lastname</label><br />
    <input type="text" id="name"name=name placeholder="your Last name" required><br />
   <label for="email">Email</label><br />
    <input type="text" id="email"name=email placeholder="@homer.simpson@gmail.com" required><br />
    <label for="Message">Message</label><br />
    <textarea id="Message" name="Messsage" rows="10" cols="40">
        Hello, I would like to be able to obtain more information about the data analyst training...
    </textarea><br />
    <input type="submit"><br />
    </form> 
</div>
        
        
    
    

    
</html>





<?php include("_footer.php"); ?>