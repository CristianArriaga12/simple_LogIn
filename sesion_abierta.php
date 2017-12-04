<?php
session_start();
 printf("Bienvenido %s",$_SESSION['User_Name']);

?>
<!doctype html>
<html>
    <head>
        <title>
            Sesion Abierta
        </title>
        <body>
            <table cellspacing="10" cellpadding="10" border="0" style="width:10%" align="center">
                <tr align="center">
                    <td>
                    <button onclick="LogOut()">
                        Log Out
                    </button>
                    <script type="text/javascript">
                        function LogOut(){
                            window.location="cerrar_sesion.php";
                        }
                    </script>
                    </td>
                </tr>
            </table>
        </body>
    </head>
</html>
