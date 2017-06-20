<div class="width">
  <section class="indexPagePosts">
    <?php if (have_posts()) : ?><?php $count = 0; ?>
    <?php while (have_posts()) : the_post(); ?><?php $count++; ?>
    <?php if ($count == 3) : ?>
    <?php include (TEMPLATEPATH . '/midleNav.php'); ?>
    <?php endif; ?>
    <?php if ($count == 5) : ?>
    <?php include (TEMPLATEPATH . '/midleSlider.php'); ?>
    <?php endif; ?>
    <aside class="defaultContent">
      <div class="txtPart">
        <?php the_category('') ?>

        <h2>
          <a href="<?PHP the_permalink() ?>"title="<?php the_title(); ?>">
            <?PHP the_title() ?>
          </a>
        </h2>

        <ul class="postDetails">
          <li><?php the_author_posts_link(); ?></li>
          <li><?php the_time('j F y'); ?></li>
          <li><a class="comment-count"
            href="<?PHP the_permalink() ?>/#commentssingle">
            <?php
              comments_number('افزودن دیدگاه', '1 دیدگاه', '% دیدگاه');
            ?></a>
          </li>
        </ul>

        <p><?php the_content_rss('', TRUE, '', 40); ?></p>
      </div>
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
    </aside>
    <?PHP endwhile; ?><?PHP endif ?>
    <div class="numeric_pages"><?php wp_pagination(); ?></div>
  </section>
</div>
