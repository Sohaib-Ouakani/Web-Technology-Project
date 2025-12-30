<section class="py-4">
    <div class="row justify-content-center">
      <!-- LOGIN -->
      <div class="col-12 col-md-4">
        <div class="p-4 rounded bg-secondary">
          <h2 class="fw-bold mb-3">Login</h2>

          <?php if(isset($templateParams["loginerror"])): ?>
          <p><?php echo $templateParams["loginerror"]; ?></p>
          <?php endif; ?>
          
          <form action="#" method="POST">
            
            <div class="mb-3">
              <label for="username" class="form-label">Username:</label>
              <input type="text" id="username" name="username" class="form-control" />
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password:</label>
              <input type="password" id="password" name="password" class="form-control" />
            </div>

            <p>Non sei registrato? <a href="registration.php">Registrati</a></p>
            <div class="d-grid gap-2">
              <input type="submit" class="btn btn-primary btn-lg" value="Invia">
            </div>
          </form>
        </div>
      </div>
    </div>
</section>



