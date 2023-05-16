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
<<<<<<< HEAD
  txt.innerHTML = contador;
  //   if (num > 0) {
=======
  // txt.innerHTML = contador;

  txt.value(contador); //   if (num > 0) {
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
  //     txt.style.backgroundColor = "red";
  //   }
}
