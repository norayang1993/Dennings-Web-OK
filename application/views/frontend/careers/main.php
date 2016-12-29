<div class="container ">

    <div class="seri">
        <article class="desc">
            <h1 class="title"><?=$translg->$langkey->careers->title?></h1>
            <p class="content">
                <?=$translg->$langkey->careers->content?>
            </p>
        </article>
        <div class="itemlist">
            <? $this->load->view('frontend/careers/item_a1'); ?>
            <? $this->load->view('frontend/careers/item_a2'); ?>
            <? $this->load->view('frontend/careers/item_a3'); ?>
        </div>
    </div>
    

    <!-- 浮動資訊內容 -->
    <div class="float_page">

        <? $this->load->view('frontend/careers/page_a1'); ?>
        <? $this->load->view('frontend/careers/page_a2'); ?>
        <? $this->load->view('frontend/careers/page_a3'); ?>

    </div>

    
</div>

