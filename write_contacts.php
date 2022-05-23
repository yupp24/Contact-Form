<html>
<!--sets style and alignment along with the title and header-->
<div style="border-style: solid; margin-left: 35%; margin-right: 35%;" align="center">
<head>
<title>Confirmation Page of Web Form</title>
</head>
<h1>Thanks for Registration!</h1>
<p>Your information is:<br><br>
<!--php code that posts information from user submitted info and displays it-->
<?php
echo 'First name:'.$_POST["fname"].'<br>';
echo 'Last name:'.$_POST["lname"].'<br>';
echo 'Address:'.$_POST["Address"].'<br>';
echo 'State:'.$_POST["state"].'<br>';
echo 'Zip:'.$_POST["zip"].'<br>';
echo 'Telephone:'.$_POST["Telephone"].'<br>';
echo 'Email:'.$_POST["email"].'<br>';
?>
<!--php code that posts info to contacts.txt the same as registration page-->
<?php

$myfile = fopen("contacts.txt", "a+") or die("Unable to open file!");
fwrite($myfile,PHP_EOL)."<align=center>"."<style=border-style; solid>";
fwrite($myfile,"First Name: ");
fwrite($myfile,$_POST['fname']."\n");
fwrite($myfile,"Last Name: ");
fwrite($myfile,$_POST['lname']."\n");
fwrite($myfile,"Address: ");
fwrite($myfile,$_POST['Address']."\n");
fwrite($myfile,"State: ");
fwrite($myfile,$_POST['state']."\n");
fwrite($myfile,"Zip: ");
fwrite($myfile,$_POST['zip']."\n");
fwrite($myfile,"Telephone: ");
fwrite($myfile,$_POST['Telephone']."\n");
fwrite($myfile,"Email: ");
fwrite($myfile,$_POST['email']);
fwrite($myfile,PHP_EOL);
fclose($myfile);
$contents = file_get_contents("contacts.txt");
$entry = preg_split("/\r\n|\n|\r/",$contents);
$entry = preg_split("/,/", $entry[count($entry) - 2]);

//Link back to contact form page
echo "<a href='https://web-students-viewer.georgiasouthern.edu/~jw17181@ad.georgiasouthern.edu/'>Click to Contact page</a>";
?>
