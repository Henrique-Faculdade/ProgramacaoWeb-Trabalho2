function validarOrcamento()
{
    var nome = formulario.nome;
    if (nome.value ==""){
        alert ("Nome não informado");
        nome.focus ();
    }
    var email =formulario.email;
    if(email.value ==""){
        alert ("Email não informado!");
        email.focus();
    }

    var telefone = formulario.telefone;
    if(telefone.value ==""){
        alert("Telefone não informado!");
        telefone.focus();
    }
    var aparelhos = formulario.aparelhos;
    if(aparelhos.value ==""){
        alert ("Aparelho não selecionado!");
        aparelhos.focus();
    }
    var problema = formulario.problema;
    if(problema.value==""){
        alert("Problema não selecionado!");
        problema.focus();
    }
    var brunalinda = "linda pakas";

}