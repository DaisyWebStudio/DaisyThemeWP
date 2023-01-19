<?php
get_header(); ?>
<div class="single-content__wrap">
<? while ( have_posts() ) : the_post(); 
the_title();
endwhile;
?>
</div>
<style>
    .single-content__wrap{
        margin-top: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<?php
get_footer(); ?>
