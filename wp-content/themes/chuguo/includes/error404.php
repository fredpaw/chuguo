
<p class='entry-content'><strong style="font-size:16px;"><?php _e('Nothing Found', 'avia_framework'); ?></strong><br/>

</p>

<div class='hr_invisible'></div>

<section class="404_recommendation">
    <p><?php _e('For best search results, mind the following suggestions:', 'avia_framework'); ?></p>
    <ul class='borderlist-not'>
        <li><?php _e('Always double check your spelling.', 'avia_framework'); ?></li>
        <li><?php _e('Try similar keywords, for example: tablet instead of laptop.', 'avia_framework'); ?></li>
        <li><?php _e('Try using more than one keyword.', 'avia_framework'); ?></li>
    </ul>

    <div class='hr_invisible'></div>

    <h3 class=''><?php _e('Feel like browsing some posts instead?', 'avia_framework'); ?></h3>

    <?php
    the_widget('avia_combo_widget', 'error404widget', array('widget_id'=>'404',
            'before_widget' => '<div class="widget avia_combo_widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        ));
        
    do_action('ava_after_content', '', 'error404');
    ?>
</section>
