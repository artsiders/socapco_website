function addGamme() {
    const addGammeForm = document.getElementById('addGammeForm')

    let errorBox = document.getElementById("addError")
    let successBox = document.getElementById("addSuccess")

    addGammeForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(addGammeForm)

        fetch(`${location.origin}/socapco_website/controlers/gammes.php?action=create`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.gam_libele) {
                addGammeForm.gam_libele.classList.add("border-danger")
            }

            if (data.msg == "") {
                if (data.isOk) {
                    window.location.reload();
                } else {
                    errorBox.classList.remove("hide")
                    errorBox.innerHTML = "ERREUR <strong>500</strong>"
                }
            } else {
                errorBox.classList.remove("hide")
                errorBox.innerHTML = data.msg
                successBox.classList.add("hide")
            }
        })
    })
}
addGamme()

function editGamme() {
    const editGammeForm = document.getElementById('editGammeForm')
    const btnEditGam = document.querySelectorAll('.btn_edit_gam')
    const gamLibele = document.getElementById('gamLibele')
    const gamColor = document.getElementById('gamColor')
    const idGam = document.getElementById('idGam')


    let editError = document.getElementById("editError")
    let editSuccess = document.getElementById("editSuccess")

    btnEditGam.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id

            fetch(`${location.origin}/socapco_website/controlers/gammes.php?action=read&id=${id}`)
                .then(responce => responce.json()).then(data => {
                    gamLibele.value = data.gam_libele
                    gamColor.value = data.gam_color
                    idGam.value = data.id_gamme
                }).catch(error => console.log(error))
        })
    });

    editGammeForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(editGammeForm)

        fetch(`${location.origin}/socapco_website/controlers/gammes.php?action=update`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.gam_libele) {
                editGammeForm.gam_libele.classList.add("border-danger")
            }

            if (data.msg == "") {
                editError.classList.add("hide")
                editSuccess.classList.remove("hide")
                editSuccess.innerHTML = `modifier avec succé ! 
                    <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button>`;

                editGammeForm.gam_libele.value = ""
                editGammeForm.gam_libele.classList.remove("border-danger")
            } else {
                editError.classList.remove("hide")
                editError.innerHTML = data.msg
                editSuccess.classList.add("hide")
            }
        })
    })
}
editGamme()


function deleteGamme() {
    const delete_gamme = document.querySelectorAll('.delete_gamme')
    delete_gamme.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id
            fetch(`${location.origin}/socapco_website/controlers/gammes.php?action=delete&id=${id}`)
                .then(responce => responce.json()).then(_ => {
                    window.location.reload()
                }).catch(error => console.log(error))
        })
    });
}
deleteGamme()