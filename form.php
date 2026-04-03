<h2>Cadastro de usuários</h2>

<form action="salvar.php" method = "POST">
    Nome: <input type="text" name="nome" required><br>
    E-mail: <input type="email" name="email" required><br>
    Telefone: <input type="number" name="telefone" min="1" required><br>
    Idade: <input type="number" name="idade" min="1" required><br>
    Cidade: <input type="text" name="cidade" required><br>
    Curso: <input type="text" name="curso" required><br>
    <button>Salvar</button>
</form>