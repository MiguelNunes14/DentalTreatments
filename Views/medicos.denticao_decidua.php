<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo route('CSS/home.css'); ?>">
    <title>Denticão Permanente Médicos</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: lightblue;">
    <a class="navbar-brand ms-2 " href="<?php echo route('medicos/dentes'); ?>"><img class="me-2" width="40" height="40" src="<?php echo route('Images/dente.png'); ?>" alt=""><b>DENTAL TREATMENTS</b></a>
    <button class="navbar-toggler me-3" type="button" data-toggle="collapse" data class="Dente" denteId=""-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="btn btn-outline-secondary me-2" href="<?php echo route('medicos/Alterar_Eliminar') ?>">Alterar ou Eliminar Tratamento</a>
              </li>
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
            <div class="row">
                <div class="col-6">
                    <div style="display:flex; justify-content: center;">
                        <img src="<?php echo route('Images/Dentição Decídua.png') ?>" usemap="#image-map">

                        <map name="image-map">
                            <area class="Dente" denteId="85" target="" alt="2º Molar Inf. Dto. | 85" title="2º Molar Inf. Dto. | 85" href="" coords="158,348,133,353,121,344,129,325,149,319,168,325" shape="poly">
                            <area class="Dente" denteId="84" target="" alt="1º Molar Inf. Dto. | 84" title="1º Molar Inf. Dto. | 84" href="" coords="174,329,189,331,205,337,202,356,190,362,169,363,161,342" shape="poly">
                            <area class="Dente" denteId="83" target="" alt="Canino Inf. Dto. | 83" title="Canino Inf. Dto. | 83" href="" coords="222,369,233,362,229,343,221,339,208,345,202,361" shape="poly">
                            <area class="Dente" denteId="82" target="" alt="Incisivo Lateral Inf. Dto. | 82" title="Incisivo Lateral Inf. Dto. | 82" href="" coords="264,341,263,365,252,370,237,364,237,343" shape="poly">
                            <area class="Dente" denteId="81" target="" alt="Incisivo Central Inf. Dto. | 81" title="Incisivo Central Inf. Dto. | 81" href="" coords="280,368,291,361,290,344,274,341,265,345,265,368" shape="poly">
                            <area class="Dente" denteId="71" target="" alt="Incisivo Central Inf. Esq. | 71" title="Incisivo Central Inf. Esq. | 71" href="" coords="317,360,317,339,293,344,293,359,305,365" shape="poly">
                            <area class="Dente" denteId="72" target="" alt="Incisivo Lateral Inf. Esq. | 72" title="Incisivo Lateral Inf. Esq. | 72" href="" coords="322,360,333,363,341,357,343,335,332,337,320,339" shape="poly">
                            <area class="Dente" denteId="73" target="" alt="Canino Inf. Esq. | 73" title="Canino Inf. Esq. | 73" href="" coords="346,351,355,353,366,352,366,333,353,324,345,336" shape="poly">
                            <area class="Dente" denteId="74" target="" alt="1º Molar Inf. Esq. | 74" title="1º Molar Inf. Esq. | 74" href="" coords="367,341,388,344,395,337,397,313,376,311,358,320" shape="poly">
                            <area class="Dente" denteId="75" target="" alt="2º Molar Inf. Esq. | 75" title="2º Molar Inf. Esq. | 75" href="" coords="400,325,413,330,419,322,421,305,409,296,393,295,381,305" shape="poly">
                            <area class="Dente" denteId="61" target="" alt="Incisivo Central Sup. Esq. | 61" title="Incisivo Central Sup. Esq. | 61" href="" coords="285,134,277,155,281,173,291,175,317,173,316,152,305,130" shape="poly">
                            <area class="Dente" denteId="62" target="" alt="Incisivo Lateral Sup. Esq. | 62" title="Incisivo Lateral Sup. Esq. | 62" href="" coords="334,125,320,132,318,159,325,173,344,170,352,168,342,133" shape="poly">
                            <area class="Dente" denteId="63" target="" alt="Canino Sup. Esq. | 63" title="Canino Sup. Esq. | 63" href="" coords="377,141,368,129,353,137,349,153,359,176,373,175,378,157" shape="poly">
                            <area class="Dente" denteId="64" target="" alt="1º Molar Sup. Esq. | 64" title="1º Molar Sup. Esq. | 64" href="" coords="370,181,381,184,399,180,403,169,390,140,381,142" shape="poly">
                            <area class="Dente" denteId="65" target="" alt="2º Molar Sup. Esq. | 65" title="2º Molar Sup. Esq. | 65" href="" coords="410,191,421,180,418,153,400,151,405,180,390,183,380,187,391,194" shape="poly">
                            <area class="Dente" denteId="55" target="" alt="2º Molar Sup. Dto. | 55" title="2º Molar Sup. Dto. | 55" href="" coords="146,204,128,205,126,178,110,173,95,189,106,214,134,219" shape="poly">
                            <area class="Dente" denteId="54" target="" alt="1º Molar Sup. Dto. | 54" title="1º Molar Sup. Dto. | 54" href="" coords="170,195,165,201,155,204,142,200,129,201,129,185,132,160,150,161" shape="poly">
                            <area class="Dente" denteId="53" target="" alt="Canino Sup. Dto. | 53" title="Canino Sup. Dto. | 53" href="" coords="172,145,157,156,169,191,180,193,192,185,189,152" shape="poly">
                            <area class="Dente" denteId="52" target="" alt="Incisivo Lateral Dto. | 52" title="Incisivo Lateral Dto. | 52" href="" coords="209,137,193,145,198,183,209,184,233,180,230,155,224,142" shape="poly">
                            <area class="Dente" denteId="51" target="" alt="Incisivo Central Dto. | 51" title="Incisivo Central Dto. | 51" href="" coords="251,134,237,144,233,156,240,180,255,181,274,181,275,164,271,141" shape="poly">
                        </map>
                    </div>
                </div>
                <div class="col-6">
                    <table id="Tratamentos" class="table">
                        <tr><td><h3>Utente</h3></td> <td><h3> Dente</h3></td> <td><h3> Problema</h3></td> <td><h3> Tratamento</h3></td> <td><h3> Médico</h3></td> <td><h3> Data</h3></td></tr>
                    </table>
                </div>
            </div>
            <table class="table">
                <tr><td><label for="Utente_NIF" style><h4>NIF do utente</h4></label></td></tr>
                <tr><td><input type="tel" class="form-control w-25 NIF" name="Utente_NIF" id="Utente_NIF" placeholder="Insira o NIF do Utente" required></td></tr>
            </table>
        </div>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?php echo route('JS/Utentes.js'); ?>"></script>
    <script
			  src="https://code.jquery.com/jquery-3.6.4.min.js"
			  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
			  crossorigin="anonymous"></script>
    <script>
            $('.Dente').click(function(event) {
                let NIF = document.getElementById('Utente_NIF').value;
                if(NIF <= 0){
                    alert('Preencha o NIF');
                    exit();
                }
                $.ajax({
                    url: "<?php echo route('medicos/dentes/get.json'); ?>",
                    method: 'post',
                    data: {id : $(this).attr('denteId'),
                            Utente_NIF: NIF},
                    dataType: 'json',
                    success: function(result) {
                // atualize o conteúdo HTML com as informações do dente
                console.log(result);
                            $('#Tratamentos').html('<ttbody><tr><td><h3>Utente</h3></td> <td><h3> Dente</h3></td> <td><h3> Problema</h3></td> <td><h3> Tratamento</h3></td> <td><h3> Médico</h3></td> <td><h3> Data</h3></td></tr>');
                            for(i = 0; i < result.length; i++){
                                $('#Tratamentos').append('<tr><td>' + result[i].Utente.Nome +'</td> <td>' + result[i].Dente.Dente +'</td> <td>' + result[i].Problema.Problema +'</td> <td>' + result[i].Tratamento +'</td> <td>' + result[i].Medico.Nome +'</td> <td>' + result[i].Data +'</td></tr>');
                            }
                    }
                });
                event.preventDefault();
            });
    </script>
    
</body>
</html>