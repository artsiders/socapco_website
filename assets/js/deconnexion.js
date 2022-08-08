const btnDiconect = document.getElementById('btnDiconect')

const logOuts = document.querySelectorAll('.log_out')

logOuts.forEach(logOut => {
    logOut.addEventListener('click', () => {
        btnDiconect.click()
    })
});

btnDiconect.addEventListener("click", () => {
    fetch(`${location.origin}/socapco_website/controlers/deconnexion.php`)
    .then(responce => responce.json()).then(() => {
        location.assign(`${location.origin}/socapco_website/login`)
    }).catch(error => {
        console.log(error);
    })
})