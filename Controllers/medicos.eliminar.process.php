<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$tratamento = $queryBuilder->deleteById('Tratamentos',$id);

redirect('medicos/Alterar_Eliminar');