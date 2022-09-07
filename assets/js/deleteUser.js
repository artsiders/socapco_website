const btnDelUser = document.querySelectorAll(".btn_del_user")

btnDelUser.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id
        const is_admin = e.target.dataset.is_admin

        if (confirm(`supprimer ?`)) {
            fetch(`${location.origin}/socapco_website/controlers/del_user.php?id=${id}&is_admin=${is_admin}`)
                .then(responce => responce.json()).then(data => {
                    location.reload()
                }).catch(error => console.log(error))
        }
    })
});