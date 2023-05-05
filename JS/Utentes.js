function validateForm() {
  if (!validateNIF()) {
    alert('NIF inválido');
    return false;
  }
}

let check = 0;

function validateNIF() {
  nif = document.getElementById('NIF').value;
  console.log(nif);
  let sum = 0;

  //Verifica se o nif possui 9 digitos
  if(nif.length != 9){
    return false;
  }

  // Verifica se os primeiros digitos do nif nomeadamente o 1º e o 2º
  if((nif[0] == 1 || nif[0] == 2 || nif[0] == 3 || nif[0] == 5 || nif[0] == 6) || ((nif[0] == 4 && nif[1] == 5) || (nif[0] == 7 && nif[1] == 0) || (nif[0] == 7 && nif[1] == 1) || (nif[0] == 7 && nif[1] == 2) || (nif[0] == 7 && nif[1] == 4) || (nif[0] == 7 && nif[1] == 5) || (nif[0] == 7 && nif[1] == 7) || (nif[0] == 7 && nif[1] == 8) || (nif[0] == 7 && nif[1] == 9) || (nif[0] == 9 && nif[1] == 0) || (nif[0] == 9 && nif[1] == 1) || (nif[0] == 9 && nif[1] == 8) || (nif[0] == 9 && nif[1] == 9))){
    
  //Guarda o ultimo digito do Nif
  const checkDigit = nif[8];

  //Calcula o Digito a ser comparado com o checkDigit
  for (let i = 9, j=0; i >= 2 && j <= 8; i--, j++) {
    sum += i*nif[j];
    console.log(sum);
  }

  sum = sum % 11;

if(sum == 0 || sum == 1){
    sum = 0;
}else if( sum > 1){
  sum = 11 - sum;
}

  //Verifica se o digito que resultou do calculo é igual ao checkDigit
  if(sum == checkDigit){
    return true;
  }else{
    return false;
  }
}

}