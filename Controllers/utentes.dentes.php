<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->