<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo route('CSS/home.css'); ?>">
    <title>Criar Utilizador</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: lightblue;">
    <a class="navbar-brand ms-2 " href="<?php echo route(''); ?>"><img class="me-2" width="40" height="40" src="<?php echo route('Images/dente.png'); ?>" alt=""><b>DENTAL TREATMENTS</b></a>
    <button class="navbar-toggler me-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active ms-2 mt-1">
          <a class="nav-link" href="<?php echo route(''); ?>">Página Inicial</a>
        </li>
      </ul>
    </div>
  </nav>
    <main class="main">
        <img class="img-bg" src="<?php echo route('Images/sorriso.png'); ?>" alt="">
        <div class="conteudo">
            <form class="m-5" action="<?php echo route('utentes/store'); ?>" onsubmit="return validateNIF()" method="post">
                <table class="table table-borderless d-table-cell">
                    <tr>
                        <th colspan="2"><h3>Criar Conta de Utente</h3></th>
                    </tr>
                    <tr>
                        <td><label for="Nome">Nome completo</label></td>
                        <td><input type="text" class="form-control" name="Nome" id="Nome" placeholder="Insira o seu nome completo" required></td>
                    </tr>
                    <tr>
                        <td> <label for="Utilizador">Nome de Utilizador</label></td>
                        <td><input type="text" class="form-control" name="Utilizador" id="Utilizador" placeholder="Insira um nome de utilizador" required></td>
                    </tr>
                    <tr>
                        <td><label for="NIF">NIF</label></td>
                        <td><input type="tel" class="form-control" name="NIF" id="NIF" placeholder="123456789" required></td>
                    </tr>
                    <tr>
                        <td><label for="Telefone">Telefone</label></td>
                        <td><input type="tel" class="form-control" name="Telefone" id="Telefone" placeholder="912345678" pattern="^[9]([1-3]|[6])[0-9]{7}$" required></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" class="form-control" name="Email" id="Email" placeholder="email@email.com" required></td>
                    </tr>
                    <tr>
                        <td><label for="DataNascimento">Data de nascimento</label></td>
                        <td><input type="date" class="form-control" name="DataNascimento" id="DataNascimento" required></td>
                    </tr>
                    <tr>
                        <td><label for="Morada">Morada</label></td>
                        <td><input type="text" class="form-control" name="Morada" id="Morada" placeholder="Insira a sua morada" required></td>
                    </tr>
                    <tr>
                        <td>Género</td>
                        <td>
                            <select class="custom-select" name="Genero_id" id="Genero_id">
                                <?php 
                                    foreach($Generos as $Genero){
                                    ?>
                                    <option value="<?php echo $Genero->Id ?>"><?php echo $Genero-> Genero ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Password">Password</label></td>
                        <td><input type="password" class="form-control" name="Password" id="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div style="display:flex; justify-content:flex-end;">
                                <button type="reset" class="btn btn-outline-seconday me-3"><b>Limpar</b></button>
                                <button type="submit" name="submit" class="btn btn-outline-primary"><b>Criar conta</b></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo route('JS/Utentes.js'); ?>"></script>
</body>
</html>