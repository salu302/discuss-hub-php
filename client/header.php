<nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
  <div class="container-fluid px-4">
    <a class="navbar-brand fw-bold" href="./">
      <i class="fas fa-comments me-2"></i>Discuss Forum
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>

        <?php if (isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])): ?>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-primary ms-2" href="?ask=true">
              <i class="fas fa-pen-to-square me-1"></i>Ask Question
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-info ms-2" href="?u-id=<?php echo $_SESSION['user']['user_id'] ?>">
              <i class="fas fa-user me-1"></i>My Questions
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle me-1"></i><?php echo ucfirst($_SESSION['user']['username']) ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="?logout=true">Logout</a></li>
            </ul>
          </li>
        <?php endif; ?>

        <?php if (!isset($_SESSION['user']['username']) || empty($_SESSION['user']['username'])): ?>
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-outline-light ms-2" href="?login=true">Login</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-light ms-2" href="?signup=true">Signup</a>
          </li>
        <?php endif; ?>
      </ul>
      
      <form class="d-flex ms-auto search-form" role="search" action="" method="GET">
        <input class="form-control form-control-sm me-2" name="search" type="search" placeholder="Search questions..." >
        <button class="btn btn-outline-light btn-sm" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
