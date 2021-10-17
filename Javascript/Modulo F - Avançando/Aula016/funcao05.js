// RECURSIVIDADE
// Calcular o fatorial de um numero Recursivamente

function fatorial(n) {
    if (n == 1) {
        return 1
    } else {
        return n * fatorial(n - 1)
    }
}

console.log(fatorial(5))
// n! = 5 x 4!