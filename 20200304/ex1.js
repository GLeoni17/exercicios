function escreve_mensagem(nome, email, sexo, data){
    if(nome==""){
        mensagem="O nome precisa ser preenchido.\n";
    }else{
        mensagem="Nome: "+nome+"\n";
    }
    if(email==""){
        mensagem+="O email precisa ser preenchido.\n";
    }else{
        mensagem+="Email: "+email+"\n";
    }
    if(sexo==""){
        mensagem+="O sexo precisa ser preenchido.\n";
    }else{
        mensagem+="Sexo: "+sexo+"\n";
    }
    if(data==""){
        mensagem+="A data de nascimento precisa ser preenchida.\n";
    }else{
        mensagem+="Data de nascimento: "+data+"\n";
    }
    alert(mensagem);
}