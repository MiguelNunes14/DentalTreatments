<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;
use Miguel\ProjetoFinal\Model\Tratamento;

// Cria a conexão com o banco de dados
$connection = Connection::make();

$queryBuilder = new QueryBuilder($connection);

$tratamentos = $queryBuilder->getAllBy('Tratamentos', 'Medico_id', $_SESSION['Medico_id'], 'Miguel\ProjetoFinal\Model\Tratamentos');

    foreach($tratamentos as $tratamento){
        $tratamento->Utente = $queryBuilder->findById('Utentes', $tratamento->Utente_id, 'Miguel\ProjetoFinal\Model\Utentes');
        $tratamento->Dente = $queryBuilder->getFirst('Dentes', 'FDI', $tratamento->FDI, 'Miguel\ProjetoFinal\Model\Dentes');
        $tratamento->Problema = $queryBuilder->findById('Problemas', $tratamento->Problema_id, 'Miguel\ProjetoFinal\Model\Problemas');
        $tratamento->Medico = $queryBuilder->findById('Medicos', $tratamento->Medico_id, 'Miguel\ProjetoFinal\Model\Medicos');
    }

    require 'Views/medicos.alterar.eliminar.view.php';