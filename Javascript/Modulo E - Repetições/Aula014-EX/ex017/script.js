function tabuada() {
    let num = document.getElementById('txtn') // valor do numero da div 
    let tab = document.getElementById('seltab')  // select do html para invocar
    if (num.value.length == 0) {     // Faço a verficaçao se tem algo vazio
        window.alert('Por Favor, Digite um número!')
    } else {        // se tiver tudo ok , dou continuidade :
        let n = Number(num.value)  // converto o valor da variavel que armazena a div em numerica
        let c = 1            // defino um valor para o meu contador (* x 1, * x 2)
        tab.innerHTML = ''   // para limpar o seletor
        while (c <= 10) {      // defina a logica , meu contador ira somente até o 10
            let item = document.createElement('option')      // crio o elemento option pelo creatElement
            item.text = `${n} x ${c} = ${n * c}`           // defino o texto que será mostrado no selection
            tab.appendChild(item)       // appendchild para o seletor inseri-lo 
            c++      // ao final do lopp o contador recebe 1 para o proximo loop
        }
    }
}