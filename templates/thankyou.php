<?php
    include_once('./partials/header.php');
    require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/Contact.php')
?>
        <div class="container">
        <div class="row">
                <div class="col-100">
                </div>
            </div>
            <div class="row">
                <div class="col-100">
                    <h1>Ďakujeme za vyplnenie formulára</h1>
                    <?php
                         $contact_object = new Contact();
                         $contact_object->insert();
                     ?>
                    <div class="text-center">
                        <a href="kontakt.php" class="btn">Späť na Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>