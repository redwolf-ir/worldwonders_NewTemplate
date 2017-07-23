<section class="midleNav">
  <div class='tabs tabs_animate'>
    <ul class='horizontal midleNavBtn tab-column'>
      <li class="active"><a href="#tab-1">عجایب هفتگانه</a></li>
      <li><a href="#tab-2">محبوب‌ترین مطالب ماه</a></li>
      <li><a href="#tab-3">به روایت تصویر</a></li>
    </ul>

    <div id='tab-1'>
      <ul>
        <?php
        $my_query = new WP_Query('showposts=5&cat=1');
        while ($my_query->have_posts()):
        $my_query->the_post();
        $do_not_duplicate = $post->ID; ?>
        <li>
          <div class="imgPart">
            <i style="background-image: url(
              <?php $image_id = get_post_thumbnail_id();
              $image_url = wp_get_attachment_image_src($image_id, 'thumb2', true);
              echo $image_url[0]; ?>
              )">
              <a class="img_links" href="<?PHP the_permalink() ?>"
                title="<?php the_title(); ?>">
              </a>
            </i>
          </div>

          <h3>
            <a href="<?PHP the_permalink() ?>"title="<?php the_title(); ?>">
              <?PHP the_title() ?>
            </a>
          </h3>

          <span><?php the_time('j F y'); ?></span>
        </li>
        <?PHP endwhile; wp_reset_query(); ?>
      </ul>
    </div>

    <div id='tab-2'>
      <ul>
        <?php
        $my_query = new WP_Query('showposts=5&cat=2');
        while ($my_query->have_posts()):
        $my_query->the_post();
        $do_not_duplicate = $post->ID; ?>
        <li>
          <div class="imgPart">
            <i style="background-image: url(
              <?php $image_id = get_post_thumbnail_id();
              $image_url = wp_get_attachment_image_src($image_id, 'thumb2', true);
              echo $image_url[0]; ?>
              )">
              <a class="img_links" href="<?PHP the_permalink() ?>"
                title="<?php the_title(); ?>">
              </a>
            </i>
          </div>

          <h3>
            <a href="<?PHP the_permalink() ?>"title="<?php the_title(); ?>">
              <?PHP the_title() ?>
            </a>
          </h3>

          <span><?php the_time('j F y'); ?></span>
        </li>
        <?PHP endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </div>
</section>
