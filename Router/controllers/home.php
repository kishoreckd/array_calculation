<?php

if (isset($_SESSION['check'])){
    require "view/home.php";
}
else{
    header("location:/");
}
