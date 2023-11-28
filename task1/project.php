

<?php 
//ex1:
    phpinfo();
   
//ex2:
   

//ex3:
   echo("Welcome in the websit"."<hr>"."<h3>Your info</h3> <hr> <b>name</b>".$_POST["name"]."<hr><b>Age></b>".$_POST["age"]."<hr><b>Major</>".$_POST["major"]);

//ex4:

       $clientIp= $_SERVER['REMOTE_ADDR'];
       $echo("CLinet ip address =".$clientIp);

//ex5:
     $fileName=basename($_SERVER['PHP_SELT']);
     echo($fileName);

//EX6:
   $URL="https://www.w3schools.com/php/default.asp";
   $url=parse_url($URL);
   $scheme=$url['$scheme'];
   $port=$url['port'];
   $path=$url['path'];
   echo($url." ".$scheme." ".$$path);
   
//ex7:
    $text="Tutorial php";
    $firsrCh=substr($text,0,1);
    $changeColor=$text.str_replace($firsrCh,'<span style="color:red;">\1</span>',$text);
    echo($changeColor);

//ex8:
header("Loacation: https://www/. w3schools.com/");
    ?>

