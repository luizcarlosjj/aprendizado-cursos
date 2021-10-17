let valores = [5, 8, 4, 9, 2]
valores.sort()

/* Jeito mais complexo com FOR
for (let pos = 0; pos < valores.length; pos++) {
    console.log(`a posição ${pos} tem o valor ${valores[pos]}`)
}
*/

// Jeito mais simplificado com o FOR IN :

for (let pos in valores) {
    console.log(valores[pos])
}