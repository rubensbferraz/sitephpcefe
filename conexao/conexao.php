<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    #Maquina servidor Linux Localweb HM9251
    #ftp.cefeemmanuel.com.br
    #cefeemmanuel1
    /*
    $servidor   = '179.188.16.98';
    $usuario    = 'cefeemmanuel1';
    $pass       = 'cefe123';
    $banco      = 'cefeemmanuel1';
	
    $servidor   = '187.45.196.244';
    $usuario    = 'cefeemmanuel';
    $pass       = 'cefe123';
    $banco      = 'cefeemmanuel';
*/
    /*
    $servidor   = '187.45.196.186';
    $usuario    = 'provacefe1';
    $pass       = 'cefe12345';
    $banco      = 'provacefe1';

*/
    $servidor   = 'localhost';
    $usuario    = 'root';
    $pass       = 'crbf';
    $banco      = 'cefeemmanuel1';

    $conn = mysqli_connect($servidor, $usuario, $pass, $banco);

    if (!$conn) {
        die("ERROR ao conectar ao banco de dados " . mysqli_error($conn));
    }/*else{
                echo "Você esta conectado  <br> ";
                echo "$servidor <br>"; 
            }*/

    ?>

</body>

</html>