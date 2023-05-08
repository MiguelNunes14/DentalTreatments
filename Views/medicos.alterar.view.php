<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo route('CSS/home.css'); ?>">
    <title>Alterar Tratamento</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: lightblue;">
    <a class="navbar-brand ms-2 " href="<?php echo route('medicos/dentes'); ?>"><img class="me-2" width="40" height="40" src="<?php echo route('Images/dente.png'); ?>" alt=""><b>DENTAL TREATMENTS</b></a>
    <button class="navbar-toggler me-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active ms-2 mt-1">
          <a class="nav-link" href="<?php echo route('medicos/dentes'); ?>">Página Inicial</a>
        </li>
      </ul>
    </div>
    <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ms-2 mt-1">
                  <a class="btn btn-outline-secondary me-2" href="<?php echo route('medicos/Inserir') ?>">Inserir Tratamento</a>
              </li>
              <li class="nav-item ms-2 mt-1">
                  <a class="btn btn-outline-secondary me-2" href="<?php echo route('logout') ?>">Logout</a>
              </li>
          </ul>
      </div>
  </nav>

  <main class="main">
        <img class="img-bg" src="<?php echo route('Images/sorriso.png'); ?>" alt="">
        <div class="conteudo">
            <form action="<?php echo route('medicos/Alterar/Process/' . $tratamento->Id); ?>" method="post">
                <table class="table table-borderless d-table-cell">
                    <tr>
                        <td><label for="NIF"><h4>NIF do Utente</h4></label></td>
                        <td><input class="form-control ms-2 mt-2" type="text" name="NIF" id="NIF" style="width: 300px" placeholder="<?php echo $tratamento->Utente->Nome?>"></td>
                    </tr>
                    <tr>
                        <td><label for="FDI"><h4>Número do Dente</h4></label></td>
                        <td><input class="form-control ms-2 mt-2" type="tel" name="FDI" id="FDI" style="width: 300px" placeholder="Inserir Número do dente"></td>
                    </tr>
                    <tr>
                        <td><label for="Problema" class="ms-2 mt-2"><h4>Problema</h4></label></td> 
                        <td>
                            <select class="form-select" name="Problema_id" id="Problema_id">
                                <?php 
                                    foreach($Problemas as $Problema){
                                ?>
                                        <option value="<?php echo $Problema->Id ?>"><?php echo $Problema-> Problema ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="Tratamento" class="ms-2 mt-2"><h4>Tratamento</h4></label></td>
                        <td><textarea class="form-control" name="Tratamento" id="Tratamento" cols="30" rows="2"><?php echo $tratamento->Tratamento; ?></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn btn-outline-primary" type="submit" style="float:right;">Alterar</button></td>
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