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
            <div class="row">
                <div class="col-md-2 gallery" style="flex-direction: column;">
                    <div class="new-post-container">
                        <h5>Last Works</h5>
                        <?php foreach ($new_post as $index => $post_item) { ?>
                            <a href="<?php echo $post_item->seo_url ?>">
                                <div class="new-post">
                                    <p>
                                        <?php echo $post_item->title ?>
                                        <?php foreach ($category as $category_item) {
                                            if ($category_item->id == $post_item->post_category_id) { ?>
                                                <small>
                                                    <?php echo $category_item->title; ?>
                                                </small>
                                            <?php }
                                        } ?>
                                    </p>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="works-single-container">
                        <h1 class="text-capitalize works-single-header">
                            <?php echo $post->title; ?>
                        </h1>
                        <div> <img src="../../panel/uploads/post_v/<?php echo $post->img_url; ?>" alt="bozuk1">
                        </div>
                        <div class="works-single-desc">
                            <p>
                                <?php echo $post->description; ?>
                            </p>
                        </div>
                        <?php if (!empty($post->github_link)) { ?>
                            <a href="<?php echo $post->github_link ?>"><?php echo substr($post->github_link, 8) ?></a>
                            <br>
                        <?php } ?>
                        <?php if (!empty($post->url_link)) { ?>
                            <a href="<?php echo $post->url_link ?>"><?php echo substr($post->url_link, 8) ?></a>
                            <br>
                        <?php } ?>
                        <div class="move">
                            <a href="<?php echo $prev_work->seo_url; ?>" class="btn btn-dark btn-outline">Back</a>
                            <a href="<?php echo $next_work->seo_url; ?>" class="btn btn-dark btn-outline">Next</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($new_post as $index => $post_item) { ?>
                        <div class="swiper-slide">
                            <a href="<?php echo $post_item->seo_url ?>">
                                <img src="../../panel/uploads/post_v/<?php echo $post_item->img_url; ?>" alt="bozuk1">
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <?php $this->load->view("includes/footer"); ?>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <?php $this->load->view("includes/include_script"); ?>
</body>

</html>