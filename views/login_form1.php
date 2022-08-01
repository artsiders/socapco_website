<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Socapco - register</title>
    <link rel="stylesheet" href="<?= ASSETS ?>css/form.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="image-box">
                <img src="<?= ASSETS ?>images/contact.png" alt="">
            </div>
            <form id="loginForm" method="post" action="#">
                <div class="topic">socapco admin</div>
                <div class="input-box">
                    <input type="text" name="login" required='off'>
                    <label>votre nom d'utilisateur</label>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" required='off'>
                    <label>mot de passe</label>
                </div>
                <div class="input-box">
                    <input type="submit" value="se connecter">
                </div>
            </form>
        </div>
    </div>

    <script src="<?= ASSETS ?>js/login.js"></script>

</body>

</html>