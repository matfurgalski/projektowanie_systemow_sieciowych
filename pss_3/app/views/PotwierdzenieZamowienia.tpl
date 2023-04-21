
{extends file="main.tpl"}

{block name=top}

<div class="product__details__text">
    <h4>Zamówienie potwierdzone...</h4>
</div>  

<div class="col-lg-7 col-md-6 col-sm-6">
    <div class="continue__btn update__btn">
        <a href="{$conf->action_root}sklep"><i class="fa fa-spinner"></i> Kontynuuj Zakupy</a>
    </div>
</div>
{/block}