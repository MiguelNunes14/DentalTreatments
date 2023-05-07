<?php 

    use Miguel\ProjetoFinal\Database\Connection;
    use Miguel\ProjetoFinal\Database\QueryBuilder;

    $connection = Connection::make();
    $queryBuilder = new QueryBuilder($connection);
   
    if(isset($_POST['Password'])){
        $medico = $queryBuilder->login('Medicos',$_POST['NºMecanografico'], 'N_Mecanografico', 'Email', 'Miguel\ProjetoFinal\Model\Medicos');

        if($medico === false){
            redirect('medicos/login');
            exit();
        }

        if($_POST['Password'] && password_verify($_POST['Password'], $medico->Password)){
            $_SESSION['Medico_id'] = $medico->Id;
            $_SESSION['Utente'] = $medico->Nome;
            $_SESSION['NºMecanografico'] = $medico->N_Mecanografico;
            redirect('medicos/dentes');
        }

    }