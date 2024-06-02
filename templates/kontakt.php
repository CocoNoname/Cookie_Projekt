<?php
    include_once('./partials/header.php')
?>
        <!-- banner -->
        <div class="banner">
            <img src="../img/cooker1.jpg" alt="banner">
            <h1>Kontakt</h1>
        </div>
        <!-- formular -->
        <section class="margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-50">
                        <h2>Máte otázky?</h2>
                        <p>Ak by ste mali nejaké otázy ohľadom sušienok, a jedine sušienok, odpovede môžete nájsť na <b>Otázky/Odpovede</b>, ak by ste odpoveď na Vašu otázku nenašli, v tom prípade Nám môžete napísať aj správu pomocou formulára.</p>
                    </div>
                    <div class="col-50 text-right" id="formular">
                        <h2>Napíšte nám</h2>
                        <form action="thankyou.php" id="contact" method="POST">
                         <input type="text" placeholder="Vaše meno" id="meno" name="meno" required> <br>
                         <input type="email" placeholder="Vaš email" id="email" name="email" required><br>
                         <textarea placeholder="Vaša sprava" id="sprava" name="sprava" cols="30" rows="10"></textarea><br>
                         <input type="checkbox" id="suhlas" name="suhlas" required>
                         <label for="suhlas"><i>Súhlasim so spracovaním osobných údajov.</i></label><br>
                         <input type="submit" value="Odoslať" class="btn" id="btn-submit">
                        </form>

                    </div>
                </div>
            </div>
            
        </section>
    </main>  
    <!-- footer -->
<?php
    include_once('./partials/footer.php');
?>