<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                <b>EMAIL</b>
                </legend>
                <table border="0">
                    <tr>
                        <td><input type="text" name="email" size="50" ></td>
                        <td>&#8505</td>
                        <td>
                        <?php 
                        if(isset($_REQUEST['submit']))
                        {
                            echo $_REQUEST['email'];

                        }
                        ?>
                        </td>
                        
                        
                    </tr>
                    

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>