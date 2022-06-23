<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QUESTIONÁRIO DE SINTOMAS DO CORONA VÍRUS</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main class="container">

            <header class="blocos">

                <h1 class="centro">QUESTIONÁRIO DE SINTOMAS DO CORONA VÍRUS</h1>
                
            </header>
            <section class="blocos">

                <h4>Digite seu nome e idade</h4>
                <form action="corona.php" method="post">
                    <label>Nome:</label><br>
                    <input type="text" id="nome" name="nome" required><br>
                    <label>Idade:</label><br>
                    <input type="text" id="idade" name="idade" required>
                
            </section>
            <section class="blocos">
                <h4>Sintomas mais comuns</h4>
                
                    <input type="checkbox" id="febre" name="febre">
                    <label> Febre.</label><br>
                    <input type="checkbox" id="tosse" name="tosse">
                    <label> Tosse.</label><br>
                    <input type="checkbox" id="cansaco" name="cansaco">
                    <label> Cansaço.</label><br>
                    <input type="checkbox" id="perda" name="perda">
                    <label> Perda de paladar ou olfato.</label>
                
            </section>
            <section class="blocos">
                <h4>Sintomas menos comuns</h4>
                
                    <input type="checkbox" id="garganta" name="garganta">
                    <label> Dores de garganta.</label><br>
                    <input type="checkbox" id="cabeca" name="cabeca">
                    <label> Dor de cabeça.</label><br>
                    <input type="checkbox" id="dores" name="dores">
                    <label> Dores e desconfortos.</label><br>
                    <input type="checkbox" id="diarreia" name="diarreia">
                    <label> Diarreia.</label><br>
                    <input type="checkbox" id="pele" name="pele">
                    <label> Irritações na pele ou descoloração dos dedos dos pés ou das mãos.</label><br>
                    <input type="checkbox" id="olhos" name="olhos">
                    <label> Olhos vermelhos ou irritados.</label>
                
            </section>
            <section class="blocos">
                <h4>Sintomas graves</h4>
                
                    <input type="checkbox" id="ar" name="ar">
                    <label> Dificuldade para respirar ou falta de ar.</label><br>
                    <input type="checkbox" id="fala" name="fala">
                    <label> Perda da fala, mobilidade ou confusão.</label><br>
                    <input type="checkbox" id="peito" name="peito">
                    <label> Dores no peito.</label><br><br>
                    <input type="submit" value="Enviar" class="largura">

                </form>
            </section>
<?php 

$contagem = 0;

( !empty($_POST["nome"]) )      ? $nome = $_POST["nome"]         : $nome = ""; 
( !empty($_POST["idade"]) )     ? $idade = $_POST["idade"]       : $idade = ""; 

( !empty($_POST["febre"]) )     ? $febre = $_POST["febre"]       : $febre = ""; 
( !empty($_POST["tosse"]) )     ? $tosse = $_POST["tosse"]       : $tosse = "";
( !empty($_POST["cansaco"]) )   ? $cansaco = $_POST["cansaco"]   : $cansaco = ""; 
( !empty($_POST["perda"]) )     ? $perda = $_POST["perda"]       : $perda = "";

( !empty($_POST["garganta"]) )  ? $garganta = $_POST["garganta"] : $garganta = ""; 
( !empty($_POST["cabeca"]) )    ? $cabeca = $_POST["cabeca"]     : $cabeca = "";
( !empty($_POST["dores"]) )     ? $dores = $_POST["dores"]       : $dores = ""; 
( !empty($_POST["diarreia"]) )  ? $diarreia = $_POST["diarreia"] : $diarreia = "";
( !empty($_POST["pele"]) )      ? $pele = $_POST["pele"]         : $pele = ""; 
( !empty($_POST["olhos"]) )     ? $olhos = $_POST["olhos"]       : $olhos = "";

( !empty($_POST["ar"]) )        ? $ar = $_POST["ar"]             : $ar = "";
( !empty($_POST["fala"]) )      ? $fala = $_POST["fala"]         : $fala = "";
( !empty($_POST["peito"]) )     ? $peito = $_POST["peito"]       : $peito = "";



if( $febre == true )   { $contagem++; }
if( $tosse == true )   { $contagem++; }
if( $cansaco == true ) { $contagem++; }
if( $perda == true )   { $contagem++; }

if( $garganta == true ){ $contagem = $contagem + 5; }
if( $cabeca == true )  { $contagem = $contagem + 5; }
if( $dores == true )   { $contagem = $contagem + 5; }
if( $diarreia == true ){ $contagem = $contagem + 5; }
if( $pele == true )    { $contagem = $contagem + 5; }
if( $olhos == true )   { $contagem = $contagem + 5; }

if( $ar == true )      { $contagem = $contagem + 50; }
if( $fala == true )    { $contagem = $contagem + 50; }
if( $peito == true )   { $contagem = $contagem + 50; }

?>            
            <section class="blocos">
                <h4>Resultado</h4>
<?php 

    if( $contagem > 0 && $contagem < 5 ){
        
        echo "Paciente: " . $nome . "<br>";
        echo "Idade: " . $idade . " anos" . "<br><br>";
        echo "De acodo com o presente questionário, 
        o paciente tem sintomas de gripe comum. 
        Se os sintomas persistirem, consulte um médico";

    }elseif( $contagem > 5 && $contagem < 35 ){

        echo "Paciente: " . $nome . "<br>";
        echo "Idade: " . $idade . " anos" . "<br><br>";
        echo "De acodo com o presente questionário, 
        o paciente tem sintomas comuns do Corona vírus. 
        Consulte um médico";

    }elseif( $contagem > 35 ){

        echo "Paciente: " . $nome . "<br>";
        echo "Idade: " . $idade . " anos" . "<br><br>";
        echo "De acodo com o presente questionário, 
        o paciente tem sintomas graves de Corona vírus. 
        Consulte um médico imediatamente";

    }else{

        echo "";
        
    }

?>
            </section>
        </main>
    </body>
</html>
