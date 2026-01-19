<link rel="stylesheet" href="./public/style.css" />

<div class="container-fluid px-0">
    <div class="hero-section">
        <div class="container">
            <h1><i class="fas fa-comments me-2"></i>Question Discussion</h1>
            <p>Share your knowledge and help others find solutions</p>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8">
            <?php 
            
            include("./common/db.php");
           

            $query= "select * from questions where id=$qid ";
            $result=$conn->query($query);
            $row = $result->fetch_assoc();
            $cid=$row['category_id'];
            
            echo "<div class='question-list' style='margin-bottom: 30px;'>
                    <h2 style='font-weight: 700; color: #333;'><i class='fas fa-question-circle me-2'></i>" . htmlspecialchars($row['title']) . "</h2>
                    <p style='color: #666; margin-top: 15px;'>" . htmlspecialchars($row['description']) . "</p>
                    <hr>
                    <small class='text-muted'><i class='fas fa-user me-1'></i>Posted on " . date('M d, Y', strtotime($row['created_at'] ?? 'now')) . "</small>
                </div>";
            
            include("answers.php");
            ?>

            <div class="form-section" style='margin-top: 30px;'>
                <h3 style='font-weight: 700; margin-bottom: 20px;'><i class='fas fa-pen-to-square me-2'></i>Post Your Answer</h3>
                <form action="./server/requests.php" method="post">
                    <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                    <div class="mb-3">
                        <label for="answer" class="form-label fw-bold">Your Answer</label>
                        <textarea class="form-control" name="answer" id="answer" rows="5" placeholder="Share your knowledge and help others..." required></textarea>
                        <small class="form-text text-muted">Please be clear and provide useful information</small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane me-2"></i>Post Answer
                    </button>
                </form>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-section">
                <?php 
                 
                $categoryQuery="select name from category where id=$cid";
                $categoryResult=$conn->query($categoryQuery);
                $categoryRow=$categoryResult->fetch_assoc();
                    
                echo "<h3 style='font-weight: 700; margin-bottom: 20px;'><i class='fas fa-folder-open me-2'></i>" . ucfirst($categoryRow['name']) . "</h3>";

                $query="select * from questions where category_id=$cid and id!=$qid LIMIT 5";
                $result=$conn->query($query);
                
                if($result->num_rows > 0) {
                    echo "<h5 style='margin-top: 20px; margin-bottom: 15px;'>Related Questions</h5>";
                    foreach($result as $row ){
                        $id=$row['id'];
                        $title=$row['title'];
                        echo "<div class='question-list' style='margin-bottom: 10px;'>
                                <h6><a href='?q-id=$id'><i class='fas fa-link me-2'></i>" . htmlspecialchars($title) . "</a></h6>
                            </div>";
                    }
                } else {
                    echo "<p class='text-muted'><i class='fas fa-info-circle me-2'></i>No related questions</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>