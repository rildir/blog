<div class="myworks-container">
    <div class="myworks-list">
        <div class="row">
            <?php foreach ($homepageItems as $index => $item) { ?>
                <?php if ($index == 0) { ?>
                    <div class="col-sm-6 col-lg-8">
                        <a href="<?php echo "works/" . $item->seo_url ?>">
                            <div class="image-wrapper">
                                <img class="myworks-photo" src="../panel/uploads/post_v/<?php echo $item->img_url; ?>"
                                    alt="bozuk">
                                <p class="image-description">
                                    <?php echo $item->title; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="col-sm-6 col-lg-4">
                        <a href="<?php echo "works/" . $item->seo_url ?>">
                            <div class="image-wrapper">
                                <img class="myworks-photo" src="../panel/uploads/post_v/<?php echo $item->img_url; ?>"
                                    alt="bozuk">
                                <p class="image-description">
                                    <?php echo $item->title; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>