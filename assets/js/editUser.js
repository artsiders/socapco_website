const btnEditUser = document.querySelectorAll(".btn_edit_user")
const userName = document.getElementById("userName")
const userEmail = document.getElementById("userEmail")
const userPicture = document.getElementById("userPicture")

const inputId = document.getElementById("idUser")

const editUserForm = document.getElementById("editUserForm")


btnEditUser.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id

        fetch(`${location.origin}/socapco_website/controlers/get_user.php?id=${id}`)
            .then(responce => responce.json()).then(data => {
                userName.value = data.login
                userEmail.value = data.email
                inputId.value = data.id_user
                let src = userPicture.getAttribute('src')
                userPicture.setAttribute('src', src + data.picture)
            }).catch(error => console.log(error))
    })
});


editUserForm.addEventListener("submit", e => {
    e.preventDefault()
    let errorBoxEdit = document.getElementById("editError")
    let successBoxEdit = document.getElementById("editSuccess")

    let data = new FormData(editUserForm)

    fetch(`${location.origin}/socapco_website/controlers/editUser.php`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'xmlhttprequest'
        },
        body: data
    }).then(responce => responce.json()).then(data => {
        if (!data.login) {
            userName.classList.add("border-danger")
        }
        else {
            userName.classList.remove("border-danger")
        }
        if (!data.email) {
            userEmail.classList.add("border-danger")
        }
        else {
            userEmail.classList.remove("border-danger")
        }

        if (data.msg == "") {
            if (data.isOk) {
                errorBoxEdit.classList.add("hide")
                successBoxEdit.classList.remove("hide")
                successBoxEdit.innerHTML = `produit modifier avec succé !
                <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">×</button>`;
            } else {
                errorBoxEdit.classList.remove("hide")
                errorBoxEdit.innerHTML = "ERREUR <strong>500</strong>"
            }
        } else {
            errorBoxEdit.classList.remove("hide")
            errorBoxEdit.innerHTML = data.msg
            successBoxEdit.classList.add("hide")
        }
    })
})
