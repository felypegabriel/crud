<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Editar Usuário</h2>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>