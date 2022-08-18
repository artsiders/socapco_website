const btnDelProd = document.querySelectorAll(".btn_del_prod")

btnDelProd.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id

        if (confirm(`supprimer ?`)) {
            fetch(`${location.origin}/socapco_website/controlers/del_prod.php?id=${id}`)
                .then(responce => responce.json()).then(data => {
                    if (data == "supprime") {
                        location.reload()
                    }
                }).catch(error => console.log(error))
        }
    })
});