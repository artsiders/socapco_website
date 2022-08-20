const btnDelUser = document.querySelectorAll(".btn_del_user")

btnDelUser.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id

        if (confirm(`supprimer ?`)) {
            fetch(`${location.origin}/socapco_website/controlers/del_user.php?id=${id}`)
                .then(responce => responce.json()).then(data => {
                    if (data == "supprime") {
                        location.reload()
                    }
                }).catch(error => console.log(error))
        }
    })
});