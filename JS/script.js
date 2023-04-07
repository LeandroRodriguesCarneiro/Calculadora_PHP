const operacao = document.querySelectorAll('#operacao');
const fieldA = document.querySelector('.valorA');
const fieldB = document.querySelector('.valorB');
const fieldC = document.querySelector('.valorC');
const labelA = document.querySelector('div.valorA > label')
const labelB = document.querySelector('div.valorB > label')
const labelC = document.querySelector('div.valorC > label')

labelA.textContent = 'Numero'
labelB.textContent = 'Numero'

operacao.forEach(operador => {
    operador.addEventListener('change', () => {
        if (operador.value == 'raiz') {
            fieldB.classList.add('hide')
            fieldC.classList.add('hide')
            labelA.textContent = 'Raiz de:'
        }else if(operador.value == 'pitagoras' || operador.value == 'bhaskara'){
            fieldC.classList.remove('hide')
            if (operador.value == 'pitagoras'){
                labelA.textContent = 'Hipotenusa: '
                labelB.textContent = 'Cateto: '
                labelC.textContent = 'Cateto: '
            }else if(operador.value == 'bhaskara'){
                labelA.textContent = 'Valor de A: '
                labelB.textContent = 'Valor de B: '
                labelC.textContent = 'Valor de C: '
            }
            
        }else{
            fieldB.classList.remove('hide')
            fieldC.classList.add('hide')
            if(operador.value == 'potencia'){
                labelA.textContent = 'Base: '
                labelB.textContent = 'Expoente: '
            }else{
                labelA.textContent = 'Numero'
                labelB.textContent = 'Numero'
            }
        }
    })
})