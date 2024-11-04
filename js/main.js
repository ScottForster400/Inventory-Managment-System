function burgerMenu() {
    var offScreenMenu = document.querySelector('.offscreen-menu');
    offScreenMenu.classList.toggle('active');
  };

  $('myModal').on('shown.bs.modal', function (){
    $('#myInput').trigger('focus')
  })