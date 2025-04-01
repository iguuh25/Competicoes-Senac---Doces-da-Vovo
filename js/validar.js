function validar(event){
    event.preventDefault() //Impede o envio padrão do codigo

    let nome = document.getElementById('iNome')
    let email = document.getElementById('iEmail')
    let mensagem = document.getElementById('iMensagem')

    if(nome.value.trim() === ""){
        alert("Por favor, preencha o campo Nome!")
        nome.focus()
        return false
    }
    if(email.value.trim() === ""){
        alert("Por favor, preencha o campo Email!")
        email.focus()
        return false
    }
    if(mensagem.value.trim() === ""){
        alert("Por favor, preencha o campo Mensagem!")
        mensagem.focus()
        return false
    }

    document.getElementById('formulario').submit()
}