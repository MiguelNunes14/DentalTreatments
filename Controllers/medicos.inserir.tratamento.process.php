<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$utente = $queryBuilder->getFirst('Utentes', 'NIF',$_POST['Utente_NIF'], 'Miguel\ProjetoFinal\Model\Utentes');

$queryBuilder->create('Tratamentos',[
    'Utente_id' => $utente->Id,
    'FDI' => $_POST['FDI'],
    'Problema_id' => $_POST['Problema_id'],
    'Tratamento' => $_POST['Tratamento'],
    'Medico_id' => $_SESSION['Medico_id']
]);

redirect('medicos/Inserir');