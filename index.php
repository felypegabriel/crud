<?php include 'conexao.php'; ?>

<h2>Cadastro de Usuários</h2>

<form action="salvar.php" method="POST">
    Nome: <input type="text" name="nome"><br><br>
    Email: <input type="text" name="email"><br><br>
    <button type="submit">Salvar</button>
</form>

<hr>

<h2>Lista de Usuários</h2>

<?php
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['nome'] . " - " . $row['email'];

    echo " <a href='editar.php?id=" . $row['id'] . "'>Editar</a>";
    echo " <a href='excluir.php?id=" . $row['id'] . "'>Excluir</a>";
    echo "<br>";
}
?>