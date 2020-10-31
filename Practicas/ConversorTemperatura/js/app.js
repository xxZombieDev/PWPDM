/* Codigo para mostrar contenedor de conversion segun la elección  */
function mostrarContenedor(input) {
  if (input.value == "1") { // De °F a °C
    document.getElementById("convertFtoC").style.display = "block";
    document.getElementById("convertCtoF").style.display = "none";
  } else {
    if (input.value == "2") { // De °C a °F
      document.getElementById("convertFtoC").style.display = "none";
      document.getElementById("convertCtoF").style.display = "block";
    }
  }
}

function convertirFToC() {
  //Tomamos el valor del input
  let gradosF = document.getElementById("farenheint").value;

  // Formula (grados °F − 32) × 5/9 = °C
  let resultadoC = ((gradosF - 32) * 5) / 9;

  //Formateamos la temperatura para que se redonde a 2 cifras
  var celsius = Math.round(resultadoC * 100) / 100;

  //Asignamos al input celsiusResult el resultado de la conversion
  document.getElementById("celsiusResult").value = celsius + " °C";
}

function convertirCToF() {
  //Tomamos el valor del input
  let gradosC = document.getElementById("celsius").value;

  // Formula (grados °C × 9/5) + 32 = °F
  let resultadoF = (gradosC * 9) / 5 + 32;

  //Formateamos la temperatura para que se redonde a 2 cifras
  var farenheint = Math.round(resultadoF * 100) / 100;

  //Asignamos al input celsiusResult el resultado de la conversion
  document.getElementById("fareResult").value = farenheint + " °F";
}
