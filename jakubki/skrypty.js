console.log('hello world')
console.log('rafeh qazi')

let name = 'Peter Pan'
console.log(name)

let sentence = 'how are you today, nice to see you, I hope you have a great day!'

 fruit = prompt('what is your favourite fruit')
 console.log(fruit)
 food = Number(prompt('how much was the food?'))
 tipPercentage = Number(prompt('tip %?')) / 100
 tipAmount = food * tipPercentage
 total = food + tipAmount
 console.log('tipAmount', tipAmount)
 console.log('total', total)


function sayMyName(){
    console.log('andrzej')
}
function sayMyName2(name){
    console.log(name)
}


function greeting(name) {
    //greet = 'hi' + name ', Nice to meet you!'
    greet = `hi ${name}, Nice to meet you!`
    console.log(greet)
}


greeting('andrzej')




let weather = prompt('How is the weather')

if (weather == 'rainy') {
    console.log('Grab your umbrella ')
} else {
    console.log('Wear your sunglasses ')
}
