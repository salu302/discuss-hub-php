<div class="container">
    <h1 class="heading"><i class="fas fa-folder-open me-2"></i>Browse Categories</h1>
    <?php 
    include('./common/db.php');
      

            include("./common/db.php");
            $query = "select * from category";
            $result = $conn->query($query);
            foreach ($result as $row) {
                $name = ucfirst($row['name']);
                $id = $row['id'];
                echo "<div class='question-list category-box' >
                    <h4><a href='?c-id=$id'><i class='fas fa-tag me-2'></i>$name</a></h4>
                </div>";
            }
            
    ?>
</div>