<?php

if(!isset($_POST['submit']))
{
    echo "Error. You need to submit the form."
}

if(isset($_POST['submit'])){

$name = $_POST['name'];
$pronouns = $_POST['pronoun'];
$email = $_POST['semail'];
$grade = $_POST['grade'];
$advisor = $_POST['advisor'];
$unit = $_POST['unit'];
$availability = $_POST['avail'];
$fee = $_POST['fee'];
$interest = $_POST['inter'];
$learn = $_POST['flang'];
$extra = $_POST['extra'];
$python = $_POST['python'];
$java = $_POST['java'];
$javascript = $_POST['javascript'];
$html = $_POST['html'];
$cpp = $_POST['cpp'];
$chash = $_POST['ch'];
$swift = $_POST['swift'];
$r = $_POST['r'];
$otherlanguages = $_POST['other'];

if(empty($name)||empty($pronouns)||empty($email)||empty($grade)||empty($advisor)||empty($unit)||empty($availibility)||empty($fee)||empty($interest)||empty($learn)||empty($python)||empty($java)||empty($javascript)||empty($html)||empty($cpp)||empty($chash)||empty($swift)||empty($r))
{
    echo "Please fill all fields (Extra Information and Other Languages are OPTIONAL)";
}


$email_from = 'ayshan1257@gmail.com';
$email_subject = "New Form Submission";
$email_body = "New Coding Club Information Participation Form Submission from $name. pronouns: $pronouns email: $email grade: $grade advisor: $advisor unit: $unit availability: $availability fee: $fee interest: $interest learn: $learn extra: $extra python:$python java: $java javascript: $javascript HTML: $html C++: $cpp C#: $chash swift: $swift R: $r otherlanguages: $otherlanguages.\n".;
$to = "ayshan1257@gmail.com";
$headers = "Form Submission; from: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
}
?>
