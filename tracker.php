<!DOCTYPE html>
<html>

<title>DANISH 205647 PHP</title>
</head>
<body>
<h1>DANISH 205647 PHP </h1>
<h2>MD5 cracker</h2>
<p>This application  takes an MD5 hash of a four digit pin
and check all 10,000 possible four digit PINs to
determine the PIN.<br>
</p>

<?php

  echo "Debug Output: <br>";
  $start = microtime(true);
  for ($i = 0; $i <= 9999; $i++) {
    $x=str_pad($i, 4, '0', STR_PAD_LEFT);
    $hash=hash('md5',$x);
    if($i<=15){
    echo "$hash  $x <br>";
    }
    $input=false;
    if ($hash == $_GET["md5"] ){
        $time_elapsed_secs = microtime(true) - $start;
        echo "Total checks:$i <br>";
        echo "Ellapsed time: $time_elapsed_secs <br> ";
        $input= true;
        echo " PIN is: $x <br>";
        break;
    }
   }
   if($input != true){
       echo "PIN : Not Found <br>";
   }

?>

<form action="tracker.php"  method="get" >
  <input type="text" name="md5" size="40" >
  <input type="submit" value="Crack md5">
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<li><a href="makecode.php">MD5 Code Maker</a></li>
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>


</body>
</html>
