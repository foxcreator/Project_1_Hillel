<?php if (!empty($content['blog'])) : ?>

<section id="blog">
    <div class="container">
        <div class="row m-2 justify-content-center">

            <div class="title text-center pb-4">
                <h1><?= $content['blog']['review']['title']['title'] ?></h1>
                <h3><?= $content['blog']['review']['title']['discription'] ?></h3>
            </div>


            <div class="col-md-4 review">
                <h6><?= $content['blog']['review']['blocks']['left']['name'] ?>
                    <img src="<?= SRC_URI . $content['blog']['review']['blocks']['left']['image'] ?>" alt="five stars"></h6>

                <br>
                <p class="text-review"><?= $content['blog']['review']['blocks']['left']['text'] ?></p>


            </div>

            <div class="col-md-4 review">
                <h6><?= $content['blog']['review']['blocks']['left']['name'] ?>
                    <img src="<?= SRC_URI . $content['blog']['review']['blocks']['left']['image'] ?>" alt="five stars"></h6>

                <br>
                <p class="text-review"><?= $content['blog']['review']['blocks']['left']['text'] ?></p>
            </div>
            <div class="row m-4 justify-content-center">
                <div class="col-md-2">
                    <h1>1234</h1>
                    <h6>Happy Client</h6>
                </div>
                <div class="col-md-2">
                    <h1>345</h1>
                    <h6>Total projects</h6>
                </div>
                <div class="col-md-2">
                    <h1>543</h1>
                    <h6>Car repair</h6>
                </div>
                <div class="col-md-2">
                    <h1>10</h1>
                    <h6>Years of work</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-4 blog-link">
                <div>
                    <a href="<?= $content['blog']['review']['article']['link'] ?>" target="_blank">
                        <img src="<?= $content['blog']['review']['article']['image'] ?>" class="img-fluid" alt="sorry, not image">
                    </a>
                </div>
                <div class="blog-text">
                    <h3><?= $content['blog']['review']['article']['title'] ?></h3>
                    <p><?= $content['blog']['review']['article']['discription'] ?></p>
                    <h6><?= $content['blog']['review']['article']['data'] ?></h6>
                </div>
            </div>
            <div class="col-md-4 blog-link">
                <div>
                    <a href="<?= $content['blog']['review']['0']['link'] ?>" target="_blank">
                        <img src="<?= $content['blog']['review']['0']['image'] ?>" class="img-fluid" alt="sorry, not image">
                    </a>
                </div>
                <div class="blog-text">
                    <h3><?= $content['blog']['review']['0']['title'] ?></h3>
                    <p><?= $content['blog']['review']['0']['discription'] ?></p>
                    <h6><?= $content['blog']['review']['0']['data'] ?></h6>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endif;