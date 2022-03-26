<!DOCTYPE html>
<html>
    <head>
        <title>Contact email</title>
    </head>
    <body>

        <?php
            echo "Hi, I'm a PHP script!";
        $to      = 'customer@email.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: nhat.m.nguyen1@seattlecolleges.edu' . "\r\n" .
    'Reply-To: nhat.m.nguyen1@seattlecolleges.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$emailMessage = "Name: " . $visitor_name . "\r\n";
$emailMessage .= "Email: " . $visitor_email . "\r\n";
$emailMessage .= "Message: " $message . "\r\n";
mail($to, $subject, $message, $headers);
        ?>

    </body>
</html>