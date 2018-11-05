<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Calculadora de imposto</title>

</head>
<body>

    <?php 
        require_once('Classes/CalcImposto.php');
        $nome = $_POST['nome'];
        $renda = $_POST['renda'];

        if($nome == "")
        {
           echo "<script>
                    alert('Favor Preencher o campo Nome =D');
                </script>";
        }
        elseif($renda == "")
        {
            echo "<script>
                    alert('Favor Preencher o campo Renda =D');
                </script>";
        }
        elseif(!is_numeric($renda))
        {
            echo "<script>
                    alert('O valor do campo renda não é valido =D');
                </script>";
        }
        else
        {
            $calcImposto = new calcImposto($nome, $renda);
            $valorImposto = $calcImposto->calcImposto();
        }
    ?>

    <form action="index.php" method="POST">
        Nome: <input type="text" name="nome"><br>
        Renda: <input type="text" name="renda"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
         echo "<b style='color: red; top: 50px; position: relative;'> {$valorImposto} </b>";
    ?>

</body>
</html>