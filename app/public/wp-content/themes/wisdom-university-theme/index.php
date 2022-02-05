<?php 
get_header();

bloginfo('description');

while(have_posts()) {
    the_post();?>
        <h1 class="Head1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php 
}

get_footer();