<?php
session_start();
include('partials/header.php');


?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Admin rozhranie</h1>
                <?php
                    //print_r($_SESSION);
                    if($_SESSION['is_admin'] == 1){
                        include('partials/admin-kontakt.php');
                    }
                ?>

                <?php
                    include('partials/admin-qna.php');
                ?>
            </div>
        </div>
    </section> 
</main>

<?php
    include('partials/footer.php');
?>

