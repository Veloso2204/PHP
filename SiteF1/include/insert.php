<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'config.php';  

                    $nome = $_POST['nomepiloto'];
                    $dataNasc =$_POST['dataNasc'];
                    $pais = $_POST['pais'];
                    $podios = $_POST['podios'];
                    $locanasc = $_POST['locanasc'];
                    $campmundi = $_POST['campmundi'];

                    $sql = "INSERT INTO pilotos (nomepiloto,dataNasc, pais, podios,locanasc,campmundi,logopiloto) VALUES('$nome','$dataNasc','$pais','$podios','$locanasc','$campmundi','asd.png')";

                     if (empty($nome) || empty($dataNasc) || empty($pais) || empty($podios) || empty($locanasc) || empty($campmundi)) {
                        echo "Todos os campos devem estar preenchidos";
                     } else {
                        mysqli_query($conn, $sql);
                        mysqli_close($conn);
                     }

                     header('Location: ../drivers.php');
?>