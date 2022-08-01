const form = document.getElementById("loginForm")

console.log(form);

form.addEventListener("submit", e => {
    e.preventDefault()
    let data = new FormData(logForm)

    fetch(`${location.origin}/socapco_website/controlers/loginUser.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        if (data.msg != "") {
            alert(data.msg)
        } else {
            if (data.isOk) {
                location.assign(`${location.href}home`)
            } else {
                alert("erreur")
            }
        }
    })
})
