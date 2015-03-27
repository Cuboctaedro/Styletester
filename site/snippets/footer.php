    </div>
  </div>
<!--LOAD CUSTOM JS-->
<?php $guide = $pages->filterBy('intendedTemplate','==', 'guide')->findOpen() ?>
<?php if($guide->hasJsinfooter()): ?>
  <?php foreach($guide->footerjs()->yaml() as $jsfile): ?>
    <script src="<?php echo $site->url() ?>/<?php echo $jsfile['path'] ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>
</body>

</html>