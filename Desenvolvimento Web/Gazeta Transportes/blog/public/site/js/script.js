const toastLiveExample = document.getElementById('liveToast')
if (toastLiveExample) {

    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
}


function validardataDeNascimento(data){

    dataAtual= new Date();

    data=new Date(data);

    idade = dataAtual.getFullYear() - data.getFullYear();
    var m = dataAtual.getMonth() - data.getMonth();
    if (m < 0 || (m === 0 && dataAtual.getDate() < data.getDate())) idade--;

    if(idade < 18){
        let el = document.getElementById('nascimento');
        let error = document.getElementById('erroValidaData');

        el.classList.add('is-invalid');
        error.style.display = "block";

        return false;
    }

    let el = document.getElementById('nascimento');
    let error = document.getElementById('erroValidaData');

    el.classList.remove('is-invalid');
    error.style.display = "none";
}

function mascaraCPF(i){

    var v = i.value;

    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";
}

function mascaraNascimento(i){

    var v = i.value;

    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }

    i.setAttribute("maxlength", "10");
    if (v.length == 2 || v.length == 5) i.value += "/";
}

function mascaraTelefone(i){

    var v = i.value;

    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }

    i.setAttribute("maxlength", "15");
    if (v.length == 1) i.value = "(" + i.value;
    if (v.length == 3) i.value += ") ";
    if (v.length == 10) i.value += "-";
}

function mascaraCEP(i){

    var v = i.value;

    if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
       i.value = v.substring(0, v.length-1);
       return;
    }

    i.setAttribute("maxlength", "9");
    if (v.length == 5) i.value += "-";
}

function buscaCep() {
    let cep = document.getElementById('cep').value;

    if(cep != "") {
        let url = "https://viacep.com.br/ws/"+ cep +"/json/";

        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();


        //tratar a resposta da requisição
        req.onload = function() {
            let endereco = JSON.parse(req.response);
            if(req.status === 200) {
                let endereco = JSON.parse(req.response);
                document.getElementById('cidade').value = endereco.localidade;
                document.getElementById('endereco').value = endereco.logradouro;
                document.getElementById('bairro').value = endereco.bairro;
                document.getElementById('estado').value = endereco.uf;
            } else if(req.status === 404) {
                alert("CEP inválido");
            } else {
                alert("Erro ao fazer a requisição");
            }
        }
    }
}

window.onload = function() {
    let cep = document.getElementById('cep');
    cep.addEventListener("blur", buscaCep);
}

function alterarDados() {
    let btn = document.getElementById('btnAltera');
    btn.classList.add('ativado');

    let submitBtn = document.getElementById('submitBtnAltera');

    if(btn.classList.contains('desativado')) {
        // document.getElementById('nome').disabled = false;
        // document.getElementById('cpf').disabled = false;
        // document.getElementById('nascimento').disabled = false;
        document.getElementById('telefone').disabled = false;
        document.getElementById('email').disabled = false;
        document.getElementById('email_confirmation').disabled = false;
        document.getElementById('cep').disabled = false;
        document.getElementById('endereco').disabled = false;
        document.getElementById('numero').disabled = false;
        document.getElementById('bairro').disabled = false;
        document.getElementById('estado').disabled = false;
        document.getElementById('cidade').disabled = false;
        document.getElementById('complemento').disabled = false;
        document.getElementById('referencia').disabled = false;
        // document.getElementById('senha').disabled = false;
        // document.getElementById('senha_confirmation').disabled = false;
        btn.classList.add('ativado');
        btn.classList.remove('desativado');
        submitBtn.classList.remove('d-none');
    } else if(btn.classList.contains('ativado')) {
        // document.getElementById('nome').disabled = true;
        // document.getElementById('cpf').disabled = true;
        // document.getElementById('nascimento').disabled = true;
        document.getElementById('telefone').disabled = true;
        document.getElementById('email').disabled = true;
        document.getElementById('email_confirmation').disabled = true;
        document.getElementById('cep').disabled = true;
        document.getElementById('endereco').disabled = true;
        document.getElementById('numero').disabled = true;
        document.getElementById('bairro').disabled = true;
        document.getElementById('estado').disabled = true;
        document.getElementById('cidade').disabled = true;
        document.getElementById('complemento').disabled = true;
        document.getElementById('referencia').disabled = true;
        // document.getElementById('senha').disabled = true;
        // document.getElementById('senha_confirmation').disabled = true;
        btn.classList.add('desativado');
        btn.classList.remove('ativado');
        submitBtn.classList.add('d-none');
    }
}

// scroll para as seções

let navBtn = $('.nav-item');

let bannerSection = $('#mainSlider');
let aboutSection = $('#about-area');
let servicesSection = $('#excursions-area');
let teamSection = $('#contact-title');
let prodSection = $('#loading-area')
let contactSection = $('#location-area');

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
  }, 1000);
});





