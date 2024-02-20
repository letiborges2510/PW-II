const sscaoCookies = document.getElementById('sseccao-de-cookies');

function aceiteicookies() {
    // Salva a preferência do usuário em um cookie
    setCookie("CookiesAceitos", "true", 30);
    
    // Remove a classe para esconder o aviso de cookies
    sscaoCookies.classList.remove('mostrar');
}

// Verifica se o usuário já aceitou os cookies anteriormente
if (getCookie("CookiesAceitos") === "true") {
    sscaoCookies.classList.remove('mostrar');
} else {
    sscaoCookies.classList.add('mostrar');
}

// Função para definir um cookie
function setCookie(nome, valor, diasParaExpirar) {
    var dataExpiracao = new Date();
    dataExpiracao.setTime(dataExpiracao.getTime() + (diasParaExpirar * 24 * 60 * 60 * 1000));
    var expires = "expires=" + dataExpiracao.toUTCString();
    document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
}

// Função para recuperar um cookie
function getCookie(nome) {
    var nomeCookie = nome + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nomeCookie) == 0) {
            return cookie.substring(nomeCookie.length, cookie.length);
        }
    }
    return "";
}
