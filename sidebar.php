<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p><?php the_author_meta( 'description' ); ?></p>
    </div>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>

<?php if ( has_nav_menu( 'sidebar-nav-menu' ) ) { ?>
    <div class="sidebar-module">
        <h4>Menu</h4>
        <div class="sidebar-nav-menu">
            <?php wp_nav_menu( array('theme_location' => 'sidebar-nav-menu', 'container' => '' ) );?>
        </div>
    </div>
<?php } ?>

</div><!-- /.blog-sidebar -->
