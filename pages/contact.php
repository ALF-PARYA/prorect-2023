<?php

$subject = "patate";
$email = "patate@sauté.com";
$message = "grosse patate";

$ers = [];


var_dump($_POST);

if (!empty($_POST)) {

    $subject = trim($_POST['subject']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

}

if (empty($subject)) {
    $ers['subject'] = true;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
    $ers['email'] = true;

}

if (empty($message)) {
    $ers['message'] = true;
}



var_dump($ers);
?>



<form class="col-8 mt-5 mb-5 m-auto" method="post" action="">

    <div>
        <label for="subject">sujet</label>
        <input type="text" class="form-control pt-3" id="subject" aria-describedby="emailHelp" name="subject"
            placeholder="votre sujet">

        <?php
        if (!empty($ers['subject'])) {

            echo '<p class="badge alert-danger">Entrez le sujet de votre message<p>
            ';
        }
        ?>
    </div>

    <div class="form-group pt-4 ">
        <label for="email">Mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
            placeholder="Enter email">

        <?php
        if (!empty($ers['email'])) {

            echo '<p class="badge alert-danger">veuillez renseigner votre mail<p>
            ';
        }
        ?>
    </div>

    <br />

    <div class="form-group pt-4">
        <label for="message"></label>
        <textarea name="message" id="message" class="form-control form-control-lg" type="text"
            placeholder="votre message"></textarea>
        <?php
        if (!empty($ers['message'])) {

            echo '<p class="badge alert-danger">Entrez votre message<p>
            ';
        }
        ?>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>