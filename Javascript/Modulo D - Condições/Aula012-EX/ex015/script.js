function verificar() {
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtano')
    var res = document.getElementById('res')

    if (fano.value.length == 0 || fano.value > ano) {
        window.alert('[Erro] verifique os dados e tente novamente')
    } else {

        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ''
        var img = document.createElement('img')
        img.setAttribute('id', 'foto')

        if (fsex[0].checked) {
            genero = 'Homem'
            if (idade >= 0 && idade <= 10) {
                //criança
                img.setAttribute('src', 'crianca-mas.jpg')
            } else if (idade < 21) {
                //jovem
                img.setAttribute('src', 'jovem-homem.jpg')
            } else if (idade < 50) {
                //Adulto
                img.setAttribute('src', 'foto-homem-ad.jpg')
            } else {
                //idoso
                img.setAttribute('src', 'idoso-mas.jpg')
            }

        } else if (fsex[1].checked) {
            genero = 'Mulher'
            if (idade >= 0 && idade <= 10) {
                //criança
                img.setAttribute('src', 'crianca-fem.jpg')
            } else if (idade < 21) {
                //jovem
                img.setAttribute('src', 'jovem-mulher.jpg')
            } else if (idade < 50) {
                //Adulto
                img.setAttribute('src', 'foto-mulher-ad.jpg')
            } else {
                //idoso
                img.setAttribute('src', 'idosa-fem.jpg')
            }
        }
        res.style.textAlign = 'center'
        res.innerHTML = `Detectamos ${genero} com ${idade} anos. `
        res.appendChild(img)
    }
}