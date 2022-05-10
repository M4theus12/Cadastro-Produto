<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<?php 

if (isset($_SESSION{'cadrastro'})){
    include('cadrastro.php');

    
}
   if(isset($_POST['acao'])){
        echo 'Cadrastro de pruduto enviado';


   }else{

include('home.php');

}




?>




</body>
</html>