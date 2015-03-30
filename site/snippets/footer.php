    <a id="styletester-to-top" href="#styletester-content-wrapper">Top <i class="fa fa-arrow-up"></i></a>
    </div>
  </div>
<code>
clicking on "#styletester-show-sizesoprtions" toggles class "visible" on "#styletester-menu-sizes"
clicking on "#styletester-sizes-xs" toggles class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-xs" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-s" toggles class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-s" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-m" toggles class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-l, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-m" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-l" toggles class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-xl, styletester-sizes-f" removes class "styletester-l" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xl" toggles class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-f" removes class "styletester-xl" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-f" toggles class "styletester-f" on "#styletester-content-wrapper"
clicking on "#styletester-sizes-xs, styletester-sizes-s, styletester-sizes-m, styletester-sizes-l, styletester-sizes-xl" removes class "styletester-f" on "#styletester-content-wrapper"
clicking on "#styletester-show" toggles class "showmenu" on "#styletester-site-wrapper"
clicking on ".styletester-code-button" toggles class "visible" on "target"
</code>
<!--LOAD CUSTOM JS-->
<?php $guide = $pages->filterBy('intendedTemplate','==', 'guide')->findOpen() ?>
<?php if($guide->hasJsinfooter()): ?>
  <?php foreach($guide->footerjs()->yaml() as $jsfile): ?>
    <script src="<?php echo $site->url() ?>/<?php echo $jsfile['path'] ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
</body>

</html>