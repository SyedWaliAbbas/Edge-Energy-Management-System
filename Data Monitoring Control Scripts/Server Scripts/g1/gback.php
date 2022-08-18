<?php
session_start();
unset($_SESSION['p']);
unset($_SESSION['from']);
unset($_SESSION['to']);
header('Location:gr.php')



?>