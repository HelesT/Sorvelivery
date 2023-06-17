const btnContinuar = document.getElementById('btn-continuar');
  btnContinuar.addEventListener('click', function() {
    const divPrincipal = document.getElementById('divPrincipal');
    divPrincipal.style.display = 'flex';

    const overlay = document.querySelector('.overlay');
    overlay.style.backgroundColor = 'black';
    overlay.style.opacity = '0.5';

    // Outras alterações de estilo que você desejar para o restante do HTML
  });