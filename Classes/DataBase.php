<?php
class Database
{
private $host = "localhost"; private $fullstack =
"fullstack";
private $usuarios = "root";
private $senha = "";
public $conn;
public function getConnection()
{
$this->conn = null;
try { $this->conn = new PDO("mysql:host=" . $this->host .
";fullstack=" . $this->fullstack, $this->usuarios, $this->senha);
}
catch(PDOException $exception)
{
echo "Erro de conexão: " . $exception->getMessage();
}
return $this->conn;
}
}
?>