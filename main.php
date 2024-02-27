<?php
echo "<p>Test dig command using PHP</p>";

$domain="google.com";
if (getenv('TDOMAIN') !== false)
  $domain = getenv('TDOMAIN');

$hostname = gethostbyname($domain);
echo "<pre> ## Gethostbyname : $hostname</pre>";

$cmdret = shell_exec("dig $domain");
echo "<pre> ## Result of dig command : </pre>";
echo "<pre>$cmdret</pre>";
?>

