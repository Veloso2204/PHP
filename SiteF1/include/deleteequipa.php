<?php
include_once 'config.php';  

                    $id = $_GET['id'];

                    $sql = "DELETE FROM equipa WHERE Codequipa = '$id'";

                     if (empty($id)) {
                        echo "Ocorreu um erro ao apagar o piloto, porfavor contacte o administrador.";
                     } else {
                        mysqli_query($conn, $sql);
                        mysqli_close($conn);
                     }

                     header('Location: ../eliminarequipa.php');
?>