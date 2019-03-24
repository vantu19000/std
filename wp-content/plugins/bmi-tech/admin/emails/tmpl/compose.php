<?php
$emails = $this->emails;
?>



<div class="wrap">
    <h1 class="wp-heading-inline">Gửi email</h1>


    <p>
        Email sẽ được gửi cho:
        <?php foreach ($emails AS $value): ?>
        <?= $value->email . " "; ?>
        <?php endforeach; ?>
    </p>

    <form action="<?= get_admin_url() . '?controller=emails&task=sendEmail' ?>" id="posts-data" method="post">

    <?php
    $settings = array( 'data[content]' => 'post_text' );

    wp_editor( null, 'content' );

    BMIHelper::createNonce();

    ?>

        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="SEND">
        </p>

    </form>

</div>
