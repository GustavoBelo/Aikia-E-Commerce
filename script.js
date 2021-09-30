//   Inject SVG Sprite - 
//   see more here 
//   https://css-tricks.com/ajaxing-svg-sprite/
function injectSvgSprite(path) {

    var ajax = new XMLHttpRequest();
    ajax.open("GET", path, true);
    ajax.send();
    ajax.onload = function (e) {
        var div = document.createElement("div");
        div.className = 'd-none';
        div.innerHTML = ajax.responseText;
        document.body.insertBefore(div, document.body.childNodes[0]);
    }
}
// this is set to Bootstrapious website as you cannot 
// inject local SVG sprite (using only 'icons/orion-svg-sprite.3f375885.svg' path)
// while using file:// protocol
// // pls don't forget to change to your domain :)
injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/orion-svg-sprite.svg');
injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/img/shape/blob-sprite.svg');

//Tema
var options = {
    navbarExpandPx: 992
}

$(document).ready(function () {
    $("#searchItems").keyup(function () {
        var value = $(this).val().toLowerCase();
        $("#items li").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

function registerValidate() {
    if (registerName.value.length <= 3) {
        alert("Informe um nome válido.");
        return false;
    }
    // a@a.com
    if (registerEmail.value.length < 6 ||
        registerEmail.value.indexOf("@") <= 0 ||
        registerEmail.value.lastIndexOf(".") <= registerEmail.value.indexOf("@")) {
        alert("informe um email válido.");
        return false;
    }
    if (registerPassword.value.length < 8) {
        alert("A senha deve ter no mínimo 8 caracteres.");
        return false
    }
    if (registerTel.value.length != 14 ||
        registerTel.value.indexOf("-") <= 0 ||
        registerTel.value.indexOf(")") <= 0) {

        alert("Informe um telefone no formato correto.");
        return false;
    }


    alert("Usuário cadastrado com sucesso")
    clear(registerName, registerEmail, registerTel, registerPassword)
}

function loginValidate() {
    if (email.value.length < 6 ||
        email.value.indexOf("@") <= 0 ||
        email.value.lastIndexOf(".") <= email.value.indexOf("@")) {
        alert("Este email não está cadastrado no sistema.");
        return false;
    }
    if (loginPassword.value.length < 8) {
        alert("Senha incorreta.")
        return false
    }

    alert("Você entrou.")
    clear(email, loginPassword)
}

function clear(n1, n2, n3, n4) {
    n1.focus()
    n2.focus()

    n1.value = ""
    n2.value = ""

    if (n3 && n4) {
        n1.focus()
        n2.focus()

        n3.value = ""
        n4.value = ""
    }
}