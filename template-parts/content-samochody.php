<div class="news__card">
    <div class="news__card__thumbnail">
       <?php 
        if(get_field('zdjecie')){
           ?>
            <img src="<?php echo get_field('zdjecie'); ?>" alt="">
           <?php
        }
       ?>
    </div>
    <div class="news__card__content">
    <div class="news__card__excerpt">
        <?php if(get_field('marka')) : ?>
            <?php echo "<div>Marka: <strong>".get_field('marka')."</strong></div>"; ?>
        <?php endif; ?>
        <?php if(get_field('przebieg')) : ?>
            <?php echo "<div>Przebieg: <strong>".get_field('przebieg')."</strong></div>"; ?>
        <?php endif; ?>
        <?php if(get_field('pojemnosc')) : ?>
            <?php echo "<div>Pojemność: <strong>".get_field('pojemnosc')."</strong></div>"; ?>
        <?php endif; ?>
        <?php if(get_field('cena')) : ?>
            <?php echo "<div>Cena: <strong>".get_field('cena')."</strong></div><br>"; ?>
        <?php endif; ?>
    </div>
    <div class="news__card__button">
        <a href="<?php echo get_the_permalink(); ?>" class="button_small">Lorem</a>
     </div>
    </div>

</div>