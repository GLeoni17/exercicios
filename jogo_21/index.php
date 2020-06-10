<!--Feito por Gabriel Leoni Duarte-->
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>21</title>
        <style>
            body{
                background-image: url("img/fundo.jpg");
                text-align:center;
            }


            #jogador1{
                float:left;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 12;
                text-align:center;
                color:white; 
                border-style: solid;
                border-color: blue;
            }

            #jogador2{
                float:right;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 12;
                text-align:center;
                color:white;
                border-style: solid;
                border-color: #20623c;
            }

            #carta{
                width:250px;
                height:400px;
            }

            #passar{
                width:150px;
                height:100px;
            }

        </style>
        
        <script>
            var vez=1, valor, pos_vetor=0, jogada;
            var img=document.getElementById("monte").src;

            function adiciona(){

                jogada=Math.floor(Math.random()*13+1) // Gera um numero aleatorio de 1 a 13

                carta_virar=Math.floor(Math.random()*4+1); // Qual carta virar imagem

                setTimeout(function(){
                    document.getElementById("carta").src="img/carta_virada.png";
                }, 800);
                    document.getElementById("carta").src="img/"+jogada+"_"+carta_virar+".png"; // Troca a carta virada

                if(vez==1){

                    document.getElementById("jogador2").style.borderColor="blue";
                    document.getElementById("jogador1").style.borderColor="#20623c";
                    valor=parseInt(document.getElementById("pontuacao_1").innerHTML);
                    valor+=parseInt(jogada);
                    document.getElementById("pontuacao_1").innerHTML=valor; //Adiciona no jogador 1
                    vez++;

                }else{

                    document.getElementById("jogador1").style.borderColor="blue";
                    document.getElementById("jogador2").style.borderColor="#20623c";
                    valor=parseInt(document.getElementById("pontuacao_2").innerHTML);
                    valor+=parseInt(jogada);
                    document.getElementById("pontuacao_2").innerHTML=valor; //Adiciona no jogador 2
                    vez=1;

                }

                verifica_ganhou();
                
            }

            function verifica_passar(){
                valor1=parseInt(document.getElementById("pontuacao_1").innerHTML);
                valor2=parseInt(document.getElementById("pontuacao_2").innerHTML);

                if(vez==1 && valor1>valor2){
                    document.getElementById("jogador2").style.borderColor="blue";
                    document.getElementById("jogador1").style.borderColor="#20623c";
                    vez++;

                }else if(vez==2 && valor2>valor1){
                    vez=1;
                    document.getElementById("jogador1").style.borderColor="blue";
                    document.getElementById("jogador2").style.borderColor="#20623c";

                }else{
                    alert("Só pode passar se o seu valor for maior que o do outro");
                } 
                
            }

            function verifica_ganhou(){
                if(parseInt(document.getElementById("pontuacao_1").innerHTML)>21){
                    alert("O jogador 2 ganhou.");
                    setTimeout(function() {
                        document.getElementById("carta").src="img/"+jogada+"_"+carta_virar+".png";
                        window.location.reload();
                    }, 400);

                }else if(parseInt(document.getElementById("pontuacao_1").innerHTML)==21){
                    alert("O jogador 1 ganhou, parabens!");
                    setTimeout(function() {
                        document.getElementById("carta").src="img/"+jogada+"_"+carta_virar+".png";
                        window.location.reload();
                    }, 400);

                }else if(parseInt(document.getElementById("pontuacao_2").innerHTML)>21){
                    alert("O jogador 1 ganhou!");
                    setTimeout(function() {
                        document.getElementById("carta").src="img/"+jogada+"_"+carta_virar+".png";
                        window.location.reload();
                    }, 400);

                }else if(parseInt(document.getElementById("pontuacao_2").innerHTML)==21){
                    alert("O jogador 2 ganhou, parabens!");
                    setTimeout(function() {
                        document.getElementById("carta").src="img/"+jogada+"_"+carta_virar+".png";
                        window.location.reload();
                    }, 400);
                }                 
            }

        </script>

        

    </head>
    <body>
    <div id="jogo" class="jogo">
            <div id="jogador1" align="left">
                <img src="img/personagem1.png" width="200" height="200" >
                <h2 onclick="mudar_nome()">Jogador 1</h2>
                <br>
                <h2>Pontuação</h2>
                <h2 id="pontuacao_1">0</h2>
            </div>

            <img onclick="adiciona();" id="carta" src='img/carta_virada.png' >
            <img onclick="verifica_passar()" id="passar" src="img/passar.png" >

            <div id="jogador2" align="right" >
                <img src="img/personagem2.png" width="200" height="200" >
                <h2>Jogador 2</h2>
                <br>
                <h2>Pontuação</h2>
                <h2 id="pontuacao_2">0</h2>
            </div>
    </body>
</html>