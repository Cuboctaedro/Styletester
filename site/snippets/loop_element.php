
    <section class="styletester-element-wrapper" id="<?php echo $page->category()->uid() ?>-<?php echo $page->subcategory()->uid() ?>-<?php echo $page->uid() ?>">

        <div class="styletester-info">
            <header class="styletester-header">
                <h4><?php echo $page->title()->html() ?></h4>
            </header>
            <div class="styletester-notes">
                <?php echo $page->text()->kirbytext() ?>
            </div>
            <?php if($page->hasRelated()): ?>
                <div class="styletester-related">
                    <span>Related elements:</span></br>
                    <ul>
                        <?php foreach($page->related()->yaml() as $related): ?>
                        <?php $relatedpage = page($related['element']) ?>
                            <li>
                                <a href="<?php echo $relatedpage->url() ?>"><?php echo $relatedpage->title()->html() ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <a class="styletester-button" href="<?php echo $page->view()->url() ?>" target="_blank"><i class="fa fa-external-link"></i> Raw View</a>

    <?php if($page->hasHtmlcode()): ?>
        <button type="button" class="styletester-code-button"><i class="fa fa-code"></i> Code</button>
        <div class="styletester-code">
            <pre class="lang-markup"><code><?php echo html($page->htmlcode(), $keepTags = false) ?></code></pre>
        </div>
    <?php endif; ?>


        <div class="styletester-view">
            <?php echo $page->htmlcode()->html() ?>
        </div>

    </section>
