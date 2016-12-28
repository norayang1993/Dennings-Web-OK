<div class="container">
    <ul class="button_site">
        <li class="item">
            <a class="selected" data-target="a1" href="">Privacy Policy</a>
        </li>
        <li class="item">
            <a class="" data-target="a2" href="">Terms of Service</a>
        </li>
    </ul>
    <article class="pagesite">
        <? $this->load->view('frontend/pt/page_a1'); ?>
        <? $this->load->view('frontend/pt/page_a2'); ?>
    </article>
</div>