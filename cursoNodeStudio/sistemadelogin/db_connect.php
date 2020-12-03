<?php
// conexao banco de dados
$enderecoServer = "localhost";
$username = "root";
$password = "";
$database = "sistemalogin";

$connect = mysqli_connect($enderecoServer,$username,$password,$database);

if( mysqli_connect_error() ){
    echo " erro : ". mysqli_connect_error();
}else{
    // tudo certo
}