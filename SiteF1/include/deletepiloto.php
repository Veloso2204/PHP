<?php
include_once 'config.php';  

                    $id = $_GET['id'];

                    $sql = "DELETE FROM pilotos WHERE CodPiloto = '$id'";

                     if (empty($id)) {
                        echo "Ocorreu um erro ao apagar o piloto, porfavor contacte o administrador.";
                     } else {
                        mysqli_query($conn, $sql);
                        mysqli_close($conn);
                     }

                     header('Location: ../eliminarpiloto.php');
?>