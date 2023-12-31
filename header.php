<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akina
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- 随机切换模型材质 -->
<script src="https://fastly.jsdelivr.net/gh/cooliceycold/live@latest/jsdelivr/random/autoload.js"></script>
<!-- 看板娘位置靠左 -->
<link rel="stylesheet" href="https://fastly.jsdelivr.net/gh/cooliceycold/live@latest/css/left.css"/>

	
    <title itemprop="name">
        <?php
        global $page, $paged;
        wp_title('-', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page())) echo " - $site_description";
        if ($paged >= 2 || $page >= 2) echo ' - ' . sprintf(__('第 %s 页'), max($paged, $page));
        ?>
    </title>
    <?php
    if (akina_option('akina_meta') == true) {
        $keywords = '';
        $description = '';
        if (is_singular()) {
            $keywords = '';
            $tags = get_the_tags();
            $categories = get_the_category();
            if ($tags) {
                foreach ($tags as $tag) {
                    $keywords .= $tag->name . ',';
                };
            };
            if ($categories) {
                foreach ($categories as $category) {
                    $keywords .= $category->name . ',';
                };
            };
            $description = mb_strimwidth(str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');
        } else {
            $keywords = akina_option('akina_meta_keywords');
            $description = akina_option('akina_meta_description');
        };
        ?>
        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="keywords" content="<?php echo $keywords; ?>"/>
    <?php } ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/OwO/meme.css"/>
    <?php if (akina_option('live2d_s') != '0') { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/live2d/css/live2d.css"/>
    <?php } ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/sweet-alert.css"/>
    <?php if (akina_option('shuoshuo') == 'yes') { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/shuoshuo.css"/>
    <?php } ?>
    <?php if (akina_option('picture_m') == 'single') { ?>
        <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/zooming@1.5.0/build/zooming.min.js"></script>
    <?php } ?>
    <?php if (akina_option('laziness_img') != '0') { ?>
        <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.min.js"></script>
    <?php } ?>
    <?php wp_head(); ?>
    <?php if (akina_option('google_analytics_1')) { ?>
        <script async src="<?php echo akina_option('google_analytics_1'); ?>"></script>
    <?php } ?>
    <?php if (akina_option('google_analytics_2')) { ?>
        <script>
            <?php echo akina_option('google_analytics_2'); ?>
        </script>
    <?php } ?>
    <!--[if IE]>
    <script type="text/javascript">
        if (!!window.ActiveXObject || "ActiveXObject" in window) {
            alert('请抛弃万恶的IE浏览器吧！请更换浏览器访问本博客呢……');
        }
    </script>
    <![endif]-->
    <?php if (akina_option('web_title') != '0') { ?>
        <script type="text/javascript">
            var title = {
                focus: '<?php echo akina_option('onfocus'); ?>',
                blur: '<?php echo akina_option('onblur'); ?>',
            }
        </script>
    <?php } ?>
    <?php if (akina_option('right_click') != '0') { ?>
        <script type="text/javascript">
            document.oncontextmenu = function () {
                return false;
            };
        </script>
    <?php } ?>
</head>
<body <?php body_class(); ?>>
<section id="main-container">
    <?php if (!akina_option('head_focus')) {
        $filter = akina_option('focus_img_filter');
        ?>
        <div class="headertop <?php echo $filter; ?>">
            <?php get_template_part('layouts/imgbox'); ?>
        </div>
    <?php } ?>
<style>
	.search-form.is-visible {
    visibility: visible;
    opacity: .98;
    animation: elastic .5s;
    background-image: url('<?php echo get_random_bg_url(); ?>');
    background-size: cover;
}
</style>		    
<!-- 图片放大 -->
<script>
function initImg() {
    if (screen && screen.width > 860) {
        var zooming = new Zooming({
            defaultZoomable: '.entry-content img',
            bgColor: 'rgba(0, 0, 0, .7)'
        })
    }
}
</script>
	
<!-- 点击爆炸 -->
<script src="https://fastly.jsdelivr.net/npm/animejs@2.2.0/anime.min.js"></script>
<!-- 点击放大 -->
<script src="https://fastly.jsdelivr.net/npm/zooming@1.5.0/build/zooming.min.js"></script>
<!-- 石蒜 -->
<div class="sakana-box"></div>
<script src="https://fastly.jsdelivr.net/npm/sakana"></script>
<script>
Sakana.init({
  el:         '.sakana-box',     // 启动元素 node 或 选择器
  scale:      .5,                // 缩放倍数
  canSwitchCharacter: true,      // 允许换角色
});
</script>
<style>
html .sakana-box{
  position: fixed;
  right: 0;
  bottom: 0;
  transform-origin: 100% 100%; /* 从右下开始变换 */}
</style>
<!-- 石蒜 -->
<!-- 樱花 -->
<script src="https://jsd.cdn.zzko.cn/gh/lizina66/api/img/jpuer.js"></script>
    <div id="page" class="site wrapper">
        <header class="site-header" role="banner">
            <div class="site-top">
                <div class="site-branding">
                    <?php if (akina_option('akina_logo')){ ?>
                        <div class="site-title">
                            <a href="<?php bloginfo('url'); ?>"><img src="<?php echo akina_option('akina_logo'); ?>"></a>
                        </div>
                    <?php }else{ ?>
                    <h1 class="site-title">
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                    <?php } ?><!-- logo end -->
                </div>
                <!-- .site-branding -->
                <?php header_user_menu();
                if (akina_option('top_search') == 'yes') { ?>
                    <div class="searchbox">
                        <i class="iconfont js-toggle-search iconsearch">&#xe65c;</i>
                    </div>
                <?php } ?>
                <div class="lower"><?php if (!akina_option('shownav')) { ?>
                        <div id="show-nav" class="showNav">
                            <div class="line line1"></div>
                            <div class="line line2"></div>
                            <div class="line line3"></div>
                        </div><?php } ?>
                    <nav><?php wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary', 'container' => false)); ?></nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </header>
        <!-- #masthead -->
        <?php the_headPattern(); ?>
        <div id="content"
             class="site-content">
