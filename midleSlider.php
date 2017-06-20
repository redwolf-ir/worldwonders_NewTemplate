<div class="width">
  <ul class="heroSlider">
    <?php
    $my_query = new WP_Query('showposts=5&cat=1');
    while ($my_query->have_posts()):
    $my_query->the_post();
    $do_not_duplicate = $post->ID; ?>
    <li>
      <i style="background-image: url(
      <?php $image_id = get_post_thumbnail_id();
      $image_url = wp_get_attachment_image_src($image_id, 'thumb2', true);
      echo $image_url[0]; ?>
      )"></i>
      <aside class="heroSliderShadow">
        <div class="heroSlider_txtPart">
          <h3><?PHP the_title() ?></h3>
          <span>«<?php the_time('j F y'); ?>»</span>
        </div>
      </aside>
      <a href="#"></a>
    </li>
    <?PHP endwhile; wp_reset_query(); ?>
  </ul>
</div>
