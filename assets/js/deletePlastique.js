function deletePlastique() {
    const btnDelPlastique = document.querySelectorAll(".btn_del_plastique")
    const confirDel = document.getElementById("confirDel")

    btnDelPlastique.forEach(btn => {
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

        fetch(`${location.origin}/socapco_website/controlers/plastiques.php?action=delete&id=${id}&image=${image}`)
            .then(responce => responce.json()).then(_ => {
                window.location.reload()
            }).catch(error => console.log(error))
    })
}
deletePlastique()