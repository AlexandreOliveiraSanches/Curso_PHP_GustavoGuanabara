<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="terminal">
        <div class="conteudo">
            <form method="get" action="index.php">
                <a href="../index.php">Voltar</a>
                <br/>
                <label for="nome">Digite seu nome</label>
                <input type="text" name="nome" placeholder="Nome" required><br/><br/>
                <label for="anoNasc">Informe o ano de nascimento</label>
                <input type="number" min="1900" max="2100" name="anoNasc" placeholder="Ano" required><br/>
                <input type="submit" value="Verificar">
            </form>

            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"] : null;
                $anoNasc = isset($_GET["anoNasc"])?$_GET["anoNasc"]:null;
                $idade = date("Y") - $anoNasc;

                if($nome != null && $anoNasc != null){
                    if($idade >= 18){
                        $votar = "já pode votar";
                        $dirigir = "já pode dirigir";
                    }
                    elseif($idade >= 16 && $idade < 18){
                        $votar = "já pode votar";
                        $dirigir = "não pode dirigir";
                    }
                    else{
                        $votar = "não pode votar";
                        $dirigir = "não pode dirigir";
                    }
                    echo "<br/>$nome nasceu em $anoNasc, tem $idade anos e, com essa idade, $votar e $dirigir.";
                }
                else{
                    echo "<br/>[Nenhum dado informado]";
                }
            ?>
        </div>
    </div>
</body>
</html>