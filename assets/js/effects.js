function addEffect() {
    const addEffectForm = document.getElementById('addEffectForm')

    let errorBox = document.getElementById("addError")
    let successBox = document.getElementById("addSuccess")

    addEffectForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(addEffectForm)

        fetch(`${location.origin}/socapco_website/controlers/effects.php?action=create`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.eff_libele) {
                addEffectForm.eff_libele.classList.add("border-danger")
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
addEffect()

function editEffect() {
    const editEffectForm = document.getElementById('editEffectForm')
    const btnEditEff = document.querySelectorAll('.btn_edit_eff')
    const effLibele = document.getElementById('effLibele')
    const idEff = document.getElementById('idEff')


    let editError = document.getElementById("editError")
    let editSuccess = document.getElementById("editSuccess")

    btnEditEff.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id

            fetch(`${location.origin}/socapco_website/controlers/effects.php?action=read&id=${id}`)
                .then(responce => responce.json()).then(data => {
                    effLibele.value = data.eff_libele
                    idEff.value = data.id_effect
                }).catch(error => console.log(error))
        })
    });

    editEffectForm.addEventListener("submit", e => {
        e.preventDefault()

        let data = new FormData(editEffectForm)

        fetch(`${location.origin}/socapco_website/controlers/effects.php?action=update`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'xmlhttprequest'
            },
            body: data
        }).then(responce => responce.json()).then(data => {
            if (!data.eff_libele) {
                editEffectForm.eff_libele.classList.add("border-danger")
            }

            if (data.msg == "") {
                window.location.reload()
            } else {
                editError.classList.remove("hide")
                editError.innerHTML = data.msg
                editSuccess.classList.add("hide")
            }
        })
    })
}
editEffect()


function deleteEffect() {
    const delete_effect = document.querySelectorAll('.delete_effect')
    delete_effect.forEach(btn => {
        btn.addEventListener("click", e => {
            const id = e.target.dataset.id
            fetch(`${location.origin}/socapco_website/controlers/effects.php?action=delete&id=${id}`)
                .then(responce => responce.json()).then(_ => {
                    window.location.reload()
                }).catch(error => console.log(error))
        })
    });
}
deleteEffect()