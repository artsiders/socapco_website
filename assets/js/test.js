const registerForm = document.getElementById("registerForm")

let loginErr = document.getElementById("login_err")
let emailErr = document.getElementById("email_err")
let passErr = document.getElementById("pass_err")
let pass_err_conf = document.getElementById("pass_err_conf")

emailErr.textContent = "l'adress email est obligatoire !"

registerForm.addEventListener("submit", e => {
    e.preventDefault()

    // LOGIN 
    if(registerForm.login.value == "") {
        loginErr.textContent = "le login est obligatoire !"
    } else {
        loginErr.textContent = ""
    }
    
    // EMAIL 
    
    if(registerForm.email.value == "") {
        emailErr.textContent = "l'adress email est obligatoire !"
        console.log("test");
    } else {
        emailErr.textContent = ""
    }
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(registerForm.email.value)) {
        emailErr.textContent = "l'adresse email n'est pas correct \"@exemple.com\""
    } else {
        emailErr.textContent = ""
    }

    // PASSWORD 
    if(registerForm.pass.value == "") {
        passErr.textContent = "mot de passe obligatoire"
    } else {
        passErr.textContent = ""
    }
    if (/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(registerForm.pass.value)) {
        passErr.textContent = "le mot de passe n'est pas correct \"@exemple.com\""
    } else {
        passErr.textContent = ""
    }

    let data = new FormData(registerForm)

    // fetch(`${location.origin}/socapco_website/controlers/registerUser.php`, {
    //     method: 'POST',
    //     headers: {
    //         'X-Requested-With': 'xmlhttprequest'
    //     },
    //     body: data
    // }).then(responce => responce.json()).then(data => {
    //     if (data.msg != "") {
    //         alert(data.msg)
    //     } else {
    //         if (data.isOk) {
    //             location.assign(`${location.href}home`)
    //         } else {
    //             alert("erreur")
    //         }
    //     }
    // })
})
