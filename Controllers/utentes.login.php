<?php 

    use Miguel\ProjetoFinal\Database\Connection;
    use Miguel\ProjetoFinal\Database\QueryBuilder;

    $connection = Connection::make();
    $queryBuilder = new QueryBuilder($connection);
   
    if(isset($_POST['Password'])){
        $utente = $queryBuilder->login('Utentes',$_POST['Utilizador'], 'Utilizador', 'Email', 'Miguel\ProjetoFinal\Model\Utentes');

        if($utente === false){
            redirect('utentes/login');
            exit();
        }

        if($_POST['Password'] && password_verify($_POST['Password'], $utente->Password)){
            $_SESSION['Utente_id'] = $utente->Id;
            $_SESSION['Utente'] = $utente->Nome;
            $_SESSION['Email'] = $utente->Email;
            redirect('utentes/dentes');
        }

    }