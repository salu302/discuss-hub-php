<link rel="stylesheet" href="./public/style.css" />

<div class="container-fluid px-0">
    <div class="hero-section">
        <div class="container">
            <h1><i class="fas fa-sign-in-alt me-2"></i>Welcome Back</h1>
            <p>Sign in to your account and continue the discussion</p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-5 offset-lg-3">
      <div class="form-section">
        <form action="./server/requests.php" method="post">

          <div class="mb-4">
            <label for="email" class="form-label fw-bold"><i class="fas fa-envelope me-2"></i>Email Address</label>
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="your@email.com" required>
          </div>

          <div class="mb-4">
            <label for="password" class="form-label fw-bold"><i class="fas fa-lock me-2"></i>Password</label>
            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" required>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="login" class="btn btn-primary btn-lg">
              <i class="fas fa-sign-in-alt me-2"></i>Sign In
            </button>
          </div>

          <div class="mt-4 text-center">
            <p>Don't have an account? <a href="?signup=true" class="text-decoration-none fw-bold">Sign up here</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>