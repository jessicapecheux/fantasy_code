<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("_header.php"); ?>



<div class="container_form">
            <h1>Contact us</h1>

    <form action="/contact.php"method="post">
            <div class="firstname">
             <label for="name">First name</label><br />
            <input type="text" id="fname"name="firstane" placeholder="Your First name" required><br />
            </div>

            <div class="lastname">
             <label for="name">Lastname</label><br />
            <input type="text" id="name" name=name placeholder="your Last name" required><br />
            </div>

            <div class="mail">
            <label for="email">Email</label><br />
            <input type="text" id="email"name=email placeholder="@mail" required><br />
            </div>

            <div class="message">
            <label for="Message">Message</label><br />
            <textarea id="Message" name="Messsage" rows="10" cols="40">
                Hello, I would like to be able to obtain more information about the data analyst training...

            </textarea><br />
            
            <input type="submit" class="buton"><br />
            </div>
        </form> 
    </div>
    <?php include("_footer.php"); ?>
    <script src="/assets/js/script.js"></script>
</body> 
</html>





