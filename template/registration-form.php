<div class="row justify-content-center">
    <div class="col-12 col-md-4">
        <h2 class="fw-bold">Registrati</h2>
        <?php if(isset($templateParams["registrationerror"])): ?>
          <p><?php echo $templateParams["registrationerror"]; ?></p>
          <?php endif; ?>
        
        <form action="registration.php" method="post" class="bg-secondary rounded p-4">

            <div class="mb-3">
                <label class="form-label" for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="surname">Cognome:</label>
                <input type="text" id="surname" name="surname" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required/>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary btn-lg" value="Registrati">
                <a href="login.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
            </div>
        </form>
    </div>
</div>