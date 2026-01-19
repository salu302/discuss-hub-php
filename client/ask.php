<link rel="stylesheet" href="./public/style.css" />

<div class="container-fluid px-0">
    <div class="hero-section">
        <div class="container">
            <h1><i class="fas fa-pen-to-square me-2"></i>Ask a Question</h1>
            <p>Share your question and help others learn from your experience</p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-8 offset-lg-2">
      <div class="form-section">
        <form action="./server/requests.php" method="post">

          <div class="mb-4">
            <label for="title" class="form-label fw-bold">Question Title *</label>
            <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="What is your question?" required>
            <small class="form-text text-muted">Be specific and clear about your question</small>
          </div>

          <div class="mb-4">
            <label for="description" class="form-label fw-bold">Description *</label>
            <textarea name="description" class="form-control" id="Description" rows="6" placeholder="Provide more details about your question. Include what you've already tried and any errors you encountered..." required></textarea>
            <small class="form-text text-muted">Include relevant code snippets or error messages if applicable</small>
          </div>

          <div class="mb-4">
            <label for="category" class="form-label fw-bold">Category *</label>
            <?php include("category.php"); ?>
            <small class="form-text text-muted">Select the most relevant category for your question</small>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" name="ask" class="btn btn-primary btn-lg">
              <i class="fas fa-paper-plane me-2"></i>Post Your Question
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>