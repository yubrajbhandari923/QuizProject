<?php
// Multiple recipients
ini_set("SMTP","localhost");
   ini_set("smtp_port","25");
   ini_set("sendmail_from","anup8eguy@gmail.com");
$to = 'anup8eguy@gmail.com'; // note the comma

// Subject
$subject ='Quizee||You have been successfully registered';
// Message
$message ="<div style='width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;'>
<section style='width: 100%;'>
<header style='padding: 20px;background: dodgerblue;color:white;'>
     <h1 style='font: 28px poppins;text-align:center;text-emphasis: weight;'>The Quiz Project App: Thank you for registering</h1>
</header>
<div  style='background: whitesmoke;padding: 50px;font: 20px passion;'>
    <h2 style='font: 22px acme;margin: 10px;'> Welcome to the quiz project app.</h2>
    <p> Thank you for registering. To continue you just need to follow one step more. <br>
     click on the button below to verify your account.</p>

     <p style='margin: 5px;'> Here are your account details.</p>
     <p style='margin: 20px;'> Name:".'$name'."<br>
    UserName:".'$username'."<br>
    Email: ".'$email'."</p>


     <a href='#' style='text-align:center;margin:0px 40px;text-decoration: none;color:white;display: block;'>
     <div style='font: 25px poppins;padding:5px;background: dodgerblue;width: 20vw;margin: auto;'>Verify Account</div></a>

     <p style='margin: 5px;'> If you are having any issues with your account please don't hegistate to contact us.
         <br> <h2> Thankyou ! Keep learning :) </h2>
     </p>
     <p> If you haven't registered in The Quiz project app. Please Ignore this mail. </p>
</div>
</section>
</div>
";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: b.anup.135@gmail.com>';
$headers[] = 'Reply-to:b.anup.135@gmail.com';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>