<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");   //建立元素   跟元素
$root2 = $doc->createElement("CSS");   //子元素


$doc->appendChild($root);
$root->appendChild($root2);
echo htmlspecialchars($doc->c14n());  //HTML裡有CSS
?>
