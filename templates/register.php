<?php
    require_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/User.php');
    include_once('./partials/header.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $user_object = new User();

        $registration_successful = $user_object->register($email, $password);

        if ($registration_successful) {
            header('Location: login.php');
            exit;
        } else {
            echo "Registration failed. Please try again.";
        }
    }
    ?>

<main>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-33">
            </div>
            <div class="col-33">
                <h1>Registrácia</h1>
                <br>
                <form action="register.php" id="register" method="POST" class="standart-form">
                        <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label><br>
                          <input type="email" placeholder="Vaš email" name="email" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Heslo</label><br>
                          <input type="password" placeholder="Vaše Heslo" name="password" required><br>
                          <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Potvrdiť heslo</label><br>
                          <input type="password" placeholder="Vaše heslo" name="confirm_password" required><br>
                          <button type="submit" class="btn">Registrovať</button>
                 </form> 
            </div>
                <div class="col-33">
            </div>
        </div>
    </section>
</main>
<div class="row">
                    <div class="col-100">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>

                </div>


<?php
    include_once('./partials/footer.php');
?>