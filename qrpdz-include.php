<?php
define("DIR","tmp/"); //directorio donde se guardara la imagen

function pdz_up($input, $file)    
{   $target_path = DIR.$file.".jpg";
    if(move_uploaded_file($_FILES[$input]['tmp_name'], $target_path))
    {return TRUE;} else{return FALSE;}   
}
function pdz_img($id){echo "<img src='".DIR.$id.".jpg' id='foto'>";}

function qrpdz_init($input_code, $id_img){
echo '<script src="qrpdz.js"></script>
<script>
    var qr = new QCodeDecoder();
    if (!(qr.isCanvasSupported() && qr.hasGetUserMedia())) {
        alert("Navegador no comptaible");
        throw new Error("Canvas and getUserMedia are required");
    }    
    var img = document.querySelector("img");    
    qr.decodeFromImage(img, function(err, result) {
    if (err) throw err;   
    document.getElementById("'.$input_code.'").value=result;
     });    
</script>
';

}

function qrpdz_solicita(){
echo "    
    <form action='' method='POST' enctype='multipart/form-data'>
        <input type='file' name='foto' id='foto'>
        <input type='submit' value='Leer' name='qr_form'>
    </form>";
}

function qrpdz_lee($id){
    if (isset($_POST['qr_form'])){
        if (pdz_up('foto',$id)==TRUE){
            echo pdz_img($id);
        }
        else {
            echo '<b style=color:red>ERROR</b>';
        }
    }
    
}



?>