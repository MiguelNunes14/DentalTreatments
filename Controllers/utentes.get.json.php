<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;
use Miguel\ProjetoFinal\Model\Tratamento;

// Cria a conexão com o banco de dados
$connection = Connection::make();

$queryBuilder = new QueryBuilder($connection);

$tratamentos = $queryBuilder->getTratamentos($_SESSION['Utente_id'], $_POST['id']);

$tratamento->Utente = $queryBuilder->findById('Utentes', $tratamento->Utente_Id, 'Miguel\ProjetoFinal\Model\Utentes');
$tratamento->Dente = $queryBuilder->findById('Dentes', $tratamento->FDI, 'Miguel\ProjetoFinal\Model\Dentes');
$tratamento->Problema = $queryBuilder->findById('Problemas', $tratamento->Problema_id, 'Miguel\ProjetoFinal\Model\Problemas');
$tratamento->Medico = $queryBuilder->findById('Medicos', $tratamento->Medico_id, 'Miguel\ProjetoFinal\Model\Medicos');


// Converte os dados dos tratamentos para formato JSON e envia a resposta
header('Content-type: application/json; charset=utf-8');
echo json_encode($tratamentos);
