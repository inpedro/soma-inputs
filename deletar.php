<?php include_once"conexao.php"; ?>

<?php

$id = $_GET['id'];
$sql = "DELETE FROM recursproprio WHERE id='$id' ";
$sql = "DELETE FROM operacaodecredito WHERE id='$id' ";

if (mysqli_query($conexao, $sql)) {


    header("Location: busca.php");

}else{
    echo 'Erro em delete.php';


}


?>