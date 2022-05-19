<?php if (!empty($content['contact_us'])) : ?>
<section id="contact-us">
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-4 footer">
                <h4><?= $content['contact_us']['left']['title'] ?></h4>
                <p><?= $content['contact_us']['left']['text'] ?></p>
                <br>
                <p><?= $content['contact_us']['left']['discription'] ?></p>
            </div>
            <div class="col-md-4 footer">
                <h4><?= $content['contact_us']['center']['title'] ?></h4>
                <p><?= $content['contact_us']['center']['discription'] ?></p>
                <input class="email" name="email" type="email">
                <a href="#" class="btn-email btn-warning">Go</a>
            </div>
            <div class="col-md-2 footer">
                <h4><?= $content['contact_us']['right']['title'] ?></h4>
                <p><?= $content['contact_us']['right']['discription'] ?></p>
                <div class="social">

                    <a href="<?= $content['contact_us']['right']['social']['twitter']['link'] ?>">
                        <img class="img-social"
                                     src="<?= $content['contact_us']['right']['social']['twitter']['image'] ?>"></a>
                    <a href="<?= $content['contact_us']['right']['social']['instagram']['link'] ?>">
                        <img class="img-social"
                                     src="<?= $content['contact_us']['right']['social']['instagram']['image'] ?>"></a>
                    <a href="<?= $content['contact_us']['right']['social']['facebook']['link'] ?>">
                        <img class="img-social"
                                     src="<?= $content['contact_us']['right']['social']['facebook']['image'] ?>"></a>
                    <a href="<?= $content['contact_us']['right']['social']['youtube']['link'] ?>">
                        <img class="img-social"
                                     src="<?= $content['contact_us']['right']['social']['youtube']['image'] ?>"></a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php endif;