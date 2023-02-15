<? 
$title = carbon_get_the_post_meta( 'block_title');
$btn_label = carbon_get_the_post_meta( 'block_btn_label');
?>
<header class="header-block">
    <h2 class="header-block__title title"><? echo $title; ?></h2>
<? if($btn_label){ ?>
    <a href="<? carbon_get_the_post_meta( 'block_btn_link'); ?>" class="header-block__link">
       
           <? if(carbon_get_the_post_meta( 'block_btn_icon')){ ?>
        <div class="icon-wrapper-14">  
            <i class="fa-solid <? echo carbon_get_the_post_meta( 'block_btn_icon')['class']?>"></i>
        </div>
         <?  } ?>
         
        <span><? echo $btn_label; ?></span>
    </a>
<? } ?>      
</header>