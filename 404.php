<?php get_header(); ?>

<div class="width">
  <section class="indexPagePosts marginTop">
      <aside class="defaultContent">
        <div class="searchNothingFound">
          <h1>هِی‌وااااااای‌ِمَن</h1>
          <h2>خطای 404</h2>
          <h2>صفحه مورد نظر پیدا نشد.</h2>
          <p>بهتر است به <a href="http://7ww.ir">صفحه نخست</a>
          بازگردید و یا از فُرم جستجو برای رسیدن به مقصد درست خود استفاده کنید. 
          </p>


            <form class="searchForm" method="get" action="<?php bloginfo('home'); ?>/" name="search">
                <input type="search" placeholder="جستجو ..." class="searchInput" name="s"/>
                <button type="submit" class="search-submit"><span class="icon-search"></span></button>
            </form>
        </div>
      </aside>
  </section>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
