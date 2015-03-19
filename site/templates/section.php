<?php snippet('header') ?>

<iframe id="st-iframe" src="<?php echo $page->view()->url() ?>"name="<?php echo $page->uid() ?>" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation" >
</iframe>

<?php snippet('footer') ?>