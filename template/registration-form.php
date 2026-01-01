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
                
                <!-- Strength Bar -->
                <div class="progress mt-2" style="height: 6px;">
                    <div id="strengthBar" class="progress-bar strength-bar"></div>
                </div>
                
                <!-- Strength Text -->
                <small id="strengthText" class="fw-bold mt-1 d-block"></small>
                
                <!-- Requirements -->
                <small>
                    <ul class="d-block mt-2 p-0">
                        <li id="req1" class="d-inline me-2 req-not-met me-2">✓ 8+ caratteri</li>
                        <li id="req3" class="d-inline me-2 req-not-met me-2">✓ a-z</li>
                        <li id="req2" class="d-inline me-2 req-not-met me-2">✓ A-Z</li>
                        <li id="req4" class="d-inline me-2 req-not-met me-2">✓ 0-9</li>
                        <li id="req5" class="d-inline me-2 req-not-met">✓ !@#$</li>
                    </ul>
                </small>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary btn-lg" value="Registrati">
                <a href="login.php" class="btn btn-outline-secondary fw-bold w-100">Annulla</a>
            </div>
        </form>
    </div>
</div>
<script src="js/password-validator.js"></script>