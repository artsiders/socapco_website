const addProductForm = document.getElementById("addProductForm")

// let errorBox = document.getElementById("error")
// let successBox = document.getElementById("success")


addProductForm.addEventListener("submit", e => {
    e.preventDefault()
    let data = new FormData(addProductForm)

    fetch(`${location.origin}/socapco_website/controlers/addProduct.php`, {
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
            addProductForm.login.classList.add("border-danger")
        }
        else {
            addProductForm.login.classList.remove("border-danger")
        }
        if (!data.pass) {
            addProductForm.pass.classList.add("border-danger")
        }
        else {
            addProductForm.pass.classList.remove("border-danger")
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
