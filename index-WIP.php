<?php
/**
 * Created by PhpStorm.
 * User: huweius
 * Date: 7/24/16
 * Time: 1:15 AM
 */
?>

<?php

    try{
    get_header();
    }
    catch (Exception $e) {
        echo 'Header Placeholder';
    }


?>
<div id="main">
    <div id="content">
        <div class="row panel">
            <div class="col-md-9">
                <h1>Featured Story</h1>
                <?php if (have_posts()): the_post(); ?>
                <h2><?php the_title();?></h2>
                <p><i>Published on yyyy-mm-dd. Written by Toike Oike</i></p>
            </div>
            <div class="col-md-3 text-center">
                <h2>Current Issue</h2>
                <h4>March 2016</h4>
                <img src="statics/Toike-march-2016-cover-200x268.jpg">
                <h6>View PDF</h6>
                <h6>Archives</h6>
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
