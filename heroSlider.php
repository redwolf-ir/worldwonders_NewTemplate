<div class="width">
  <ul class="heroSlider">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
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
    <?PHP endwhile; ?><?PHP endif ?>
  </ul>
</div>
