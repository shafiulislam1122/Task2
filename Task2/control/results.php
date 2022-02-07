<?php
$ufirstname=$_POST["ufirstname"];

if($ufirstname=="")
{
  echo" Please enter your name";
}
else{

echo "Your user name is ".$_POST["ufirstname"];
}
echo"<br>";
$ulastname=$_POST["ulastname"];

if($ufirstname=="")
{
  echo" Please enter your name";
}
else{

echo "Your user name is ".$_POST["ulastname"];
}
echo"<br>";

$pass=$_POST["password"];
if(strlen($pass)<8)
{
    echo" Please a valid Password";
}
else{
echo "Your Password is valid";
}
echo"<br>";
if(isset($_POST["r1"]))
{
    echo "you have selected ".$_POST["r1"];

}
else{
    echo "you havn't selected any radio";
}
?>