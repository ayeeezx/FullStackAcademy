<?php
class Crud
{ private $conn;
private $tbl_usuarios = "usuario";
public function __construct($fullstack)
{
$this->conn = $fullstack;
}
public function create($usuario, $senha)
{
$query = "INSERT INTO " . $this->tbl_usuarios . " (usuario, senha VALUES
(?, ?)";
$stmt = $this->conn->prepare($query); $stmt->execute([$usuario, $senha]);
return $stmt;
}
public function read() {
$query = "SELECT * FROM " . $this->tbl_usuarios;
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
}
public function update($usuario, $senha) {
$query = "UPDATE " . $this->tbl_usuarios . " SET usuario = ?, senha = ?
WHERE id = ?";
$stmt = $this->conn->prepare($query);
$stmt->execute([$usuario, $senha]);
return $stmt;
}
public function delete($id) {
$query = "DELETE FROM " . $this->tbl_usuarios . " WHERE id = ?"; $stmt =
$this->conn->prepare($query);
$stmt->execute([$id]);
return $stmt;
}
}
?>