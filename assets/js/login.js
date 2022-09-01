const loginForm = document.getElementById("loginForm")
const recoveryForm = document.getElementById("recoveryForm")

let errorBox = document.getElementById("error")
let successBox = document.getElementById("success")


loginForm.addEventListener("submit", e => {
    e.preventDefault()
    let data = new FormData(loginForm)

    fetch(`${location.origin}/socapco_website/controlers/loginUser.php`, {
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
            loginForm.login.classList.add("border-danger")
        }
        else {
            loginForm.login.classList.remove("border-danger")
        }
        if (!data.pass) {
            loginForm.pass.classList.add("border-danger")
        }
        else {
            loginForm.pass.classList.remove("border-danger")
        }

        if (data.msg == "") {
            if (data.isOk) {
                location.assign(`${location.origin}/socapco_website/admin`)
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


recoveryForm.addEventListener("submit", e => {
    e.preventDefault()
    let data = new FormData(loginForm)

    fetch(`${location.origin}/socapco_website/controlers/password_forget.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        console.log(data);
    })
})


