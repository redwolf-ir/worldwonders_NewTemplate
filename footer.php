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
