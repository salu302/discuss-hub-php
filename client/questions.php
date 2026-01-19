<link rel="stylesheet" href="./public/style.css" />

<!-- Hero Section -->
<div class="container-fluid px-0">
    <div class="hero-section">
        <div class="container">
            <h1><i class="fas fa-lightbulb me-2"></i>Questions & Answers</h1>
            <p>Share your knowledge, learn from others, and grow together</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="mb-4">
                <h2 style="text-align: left; font-weight: 700;"><i class="fas fa-comments me-2"></i>All Questions</h2>
                <hr>
            </div>

            <?php
           
           if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            include("./common/db.php");

            $uid = isset($_SESSION['user']['user_id']) ? (int) $_SESSION['user']['user_id'] : 0;

            if (isset($_GET["c-id"])) {
                $cid = (int) $_GET["c-id"];
                $query = "SELECT * FROM questions WHERE category_id = $cid ORDER BY id DESC";

            } elseif (isset($_GET["u-id"])) {
                $uid = (int) $_GET["u-id"];
                $query = "SELECT * FROM questions WHERE user_id = $uid ORDER BY id DESC";

            } elseif (isset($_GET["latest"])) {
                $query = "SELECT * FROM questions ORDER BY id DESC";

            } elseif (isset($_GET["search"])) {
                $search = $conn->real_escape_string($_GET["search"]);
                $query = "SELECT * FROM questions WHERE `title` LIKE '%$search%' ORDER BY id DESC";

            } else {
                $query = "SELECT * FROM questions ORDER BY id DESC";
            }

            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                foreach ($result as $row) {
                    $title = htmlspecialchars($row['title']);
                    $id = (int) $row['id'];
                    echo "<div class='question-list'>
                            <h4 class='my-question'>
                                <a href='?q-id=$id'><i class='fas fa-question-circle me-2'></i>$title</a>";
                    if($uid === (int)$row['user_id']) {
                        echo " <a href='./server/requests.php?delete=$id' class='btn btn-sm btn-danger'><i class='fas fa-trash me-1'></i>Delete</a>";
                    }
                    echo "</h4></div>";
                }
            } else {
                echo "<div class='alert alert-info' role='alert'><i class='fas fa-info-circle me-2'></i>No questions found. Be the first to ask!</div>";
            }
            ?>
        </div>

        <div class="col-lg-4">
            <?php include('./client/categorylist.php'); ?>
        </div>
    </div>
</div>
