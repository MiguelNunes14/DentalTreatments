<?php 

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$Generos = $queryBuilder -> getAll('Generos', 'Miguel\ProjetoFinal\Model\Generos');

require 'Views/medicos.create.view.php';
?>