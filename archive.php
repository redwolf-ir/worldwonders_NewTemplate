<?php get_header(); ?>
<div class="width">
  <section class="topTitle">
    <h2 class="marginTop">آرشیو مقالات <span><?php echo single_cat_title(); ?></span></h2>
  </section>
</div>

<div class="width">
  <section class="indexPagePosts">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?><?php $count++; ?>
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
    <?PHP endwhile; ?>
    <?php else : ?>
      <aside class="defaultContent">
        <div class="searchNothingFound">
          <h1>موردی با عنوان <span><?php printf(the_search_query()); ?></span> یافت نشد.</h1>
          <p>اگر تصور میکنید جای این مطلب در عجایب جهان خالی است آن را با ما
            <a href="http://7ww.ir/contact" title="ارتباط با ما">در میان بگذارید</a>
            و یا مورد دیگری را جستجو فرمایید.</p>

            <form class="searchForm" method="get" action="<?php bloginfo('home'); ?>/" name="search">
                <input type="search" placeholder="جستجو ..." class="searchInput" name="s"/>
                <button type="submit" class="search-submit"><span class="icon-search"></span></button>
            </form>
        </div>
      </aside>
    <?PHP endif ?>
  </section>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
