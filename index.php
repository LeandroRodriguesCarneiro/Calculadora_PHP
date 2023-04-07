<?php 
    include('header.php'); 
?>
    <div class="content">
        <div class="Entrada">
            <form class="input"method="post">
                <div class="valorA">
                    <label for="valorA"></label>
                    <input type="text" id = "valorA" name = "valorA">
                </div>
                <div class="valorB">
                    <label for="valorB"></label>
                    <input type="text" id = "valorB" name = "valorB">
                </div>
                <div class="valorC hide">
                    <label for="valorC"></label>
                    <input type="text" id = "valorC" name = "valorC">
                </div>
                <label for="operacao">Selecione a operacao desejada:</label>
                <select name="operacao" id="operacao">
                    <option value="adicao" selected>Adicao</option>
                    <option value="subtracao">Subtracao</option>
                    <option value="multiplicacao">Multiplicacao</option>
                    <option value="divisao">Divisao</option>
                    <option value="raiz">Raiz</option>
                    <option value="potencia">Potencia</option>
                    <option value="pitagoras">Pitagoras</option>
                    <option value="bhaskara">Bhaskara</option>
                </select>
                <input type="submit" name = "acao" value="Calcular"></input>
            </form>
        </div>
        <div class="Result">
            O resultado e:
            <br/>
            <span>
                <?php
                    include('calculadora.php');
                    if(isset($_POST['acao'])){;
                        $operacao = $_POST['operacao'];
                        if($operacao == 'adicao'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                echo adicao($A,$B);
                            }
                        }elseif ($operacao == 'subtracao'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                echo subtracao($A,$B);
                            }
                        }elseif ($operacao == 'multiplicacao'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                echo multiplicacao($A,$B);
                            }
                        }elseif ($operacao == 'divisao'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                echo divisao($A,$B);
                            }
                        }elseif ($operacao == 'potencia'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                echo potencia($A,$B);
                            }
                        }elseif ($operacao == 'raiz'){
                            if(empty($_POST['valorA'])!=1){
                                $A = (float)$_POST['valorA'];
                                echo raiz($A);
                            }
                        }elseif($operacao == 'bhaskara'){
                            if(empty($_POST['valorA'])!=1 && empty($_POST['valorB'])!=1 && empty($_POST['valorC'])!=1){
                                $A = (float)$_POST['valorA'];
                                $B = (float)$_POST['valorB'];
                                $C = (float)$_POST['valorC'];
                                $arr = bhaskara($A,$B,$C);
                                $count = 1;
                                foreach($arr as $key => $value){
                                    echo "X".$count." = ";
                                    echo $arr[$key];
                                    echo "<br/>";
                                    $count +=1;
                                }
                            }   
                        }elseif($operacao == 'pitagoras'){
                            if(empty($_POST['valorA'])!=1){
                                $A = (float)$_POST['valorA'];
                            }else{
                                $A = 0;
                            }
                            if(empty($_POST['valorB'])!=1){
                                $B = (float)$_POST['valorB'];
                            }else{
                                $B = 0;
                            }
                            if(empty($_POST['valorC'])!=1){
                                $C = (float)$_POST['valorC'];
                            }else{
                                $C = 0;
                            }
                            if (!($A == 0 && $B == 0) || !($A==0 && $C==0) || !($B==0 && $C==0)){
                                echo pitagoras($A,$B,$C);
                            }
                            
                        }else{
                            return;
                        }
                    }
                ?>
            </span>
        </div>
    </div>
<?php
include('footer.php');
?>