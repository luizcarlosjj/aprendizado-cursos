let amigo = {
    nome: 'jose',
    sexo: 'M',
    Peso: 85.4,
    engordar(p) {
        console.log('Engordou')
        this.Peso += p
    }
}
amigo.engordar(2)

console.log(`${amigo.nome} pesa ${amigo.Peso}Kg`)