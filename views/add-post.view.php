<?php ob_start() ?>
<main class="signin__main">
    <h1>Ajouter un post</h1>
    <?php if(isset($_SESSION['alert']) && !empty($_SESSION['alert'])): ?>
        <div  class="alert alert-<?= $_SESSION['alert']['type'] ?> container">
            <?= $_SESSION['alert']['msg'] ?>
        </div>
    <?php endif ?>
    <form id="form" class="form signin container" action="/add-post" method="post" enctype="multipart/form-data">
        <label class="form__label" for="title">
            <span class="span__label">Votre titre <span class="form__alert">*</span></span>
            <input class="form__input" type="text" name="title" id="title" minlength="5" maxlength="25" required>
        </label>
        <label class="form__label" for="message">
            <span class="span__label">Votre message <span class="form__alert">*</span></span>
            <textarea class="form__input" name="message" id="message" cols="30" rows="10" minlength="10" maxlength="400"  required></textarea>
        </label>
        <span class="form__alert">*</span>
        <input type="file" name="file" id="file" accept="image/png, image/jpeg, image/gif">
        <button id="submit" class="form__submit form__submit--margin" type="submit">
            <span class="btn--load hidden"></span>
            <span class="btn__text">Envoyer le message</span>
        </button>
        <p>Les champs avec <span class="form__alert">*</span> sont obligatoires</p>
    </form>
</main>
<?php
$content = ob_get_clean();
$title = "Ajouter un post";
require 'template.php';