<?php 

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$Problemas = $queryBuilder -> getAll('Problemas', 'Miguel\ProjetoFinal\Model\Problemas');

require 'Views/medicos.inserir.php';
?>