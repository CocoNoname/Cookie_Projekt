<?php
include_once('./partials/header.php');
include_once('C:/xampp/htdocs/Cookie_Projekt/_inc/classes/User.php');

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    if ($_SESSION['is_admin'] == 1) {
        header('Location: admin.php');
    } else {
        header('Location: home.php');
    }
    exit;
}

if (isset($_POST['user_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $user_object = new User();

    $login_success = $user_object->login($email, $password);

    if ($login_success) {
        if ($_SESSION['is_admin'] == 1) {
            header('Location: admin.php');
        } else {
            header('Location: home.php');
        }
        exit;
    } else {
        echo 'Nesprávne meno alebo heslo';
    }
}
?>

<main>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-33">
            </div>
            <div class="col-33">
                <h1>Prihlásenie</h1>
                <br>
                <form action="" id="login" method="POST" class="standart-form">
                    <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label><br>
                    <input type="email" placeholder="Váš email" name="email" required><br>
                    <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Heslo</label><br>
                    <input type="password" placeholder="Vaše heslo" name="password" required><br>
                    <button type="submit" name="user_login" class="btn">Prihlásiť</button>
                    <a href="./register.php" style="text-decoration: none;">Registrácia</a>
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
        <br>                        
        <br>
        <br>
        <br>
    </div>
</div>

<?php
include_once('./partials/footer.php');
?>
