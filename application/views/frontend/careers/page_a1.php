<div class="float_container" data-page-name="a1">
    <div class="pagecolor"><? //覆蓋遮色層 ?></div>
    <div class="wrap">
        <div class="closebtn">
            <div class="line item-1"></div>
            <div class="line item-2"></div>
        </div>
        
        <div class="info">
            <h1 class="title">
                <?=$translg->$langkey->careers->item->uiux->title?>
            </h1>

            <div class="sharesite">
                <i class="facebook"></i>
                <i class="linkedin"></i>
                <i class="twitter"></i>
            </div>
            
            <p class="date">
                <?=$translg->$langkey->careers->item->uiux->date?>
            </p>
            
            <p class="desc">
                <?=$translg->$langkey->careers->item->uiux->content?>
            </p>
        </div>
        
        
        <div class="resplist">
            <div class="item">
                <h2 class="title"><?=$translg->$langkey->careers->responsibilities?>:</h2>
                <ul>
                    <?=$translg->$langkey->careers->item->uiux->responsibilities?>
                </ul>
            </div>
            <div class="item">
                <h2 class="title"><?=$translg->$langkey->careers->requirements?>:</h2>
                <ul>
                    <?=$translg->$langkey->careers->item->uiux->requirements?>
                </ul>
            </div>
        </div>
        
        <p class="fstr">
            <?=$translg->$langkey->careers->note?>
        </p>
        
        <p class="btsite">
            <button type="button" class="apply"><a href="mailto:info@dennings.org?Subject=Application for App developer"><?=$translg->$langkey->careers->apply?></a></button>
        </p>
    </div>

</div><!-- float_container end -->