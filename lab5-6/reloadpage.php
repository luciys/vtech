<?php
session_start();
if(!isset($_SESSION["session_username"])) {
    header("location:login.php");
} else {
include 'header.php';
include 'reloadpage.html';

include "footer.php";
}
