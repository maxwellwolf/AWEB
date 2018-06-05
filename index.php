<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Maxwell Machado<br>";
        $arquivo = fopen("info.txt","r");
        if (!$arquivo)
             echo "Erro na abertura do arquivo";
        $letra = fgetc($arquivo);
        echo $letra;
        fclose($arquivo);
        ?>
        
        <h1>Teste de Uso do Google Maps </h1>
        <iframe
         align="left"
         width="600"
         height="200"
         frameborder="0" style="border:0"
         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD-yYVAAC26iiGr0hnx2-tnLQRfGX7H0vU
         &q=-15.793601, -47.934001 &zoom=18 &maptype=satellite" >
        </iframe>
        
        
    </body>
</html>
<!-- AIzaSyD-yYVAAC26iiGr0hnx2-tnLQRfGX7H0vU -->