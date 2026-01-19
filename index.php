<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discuss Forum - Share & Learn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./public/style.css">
</head>

<body>
   <?php 
session_start();

// handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ./");
    exit;
}

include('./client/header.php');

// ✅ safe check for login state
$loggedIn = isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username']);

if (isset($_GET['signup']) && !$loggedIn) {
    include('./client/signup.php');
}
else if (isset($_GET['login']) && !$loggedIn) {
    include('./client/login.php');

} elseif(isset($_GET['ask'])) {

    include('./client/ask.php');

}
elseif(isset($_GET['q-id'])) {
$qid=$_GET['q-id'];
    include('./client/question-details.php');

}elseif(isset($_GET['c-id'])){
    $cid= $_GET['c-id'];
    include('./client/questions.php');

}elseif(isset($_GET['u-id'])){
    $uid= $_GET['u-id'];
    include('./client/questions.php');

}elseif(isset($_GET['latest'])){
  
    include('./client/questions.php');

}elseif(isset($_GET['search'])){
   $search= $_GET['search']; 
  
    include('./client/questions.php');

}


else{
    include('./client/questions.php');
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>