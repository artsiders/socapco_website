<style>
    .not_found {
        height: 60vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        margin-top: 20px;
    }

    .not_found img {
        width: 90%;
        max-width: 500px;
        margin: auto;
    }

    .not_found h3 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: normal;
    }

    .not_found button {
        border: none;
        background-color: transparent;
        color: #4488FF;
        cursor: pointer;
        text-decoration: underline;
    }

    .not_found button:hover {
        text-decoration: none;
        color: #77AAFF;
    }
</style>
<div class="not_found">
    <img class="col-12" src="<?= ASSETS ?>images/core-img/404-error-page-not-found-with-people-connecting-a-plug-pana-2861.png" alt="404-Img">
    <h3>La page nexiste pas</h3>
    <button onclick="window.history.back()">revenir en arrière</button>
</div>