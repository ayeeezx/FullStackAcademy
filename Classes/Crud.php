<?php
class Crud
{ private $conn;
private $table_name = "";
public function __construct($db)
{
$this->conn = $db;
}
public function create($nome, $sobrenome, $email, $telefone, $cpf, $senha, $dataNasc, $sexo)
{
$query = "INSERT INTO " . $this->table_name . " (nome, sobrenome, email, telefone, cpf, senha, data_nasci_usuario, sexo) VALUES
(?, ?)";
$stmt = $this->conn->prepare($query); $stmt->execute([$name, $age]);
return $stmt;
}
public function read() {
$query = "SELECT * FROM " . $this->table_name;
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}
public function update($id, $nome, $sobrenome, $email, $telefone, $cpf, $senha, $dataNasc, $sexo) {
$query = "UPDATE " . $this->table_name . " SET name = ?, age = ?
WHERE id = ?";
$stmt = $this->conn->prepare($query);
$stmt->execute([$nome, $sobrenome, $email, $telefone, $cpf, $senha, $dataNasc, $sexo, $id]);
return $stmt;
}
public function delete($id) {
$query = "DELETE FROM " . $this->table_name . " WHERE id = ?"; $stmt =
$this->conn->prepare($query);
$stmt->execute([$id]);
return $stmt;
}
}
?>