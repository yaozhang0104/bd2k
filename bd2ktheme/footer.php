<?php
/**
 * Template: Footer.php
 *
 * @package EvoLve
 * @subpackage Template
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/mymenu.js" ?>></script>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/wk.js" ?>></script>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/feature_slider.js" ?>></script>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/mapinfo.js" ?>></script>


<script>
   jQuery('.twitter-block').on('DOMSubtreeModified propertychange',"#twitter-widget-1", function() {
        jQuery(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
        jQuery(".twitter-block").css("height", "100%");
    });
</script>
<script>
   jQuery('.twitter-block').on('DOMSubtreeModified propertychange',"#twitter-widget-0", function() {
        jQuery(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
        jQuery(".twitter-block").css("height", "100%");
    });
</script>
<script>
$(window).load(function() {  
    init();
    map_init();
});
</script>


<!--END #content-->
</div>
<!--END .container-->
</div>
<!--END .content-->
</div>
<!--BEGIN .content-bottom-->
<div class="content-bottom">
    <!--END .content-bottom-->
</div>

<!--BEGIN .footer-->
<div class="footer">
    <!--BEGIN .container-->
    <div class="container container-footer">
        <?php
        $evolve_widgets_footer = evolve_get_option('evl_widgets_num', 'disable');
        // if Footer widgets exist
        if (($evolve_widgets_footer == "") || ($evolve_widgets_footer == "disable")) {
            
        } else {
            ?>
            <?php
            $evolve_footer_css = '';
            if ($evolve_widgets_footer == "one") {
                $evolve_footer_css = 'widget-one-column col-sm-6';
            }
            if ($evolve_widgets_footer == "two") {
                $evolve_footer_css = 'col-sm-6 col-md-6';
            }
            if ($evolve_widgets_footer == "three") {
                $evolve_footer_css = 'col-sm-6 col-md-4';
            }
            if ($evolve_widgets_footer == "four") {
                $evolve_footer_css = 'col-sm-6 col-md-3';
            }
            ?>
            <div class="footer-widgets">
			<div class="widgets-back-inside row">
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-1')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-2')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-3')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-4')) : ?>
                    <?php endif; ?>
                </div>
            </div>
			</div>
        <?php } ?>
        <div class="clearfix"></div>
        <div class="hline"> </div>
        <?php
        $footer_content = evolve_get_option('evl_footer_content', '<p id=\"copyright\"><span class=\"credits\"><a href=\"http://theme4press.com/evolve-multipurpose-wordpress-theme/\">evolve</a> theme by Theme4Press&nbsp;&nbsp;&bull;&nbsp;&nbsp;Powered by <a href=\"http://wordpress.org\">WordPress</a></span></p>');
        if ($footer_content === false)
            $footer_content = '';
        echo do_shortcode($footer_content);
        ?>
        <br>
        <div style="margin:auto; width: 150px;"><a href="https://twitter.com/BD2K_CCC" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @BD2K_CCC</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
        <div onclick="javascript:$('#sub_box').slideDown();" title="Subscribe" style="width:30px;height:30px;margin:auto;margin-top:10px;cursor:pointer;"><img style="width:100%;height:100%" src=<?php echo "'" . get_template_directory_uri() . "/asset/sub.png'"?>></div>
        <div id="sub_box" style="display:none;">
        <?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
        </div>

        <!-- Theme Hook -->
        <?php evolve_footer_hooks(); ?>
        <!--END .container-->
    </div>
    <!--END .footer-->
</div>
<!--END body-->
<?php
$evolve_pos_button = evolve_get_option('evl_pos_button', 'right');
if ($evolve_pos_button == "disable" || $evolve_pos_button == "") {
    ?>
<?php } else { ?>
    <a href="#top" id="top-link"><div id="backtotop"></div></a>
    <?php } ?>
    <?php
    $evolve_custom_background = evolve_get_option('evl_custom_background', '0');
    if ($evolve_custom_background == "1") {
        ?>
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>
<!--END html(kthxbye)-->
</html>