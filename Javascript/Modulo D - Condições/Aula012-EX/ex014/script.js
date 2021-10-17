
function carregar() {
    var msg = window.document.getElementById('msg')
    var img = window.document.getElementById('imagem')
    var data = new Date()
    var hora = 19
    msg.innerHTML = `Agora são ${hora} horas.`
    if (hora >= 0 && hora < 12) {
        //BOM DIA
        img.src = 'manha.png'
        window.document.body.style.backgroundColor = '#f4cf49'
    } else if (hora >= 12 && hora <= 18) {
        //BOA TARDE
        img.src = 'tarde.png'
        window.document.body.style.backgroundColor = '#e07121'
    } else {
        img.src = 'noite.png'
        window.document.body.style.backgroundColor = '#2a5491'
    }
}




