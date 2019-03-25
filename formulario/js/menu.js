var btnMenu = document.getElementById('btn-menu');
var nave = document.getElementById('nave');
btnMenu.addEventListener('click', function(){
  nave.classList.toggle('mostrar');
});