<?php if (!empty($content['about'])) : ?>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 video">
                <div class="overlay"></div>
                <a href="<?= $content['about']['sides']['left']['link'] ?>" class="play-btn">
                    <img src="<?= $content['about']['sides']['left']['image'] ?>" class="img-fluid" alt="sorry, not image">
                </a>
            </div>
            <div class="col-md-6 p-5">
                <h6><?= $content['about']['sides']['right']['caption'] ?></h6>
                <h1><?= $content['about']['sides']['right']['title'] ?></h1>
                <p><?= $content['about']['sides']['right']['description'] ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif;