<?php 

    use Miguel\ProjetoFinal\Database\Connection;
    use Miguel\ProjetoFinal\Database\QueryBuilder;

    $connection = Connection::make();
    $queryBuilder = new QueryBuilder($connection);
   
    if(isset($_POST['Password'])){
        $administrador = $queryBuilder->login1Field('Administradores',$_POST['Utilizador'], 'Utilizador', 'Miguel\ProjetoFinal\Model\Administradores');

        if($administrador === false){
            redirect('administrador/login');
            exit();
        }

        if($_POST['Password'] && password_verify($_POST['Password'], $administrador->Password)){
            $_SESSION['Admin'] = $administrador->Id;
            redirect('');
        }else{
             redirect('administrador/login');
            exit();
        }

    }