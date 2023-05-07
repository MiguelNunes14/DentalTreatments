<?php

use Miguel\ProjetoFinal\Database\Connection;
use Miguel\ProjetoFinal\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$queryBuilder->create('Utentes',[
    'Nome' => $_POST['Nome'],
    'NIF' => $_POST['NIF'],
    'Telefone' => $_POST['Telefone'],
    'Email' => $_POST['Email'],
    'DataNascimento' => $_POST['DataNascimento'],
    'Morada' => $_POST['Morada'],
    'Genero_id' => $_POST['Genero_id'],
    'Password' => password_hash($_POST['Password'], PASSWORD_DEFAULT),
    'N_Mecanografico' => $_POST['NºMecanografico']
]);

redirect('');