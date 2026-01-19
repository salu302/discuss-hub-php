<link rel="stylesheet" href="./public/style.css" />

<div class="container-fluid px-0">
    <div class="hero-section">
        <div class="container">
            <h1><i class="fas fa-user-plus me-2"></i>Join Our Community</h1>
            <p>Create your account and start participating in discussions</p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-5 offset-lg-3">
      <div class="form-section">
        <form method="post" action="./server/requests.php">

          <div class="mb-4">
            <label for="username" class="form-label fw-bold"><i class="fas fa-user me-2"></i>Username</label>
            <input type="text" name="username" class="form-control form-control-lg" id="username" placeholder="Choose a username" required>
            <small class="form-text text-muted">3-20 characters, alphanumeric</small>
          </div>
          
          <div class="mb-4">
            <label for="email" class="form-label fw-bold"><i class="fas fa-envelope me-2"></i>Email Address</label>
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="your@email.com" required>
          </div>
          
          <div class="mb-4">
            <label for="password" class="form-label fw-bold"><i class="fas fa-lock me-2"></i>Password</label>
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Create a strong password" required>
            <small class="form-text text-muted">Minimum 6 characters</small>
          </div>

          <div class="mb-4">
            <label for="address" class="form-label fw-bold"><i class="fas fa-map-marker-alt me-2"></i>Location</label>
            <input type="text" name="address" class="form-control form-control-lg" id="address" placeholder="City/Country" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="signup" class="btn btn-primary btn-lg">
              <i class="fas fa-user-plus me-2"></i>Create Account
            </button>
          </div>

          <div class="mt-4 text-center">
            <p>Already have an account? <a href="?login=true" class="text-decoration-none fw-bold">Sign in here</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>