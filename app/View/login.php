<?php include_once '../app/View/includes/head.php'; ?>

<body>
    <div class="container d-flex justify-content-center mt-8" style="height: 600px;">
        <div class="d-flex w-full col-md-4 align-items-center">
            <form class="shadow p-3" id="formular" action="auth/loginUser" method="post" novalidate>

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
                    <p>If you don't have an account, <a href="auth/register">create one</a>.</p>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('formular').addEventListener('submit', function (event) {
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');

            if (emailInput.value.trim() === '' || !isValidEmail(emailInput.value)) {
                emailInput.classList.add('is-invalid');
                event.preventDefault();
            } else {
                emailInput.classList.remove('is-invalid');
                emailInput.classList.add('is-valid');
            }

            if (passwordInput.value.trim() === '') {
                passwordInput.classList.add('is-invalid');
                event.preventDefault();
            } else {
                passwordInput.classList.remove('is-invalid');
                passwordInput.classList.add('is-valid');
            }
        });

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>
