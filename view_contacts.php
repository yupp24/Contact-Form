<html>
<!--sets style and alignment along with the title and header-->
<div style="border-style: solid; margin-left: 35%; margin-right: 35%;" align="center">
<h1>Existing Contacts</h1>

<?php
$handle = fopen("contacts.txt", "r");
if ($handle) {
while (($line = fgets($handle)) !== false) {
//process the line read
echo $line."<br>";
}
fclose($handle);
}else{
//error opening file
}
//link back to contact form page
echo "<a href='https://web-students-viewer.georgiasouthern.edu/~jw17181@ad.georgiasouthern.edu/'>Click to Contact page</a>";
?>
