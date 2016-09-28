<?php
if (!empty($_POST['your_name'])){
    echo "Your Name".$_POST['your_name'];
}
else{
    echo "You didn’t enter your name";

    }
}
?>