// Aula de Switch case com dias da semana

var agora = new Date()
var diaSem = agora.getDay()

/*
    0 = Domingo
    1 = segunda 
    2 = terça
    3 = quarta
    4 = quinta
    5 = sexta
    6 = sabado
*/


console.log('hoje é :')
switch (diaSem) {
    case 0:
        console.log('Domingo')
        break
    case 1:
        console.log('segunda')
        break
    case 2:
        console.log('terça')
        break
    case 3:
        console.log('quarta')
        break
    case 4:
        console.log('quinta')
        break
    case 5:
        console.log('sexta')
        break
    case 6:
        console.log('Sabado')
        break
    default:
        console.log('Erro')
        break
}
