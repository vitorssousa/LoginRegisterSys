let form = document.getElementById('loginform')



form.addEventListener('submit', (e)=>{
    e.preventDefault()
    let formData = new FormData(form)


    fetch('/php/login.php', {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success){
            window.location.href = data.location
        } else {
            let alert = document.getElementById('alert')
            alert.classList.add('show')
            // alert.style.display = 'block'
            // alert.style.transition = '1s'
            alert.innerText = data.alert
        }
    })
    .catch(error => console.log(error))
})