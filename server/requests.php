<?php
session_start();
include('../common/db.php');

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $address  = $_POST['address'];

    // ✅ Correct prepare statement with placeholders
    $stmt = $conn->prepare("INSERT INTO `users` (`username`,`email`,`password`,`address`) VALUES (?,?,?,?)");

    // ✅ Bind parameters (all strings -> "ssss")
    $stmt->bind_param("ssss", $username, $email, $password, $address);

    $result = $stmt->execute();

    if ($result) {
        $user_id = $stmt->insert_id; // ✅ get last inserted id
        $_SESSION["user"] = [
            "username" => $username,
            "email"    => $email,
            "user_id"  => $user_id
        ];
        header("location:/discuss");
        exit;
    } else {
        echo "New user not registered";
    }

} else if (isset($_POST['login'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id  = 0;

    // ✅ Use prepared statement for login too
    $stmt = $conn->prepare("SELECT id, username, email FROM users WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $user_id  = $row['id'];

        $_SESSION["user"] = [
            "username" => $username,
            "email"    => $email,
            "user_id"  => $user_id
        ];
        header("location:/discuss");
        exit;
    } else {
        echo "New user not registered";
    }

} elseif (isset($_POST["ask"])) {
    

    $title = $_POST['title'];
    $description    = $_POST['description'];
    $category= (int) $_POST['category'];
    $user_id  = (int)$_SESSION['user']['user_id'];

    // ✅ Correct prepare statement with placeholders
    $stmt = $conn->prepare("INSERT INTO `questions` (`title`,`description`,`category_id`,`user_id`) VALUES (?,?,?,?)");

    // ✅ Bind parameters (all strings -> "ssss")
    $stmt->bind_param("ssii", $title, $description, $category, $user_id);

    $result = $stmt->execute();

    if ($result) {
        $user_id = $stmt->insert_id; // ✅ get last inserted id
      
        header("location:/discuss");
        exit;
    } else {
        echo "Questions not added ";
    }


}  elseif (isset($_POST["answer"])) {
    $answer      = $_POST['answer'];
    $question_id = (int) $_POST['question_id'];
    $user_id     = (int) $_SESSION['user']['user_id'];

    $stmt = $conn->prepare("INSERT INTO `answers` (`answer`,`question_id`,`user_id`) VALUES (?,?,?)");
    $stmt->bind_param("sii", $answer, $question_id, $user_id);
    $result = $stmt->execute();

    if ($result) {
        header("location:/discuss?q_id=$question_id");
        exit;
    } else {
        echo "Answer not added: " . $stmt->error;
    }
}elseif(isset($_GET["delete"])){
   echo $qid= $_GET["delete"];
    $query=$conn->prepare("delete from questions where id =$qid");
    $result=$query->execute();
    if($result){
        header("location:/discuss");

    }else
    echo"question is not deleted";
}


?>
