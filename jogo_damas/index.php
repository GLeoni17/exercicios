<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8"> 
       <style>
           table, .quadrado0, .quadrado1{
               border: 1px solid black;
           }
           .quadrado1{
                background-color: white;
           }
           .quadrado0{
                background-color: black;
           }
       </style>

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

       <script>

           var linha, coluna, pos_atual_guardar, mov_direita, mov_esquerda, sair=0;

           function mexer_peca(cor, pos_atual){ // Verificar 1 pra direita 1 p esquerda

            linha=parseInt(pos_atual.charAt(1));
            coluna=parseInt(pos_atual.charAt(2));
            pos_atual_guardar=pos_atual;
               
                if(cor=='branca'){
                    
                    mov_direita='p'+String((linha-1))+String((coluna+1));
                    mov_esquerda='p'+String((linha-1))+String((coluna-1));

                    if(document.getElementById(mov_direita).src!="peca_preta.png" && document.getElementById(mov_direita).src!="http://localhost:8080/exercicios/jogo_damas/peca_branca.png"){
                        document.getElementById(mov_direita).src='peca_branca_transparente.png'; // Imagem transparente para possiveis locais para andar
                        document.getElementById(mov_direita).onclick=verifica_mexer(mov_direita); 

                    }

                    if(document.getElementById(mov_esquerda).src!="http://localhost:8080/exercicios/jogo_damas/peca_preta.png" && document.getElementById(mov_esquerda).src!="http://localhost:8080/exercicios/jogo_damas/peca_branca.png"){
                        document.getElementById(mov_esquerda).src='peca_branca_transparente.png';
                    }

                    // document.getElementById(mov_direita).onclick=mudar_src(pos_atual, mov_direita, 'peca_branca.png', 'branca');
                    // document.getElementById(mov_esquerda).onclick=mudar_src(pos_atual, mov_esquerda, 'peca_branca.png', 'branca');

                    

                }else{
                    
                    mov_direita='p'+String((linha+1))+String((coluna-1));
                    mov_esquerda='p'+String((linha+1))+String((coluna+1));

                    if(document.getElementById(mov_direita).src!="http://localhost:8080/exercicios/jogo_damas/peca_preta.png" && document.getElementById(mov_direita).src!="http://localhost:8080/exercicios/jogo_damas/peca_branca.png"){
                        document.getElementById(mov_direita).src='peca_preta_transparente.png'; // Imagem transparente para possiveis locais para andar
                    }
                    if(document.getElementById(mov_esquerda).src!="http://localhost:8080/exercicios/jogo_damas/peca_preta.png" && document.getElementById(mov_esquerda).src!="http://localhost:8080/exercicios/jogo_damas/peca_branca.png"){
                        document.getElementById(mov_esquerda).src='peca_preta_transparente.png';
                    }

                }
           }

           //function mudar_src(pos_atual, id, peca, cor){
               // document.getElementById(pos_atual).src='transparente.png';
                //document.getElementById(id).src=peca;
              //  sair++;
              //  mov_direita=0;
              //  mov_esquerda=0;
                //document.getElementById(mov_direita).onclick=mexer_peca(cor, pos_atual);
                //document.getElementById(mov_esquerda).onclick=mexer_peca(cor, pos_atual);
         //  }

           function verifica_mexer(id){
               if(document.getElementById(id).src=='peca_branca_transparente.png'){
                   if(mov_direita==id){
                    document.getElementById(id).src='peca_branca.png';
                    document.getElementById(pos_atual_guardar).src='transparente.png';
                    document.getElementById(mov_esquerda).src='transparente.png';
                    
                   }else if(mov_esquerda==id){
                    document.getElementById(id).src='peca_branca.png';
                    document.getElementById(pos_atual_guardar).src='transparente.png';
                    document.getElementById(mov_direita).src='transparente.png';
                   }
               }
           }



       </script>

    </head>
    <body>
        <table>
           <?php
                for($i=1; $i<=8; $i++){ // Desenha o tabuleiro
                    echo "<tr>";
                    if($i%2==1){
                        for($j=1; $j<=8; $j++){
                            echo "<th width=300px height=115px class=quadrado".($j%2).">";
                            if($i==1){
                                echo "<img id=p".$i.$j." onclick='mexer_peca(\"preta\", this.id)' src='peca_preta.png'>"; // Desenha as peças 1
                            }else if($i==7){
                                echo "<img id=p".$i.$j." onclick='mexer_peca(\"branca\", this.id)' src='peca_branca.png'>";
                            }else{
                                echo "<img onclick='verifica_mexer(this.id)' id=p".$i.$j." src='transparente.png'>";
                            }
                            echo "</th>";
                        }
                    }else{
                        for($j=0; $j<=7; $j++){
                            echo "<th width=200px height=115px class=quadrado".($j%2).">";
                            if($i==2){
                                echo "<img id=p".$i.($j+1)." onclick='mexer_peca(\"preta\", this.id)' src='peca_preta.png'>"; // Desenha as peças 2
                            }else if($i==8){
                                echo "<img id=p".$i.($j+1)." onclick='mexer_peca(\"branca\", this.id)' src='peca_branca.png'>";
                            }else{
                                echo "<img onclick='verifica_mexer(this.id)' id=p".$i.($j+1)." src='transparente.png'>";
                            }
                            echo "</th>";
                        }
                    }
                    echo "</tr>";
                }
           ?>
        </table>
    </body>
</html>



<!--if($i%2==$j%2){
    branco
}else{
    preto
} -->