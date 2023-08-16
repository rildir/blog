<!DOCTYPE html>
<html lang="tr">

<head>

    <title>
        <?php echo ucwords($post->title) . " | Coderec"; ?>
    </title>

    <?php $this->load->view("includes/head"); ?>
</head>

<body>
    <div class="homepage">
        <?php $this->load->view("includes/navbar"); ?>

        <main class="container works-single">

            <img src="../../panel/uploads/post_v/<?php echo $post->img_url; ?>" alt="bozuk1">

            <h1 class="text-capitalize">
                <?php echo $post->title; ?>
            </h1>
            <div class="works-single-desc">
                <p>
                    <?php echo $post->description; ?>
                </p>
            </div>
            <?php if (!empty($post->github_link)) { ?>
                <a href="<?php echo $post->github_link ?>"><?php echo $post->github_link ?></a>
                <br>
            <?php } ?>

            <?php if (!empty($post->url_link)) { ?>
                <a href="<?php echo $post->url_link ?>"><?php echo $post->url_link ?></a>
                <br>
            <?php } ?>


            </nav>
            <?php $this->load->view("includes/footer"); ?>
    </div>
    </main>
    </div>

    <?php $this->load->view("includes/include_script"); ?>
</body>

</html>