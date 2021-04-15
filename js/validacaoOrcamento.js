function validarOrcamento()
{

    console.log("aqui");

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
    if(typeof formulario.aparelhos != "undefined"){
        var aparelhos = formulario.aparelhos;
        if(aparelhos.value ==""){
            alert ("Aparelho não selecionado!");
            aparelhos.focus();
        }
    }
    
    if(typeof formulario.problema != "undefined"){
        var problema = formulario.problema;
        if(problema.value==""){
            alert("Problema não selecionado!");
            problema.focus(); 
        } 
    }
    
    if(typeof formulario.observacao != "undefined"){
        var observacao = formulario.observacao;
        if(observacao.value==""){
            alert("Observação não especificado!");
            observacao.focus(); 
        } 
    }
    

}   





 