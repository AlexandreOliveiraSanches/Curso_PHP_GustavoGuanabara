<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If para média</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        span.cor{
            color: red;
        }
    </style>
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <a href="../aula09/index.php">Voltar</a>
            <form method="get" action="ex02.php">
                <label for="n1">Informe a primeira nota</label>
                <input type="number" step="0.01" min="0" max="10" name="n1" placeholder="Primeira nota" required><br/>
                <label for="n2">Informe a segunda nota</label>
                <input type="number" step="0.01" min="0" max="10" name="n2" placeholder="Segunda nota" required><br/>
                <input type="submit" value="Confirmar">
            </form>

            <?php
                $n1 = isset($_GET["n1"])?$_GET["n1"]:null;
                $n2 = isset($_GET["n2"])?$_GET["n2"]:null;
                $media = ($n1+$n2)/2;

                if($n1 != null && $n2 != null){
                    echo "<br/>A média entre <span class='cor'>$n1</span> e <span class='cor'>$n2</span> é igual a <span class='cor'>$media</span>.";
                    if($media >= 7){
                        $sit = "APROVADO";
                    }
                    else{
                        $sit = "REPROVADO";
                    }
                    echo "<br/>Situação do aluno: <span class='cor'>$sit</span>";
                }
                else{
                    echo "<br/>[Dados não informados]";
                }
            ?>
        </div>
    </div>
</body>
</html>