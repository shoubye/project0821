<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();  //先ㄊnew一個DOMDocument
$doc->Load('employees.xml');  //讀取
$xpath = new DOMXPath($doc);  //在DOMDocument找資料
$entries = $xpath->query("/employees/employee/@EmpType");    //+@為屬性，如果沒有＠為子元素
foreach ($entries as $entry) 
{
   echo "結果：" . $entry->nodeValue . "<br>";
}
?>

</body>
</html>
