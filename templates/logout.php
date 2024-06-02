<?php
    include('partials/header.php');

    session_start();

    unset($_SESSION['logged_in']);

    header('Location: login.php');
    exit();
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <!-- You can remove this message if not needed -->
                <p>You have been logged out. Redirecting...</p>
            </div>
        </div>
    </section>
</main>
<?php
    include('partials/footer.php');
?>
