const btnDelProd = document.querySelectorAll(".btn_del_prod")
const confirDel = document.getElementById("confirDel")

btnDelProd.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id
        const image = e.target.dataset.image

        confirDel.setAttribute('data-id', id);
        confirDel.setAttribute('data-image', image);
    })
});

confirDel.addEventListener("click", e => {
    const id = e.target.dataset.id
    const image = e.target.dataset.image

    fetch(`${location.origin}/socapco_website/controlers/del_prod.php?id=${id}&image=${image}`)
        .then(responce => responce.json()).then(data => {
            if (data == "supprime") {
                window.location.reload()
            }
        }).catch(error => console.log(error))
})