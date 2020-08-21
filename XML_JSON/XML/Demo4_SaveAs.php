<?php
$doc = new DOMDocument();
$doc->load("employees.xml");   //讀進來
$doc->save("/tmp/employees_bak.xml");   //存取
echo "<br>-- Done --";
?>
