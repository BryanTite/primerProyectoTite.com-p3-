<?php
    
    include "modelo/platos.php";
    include "modelo/productoDAO.php";

    $pescados= ProductoDAO::getAllbyType("1");
    $mariscos= ProductoDAO::getAllbyType("2");
    $cefalopodos= ProductoDAO::getAllbyType("3");
    $moluscos= ProductoDAO::getAllbyType("4");
    $mariscadas= ProductoDAO::getAllbyType("5");

?>