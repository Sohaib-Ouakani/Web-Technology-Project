<section class="py-4">
    <div class="row justify-content-center">
      <!-- LOGIN -->
      <div class="col-12 col-md-4">
        <div class="p-4 rounded bg-secondary">
          <h2 class="fw-bold mb-3">Login</h2>

          <?php if(isset($templateParams["errorelogin"])): ?>
          <p><?php echo $templateParams["errorelogin"]; ?></p>
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

            <button type="submit" class="btn btn-primary w-100">Invia</button>

          </form>
        </div>
      </div>
    </div>
</section>



