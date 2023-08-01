<!DOCTYPE html>
<html lang="tr">

<head>
    <?php $this->load->view("includes/head"); ?>
</head>

<body>
    <?php $this->load->view("includes/navbar"); ?>

    <main class="container">
        <h1>
            <?php echo $post->title; ?>
        </h1>
        <p>
            <?php echo $post->description; ?>
        </p>

        <img class="myworks-photo" src="../../panel/uploads/post_v/<?php echo $post->img_url; ?>" alt="bozuk1">

        <?php $this->load->view("includes/footer"); ?>
    </main>

    <?php $this->load->view("includes/include_script"); ?>
</body>

</html>