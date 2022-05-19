<?php
if (!empty($content['header'])): ?>
<header id="header">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <div id="logo">
                <a href="<?= $content['header']['logo']['link'] ?>">
                    <img src="<?= $content['header']['logo']['image'] ?>" alt="logo">
                </a>
            </div>

            <nav id="nav-menu-container">
                <?php if (!empty($content['header']['links'])) ?>
                <ul class="nav-menu">
                    <?php foreach ($content['header']['links'] as $key => $link): ?>
                    <li class="<?= ($key === 0 ? 'menu-active' : '') ?>">
                        <a href="<?= ($link['anchor'] ? $link['href'] : DOMAIN . $link['href']) ?>"
                        ><?= $link['title'] ?></a></li>
                        </a>
                    </li>
                <?php endforeach; ?>
                    <li>|</li>
                    <li><a href="<?= DOMAIN ?>/login">Sign In</a></li>
                    <li><a href="<?= DOMAIN ?>/register">Sign Up</a></li>
                </ul>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>