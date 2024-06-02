<?php
    include_once('./partials/header.php');
    require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/Qna.php')
?>

        <!-- banner -->
        <div class="banner">
            <img src="../img/cooker1.jpg" alt="banner">
            <h1>Časté otázky</h1>
        </div>
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <h2>Často kladené otázky.</h2>
                </div>
                <div class="row">
                    <div class="accordion-container margin-top">
                    <?php
          
          $qna_class = new Qna();
          $qna = $qna_class->select();
          for ($i=0;$i<count($qna);$i++){
            echo '<div class="accordion">';
            echo '<div class="question">'.$qna[$i]->question.'</div>';
            echo '<div class="answer">'.$qna[$i]->answer.'</div>';
            echo '</div>';
          }

        ?>
                    </div>
                </div>
            </div>
        </section>

    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>