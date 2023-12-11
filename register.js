let form = document.getElementById('regForm')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    let formData = new FormData(e.target)
    // mandar as variaveis do form para o php
    fetch("/php/insert.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if(data.indexOf('Esse email já pertence a uma conta') != -1){
            let alert = document.getElementById('alert')
            alert.style.display = 'inline'
            alert.innerHTML = data
        } else {
            // console.log(data)
            form.innerHTML = data
            let button = document.getElementById('logar')

            button.addEventListener('click', (e) => {
                e.preventDefault()
                window.location.href = '/index.php'
            })
            
        }
    })
    
    .catch(error => console.log(error))
})


//altera o conteúdo do form

