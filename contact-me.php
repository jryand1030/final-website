<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>

    body{
        background-image:url("images/backround/backround.jpg");
    }
    h1{
        text-align:center;
        margin-top:15%;
    }
    
    p{
        text-align:center;
        margin-top:8%;
        font-family:monospace, sans serif;
        font-size:20px;
        color:white;
    }

    button{
        margin-left:50%;
        padding:8px;
        margin-top:5%;
        background-color:rgb(204, 204, 204);
        width:100px;
        
      
    }

     @media (max-width:500px){
         button{
             margin-left:40%;
         }

        body{
            background-image:url(/images/backround/background-resume.jpg);
     }
</style>
<body>

<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$from= 'From: Ryandionne.ca';
$to= 'ryandionne.ca@gmail.com';
$subject='You have mail!';
$human = $_POST['human'];

$body = "From:$name\n E-mail:$email\n Message:\n $message";

if ($_POST['submit'] && $human == '4') {				 
    if (mail ($to, $subject, $body, $from)) { 
    echo '<p>Your message has been sent!</p>
    <h1> Thank You for reaching out! I will be in touch with you shortly!</h1>';
} else { 
    echo '<p>Something went wrong, please go back and try again</p>'; 
} 
} else if ($_POST['submit'] && $human != '4') {
echo '<p>Oh NO! The answer was incorrect...hint-the answer is 4</p>';
}
?>


    
    
    <a href="contact-me.html">
        <button type="button">Back</button>
    </a>
    
</body>
</html>