<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$tratamento = $queryBuilder->getFirst('Tratamentos', 'Id', $id, 'Miguel\ProjetoFinal\Model\Tratamentos');

$tratamento->Utente = $queryBuilder->findById('Utentes', $tratamento->Utente_id, 'Miguel\ProjetoFinal\Model\Utentes');
$tratamento->Dente = $queryBuilder->getFirst('Dentes', 'FDI', $tratamento->FDI, 'Miguel\ProjetoFinal\Model\Dentes');
$tratamento->Problema = $queryBuilder->findById('Problemas', $tratamento->Problema_id, 'Miguel\ProjetoFinal\Model\Problemas');
$tratamento->Medico = $queryBuilder->findById('Medicos', $tratamento->Medico_id, 'Miguel\ProjetoFinal\Model\Medicos');


$Problemas = $queryBuilder->getAll('Problemas', 'Miguel\ProjetoFinal\Model\Problemas');

require 'Views/medicos.alterar.view.php';