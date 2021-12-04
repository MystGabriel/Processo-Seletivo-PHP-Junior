<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Teste Processo Seletivo | PHP Júnior</title>
</head>
<body>
     
    <section class="seculo">
        <div class="content">
            <div class="title">Qual século é esse ano?</div>
            <div class="line"></div>
            <div class="seculo-content">
                <div class="left">
                    <div class="infos">Estamos aqui para te ajudar a descobrir em século se passa um ano especifico.</div>
                    <div class="forms">
                        <form action="" method="post">
                            <p>Digite abaixo a data que deseja saber o século:</p>
                            <input class="year" type="number" placeholder="EX: 1970" name="ano">
                            <input class="button" type="submit" value="Enviar" name="enviar">
                        </form>
                    </div>
                    <div class="result">
                        <p><span>Século:</span> 
                        <input 
                            class="result-input" 
                            disabled="" 
                            type="text" 
                            value="<?php

                                $seculo = 0;

                                if(isset($_POST['enviar'])){

                                    $ano = $_POST['ano'];

                                    $ano = $ano/100 + 1;

                                    if(is_numeric($ano)){
                                        $seculo = intval($ano);
                                    }
                                }

                                echo "$seculo";

                            ?>"
                        >
                        </p>
                    </div>
                </div>
                <div class="right">
                    <div class="container">
                        <div class="sec-infos">É fundamental se observar que um século começa no início de um ano 01 e termina no 00 — por exemplo, o século XX começou em 1º de janeiro de 1901 e terminou em 31 de dezembro de 2000 e o século XXI (atual) começou em 1º de janeiro de 2001 e terminará em 31 de dezembro de 2100.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prime">
        <div class="content">
            <div class="title">Números primos!</div>
            <div class="line"></div>
            <div class="infos">Quer saber qual é número primo anterior ao número dígitado, basta dígitar o número desejado abaixo.  Número primo é qualquer número p cujo conjunto dos divisores não inversíveis não é vazio, e todos os seus elementos são produtos de p por números inteiros inversíveis. De acordo com esta definição, 0, 1 e -1 não são números primos.</div>
            <div class="forms">
                <form action="" method="post">
                    <div class="input">
                        <div class="input-title">Digite seu número aqui:</div>
                        <input class="numeric" type="number" placeholder="EX: 100" name="number">
                        <input class="button" type="submit" value="Enviar" name="enviar-1">
                    </div>
                    <i class="fas fa-long-arrow-alt-right"></i>
                    <div class="input">
                        <div class="input-title">Número primo aqui.</div>
                        <input 
                            class="prime" 
                            disabled="" 
                            type="text" 
                            value="<?php

                                $num = "";

                                if(isset($_POST['enviar-1'])){

                                    $num = $_POST['number'];

                                    $div = 1; 
                                    $uau = true;
                                    $count = 0;

                                    while($div <= $num && $uau){
                                        if($num % $div == 0){
                                            $count += 1;
                                        }
                                        if($count >= 3){
                                            $count = 1;
                                            $num -= 1;
                                            $div = 1;
                                        }
                                        if($count == 2 && $num == $div){
                                            $uau = false;
                                        }
                                        $div += 1;
                                    }

                                }

                                $prime = intval($num);

                                echo "$prime";

                            ?>"
                        >
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="random">
        <div class="content">
            <div class="title">Vetor Aleatório</div>
            <div class="line"></div>
            <div class="random-container">
                <div class="infos">Aqui podemos ver a funcionalidade de um vetor criado aleatóriamente e exibindo o valor que mais se repetiu dentro de seu escopo.</div>
                <div class="forms">
                    <form action="" method="post">
                        <div class="input">
                            <div class="input-title">Array Aleatório</div>
                            <input
                            class="numeric-1"
                            name="aleatorio"
                            disabled=""
                            type="text" 
                            value="<?php

                                $repeat = '';

                                $arr = array();

                                if(isset($_POST['enviar-2'])){

                                    for($i = 0; $i < 10; $i++){
                                        $arr[$i] = rand(0, 10);
                                    }

                                    $str = implode(" - ", $arr);

                                    echo("$str");

                                    $repeat = implode(" ", array_values(array_count_values($arr)));

                                }

                                $_SESSION['repeat'] = $repeat;

                                ?>"
                            >
                            <div class="input-title">Número que mais se repete</div>
                            <input
                            class="numeric-1"
                            type="text"
                            disabled=""
                            value="<?php

                                echo $_SESSION['repeat'];

                            ?>"
                            >
                            <input class="button" type="submit" value="Gerar vetor aleatório" name="enviar-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>