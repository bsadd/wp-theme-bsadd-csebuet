<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

<?php if ( is_active_sidebar( 'sidebar_widget' ) ) { ?>
    <div class="sidebar-module">
        <?php dynamic_sidebar( 'sidebar_widget' ); ?>
    </div>
<?php } ?>


<?php if ( has_nav_menu( 'sidebar-nav-menu' ) ) { ?>
    <div class="sidebar-module">
        <h4>Menu</h4>
        <div class="sidebar-nav-menu">
            <?php wp_nav_menu( array('theme_location' => 'sidebar-nav-menu', 'container' => '' ) );?>
        </div>
    </div>
<?php } ?>

</div><!-- /.blog-sidebar -->
