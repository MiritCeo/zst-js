

 const introducer = (name,shirt) => {
    const person = {
        name:name,
        shirt:shirt
    }

    const intro = `Cześć jestem ${person.name} mam koszulke w kolorze ${person.shirt}`

    return intro    
 }

 console.log(introducer('Mateusz','Szarym'))