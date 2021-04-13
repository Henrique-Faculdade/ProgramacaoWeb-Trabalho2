function validarFaleConosco()
{

    if(typeof formulario.nome != "undefined"){
        var nome = formulario.nome;
        if (nome.value ==""){
            alert ("Nome não informado!");
            nome.focus ();
        }
    }
    if(typeof formulario.email != "undefined"){
        var email =formulario.email;
        if(email.value ==""){
            alert ("Email não informado!");
            email.focus();
        }
    }
    if(typeof formulario.telefone != "undefined"){
        var telefone = formulario.telefone;
        if(telefone.value ==""){
            alert("Telefone não informado!");
            telefone.focus();
        }
    }
   
    if(typeof formulario.observacao != "undefined"){
        var observacao = formulario.observacao;
        if(observacao.value==""){
            alert("Observação não inserida!");
            observacao.focus(); 
        } 
    }

    if(nome.value != "" && email.value != "" && telefone.value != "" && observacao.value != ""){
        alert(nome.value + "\nRegistrado com sucesso tenks");
    }
    

}   





 