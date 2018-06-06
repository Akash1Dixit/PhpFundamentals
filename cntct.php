<?php
$unchangeable_message = "Change this text to the message you want ".
"to be sent with all emails sent.";
$organization = "National Institute for Industrial Training";
$copy_email = "info@csksrc.org";
$errors = array();
$mail = $_POST['email'];
$name = $_POST['name'];
$mailto = "info@csksrc.org";
$name = $_POST['name'];
$brief_note = $_POST['message'];

define(
    'EMAIL_MATCHER',
    '/^[^@\s]+\@(\[?)([-\w]+\.)+([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/'
);
if(!preg_match(EMAIL_MATCHER,$mailto))
{
    $message = "The address you entered  ".
    "appears to be invalid. You entered $mailto.";
    $errors[] = $message;
}
if(!preg_match(EMAIL_MATCHER,$mail))
{
    $message = "The address you entered for yourself does not ".
    "appear to be valid. You entered $mail.";
    $errors[] = $message;
}
if($name == '')
{
    $errors[] = $name;
}
if(!preg_match("/^[a-zA-Z ']$/",$name))
{
    $message = "Your name can only contain letters, spaces and ".
    " apostrophes.";
    $errors[] = $message;
}
if(strlen($name) > 25)
{
    $errors[] = "Your name must be less than 25 characters.";
}
if(strlen($brief_note) > 200)
{
    $message = "You can only enter 200 characters for your note. " .
    "Sorry - this restriction is to prevent spammers from ".
    "abusing this form!";
    $errors[] = $message;
}
if(count($errors) > 0)
{
    echo "Thanks for your submission, however, we encountered the ";
    echo "following errors! Please hit back on your browser and try ";
    echo "again.";
    echo implode('&lt;br&gt;',$errors);
}
else
{
    $subject = $name ."thought you'd be interested in $organization";
    $body = wordwrap($brief_note) . "\r\n\r\n--------\r\n\r\n" .
    wordwrap($unchangeable_message);
    $headers = "From:".$mail."\r\nCc:". $copy_email;
    if(mail($mailto,$subject,$body,$headers))
    {
        echo "Thanks for sending your query to". $organization;
    }
    else
    {
        echo "Woops. We hit a bug sending to $mailto. Please contact";
        echo "support.";
    }
}
?>