<?php

/* Home page */
$router->get('', function() {
    require 'Controllers/home.php';
});

//Criar conta dos médicos
$router->get('medicos/create', function() {
    require 'Controllers/medicos.create.php';
});

$router->post('medicos/store', function(){
    require 'Controllers/medicos.store.php';
});

//Login dos médicos
$router->get('medicos/login', function() {
    require 'Views/medicos.login.view.php';
});

$router->post('medicos/login/process', function() {
    require 'Views/medicos.login.view.php';
});

//Criar conta dos Utentes
$router->get('utentes/create', function() {
    require 'Controllers/utentes.create.php';
});

$router->post('utentes/store', function() {
    require 'Controllers/utentes.store.php';
});

//Login dos utentes
$router->get('utentes/login', function() {
    require 'Views/utentes.login.view.php';
});

$router->post('utentes/login/process', function() {
    require 'Controllers/utentes.login.php';
});

$router->get('utentes/dentes', function(){
    if(isset($_SESSION['Utente_id'], $_SESSION['Utente'], $_SESSION['Email'])){
        require 'Views/utentes.home.view.php';
    }else{
        redirect('utentes/login');
    }
});

$router->get('utentes/dentes/Denticao_Decidua', function(){
    if(isset($_SESSION['Utente_id'], $_SESSION['Utente'], $_SESSION['Email'])){
        require 'Views/utentes.denticao_decidua.php';
    }else{
        redirect('utentes/login');
    }
});

$router->post('utentes/dentes/get.json', function(){
    require 'Controllers/utentes.get.json.php';
});

$router->get('utentes/dentes/Denticao_Permanente', function(){
    if(isset($_SESSION['Utente_id'], $_SESSION['Utente'], $_SESSION['Email'])){
        require 'Views/utentes.denticao_permanente.php';
     }else{
        redirect('utentes/login');
    }
});

//Logout
$router->get('logout', function(){
    session_destroy();
    redirect('');
});
?>