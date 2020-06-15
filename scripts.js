function validar(){

    var dataInput = document.getElementById("dataNasc"); 
    var dataNascimento = Date.parse(dataInput.value);
    var dataSistema = Date.now();
    var dataDiff = (dataSistema - dataNascimento)/(1000 * 60 * 60 * 24 * 366);
    
    var senhaInputA = document.getElementById("senhaOrigin");
    var senhaOriginal = senhaInputA.value;
    
    var senhaInputB = document.getElementById("senhaConfirm");
    var SenhaConfirmacao = senhaInputB.value;
    
    
    
    if(senhaOriginal === SenhaConfirmacao){
        
        if(dataDiff >= 16){
            return true;
        }else{
            alert("Cadastro permitido apenas para maiores de 16 anos!");
            return false;
    }
    
    }else{
        alert("As senhas não são iguais!");
        return false;
    }
 
}