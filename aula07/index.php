<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <?php
                $n1 = 2;
                $n2 = 3;
                $op = "s";
                $r = $op == "s" ? $n1+$n2 : $n1*$n2; # Utilizando unário e relacional.
                echo "Os números são: $n1 e $n2";
                echo "</br>O resultado é: $r";
                
                $a = 3;
                $b = "3";
                $re = $a == $b ? "SIM" : "NÃO"; # Utilizando unário e relacional.
                $re2 = $a === $b ? "SIM" : "NÃO"; # Utilizando unário e relacional.
                echo "</br></br>Temos A e B. São iguais? $re";
                echo "</br>São idênticos? $re2";

                $nota1 = 10;
                $nota2 = 7;
                $nota3 = 3;
                $m = ($nota1+$nota2+$nota3)/3;
                echo "</br></br>Suas notas foram $nota1, $nota2 e $nota3. Tendo uma média de " . number_format($m,1,".");
                echo "</br>Você foi " . ($m < 7 ? "REPROVADO." : "APROVADO."); # Utilizando unário e relacional.

                $idade = date("Y") - 2005;
                echo "</br></br>Você tem $idade anos. Seu voto é " . ($idade >= 18 && $idade <= 64 ? "OBRIGATÓRIO." : "NÃO OBRIGATÓRIO."); # Utilizando unário, relacional e lógico.
            ?>
             </br>
            <a href="../index.php">Voltar</a>
        </div>
    </div>
</body>
</html>