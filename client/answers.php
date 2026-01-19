<link rel="stylesheet" href="./public/style.css" />

<div class="container-fluid">
    <div class="mt-5">
        <h3 style='font-weight: 700; margin-bottom: 20px;'><i class='fas fa-comments me-2'></i>Answers</h3>
        <?php 
        $query= "select * from answers where question_id=$qid ORDER BY id DESC";
        $result =$conn->query($query);
        
        if($result->num_rows > 0) {
            foreach($result as $row){
                $answer = htmlspecialchars($row ['answer']);
                echo "<div class='answer-wrapper'>
                        <div class='d-flex align-items-start'>
                            <div class='flex-grow-1'>
                                <p style='color: #333; line-height: 1.6;'>" . nl2br($answer) . "</p>
                                <small class='text-muted'><i class='fas fa-check-circle me-1' style='color: #28a745;'></i>Posted on " . date('M d, Y', strtotime($row['created_at'] ?? 'now')) . "</small>
                            </div>
                        </div>
                    </div>";
            }
        } else {
            echo "<div class='alert alert-info'><i class='fas fa-info-circle me-2'></i>No answers yet. Be the first to answer this question!</div>";
        }
        ?>
    </div>
</div>