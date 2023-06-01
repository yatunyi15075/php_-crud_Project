<?php

$com = new mysqli ('localhost', 'root', ' ', 'dashboard');

if(!$com){
    die(mysqli_error($con));
}
?> 