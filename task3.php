<?php
if (!empty($_POST['your_name'])){
    echo "Your Name: ".$_POST['your_name'];
}
echo "<br>";
if (!empty($_POST['your_Roll'])){
    echo "Your Roll: " .$_POST['your_Roll'];
}
echo "<br>";
if (!empty($_POST['your_Phone'])){
    echo "Your Phone: " .$_POST['your_Phone'];
}
else{
    echo "You didn’t enter your name";
    }
?>