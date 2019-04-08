<?php
session_start();

if(isset($_GET['sub'])){
        if($_GET['csrf'] == $_SESSION['csrf']){
            echo $_GET['csrf'];
        }
    }
