function enviardados() {

    let nome = document.dados.name.value;
    let email = document.dados.email.value;
    let phone = document.dados.phone.value;
    let produtos = document.dados.produtos.value;
    let mensagem = document.dados.mensagem.value;

    if (nome == "" ||
        nome.length > 50) {
        alert("Preencha campo Nome");
        dados.name.focus();
        return false;
    }

    if (email == "" ||
        email.length > 50 ||
        email == null ||
        email.indexOf("@") == -1 ||
        email.indexOf(".") == -1) {
        alert("Preencha o campo com e-mail válido!");
        dados.email.focus();
        return false;
    }

    if (phone == "" ||
        phone == null ||
        phone.length < 12) {
        alert("Peencha corretamento o campo telefone");
        dados.phone.focus();
        return false;
    }

    if (produtos == "") {
        alert("Escolha um produto")
        dados.produtos.focus();
        return false;
    }

    if (mensagem == "" ||
        mensagem == null ||
        mensagem.length > 500) {
        alert("Preencha o campo mensagem")
        dados.mensagem.focus();
        return false;
    }
}