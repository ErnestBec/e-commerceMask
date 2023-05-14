// Condicionales
var contador = 1;
function sumar() {
  actualizar(contador++);
}
function restar() {
  actualizar(contador--);
}

function actualizar(num) {
  var txt = document.getElementById("contadorArticle");
  // txt.innerHTML = contador;

  txt.value(contador); //   if (num > 0) {
  //     txt.style.backgroundColor = "red";
  //   }
}
