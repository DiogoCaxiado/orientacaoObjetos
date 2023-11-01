<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
    
    <form>
        <label for="numero">Numero</label>
        <input type="text" name="numero">

        <label for="agencia">Agencia</label>
        <input type="text" name="agencia">

        <label for="proprietario">Proprietario</label>
        <input type="text" name="proprietario">

        <label for="saldo">Saldo</label>
        <input type="text" name="saldo">

        <label for="limite">Limite</label>
        <input type="text" name="limite">

        <button type="submit">Confirmar</button>
    </form>

    <form>
        <label for="depositar">Informe o valor do Depósito</label>
        <input type="number" name="depositar">

        <button type="submit">Depositar</button>
    </form>

    <?php
        include("./classes/Conta.php");

        if (isset($_GET["numero"])) {
            $conta = new Conta();
            $conta->create($_GET["numero"], $_GET["agencia"], $_GET["proprietario"], $_GET["saldo"], $_GET["limite"]);

            echo "<section> <h2>" . $_GET['numero'] . "</h2>" . "<h2>" . $_GET['agencia'] . "</h2>" . "<h2>" . $_GET['proprietario'] . "</h2>" . "<h2>" . $_GET['saldo'] . "</h2>" . "<h2>" . $_GET['limite'] . "</h2> </section>";
        }

        if (isset($_GET["depositar"])) {
            $conta = new Conta();
            
            $saldoAtual = $conta->get_Saldo();
        }
    ?>

</body>
</html>