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
        $arquivo = fopen("info.txt","r");//Abre o arquivo e salva no ponteiro de arquivo
        if (!$arquivo)                  //Verifica se o arquivo pode ser aberto
             echo "Erro na abertura do arquivo";
        $letra = fgetc($arquivo);       //Pega 1 caractere e atribui a variável
        echo $letra;                    //Mostra um caractere
        echo "<br>";
        while (!feof($arquivo))//Enquanto ,feof(), não é o fim do arquivo
        {
          $letra = fgetc($arquivo);
          echo $letra;
        }
        echo "<br>";
        fclose($arquivo);
        $arquivo1 = fopen("info.txt","a");//Abre o arquivo para escrita com o ponteiro no final do arquivo
        if (!$arquivo1)
            echo 'Erro na leitura do arquivo\n';
        $elogio = " é muito bonito!";
        fprintf($arquivo1,"%s\n", $elogio);//Salva o valor da variável no arquivo
        fclose($arquivo1);
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
        
        <a href='https://br.freepik.com/vetores-gratis/projeto-branco-simples-formulario-de-login_1094992.htm'>Designed by Freepik</a>
        
        
    </body>
</html>
<!-- AIzaSyD-yYVAAC26iiGr0hnx2-tnLQRfGX7H0vU -->