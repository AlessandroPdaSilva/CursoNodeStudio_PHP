<?php
date_default_timezone_set("America/Sao_Paulo");
echo date('H:i');
echo "<hr>";// date 

$date = date("Y/m/d");
echo $date;// date 

$data_pagamento = mktime(15,30,00 , 06,15,2020);// time
echo "<br>".date('d/m/Y - h:i', $data_pagamento);

$data = "2020-05-26 20:30:00";
$data = strtotime($data);
echo "<br>".date('Y/m/d H:i:s');// time




