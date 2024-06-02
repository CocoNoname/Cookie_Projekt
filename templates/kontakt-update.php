<?php
    include('partials/header.php');

    $contact_object = new Contact();

    if(isset($_POST['edit_contact'])) {
        $edit_contact_id = $_POST['edit_contact'];
        $contact_data = $contact_object->select_single($edit_contact_id);
    }

    if($contact_data) {
        $name = $contact_data->name;
        $email = $contact_data->email;
        $message = $contact_data->message;
    }
    
    if(isset($_POST['edit_contact_id'], $_POST['name'], $_POST['email'], $_POST['message'])) {
        $edit_contact_id = $_POST['edit_contact_id'];
        $new_data = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        );
    
        $contact_object->edit($edit_contact_id, $new_data);
    
        header('Location: admin.php');
        exit();
    }
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <h1>Editovať kontakt</h1>
                <form action="" method="POST">
                    <label for="name">Meno:</label>
                    <br>
                    <input type="text" id="name" name="name" value="<?php echo $name?>">
                    <br>
                    <label for="name">Email:</label>
                    <br>
                    <input type="email" id="email" name="email" value="<?php echo $email?>">
                    <br>
                    <label for="message">Správa:</label>
                    <br>
                    <textarea id="message" name="message"> <?php echo $message?> </textarea>
                    <br>
                    <button type="submit"name="edit_contact_id" value="<?php echo $edit_contact_id?>">Uložiť zmeny</button>
                </form>
            </div>
        </div>
    </section>
</main>