
<h1 class="tieude_giua"><span><?=$title_cat?></span></h1>
<div class="box_container">
    <div class="content">           
        <?=$row_detail['noidung']?> 


        <?php if(count($hinhthem) > 0) { ?>
            <link href="css/fotorama.css" rel="stylesheet">
            
            <div class="fotorama" data-nav="thumbs" data-maxheight="550" data-arrows="true" data-thumbwidth="" data-thumbheight="" data-loop="true" data-autoplay="4000" data-fit="contain" data-allowfullscreen="true" data-stopautoplayontouch="false">        
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                    <img src="<?=_upload_hinhthem_l.$hinhthem[$j]['photo']; ?>" />
                <?php } ?>
            </div>
        <?php } ?>
        
        <?php if(!empty($tags_sp)) { ?>
            <div class="tukhoa">
                <div id="tags">
                    <span>Tags:</span>
                    <?php foreach($tags_sp as $k=>$tags_sp_item) { ?>
                       <a href="tag/<?=changeTitle($tags_sp_item['ten'])?>/<?=$tags_sp_item['id']?>" title="<?=$tags_sp_item['ten']?>"><?=$tags_sp_item['ten']?></a>
                    <?php } ?>
                    <div class="clear"></div>
                </div>                  
            </div>   
        <?php } ?>
        
        <div class="addthis_native_toolbox">
            <div class="fb-like" data-href="<?=getCurrentPageURL()?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

            <div class="zalo-share-button" data-href="<?=getCurrentPageURL()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>
        </div>

        <?php if(count($tintuc) > 0) { ?>   
        <div class="othernews">
             <div class="cactinkhac"><?=$title_other?></div>
             <ul class="phantrang">
                <?php foreach($tintuc as $k => $value){ ?>
                    <li><a href="<?=$value['tenkhongdau']?>" title="<?=$value['ten']?>"><?=$value['ten']?></a></li>
                <?php }?>
             </ul> 
             <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div> 
        </div><!--.othernews-->
        
        <?php }?>     
    </div><!--.content-->
</div><!--.box_container-->


         