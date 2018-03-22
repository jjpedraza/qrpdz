<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QR-PDZ Lector de codigo QR con php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
    body{
        background-color:#CC3300;
        color:white;
        margin:0px;        
        font-family: 'Open Sans', sans-serif; 
    }
    form {
        background-color:white; width:100%;
        height:50px; color:#CC3300;
        font-size:15pt;
        font-family: "Verdana, Arial";
        padding: 10px; text-align:center;

    }
    input[type='file']{
        background-color:#FFBEA8;
        border: 1px  #FF8359 solid;
        border-radius: 4px; margin: 10px;
        height:40px; width: 30%;
        vertical-align:top;
    }
    
    input[type='submit']{
        background-color:#CC3300;
        color:white;    
        border: 1px  #FF8359 solid;
        border-radius: 4px; margin: 10px;
        height:40px; width: 30%;
        font-size:19pt;
        cursor: pointer;
    }
    input[type='submit']:hover{opacity:0.7;    }
    h1, h2 {
        color:white; width:100%;
        font-weight:bold; 
        margin: 0px;
        text-align:center; 
    }
    h2 {font-size:10pt;}

    #codigo{
        position:absolute; left:20%; width:50%;
        margin: 10px; padding:10px;
        color:#CC3300; font-size:20pt;
        border: 0px; border-radius:5px;
        text-align:center;

    }
    img {
        width: 10%; position: absolute; left:20%; margin-top:100px;

    }
    #footer{
        position: fixed;
        bottom: 0px;
        width:100%; height:40px;
        text-align:center;
        background-color:rgb(0,0,0,0.5);
    }
    #footer a {color:white; opacity: 0.8; text-decoration:none;}
    @media only screen and (max-width:500px) {
        #codigo{font-size:12pt; width:100%;left:0px;margin:0px;margin-top:10px;}
        img {left:10px; width:50%;margin-top: 70px; }
    }
    </style>
</head>
<body>
<?php 
$identificador ="JPedraza"; //se usara para guardar temporalmente los datos, en mi caso
// utilizo el id del usuario, ya uds usaran de acuerdo a su aplicacion.
?>
<h1>Lector de codigo QR</h1>
<h2>Javascript desde php, entrega el codigo en un input. Listo para utilizarse en tu app</h2>
<?php require("qrpdz-include.php");?>
<?php qrpdz_solicita(); qrpdz_lee($identificador); ?>

<!-- input donde se almacenara el codigo de QR, este puedes integrarlo a un form, y utilizarlo para tus operaciones -->
<input type='text' name='codigo' id='codigo' placeholder='Aqui se entregara el codigo QR'>


<?php qrpdz_init('codigo','foto');?>




<div id='footer'>
Ing. Juan Jose Pedraza |
<a href='https://github.com/printepolis' title='Haz clic aqui para ir a mis repositorios'>printepolis@gmail.com</a>
</div>
</body>
</html>