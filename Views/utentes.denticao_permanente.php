<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo route('CSS/home.css'); ?>">
    <title>Denticão Permanente</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: lightblue;">
    <a class="navbar-brand ms-2 " href="<?php echo route('utentes/dentes'); ?>"><img class="me-2" width="40" height="40" src="<?php echo route('Images/dente.png'); ?>" alt=""><b>DENTAL TREATMENTS</b></a>
    <button class="navbar-toggler me-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active ms-2 mt-1">
          <a class="nav-link" href="<?php echo route('utentes/dentes'); ?>">Página Inicial</a>
        </li>
      </ul>
    </div>
    <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
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
                    <img src="<?php echo route('Images/Dentição Permanente.png'); ?>" usemap="#image-map">

                        <map name="image-map">
                            <area target="" class="Dente" alt="3º Molar Sup. Dto. | 18" title="3º Molar Sup. Dto. | 18" href="" denteId="18" coords="97,244,84,237,80,245,78,261,85,266,97,273,113,269,116,250" shape="poly">
                            <area target="" class="Dente" alt="2º Molar Sup. Dto. | 17" title="2º Molar Sup. Dto. | 17" href="" denteId="17" coords="110,246,94,241,84,233,88,206,100,213,113,217,123,228" shape="poly">
                            <area target="" class="Dente" alt="1º Molar Sup. Dto. | 16" title="1º Molar Sup. Dto. | 16" href="" denteId="16" coords="106,209,117,213,130,197,133,181,126,176,113,176,105,167,94,172,92,202" shape="poly">
                            <area target="" class="Dente" alt="2º Pré-Molar Sup. Dto. | 15" title="2º Pré-Molar Sup. Dto. | 15" href="" denteId="15" coords="112,138,102,147,102,165,111,171,125,176,134,171,136,157,120,150" shape="poly">
                            <area target="" class="Dente" alt="1º Pré-Molar Sup. Dto. | 14" title="1º Pré-Molar Sup. Dto. | 14" href="" denteId="14" coords="137,149,122,149,115,140,116,120,125,114,131,125,139,123,146,130,144,141" shape="poly">
                            <area target="" class="Dente" alt="Canino Sup. Dto. | 13" title="Canino Sup. Dto. | 13" href="" denteId="13" coords="132,120,143,118,154,112,161,106,153,99,150,92,143,87,131,100" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Lateral Sup. Dto. | 12" title="Incisivo Lateral Sup. Dto. | 12" href="" denteId="12" coords="170,97,179,91,172,73,152,81,153,96" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Central Sup. Dto. | 11" title="Incisivo Central Sup. Dto. | 11" href="" denteId="11" coords="214,78,211,66,199,59,185,63,178,76,177,83,186,86,203,86" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Central Sup. Esq | 21" title="Incisivo Central Sup. Esq | 21" href="" denteId="21" coords="220,79,220,66,234,60,249,66,255,80,234,89" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Lateral Sup. Esq. | 22" title="Incisivo Lateral Sup. Esq. | 22" href="" denteId="22" coords="269,75,257,74,250,88,254,97,263,97,278,99,278,83" shape="poly">
                            <area target="" class="Dente" alt="Canino Sup. Esq. | 23" title="Canino Sup. Esq. | 23" denteId="23" href="" coords="281,95,282,87,293,89,301,109,297,121,286,115,267,108" shape="poly">
                            <area target="" class="Dente" alt="1º Pré-Molar Sup. Esq. | 24" title="1º Pré-Molar Sup. Esq. | 24" href="" denteId="24" coords="298,121,304,114,314,119,319,141,304,149,287,149,284,133" shape="poly">
                            <area target="" class="Dente" alt="2º Pré-Molar Sup. Esq. | 25" title="2º Pré-Molar Sup. Esq. | 25" href="" denteId="25" coords="310,147,321,141,327,146,326,170,312,174,302,175,292,167,294,153" shape="poly">
                            <area target="" class="Dente" alt="1º Molar Sup. Esq. | 26" title="1º Molar Sup. Esq. | 26" href="" denteId="26" coords="327,165,335,177,339,188,340,201,328,209,312,216,302,208,294,192,296,180" shape="poly">
                            <area target="" class="Dente" alt="2º Molar Sup. Esq | 27" title="2º Molar Sup. Esq | 27" href="" denteId="27" coords="339,203,346,215,347,226,343,237,333,243,318,250,315,241,308,228,307,218,324,214" shape="poly">
                            <area target="" class="Dente" alt="3º Molar Sup. Esq | 28" title="3º Molar Sup. Esq | 28" href="" denteId="28" coords="330,246,342,240,350,240,350,257,348,271,332,275,321,273,316,262,319,253" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Central Inf. Dto. | 31" title="Incisivo Central Inf. Dto. | 31" href="" denteId="31" coords="199,516,208,516,214,501,207,494,199,496,191,496,191,508" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Lateral Inf. Dto. | 32" title="Incisivo Lateral Inf. Dto. | 32" href="" denteId="32" coords="172,511,180,510,186,507,187,496,180,488,166,486,166,500" shape="poly">
                            <area target="" class="Dente" alt="Canino Inf. Dto. | 33" title="Canino Inf. Dto. | 33" href="" denteId="33" coords="146,501,158,501,162,496,160,487,167,483,158,476,142,471,141,488" shape="poly">
                            <area target="" class="Dente" alt="1º Pré-Molar Inf. Dto. | 34" title="1º Pré-Molar Inf. Dto. | 34" href="" denteId="34" coords="135,478,137,469,146,466,153,464,151,448,137,442,126,449,122,464,123,476" shape="poly">
                            <area target="" class="Dente" alt="2º Pré-Molar Inf. Esq | 35" title="2º Pré-Molar Inf. Esq | 35" href="" denteId="35" coords="117,457,122,446,134,441,141,439,139,424,127,418,115,421,109,429,107,449" shape="poly">
                            <area target="" class="Dente" alt="1º Molar Inf. Dto | 36" title="1º Molar Inf. Dto | 36" href="" denteId="36" coords="106,425,111,418,122,416,134,414,137,405,128,381,117,381,102,384,97,391,97,418" shape="poly">
                            <area target="" class="Dente" alt="2º Molar Inf. Dto. | 37" title="2º Molar Inf. Dto. | 37" href="" denteId="37" coords="93,389,101,380,113,380,123,377,129,378,118,347,103,351,91,355,86,377" shape="poly">
                            <area target="" class="Dente" alt="3º Molar Inf. Dto. | 38" title="3º Molar Inf. Dto. | 38" href="" denteId="38" coords="86,353,97,349,110,347,118,344,115,323,104,317,92,321,86,330" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Central Inf. Esq. | 41" title="Incisivo Central Inf. Esq. | 41" href="" denteId="41" coords="217,512,215,498,225,492,238,496,238,513,227,519" shape="poly">
                            <area target="" class="Dente" alt="Incisivo Lateral Inf. Esq. | 42" title="Incisivo Lateral Inf. Esq. | 42" href="" denteId="42" coords="242,491,246,507,253,510,261,507,265,491,252,491" shape="poly">
                            <area target="" class="Dente" alt="Canino Inf. Esq. | 43" title="Canino Inf. Esq. | 43" href="" denteId="43" coords="258,484,266,484,265,499,275,503,287,494,290,487,288,472,268,475" shape="poly">
                            <area target="" class="Dente" alt="1º Pré-Molar Inf. Esq. | 44" title="1º Pré-Molar Inf. Esq. | 44" href="" denteId="44" coords="291,480,290,470,283,468,276,465,276,453,284,442,297,446,308,453,310,472,302,480" shape="poly">
                            <area target="" class="Dente" alt="2º Pré-Molar Inf. Esq. | 45" title="2º Pré-Molar Inf. Esq. | 45" href="" denteId="45" coords="309,456,303,446,288,441,287,431,293,421,306,419,317,425,325,442,321,454" shape="poly">
                            <area target="" class="Dente" alt="1º Molar Inf. Esq. | 46" title="1º Molar Inf. Esq. | 46" href="" denteId="46" coords="321,429,315,415,300,417,287,417,294,394,305,380,318,384,334,389,334,419" shape="poly">
                            <area target="" class="Dente" alt="2º Molar Inf. Esq. | 47" title="2º Molar Inf. Esq. | 47" href="" denteId="47" coords="337,389,327,381,310,381,302,378,302,366,307,351,321,349,334,353,343,369" shape="poly">
                            <area target="" class="Dente" alt="3º Molar Inf. Esq. | 48" title="3º Molar Inf. Esq. | 48" href="" denteId="48" coords="342,353,330,349,313,345,310,336,314,323,326,318,343,318,348,332,346,347" shape="poly">
                        </map>
                    </div>
                </div>
                <div class="col-6">
                    <table id="Tratamentos" class="table">
                        <tr><td><h3>Utente</h3></td> <td><h3> Dente</h3></td> <td><h3> Problema</h3></td> <td><h3> Tratamento</h3></td> <td><h3> Médico</h3></td> <td><h3> Data</h3></td></tr>
                    </table>
                </div>
            </div>
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
                // alert('Olá');
                $.ajax({
                    url: "<?php echo route('utentes/dentes/get.json'); ?>",
                    method: 'post',
                    data: {id : $(this).attr('denteId')},
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