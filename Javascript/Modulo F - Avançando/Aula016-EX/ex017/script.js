let num = document.getElementById('txtnum') // numero 
let sel = document.getElementById('selnum') // lista
let res = document.getElementById('res') // div resposta
let valores = []

function isNumero(n) {
    if (Number(n) >= 1 && Number(n) <= 100) {
        return true
    } else {
        return false
    }
}

function inLista(n, l) {
    if (l.indexOf(Number(n)) != -1) {
        return true
    } else {
        return false
    }
}

function adicionar() {

    if (isNumero(num.value) && !inLista(num.value, valores)) {
        valores.push(Number(num.value))   // adiciono o meu valor digitado no fim do array
        let item = document.createElement('option')  // crio o item do select
        item.text = `Valor ${num.value} adicionado`  // num.value para monstrar o numero digitado por ultimo
        sel.appendChild(item)
        res.innerHTML = ''
    } else {
        window.alert('Erro, Algun valor inválido')
    }
    num.value = '' // para limpar o input
    num.focus()    // para voltar o cursor do mouse no inicio e piscar
}

function finalizar() {
    if (valores.length == 0) {
        alert('Dados inválidos')
    } else {
        let total = valores.length

        // for para soma :
        let soma = 0
        let media = 0

        // for para varredura para ver qual e o maior e menor começando do primeiro elemento
        let maior = valores[0]
        let menor = valores[0]
        for (let pos in valores) {
            soma += valores[pos]
            if (valores[pos] > maior) {
                maior = valores[pos]
            }
            if (valores[pos] < menor) {
                menor = valores[pos]
            }
        }

        media = soma / total
        res.innerHTML = ''
        res.innerHTML += `<p> Ao todo, temos ${valores.length} números cadastrados <p>`
        res.innerHTML += `<p> O maior valor informado foi ${maior} <p>`
        res.innerHTML += `<p> O menor valor informado foi ${menor} <p>`
        res.innerHTML += `<p> Somando todos os valores, temos ${soma} <p>`
        res.innerHTML += `<p> A media dos valores digitados é  ${media} <p>`
    }


}
