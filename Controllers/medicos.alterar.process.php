<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$utente = $queryBuilder->getFirst('Utentes', 'NIF', $_POST['NIF'], 'Miguel\ProjetoFinal\Model\Utentes');

if(isset($_POST['NIF'],$_POST['FDI'], $_POST['Problema_id'], $_POST['Tratamento'])){
    $queryBuilder->update('Tratamentos',$id,[
        'Utente_id' => $utente->Id,
        'FDI' => $_POST['FDI'],
        'Problema_id' => $_POST['Problema_id'],
        'Tratamento' => $_POST['Tratamento']
    ]);
}

redirect('medicos/Alterar_Eliminar');