<span class="hidden-phone">
    <?php use_stylesheet('/sfSocialButtonsPlugin/css/socialButtons') ?>
    <a rel="popup" class="btn btn-sm socialBtn google" target="_blank" href="https://plus.google.com/share?url=<?php echo $url ?>">
        <i class="socialBtn-icon-googleplus"></i><?php echo __('gplus') ?> (<?php echo $plus; ?>)
    </a>
    <a rel="popup" class="btn btn-sm socialBtn facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url ?>&t=<?= $item ?>">
        <i class="socialBtn-icon-facebook"></i><?php echo __('facebook') ?> (<?php echo $likes; ?>)
    </a>
     <a rel="popup" class="btn btn-sm socialBtn twitter" target="_blank" href="https://twitter.com/share?url=<?php echo $url ?>">
        <i class="socialBtn-icon-twitter"></i><?php echo __('twitter') ?> (<?php echo $tweets; ?>)
    </a>
</span>

