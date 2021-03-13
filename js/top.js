function mostrar() {
  document.getElementById("sidebar").style.width="250px";
  document.getElementById("btn-main").style.marginLeft="250px";
  document.getElementById("open").style.display="none";
}

function ocultar() {
  document.getElementById("sidebar").style.width="0";
  document.getElementById("btn-main").style.marginLeft="0";
  document.getElementById("open").style.display="inline";
}
