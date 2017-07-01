<div class="width">
  <footer class="footer">
    <p class="first_copyright">کلیه حقوق مادی و معنوی برای وب سایت <a
    href="http://7ww.ir/">عجایب
    جهان</a> محفوظ می باشد
    </p>
    <p class="second_copyright">طراحی و کد نویسی شده توسط <a target="_blank" href="http://redwolf.ir">گرگ سُرخ</a></p>
    <p>© کپی‌رایت: <?php echo jdate ('F Y') ; ?></p>
  </footer>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>عجایب جهان و دیگر رسانه‌ها</h2>
    <p>برای مطلع شدن از بروز رسانی سایت و همچنین دریافت جدیدترین و بروزترین مقالات ما در شبکه‌های اجتماعی و خبرنامه عجایب جهان عضو شوید.</p>
    <hr>
    <p class="modalPtxt2">برای عضویت در خبرنامه ابتدا ایمیل خود را در فرم زیر ثبت کنید، سپس ایمیل خود را برای تایید عضویت بررسی فرمایید.</p>

    <form
        onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=7ww', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"
        target="popupwindow" method="post" action="http://feedburner.google.com/fb/a/mailverify">
        <span class="icon-logo"></span>
        <input type="text" id="email" name="email" placeholder="Enter Your Email Adress ..."/>
        <input type="hidden" name="uri" value="7ww"/>
        <input type="hidden" value="en_US" name="loc"/>
        <button>مشترک شوید</button>
    </form>

    <ul class="modalIcons">
      <li><a class="btnCat" data-balloon="تولتیپ مخصوص توضیح" data-balloon-pos="up"  href="#" onclick="return false;"><i class="icon-stack"></i></a></li>
      <li><a class="btnFav" href="#" onclick="return false;"><i class="icon-fire"></i></a></li>
      <li><a class="btnCat"  href="#" onclick="return false;"><i class="icon-stack"></i></a></li>
      <li><a class="btnFav" href="#" onclick="return false;"><i class="icon-fire"></i></a></li>
      <li><a class="btnCat"  href="#" onclick="return false;"><i class="icon-stack"></i></a></li>
      <li><a class="btnFav" href="#" onclick="return false;"><i class="icon-fire"></i></a></li>
    </ul>
  </div>
</div>

<script type="text/javascript">
var header = document.querySelector(".header");
var headroom = new Headroom(header, {
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});
headroom.init();
</script>

<?php wp_footer(); ?>

</body>
</html>
