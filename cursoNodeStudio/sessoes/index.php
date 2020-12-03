<?php
session_start();
$_SESSION['caneta'] = "bic";
$_SESSION['cor'] = "vermelho";

echo $_SESSION['caneta']." <br> ".$_SESSION['cor'];