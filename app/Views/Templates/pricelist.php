<?php if (false): ?>
    <!-- Старый прайс -->
    <section class="section template_pricelist" id="Pricelist">
        <div>
            <div class="section__heading section__heading_center">
                <h2 class="section__heading__title"><?= $service['pricelist']['block_title']; ?></h2>
            </div>
            <div class="template_pricelist__inner">
                <div class="template_pricelist__inner__item template_pricelist__inner__item--title">
                    <p class="template_pricelist__inner__item__title">Услуга</p>
                    <?php if ($service['service_block']['grade_2']) : ?>
                        <p class="template_pricelist__inner__item__price"><?= $service['service_block']['grade_1'] ?></p>
                        <p class="template_pricelist__inner__item__price"><?= $service['service_block']['grade_2'] ?></p>
                    <?php else: ?>
                        <p class="template_pricelist__inner__item__price">Цена</p>
                    <?php endif; ?>
                </div>
                <?php foreach ($service['pricelist']['items'] as $price) : ?>
                    <div class="template_pricelist__inner__item">
                        <div class="template_pricelist__inner__item__container">
                            <h3 class="template_pricelist__inner__item__title"><?= $price['title']; ?></h3>
                            <p class="template_pricelist__inner__item__subtitle"><?= $price['subtitle']; ?></p>
                        </div>
                        <p class="template_pricelist__inner__item__price"><?= $price['grade_1']; ?></p>
                        <?php if ($service['service_block']['grade_2']): ?>
                            <p class="template_pricelist__inner__item__price"><?= $price['grade_2']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<section class="section template_pricelist" id="Pricelist">
    <div>
        <div class="section__heading section__heading_center">
            <h2 class="section__heading__title">Ознакомиться с полным <span class="color_primary"> меню услуг</span></h2>
        </div>
        <div class="template_pricelist__inner">
            <a class="template__pricelist-link" href="<?= base_url(); ?>/media/mods_price_2025.pdf">
                <svg width="26" height="41" viewBox="0 0 26 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5 0H20H25.5L11.5 41H0.5L14.5 0Z" fill="white"/>
                </svg>
                <span>смотреть</span>
                <svg width="163" height="129" viewBox="0 0 163 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="st0" d="M47.9,59.3c2.2-1.4,2.3-3.3,2.3-6.6V26.6L21.9,4.7v50.5c0,2.1,2,3.4,2.9,4.1H12c1.6-1.2,1.8-2.7,1.8-5.7V3.4v0 c0-1.9-1-3.4-1-3.4h16.9l24.2,19.3L78.1,0L95,0c0,0-1,1.5-1,3.4v0v50.1c0,3,0.2,4.6,1.8,5.7H83.1c0.9-0.7,2.9-2,2.9-4.1V4.7 L57.6,26.6v26.1c0,3.3,0.1,5.2,2.3,6.6H47.9z" fill="white"/>
                    <path class="st0" d="M100.8,30.6c0-17.1,14.2-30.6,31-30.6c16.8,0,31,13.5,31,30.6v0l-8.3,0H109v0c0,12.4,10.3,22.6,22.7,22.6 c10,0,18.7-6.6,21.7-15.7h0h8.6h1c-0.3,0.1-0.5,0.3-0.7,0.5c-0.1,0.1-0.3,0.3-0.4,0.4c-0.1,0.2-0.3,0.4-0.4,0.7 c-3.8,12.9-15.9,22.1-29.8,22.1C115,61.1,100.8,47.7,100.8,30.6L100.8,30.6z M153.9,25.4C151.5,15.5,142.4,8,131.8,8 c-10.6,0-19.8,7.5-22.1,17.5H153.9z" fill="white"/>
                    <path class="st0" d="M22.3,102.1v22.8c0,2.1,2,3.4,3,4.1H12c1.7-1.2,1.9-2.7,1.9-5.7V75.6c0-2.2-0.1-4.2-1.9-5.3h10.3v23.5l0,0H58 l0,0V70.4h10.3c-1.8,1.1-1.9,3-1.9,5.3v47.6c0,3,0.2,4.6,1.9,5.7H55c1-0.7,3-2,3-4.1v-22.8H22.3z" fill="white"/>
                    <path class="st0" d="M131.7,67.9c-15.6,0-28.5,11.3-30.7,26h-7.6l0,0V70.4H83.1c1.8,1.1,1.9,3,1.9,5.3v47.6c0,3-0.2,4.6-1.9,5.7 h13.3c-1-0.7-3-2-3-4.1v-22.8h7.5c1.9,15.1,14.9,26.9,30.8,26.9c17.2,0,31.1-13.7,31.1-30.6S148.9,67.9,131.7,67.9z M131.7,120.8 c-12.6,0-22.7-10-22.7-22.4c0-12.4,10.2-22.4,22.7-22.4s22.7,10,22.7,22.4C154.5,110.8,144.3,120.8,131.7,120.8z"fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</section>