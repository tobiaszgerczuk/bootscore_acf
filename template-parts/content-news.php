<div class="news__card">
    <div class="news__card__thumbnail">
       <?php 
        if(has_post_thumbnail()){
            the_post_thumbnail();
        }
       ?>
    </div>
    <div class="news__card__content">
    <div class="news__card__excerpt">
        <?php the_content(); ?>
    </div>
    <div class="news__card__button">
        <a href="<?php echo get_the_permalink(); ?>" class="button_small">Lorem</a>
     </div>
    </div>

</div>