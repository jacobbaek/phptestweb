<?php
echo "<p>Test dig command using PHP</p>";

$domain="google.com";
if (getenv('TDOMAIN') !== false)
  $domain = getenv('TDOMAIN');

$cmdret = shell_exec("dig $domain");
echo "<pre>$cmdret</pre>";
?>

