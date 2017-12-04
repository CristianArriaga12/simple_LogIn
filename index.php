<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Registro
        </title>
    </head>
    <body>
        <form action="validacion.php" method="post" enctype="application/x-www-form-urlencoded">
            <table  cellspacing="10" cellpadding="10" border="0" style="width:10%" align="center">
                <label for="user_box_text">
                    <tr align="center">
                        <th>
                            <p>
                                User name 
                            </p>
                        </th>
                    </tr>
                    <tr align="center">
                        <th>
                            <p>
                                <input type="text" id="user_box_text" name="User" placeholder="User"  required >
                            </p>
                        </th>
                    </tr>
                    
                </label>
                <label for="password_box_text">
                    <tr align="center">
                        <th>
                            <p>
                                Password
                                
                            </p>
                        </th>
                    </tr>
                    <tr align="center">
                        <th>
                            <p>
                                
                                <input type="password" id="password_box_text" name="Password" placeholder="Password"  required>
                            </p>
                        </th>
                    </tr>
                
                </label>
                <tr align="center">
                        <th>
                            <p>
                                <input type="submit" value="Log In">
                            </p>
                        </th>
                </tr>
            </table>
        </form>
        <table cellspacing="10" cellpadding="10" border="0" style="width:20%" align="center" >
            <tr align="center">  
                <td>
                    <p>
                        ¿NO tienes cuenta?
                    </p>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <button onclick="registar()">
                        <b>
                            Registrarse
                        </b>
                        <script type="text/javascript">
                            function registar(){
                                window.location="registrarse.php";
                            }
                        </script>
                    </button>
                </td>
            </tr>
        </table>    
    </body>
</html>

