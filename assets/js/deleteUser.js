const btnDelUser = document.querySelectorAll(".btn_del_user")
const confirDel = document.getElementById("confirDel")

btnDelUser.forEach(btn => {
    btn.addEventListener("click", e => {
        const id = e.target.dataset.id
        const is_admin = e.target.dataset.is_admin

        confirDel.setAttribute('data-id', id);
        confirDel.setAttribute('data-is_admin', is_admin);
    })
});


confirDel.addEventListener("click", e => {
    const id = e.target.dataset.id
    const is_admin = e.target.dataset.is_admin

    fetch(`${location.origin}/socapco_website/controlers/del_user.php?id=${id}&is_admin=${is_admin}`)
        .then(responce => responce.json()).then(data => {
            location.reload()
        }).catch(error => console.log(error))
})