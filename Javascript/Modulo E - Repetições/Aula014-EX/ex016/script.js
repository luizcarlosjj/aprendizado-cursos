function contar() {
    let ini = document.getElementById('txti') // recolho as o id das div e trasnformo em variaveis
    let fim = document.getElementById('txtf')
    let passo = document.getElementById('txtp')
    let res = document.getElementById('res')

    // If para verificar se a algum erro do usuario :
    if (ini.value.length == 0 || fim.value.length == 0) {
        window.alert('[ERRO] Verifique os dados e tente novamente')
        res.innerHTML = 'Impossível contar!'
    } else { //else para seguinb r em frente :
        res.innerHTML = 'Contando: <br>'
        let i = Number(ini.value)  // transformo as variaveis das divs em numericas 
        let f = Number(fim.value)
        let p = Number(passo.value)

        if (p <= 0) {
            window.alert('Passo inválido! CONSIDERANDO PASSO 1')
            p = 1   // se o valor do passo for 0 ele muda altomaticamente para 1
        }

        if (i < f) { // se meu valor icinal for menor que o final :
            //Contagem Crescente
            for (let c = i; c <= f; c += p) {   // crio uma variavel com o valor inicial ; 
                res.innerHTML += `${c} \u{1F449}`   // \u{} sempre que usar um emoji
            }

        } else {
            //Conategm Regressiva
            for (let c = i; c >= f; c -= p) {
                res.innerHTML += `${c} \u{1F449}`
            }
        }
        res.innerHTML += `\u{1F3C1}` // para adicionar o emoji fixo fora do loop
    }

}
