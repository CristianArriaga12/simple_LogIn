<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Registro
        </title>
    </head>
    <body>
        <table cellspacing="10" cellpadding="10" border="0" style="width:30%" align="center">
            <form action="registro.php" method="post" enctype="application/x-www-form-urlencoded">
                <label for="user_box_text">
                    <tr align="center">
                        <td>
                            <p>
                                User name
                            </p>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="user_box_text" name="User" placeholder="User"    required >
                            </p>
                        </td>
                    </tr>
                </label>
                <label for="password_box_text">
                     <tr align="center">
                        <td>
                            <p>
                                Password
                            </p>
                         </td>
                         <td>
                            <p>
                                <input type="password" id="password_box_text" name="Password" placeholder="Password"   required>
                            </p>
                         </td>
                    </tr>
                </label>
                <label for="first_name">
                    <tr align="center">
                        <td>
                            <p>
                                Primer nombre
                            </p>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="first_name" name ="First" placeholder="First Name"   required>
                            </p>
                        </td>
                    </tr>
                </label>
                <label for="name">
                     <tr align="center">
                        <td>
                            <p>
                                Segundo nombre
                            </p>
                         </td>
                         <td>
                            <p>
                                <input type="text" id="name" name="Name" placeholder="Name"   >
                            </p>
                         </td>
                    </tr>
                </label>
                <label for="last_name">
                     <tr align="center">
                        <td>
                            <p>
                                Apellido paterno
                            </p>
                         </td>
                         <td>
                            <p>
                                <input type="text" id="last_name" name ="last" placeholder="Last Name"   required>
                            </p>
                         </td>
                </label>
                <label for="second_last_name">
                     <tr align="center">
                        <td>
                            <p>
                                Apellido Materno
                            </p>
                         </td>
                         <td>
                            <p>
                                <input type="text" id="second_last_name" name="Second" placeholder="Second Last Name"   required>
                            </p>
                         </td>
                    </tr>
                </label>
                <label for="e-mail">
                     <tr align="center">
                        <td>
                            <p>
                                e-mail
                            </p>
                        </td>
                        <td>
                            <p>
                                <input type="text" id="e-mail" name="e-mail" placeholder="e-mail"   required>
                            </p>
                         </td>
                    </tr>
                </label>
                 <tr align="center">
                        <td>
                
                <input type="submit" value="Sign In">
                     </td>
                
            <td>
            <button onclick="inicio()">
                Inicio
            </button>
            </td>
            <script type="text/javascript">
                function inicio(){
                    window.location="index.php";
                }
            </script>
                </tr>
        

            </form>
            
        
        </table>
    </body>
</html>