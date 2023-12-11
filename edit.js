let form = document.getElementById('updateForm')



form.addEventListener('submit', (e)=>{
    e.preventDefault()
    let formdata = new FormData(form)

    fetch('/php/update.php', {
        method: 'POST',
        body: formdata
    })
    .then(response => response.text())
    .then(data => {
        form.innerHTML = data

        let okButton = document.getElementById('okButton')

        okButton.addEventListener('click', (e) => {
            e.preventDefault()

            window.location.href = '/edit.php'
        })
    })
})