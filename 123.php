<?php

 $scoreList = Array(100,60,50,58,60);
 $viewModel = [];
 foreach($scoreList as $score){
    $student = (object)["score" => "$score " , "style" => "pass"];

  if($score < 60) {

    $student ->style = "fail";
  }
    $viewModel[] = $student ;
 }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        .fail{color:red; }

    </style>
</head>
<body>


<ul>
    <?php foreach($scoreList as $core){?>

        <li class =<?php  ?>  ></li>

    <?php }?>
</ul>
    
</body>
</html>