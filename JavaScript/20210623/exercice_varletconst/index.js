let fruit = 'apple'

{
  let fruit = 'orange'
  console.log(fruit) // orange
}

console.log(fruit) // orange


let fruit = 'apple'

{
  let fruit = 'orange'
  console.log(fruit) // orange
}

console.log(fruit) // apple


let fruit = 'apple'
let fruit = 'orange'
console.log(fruit) //erreur


const fruit = 'apple'

{
  const fruit = 'orange'
  console.log(fruit) // orange
}

console.log(fruit) // apple



const fruit = 'apple'
  fruit = 'orange'
  console.log(fruit) //erreur