<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php'
?>

<body>
    <?php
    include 'header.php';
    // <!-- Navigation-->
    include 'navigation.php';
    // instructions if
    // if (!isset($page)) {
    //     echo "La variable page n'existe pas";
    //     die;
    // } else if ($page == 'home') {
    //     include 'content/index_content.php';
    // } else if ($page == 'about') {
    //     include 'content/about_content.php';
    // } else if ($page == 'products') {
    //     include 'content/products_content.php';
    // } else if ($page == 'store') {
    //     include 'content/store_content.php';
    // }

    // instruction switch
    // actu
    // equipe
    // stages
    // creneaux
    if (!isset($page) or empty($page)) {
        $page = 'actu';
    }
    switch ($page) {
        case 'actu':
            include 'content/index_content.php';
            break;
        case 'equipe':
            include 'content/equipe_content.php';
            break;
        case 'stages':
            include 'content/stages_content.php';
            break;
        case 'creneaux':
            include 'content/creneaux_content.php';
            break;
        default:
            // include 'content/404.html';
            header("Location: content/404.html");
            die();
            break;
    }
    include 'footer.php';
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>