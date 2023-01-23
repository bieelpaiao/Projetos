$( document ).ready(function() {

/* Loading -----------------------------------------------------------------------------------------------*/
  // Progress bar
  let containerA = document.getElementById("circleA");

  let circleA = new ProgressBar.Circle(containerA, {
    color: 'rgb(41 185 251)', 
    strokeWidth: 8,
    duration: 1100,
    from: { color: 'rgb(251 69 45)'},
    to: { color: 'rgb(41 185 251)'},

    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);

      var value = Math.round(circle.value() * todtes);
      circle.setText(value);
    }
  });

  let containerB = document.getElementById("circleB");

  let circleB = new ProgressBar.Circle(containerB, {

    color: 'rgb(251 69 45)',
    strokeWidth: 8,
    duration: 1200,
    from: { color: 'rgb(251 69 45)'},
    to: { color: 'rgb(251 69 45)'},

    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);

      var value = Math.round(circle.value() * toddis);
      circle.setText(value);
    }
  });

  let containerC = document.getElementById("circleC");

  let circleC = new ProgressBar.Circle(containerC, {

    color: 'rgb(1 55 125)',
    strokeWidth: 8,
    duration: 1300,
    from: { color: 'rgb(251 69 45)'},
    to: { color: 'rgb(1 55 125)'},

    step: function(state, circle) {
      circle.path.setAttribute('stroke', state.color);

      var value = Math.round(circle.value() * todic);
      circle.setText(value);
    }
  });

  // iniciando loaders quando a usuário chegar no elemento
  let dataAreaOffset = $('#data-area').offset();

  let stop = 0;

   $(window).scroll(function (e) {

    let scroll = $(window).scrollTop();

    if(scroll > (dataAreaOffset.top - 500) && stop == 0) {
      circleA.animate(1.0)
      circleB.animate(1.0);
      circleC.animate(1.0);

      stop = 1;
    }

  });

  // Filtro Loading

  $('.filter-loading-btn').on('click', function() {
    
    let loadingtype = $(this).attr('id');


    $('.main-loading-btn').removeClass('loading-active');
    $(this).addClass('loading-active');

    if(loadingtype == 'alunos-btn') {

      fechar("ver-egressos-btn");
      abrir("ver-alunos-btn");

      circleA.set(0);
      circleA.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * alutes);
          circle.setText(value);
      }
      });
      circleB.set(0);
      circleB.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * aludis);
          circle.setText(value);
      }
      });
      circleC.set(0);
      circleC.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * aluic);
          circle.setText(value);
      }
      });
    } else if(loadingtype == 'egressos-btn') {

      fechar("ver-alunos-btn");
      abrir("ver-egressos-btn");

      circleA.set(0);
      circleA.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * egrtes);
          circle.setText(value);
      }
      });
      circleB.set(0);
      circleB.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * egrdis);
          circle.setText(value);
      }
      });
      circleC.set(0);
      circleC.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * egric);
          circle.setText(value);
      }
      });
    } else if(loadingtype == 'todos-btn') {

      fechar("ver-alunos-btn");
      fechar("ver-egressos-btn");

      circleA.set(0);
      circleA.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * todtes);
          circle.setText(value);
      }
      });
      circleB.set(0);
      circleB.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * toddis);
          circle.setText(value);
      }
      });
      circleC.set(0);
      circleC.animate(1.0, {
        step: function(state, circle) {
          circle.path.setAttribute('stroke', state.color);
    
          var value = Math.round(circle.value() * todic);
          circle.setText(value);
      }
      });
    }
  });

  function fechar(param) { 
    document.getElementById(param).style.display = 'none'; 
  }

  function abrir(param) { 
    document.getElementById(param).style.display = 'inline'; 
  }

  // Parallax
   setTimeout(function() {
     $('#data-area').parallax({imageSrc: 'img/cidadeparallax8.png'});
   }, 450);

/* Scroll -----------------------------------------------------------------------------------------------*/
  // scroll para as seções

  let navBtn = $('.nav-item');

  let bannerSection = $('#mainSlider');
  let aboutSection = $('#about-area');
  let servicesSection = $('#services-area');
  let teamSection = $('#team-area');
  let prodSection = $('#loading-area')
  let contactSection = $('#contact-area');

  let scrollTo = '';

  $(navBtn).click(function() {

    let btnId = $(this).attr('id');

    if(btnId == 'about-menu') {
      scrollTo = aboutSection;
    } else if(btnId == 'services-menu') {
      scrollTo = servicesSection;
    } else if(btnId == 'team-menu') {
      scrollTo = teamSection;
    } else if(btnId == 'prod-menu') {
      scrollTo = prodSection;
    } else if(btnId == 'contact-menu') {
      scrollTo = contactSection;
    } else {
      scrollTo = bannerSection;
    }

    $([document.documentElement, document.body]).animate({
        scrollTop: $(scrollTo).offset().top - 70
    }, 1500);
  });

  //scroll quando vem de *alunos* ou *egressos*
  const urlParams = new URLSearchParams(window.location.search);

  const nomeParam = urlParams.get("param");
  
  if(nomeParam == 'about') {
    scrollTo = aboutSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top - 70
  }, 1500);
  } else if(nomeParam  == 'services') {
    scrollTo = servicesSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top - 70
  }, 1500);
  } else if(nomeParam  == 'team') {
    scrollTo = teamSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top -70
  }, 1500);
  } else if(nomeParam  == 'prod') {
    scrollTo = prodSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top -100
  }, 1500);
  } else if(nomeParam  == 'contact') {
    scrollTo = contactSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top -100
  }, 1500);
  } else {
    scrollTo = bannerSection;
    $([document.documentElement, document.body]).animate({
      scrollTop: $(scrollTo).offset().top - 70
  }, 1500);
  }

});



