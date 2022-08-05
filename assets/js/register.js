const registerForm = document.getElementById("registerForm")

let errorBox = document.getElementById("error")
let successBox = document.getElementById("success")

registerForm.addEventListener("submit", e => {
    e.preventDefault()

    let data = new FormData(registerForm)

    fetch(`${location.origin}/socapco_website/controlers/registerUser.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        if (data.msg != "") {
            errorBox.classList.remove("hide")
            errorBox.innerHTML = data.msg
        }

        if (!data.login) {
            registerForm.login.classList.add("border-danger")
        }
        else {
            registerForm.login.classList.remove("border-danger")
        }
        if (!data.email) {
            registerForm.email.classList.add("border-danger")
        }
        else {
            registerForm.email.classList.remove("border-danger")
        }
        if (!data.pass) {
            registerForm.pass.classList.add("border-danger")
        }
        else {
            registerForm.pass.classList.remove("border-danger")
        }

        if (data.msg == "") {
            if (data.isOk) {
                errorBox.classList.add("hide")
                successBox.classList.remove("hide")
                successBox.innerHTML = `compte créer avec succé ! </br>
                    <a href='${location.origin}/socapco_website/login'>
                        <button class='btn btn-outline-primary btn-sm'> ici </button>
                    </a>
                    pour vous connecter`;

                registerForm.login.value = ""
                registerForm.email.value = ""
                registerForm.pass.value = ""
            } else {
                errorBox.classList.remove("hide")
                errorBox.innerHTML = "ERREUR <strong>500</strong>"
            }
        } else {
            errorBox.classList.remove("hide")
            errorBox.innerHTML = data.msg
        }
    })
})
