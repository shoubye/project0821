﻿<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "001"); //將id註記上去 <employee EmpType="SalesManager id = 001 >




$xpath = new DOMXpath($doc);
$entries = $xpath-> query("/employees/employee[1]");
$entries[0] -> setAttribute("id", "001"); 

$entries = $xpath-> query("/employees/employee[1]/lastName");
$entries[0] ->nodeValue = "Cashman 2";

$entries = $xpath-> query("/employees/employee[1]/@id");
$entries[0] ->nodeValue = "002";

// $entries = $xpath-> query("/employees/employees[1]/firstName");
// $entries[0] ->parentNode->removeChild($entries[0]);


header("Content-type: text/xml", true);
echo $doc->saveXML();
?>
