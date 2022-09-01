const btnDelProd = document.querySelectorAll(".btn_del_prod")

btnDelProd.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id
        const image = e.target.dataset.image

        if (confirm(`supprimer ?`)) {
            fetch(`${location.origin}/socapco_website/controlers/del_prod.php?id=${id}&image=${image}`)
                .then(responce => responce.json()).then(data => {
                    if (data == "supprime") {
                        location.reload()
                    }
                }).catch(error => console.log(error))
        }
    })
});