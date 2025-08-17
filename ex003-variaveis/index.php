<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis em PHP</title>
</head>
<body>
    <h1>Testando variaveis em PHP</h1>
    <?php 
        // const _TX = 850;
        // echo "Resultado " ._TX . "<br>";
        
        //0x = hexadecimal 0b = binário 0=Octal
        // $numhexa = 0x1B;
        // $numbin = 0b1001;
        // $numoc = 010;
        // echo "Bases numericas diferentes exemplo ".$numhexa ." ".$numbin ." ".$numoc;

        // $v = 300;
        // var_dump($v); -- Monstra as informações sobre uma variável específica

        //  $num = 3e2; -- 3 * 10²
        //  $num = (int) 3e2; -- coerção força um tipo de variavel
        //  echo "O valor é: " .$num ."<br>";
        // var_dump($num);

        // $num = (float) "950"; -- 950 seria considerado como string por conta do " "
        // var_dump($num); -- vai retornar que é float

        // $casado = true;
        // $casado = false;
        // echo "O valor de casado é $casado"; -- no php echo de bool retorna 1 para true e vazio para falso 

        // $vet = [6, 2.5 , "Maria", false,3e2];
        // var_dump($vet); -- array 

        // class Pessoa { -- Objeto
        //     private string $nome; -- uma instancia
        // }

        // $p = new Pessoa;
        // var_dump($p); 
    ?>
</body>
</html>