function enviarformcontato() {

    let nome = document.formcontato.nome.value;
    let email = document.formcontato.email.value;
    let assunto = document.formcontato.assunto.value;
    let mensagemp = document.formcontato.mensagem.value;

    if (nome == "" ||
        nome.length > 50) {
        alert("Preencha campo Nome corretamente");
        formcontato.nome.focus();
        return false;
    }

    if (email == "" ||
        email.length > 50 ||
        email == null ||
        email.indexOf("@") == -1 ||
        email.indexOf(".") == -1) {
        alert("Por favor, informe um E-Mail válido");
        formcontato.email.focus();
        return false;
    }

    if (assunto == "" ||
        assunto == null ||
        phone.length < 12) {
        alert("Peencha o assunto que deseja tratar");
        formcontato.assunto.focus();
        return false;
    }

    if (mensagemp == "" ||
        mensagemp == null ||
        mensagemp.length > 500) {
        alert("Preencha o campo mensagem")
        formcontato.mensagem.focus();
        return false;
    }

}