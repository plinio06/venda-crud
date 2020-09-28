
<form action="cadastro-produtos.php">
    <input type="text" name="nome">
    <input type="text" name="preco">
    <button type="submit" formmethod="post">Cadastrar</button>
</form>

<h1>
    <?php echo $_POST["nome"] . $_POST["preco"] ?>
</h1>