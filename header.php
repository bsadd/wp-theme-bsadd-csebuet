<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BUET, System Analysis, Design and Development Club" />
    <meta name="author" content="Md Imran Hasan Hira">

    <title>Blog Template for Bootstrap</title>

    <?php wp_head();?>
</head>

<body>
    <div class="container">

        <div id="banner" class="row">
            <div class="col-xs-12">
                <span>
                    <img class="d-inline" src="<?= bloginfo( 'template_directory' ) ?>/img/buet_logo_300.png" />
                    <h1 class="d-inline"> Department of CSE, BUET </h1>
                </span>
                <span> <h2> <a href="<?= bloginfo( 'wpurl' );?>"><?= get_bloginfo( 'description' ); ?></a> </h2> </span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 blog-masthead">
                <nav class="blog-nav">
                    <li><a class="blog-nav-item active" href="<?= bloginfo( 'wpurl' );?>">Home</a></li>
                    <?php wp_list_pages( '&title_li=' ); ?>
                </nav>
            </div>
        </div>
