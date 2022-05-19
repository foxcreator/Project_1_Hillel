<?php

if (!empty($content['home']) && !empty($content['home']['slides'])):  ?>
<section id="home">
    <div class="container">
        <div class="row banner-row d-flex align-items-center justify-content-start">

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach($content['home']['slides'] as $key => $slide): ?>
                    <div class="carousel-item <?= ($key == 0 ? 'active' : '') ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 banner-slide-container">
                                    <h6><?= $slide['title'] ?></h6>
                                    <h1><?= $slide['description'] ?></h1>
                                    <a href="<?= $slide['button']['href'] ?>"
                                       class="btn btn-outline-light text-uppercase">
                                        <?= $slide['button']['text'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
              <?php endforeach; ?>




                </div>

            </div>

        </div>
    </div>
</section>
</div>
</div>
</header>

 <?php endif; ?>