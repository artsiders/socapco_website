<div class="top-header">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="header-content h-100 d-flex align-items-center justify-content-between">
                    <div class="academy-logo">
                        <a href="./home"><img src="<?= ASSETS ?>images/core-img/logo.png" alt=""></a>
                    </div>
                    <div class="row nav">
                        <div class="login-content col-sm">
                            <a class="<?php if ($this->request == "contact") echo "active" ?>" href="./contact">Contacts</a>
                        </div>
                        <div class="login-content col-sm">
                            <a class="<?php if ($this->request == "about") echo "active" ?>" href="./about">A_Propos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>