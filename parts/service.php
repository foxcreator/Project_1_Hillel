<?php if (!empty($content['service'])) : ?>

<section id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="price-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10"><?= $content['service']['service']['text']['title'] ?></h1>
                    <p><?= $content['service']['service']['text']['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 image-wrapper">
                <img src="<?= $content['service']['service']['image']['image1'] ?>" class="img-fluid">
            </div>
            <div class="col-lg-8 image-wrapper">
                <div class="row">
                    <div class="col-lg-6 image-wrapper">
                        <img src="<?= $content['service']['service']['image']['image2'] ?>" class="img-fluid">
                    </div>
                    <div class="col-lg-6 image-wrapper">
                        <img src="<?= $content['service']['service']['image']['image3'] ?>" class="img-fluid">
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-lg-6 image-wrapper">
                        <img src="<?= $content['service']['service']['image']['image4'] ?>" class="img-fluid">
                    </div>
                    <div class="col-lg-6 image-wrapper">
                        <img src="<?= $content['service']['service']['image']['image5'] ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;