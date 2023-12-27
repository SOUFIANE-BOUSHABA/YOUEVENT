<?php  include_once '../app/View/includes/head.php'  ?>
<body>
<div class="container  d-flex justify-content-center w-full mt-8" style="height: 600px;">
    <div class="d-flex mt-8 w-full col-md-4 align-items-center">
        <form class="form-control shadow" id="formular" action="auth/loginUser" method="post" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter your email address.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" name="submit" value="login" type="submit">Se connecter</button>
            </div>
            <div class="mt-3">
            <p>If you don't have an account, <a href="auth/regester">create one</a>.</p>
        </div>
        </form>
       
    </div>
</div>
  
</body>





