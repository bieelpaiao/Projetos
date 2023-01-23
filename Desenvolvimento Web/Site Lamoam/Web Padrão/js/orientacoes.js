$( document ).ready(function() {

// Filtro Alunos

  $('.filter-alunos-btn').on('click', function() {

    let alunostype = $(this).attr('id');
    let alunosboxes = $('.project-alunos-box');

    $('.main-btn').removeClass('alunos-active');
    $(this).addClass('alunos-active');

    if(alunostype == 'tes-btn') {
      eachBoxesAlunos('tes', alunosboxes);
    } else if(alunostype == 'dis-btn') {
      eachBoxesAlunos('dis', alunosboxes);
    } else if(alunostype == 'ic-btn') {
      eachBoxesAlunos('ic', alunosboxes);
    } else {
      eachBoxesAlunos('tod', alunosboxes);
    }

  });

  function eachBoxesAlunos(alunostype, alunosboxes) {

    if(alunostype == 'tod') {
      $(alunosboxes).fadeIn();
    } else {
      $(alunosboxes).each(function() {
        if(!$(this).hasClass(alunostype)) {
          $(this).fadeOut('slow');
        } else {
          $(this).fadeIn();
        }
      });
    }
  }
});