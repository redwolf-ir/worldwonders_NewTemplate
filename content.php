<section class="singlePagePostsDefault marginTopReverse">
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?><?php $count++; ?>
  <aside class="defaultContentSinglePage">
    <div class="widthSingle">
      <div class="singleMainTitle">
        <span><?php the_category('') ?></span>
        <h1><?PHP the_title() ?></h1>
      </div>
      <i class="singlePageThumbnail" style="background-image: url(
        <?php $image_id = get_post_thumbnail_id();
        $image_url = wp_get_attachment_image_src($image_id, 'thumb2', true);
        echo $image_url[0]; ?>
        )"></i>

        <div class="singlePostDetail">
          <ul class="related_single_details_analsys">
            <li>نوشته‌ی: <?php the_author_posts_link(); ?></li>
            <li><?php the_time('j F y'); ?></li>
          </ul>

          <ul class="">
            <li><a class="btnCat"  href="#" onclick="return false;"><i class="icon-stack"></i></a></li>
            <li><a class="btnFav" href="#" onclick="return false;"><i class="icon-fire"></i></a></li>
            <li><a id="btnSoc" href="#" onclick="return false;"><i class="icon-share2"></i></a></li>
          </ul>
        </div>

        <aside>
          <?php the_content(); ?>
        </aside>

        <div class="footer_singlePage">
          <div class="cloudTags">
            <span class="icon-price-tag"></span> <?php the_tags(','); ?>
          </div>

          salam
        </div>
    </div>
  </aside>
  <?PHP endwhile; ?>
  <?PHP endif ?>
</section>
