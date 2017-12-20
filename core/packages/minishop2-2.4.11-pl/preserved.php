<?php return array (
  '2e66fc866d2deb3f35080dba7ab980cf' => 
  array (
    'criteria' => 
    array (
      'name' => 'msProduct.content',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'msProduct.content',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<h1>[[*pagetitle]]</h1>
<div id="msProduct" class="row">
    <div class="col-md-6">
        [[!msGallery]]
    </div>
    <div class="col-md-6">
        <form class="form-horizontal ms2_form" method="post">
            <input type="hidden" name="id" value="[[*id]]"/>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_article]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+article:default=`-`]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_price]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+price]] [[%ms2_frontend_currency]]
                    [[+old_price:gt=`0`:then=`
                    <span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>
                    `:else=``]]
                </div>
            </div>
            <div class="form-group form-inline">
                <label class="col-md-2 control-label" for="product_price">[[%ms2_cart_count]]:</label>
                <div class="col-md-10">
                    <input type="number" name="count" id="product_price" class="input-sm form-control" value="1"/>
                    [[%ms2_frontend_count_unit]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_weight]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+weight]] [[%ms2_frontend_weight_unit]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_made_in]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+made_in:default=`-`]]
                </div>
            </div>

            [[msOptions?options=`color,size`]]

            [[msProductOptions]]

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-default" name="ms2_action" value="cart/add">
                        <i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
[[*content]]',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_product_content.tpl',
      'content' => '<h1>[[*pagetitle]]</h1>
<div id="msProduct" class="row">
    <div class="col-md-6">
        [[!msGallery]]
    </div>
    <div class="col-md-6">
        <form class="form-horizontal ms2_form" method="post">
            <input type="hidden" name="id" value="[[*id]]"/>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_article]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+article:default=`-`]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_price]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+price]] [[%ms2_frontend_currency]]
                    [[+old_price:gt=`0`:then=`
                    <span class="old_price">[[+old_price]] [[%ms2_frontend_currency]]</span>
                    `:else=``]]
                </div>
            </div>
            <div class="form-group form-inline">
                <label class="col-md-2 control-label" for="product_price">[[%ms2_cart_count]]:</label>
                <div class="col-md-10">
                    <input type="number" name="count" id="product_price" class="input-sm form-control" value="1"/>
                    [[%ms2_frontend_count_unit]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_weight]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+weight]] [[%ms2_frontend_weight_unit]]
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">[[%ms2_product_made_in]]:</label>
                <div class="col-md-10 form-control-static">
                    [[+made_in:default=`-`]]
                </div>
            </div>

            [[msOptions?options=`color,size`]]

            [[msProductOptions]]

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-default" name="ms2_action" value="cart/add">
                        <i class="glyphicon glyphicon-barcode"></i> [[%ms2_frontend_add_to_cart]]
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
[[*content]]',
    ),
  ),
  '27d260f07d8aa8c081b9dada433848b3' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msProducts.row',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msProducts.row',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div class="row ms2_product">
    <div class="col-md-2">
        {if $thumb?}
            <img src="{$thumb}" alt="{$pagetitle}" title="{$pagetitle}"/>
        {else}
            <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                 srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                 alt="{$pagetitle}" title="{$pagetitle}"/>
        {/if}
    </div>
    <div class="col-md-10">
        <form method="post" class="ms2_form">
            <a href="{$id | url}">{$pagetitle}</a>
            <span class="flags">
                {if $new?}
                    <i class="glyphicon glyphicon-flag" title="{\'ms2_frontend_new\' | lexicon}"></i>
                {/if}
                {if $popular?}
                    <i class="glyphicon glyphicon-star" title="{\'ms2_frontend_popular\' | lexicon}"></i>
                {/if}
                {if $favorite?}
                    <i class="glyphicon glyphicon-bookmark" title="{\'ms2_frontend_favorite\' | lexicon}"></i>
                {/if}
            </span>
            <span class="price">
                {$price} {\'ms2_frontend_currency\' | lexicon}
            </span>
            {if $old_price?}
                <span class="old_price">{$old_price} {\'ms2_frontend_currency\' | lexicon}</span>
            {/if}
            <button class="btn btn-default pull-right" type="submit" name="ms2_action" value="cart/add">
                <i class="glyphicon glyphicon-barcode"></i> {\'ms2_frontend_add_to_cart\' | lexicon}
            </button>
            <input type="hidden" name="id" value="{$id}">
            <input type="hidden" name="count" value="1">
            <input type="hidden" name="options" value="[]">
        </form>
        {if $introtext}
            <p>
                <small>{$introtext}</small>
            </p>
        {/if}
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_products_row.tpl',
      'content' => '<div class="row ms2_product">
    <div class="col-md-2">
        {if $thumb?}
            <img src="{$thumb}" alt="{$pagetitle}" title="{$pagetitle}"/>
        {else}
            <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                 srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                 alt="{$pagetitle}" title="{$pagetitle}"/>
        {/if}
    </div>
    <div class="col-md-10">
        <form method="post" class="ms2_form">
            <a href="{$id | url}">{$pagetitle}</a>
            <span class="flags">
                {if $new?}
                    <i class="glyphicon glyphicon-flag" title="{\'ms2_frontend_new\' | lexicon}"></i>
                {/if}
                {if $popular?}
                    <i class="glyphicon glyphicon-star" title="{\'ms2_frontend_popular\' | lexicon}"></i>
                {/if}
                {if $favorite?}
                    <i class="glyphicon glyphicon-bookmark" title="{\'ms2_frontend_favorite\' | lexicon}"></i>
                {/if}
            </span>
            <span class="price">
                {$price} {\'ms2_frontend_currency\' | lexicon}
            </span>
            {if $old_price?}
                <span class="old_price">{$old_price} {\'ms2_frontend_currency\' | lexicon}</span>
            {/if}
            <button class="btn btn-default pull-right" type="submit" name="ms2_action" value="cart/add">
                <i class="glyphicon glyphicon-barcode"></i> {\'ms2_frontend_add_to_cart\' | lexicon}
            </button>
            <input type="hidden" name="id" value="{$id}">
            <input type="hidden" name="count" value="1">
            <input type="hidden" name="options" value="[]">
        </form>
        {if $introtext}
            <p>
                <small>{$introtext}</small>
            </p>
        {/if}
    </div>
</div>',
    ),
  ),
  '83b464c7c5c2ebe3c0483b38955933f6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msCart',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msCart',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div id="msCart">
    {if !count($products)}
        {\'ms2_cart_is_empty\' | lexicon}
    {else}
        <div class="table-responsive">
            <table class="table table-striped">
                <tr class="header">
                    <th class="image">&nbsp;</th>
                    <th class="title">{\'ms2_cart_title\' | lexicon}</th>
                    <th class="count">{\'ms2_cart_count\' | lexicon}</th>
                    <th class="weight">{\'ms2_cart_weight\' | lexicon}</th>
                    <th class="price">{\'ms2_cart_price\' | lexicon}</th>
                    <th class="remove">{\'ms2_cart_remove\' | lexicon}</th>
                </tr>

                {foreach $products as $product}
                    <tr id="{$product.key}">
                        <td class="image">
                            {if $product.thumb?}
                                <img src="{$product.thumb}" alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                            {else}
                                <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                                     srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                                     alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                            {/if}
                        </td>
                        <td class="title">
                            {if $product.id?}
                                <a href="{$product.id | url}">{$product.pagetitle}</a>
                            {else}
                                {$product.name}
                            {/if}
                            {if $product.options?}
                                <div class="small">
                                    {$product.options | join : \'; \'}
                                </div>
                            {/if}
                        </td>
                        <td class="count">
                            <form method="post" class="ms2_form form-inline" role="form">
                                <input type="hidden" name="key" value="{$product.key}"/>
                                <div class="form-group">
                                    <input type="number" name="count" value="{$product.count}"
                                           class="input-sm form-control"/>
                                    <span class="hidden-xs">{\'ms2_frontend_count_unit\' | lexicon}</span>
                                    <button class="btn btn-default" type="submit" name="ms2_action" value="cart/change">
                                        <i class="glyphicon glyphicon-refresh"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td class="weight">
                            <span>{$product.weight}</span> {\'ms2_frontend_weight_unit\' | lexicon}
                        </td>
                        <td class="price">
                            <span>{$product.price}</span> {\'ms2_frontend_currency\' | lexicon}
                            {if $product.old_price?}
                            <span class="old_price">{$product.old_price}</span> {\'ms2_frontend_currency\' | lexicon}
                                {/if}
                        </td>
                        <td class="remove">
                            <form method="post" class="ms2_form">
                                <input type="hidden" name="key" value="{$product.key}">
                                <button class="btn btn-default" type="submit" name="ms2_action" value="cart/remove">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                {/foreach}

                <tr class="footer">
                    <th class="total" colspan="2">{\'ms2_cart_total\' | lexicon}:</th>
                    <th class="total_count">
                        <span class="ms2_total_count">{$total.count}</span>
                        {\'ms2_frontend_count_unit\' | lexicon}
                    </th>
                    <th class="total_weight">
                        <span class="ms2_total_weight">{$total.weight}</span>
                        {\'ms2_frontend_weight_unit\' | lexicon}
                    </th>
                    <th class="total_cost">
                        <span class="ms2_total_cost">{$total.cost}</span>
                        {\'ms2_frontend_currency\' | lexicon}
                    </th>
                    <th>&nbsp;</th>
                </tr>
            </table>
        </div>
        <form method="post">
            <button class="btn btn-default" type="submit" name="ms2_action" value="cart/clean">
                <i class="glyphicon glyphicon-remove"></i> {\'ms2_cart_clean\' | lexicon}
            </button>
        </form>
    {/if}
</div>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_cart.tpl',
      'content' => '<div id="msCart">
    {if !count($products)}
        {\'ms2_cart_is_empty\' | lexicon}
    {else}
        <div class="table-responsive">
            <table class="table table-striped">
                <tr class="header">
                    <th class="image">&nbsp;</th>
                    <th class="title">{\'ms2_cart_title\' | lexicon}</th>
                    <th class="count">{\'ms2_cart_count\' | lexicon}</th>
                    <th class="weight">{\'ms2_cart_weight\' | lexicon}</th>
                    <th class="price">{\'ms2_cart_price\' | lexicon}</th>
                    <th class="remove">{\'ms2_cart_remove\' | lexicon}</th>
                </tr>

                {foreach $products as $product}
                    <tr id="{$product.key}">
                        <td class="image">
                            {if $product.thumb?}
                                <img src="{$product.thumb}" alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                            {else}
                                <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                                     srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                                     alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                            {/if}
                        </td>
                        <td class="title">
                            {if $product.id?}
                                <a href="{$product.id | url}">{$product.pagetitle}</a>
                            {else}
                                {$product.name}
                            {/if}
                            {if $product.options?}
                                <div class="small">
                                    {$product.options | join : \'; \'}
                                </div>
                            {/if}
                        </td>
                        <td class="count">
                            <form method="post" class="ms2_form form-inline" role="form">
                                <input type="hidden" name="key" value="{$product.key}"/>
                                <div class="form-group">
                                    <input type="number" name="count" value="{$product.count}"
                                           class="input-sm form-control"/>
                                    <span class="hidden-xs">{\'ms2_frontend_count_unit\' | lexicon}</span>
                                    <button class="btn btn-default" type="submit" name="ms2_action" value="cart/change">
                                        <i class="glyphicon glyphicon-refresh"></i>
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td class="weight">
                            <span>{$product.weight}</span> {\'ms2_frontend_weight_unit\' | lexicon}
                        </td>
                        <td class="price">
                            <span>{$product.price}</span> {\'ms2_frontend_currency\' | lexicon}
                            {if $product.old_price?}
                            <span class="old_price">{$product.old_price}</span> {\'ms2_frontend_currency\' | lexicon}
                                {/if}
                        </td>
                        <td class="remove">
                            <form method="post" class="ms2_form">
                                <input type="hidden" name="key" value="{$product.key}">
                                <button class="btn btn-default" type="submit" name="ms2_action" value="cart/remove">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                {/foreach}

                <tr class="footer">
                    <th class="total" colspan="2">{\'ms2_cart_total\' | lexicon}:</th>
                    <th class="total_count">
                        <span class="ms2_total_count">{$total.count}</span>
                        {\'ms2_frontend_count_unit\' | lexicon}
                    </th>
                    <th class="total_weight">
                        <span class="ms2_total_weight">{$total.weight}</span>
                        {\'ms2_frontend_weight_unit\' | lexicon}
                    </th>
                    <th class="total_cost">
                        <span class="ms2_total_cost">{$total.cost}</span>
                        {\'ms2_frontend_currency\' | lexicon}
                    </th>
                    <th>&nbsp;</th>
                </tr>
            </table>
        </div>
        <form method="post">
            <button class="btn btn-default" type="submit" name="ms2_action" value="cart/clean">
                <i class="glyphicon glyphicon-remove"></i> {\'ms2_cart_clean\' | lexicon}
            </button>
        </form>
    {/if}
</div>
',
    ),
  ),
  'e7cac9ab3471ec1c6e2e24b81df46108' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msMiniCart',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msMiniCart',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div id="msMiniCart" class="{$total_count > 0 ? \'full\' : \'\'}">
    <div class="empty">
        <h5><i class="glyphicon glyphicon-shopping-cart"></i> {\'ms2_minicart\' | lexicon}</h5>
        {\'ms2_minicart_is_empty\' | lexicon}
    </div>
    <div class="not_empty">
        <h5><i class="glyphicon glyphicon-shopping-cart"></i> {\'ms2_minicart\' | lexicon}</h5>
        {\'ms2_minicart_goods\' | lexicon} <strong class="ms2_total_count">{$total_count}</strong> {\'ms2_frontend_count_unit\' | lexicon},
        {\'ms2_minicart_cost\' | lexicon} <strong class="ms2_total_cost">{$total_cost}</strong> {\'ms2_frontend_currency\' | lexicon}
    </div>
</div>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_minicart.tpl',
      'content' => '<div id="msMiniCart" class="{$total_count > 0 ? \'full\' : \'\'}">
    <div class="empty">
        <h5><i class="glyphicon glyphicon-shopping-cart"></i> {\'ms2_minicart\' | lexicon}</h5>
        {\'ms2_minicart_is_empty\' | lexicon}
    </div>
    <div class="not_empty">
        <h5><i class="glyphicon glyphicon-shopping-cart"></i> {\'ms2_minicart\' | lexicon}</h5>
        {\'ms2_minicart_goods\' | lexicon} <strong class="ms2_total_count">{$total_count}</strong> {\'ms2_frontend_count_unit\' | lexicon},
        {\'ms2_minicart_cost\' | lexicon} <strong class="ms2_total_cost">{$total_cost}</strong> {\'ms2_frontend_currency\' | lexicon}
    </div>
</div>',
    ),
  ),
  '06c84610f9bdd836771f3df6df68ce6e' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msOrder',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msOrder',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<form class="form-horizontal ms2_form" id="msOrder" method="post">
    <div class="row">
        <div class="col-md-6">
            <h4>{\'ms2_frontend_credentials\' | lexicon}:</h4>
            {foreach [\'email\',\'receiver\',\'phone\'] as $field}
                <div class="form-group input-parent">
                    <label class="col-md-4 control-label" for="{$field}">
                        <span class="required-star">*</span> {(\'ms2_frontend_\' ~ $field) | lexicon}
                    </label>
                    <div class="col-sm-6">
                        <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                               name="{$field}" value="{$form[$field]}"
                               class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                    </div>
                </div>
            {/foreach}

            <div class="form-group input-parent">
                <label class="col-md-4 control-label" for="comment">
                    <span class="required-star">*</span> {\'ms2_frontend_comment\' | lexicon}</label>
                <div class="col-sm-6">
                    <textarea name="comment" id="comment" placeholder="{\'ms2_frontend_comment\' | lexicon}"
                              class="form-control{(\'comment\' in list $errors) ? \' error\' : \'\'}">{$form.comment}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6" id="payments">
            <h4>{\'ms2_frontend_payments\' | lexicon}:</h4>
            <div class="form-group">
                <label class="col-md-4 control-label"><span class="required-star">*</span>
                    {\'ms2_frontend_payment_select\' | lexicon}</label>
                <div class="col-sm-6">
                    {foreach $payments as $payment index=$index}
                        {var $checked = !$order.payment && $index == 0 || $payment.id == $order.payment}
                        <div class="checkbox">
                            <label class="payment input-parent">
                                <input type="radio" name="payment" value="{$payment.id}" id="payment_{$payment.id}"
                                        {$checked ? \'checked\' : \'\'}>
                                {if $payment.logo?}
                                    <img src="{$payment.logo}" alt="{$payment.name}" title="{$payment.name}"/>
                                {else}
                                    {$payment.name}
                                {/if}
                                {if $payment.description?}
                                    <p class="small">
                                        {$payment.description}
                                    </p>
                                {/if}
                            </label>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" id="deliveries">
            <h4>{\'ms2_frontend_deliveries\' | lexicon}:</h4>
            <div class="form-group">
                <label class="col-md-4 control-label">
                    <span class="required-star">*</span> {\'ms2_frontend_delivery_select\' | lexicon}
                </label>
                <div class="col-sm-6">
                    {foreach $deliveries as $delivery index=$index}
                        {var $checked = !$order.delivery && $index == 0 || $delivery.id == $order.delivery}
                        <div class="checkbox">
                            <label class="delivery input-parent">
                                <input type="radio" name="delivery" value="{$delivery.id}" id="delivery_{$delivery.id}"
                                       data-payments="{$delivery.payments | json_encode}"
                                        {$checked ? \'checked\' : \'\'}>
                                {if $delivery.logo?}
                                    <img src="{$delivery.logo}" alt="{$delivery.name}" title="{$delivery.name}"/>
                                {else}
                                    {$delivery.name}
                                {/if}
                                {if $delivery.description?}
                                    <p class="small">
                                        {$delivery.description}
                                    </p>
                                {/if}
                            </label>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h4>{\'ms2_frontend_address\' | lexicon}:</h4>
            {foreach [\'index\',\'region\',\'city\'] as $field}
                <div class="form-group input-parent">
                    <label class="col-md-4 control-label" for="{$field}">
                        <span class="required-star">*</span> {(\'ms2_frontend_\' ~ $field) | lexicon}
                    </label>
                    <div class="col-sm-6">
                        <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                               name="{$field}" value="{$form[$field]}"
                               class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                    </div>
                </div>
            {/foreach}
            <div class="form-group input-parent">
                <label class="col-md-4 control-label" for="street">
                    <span class="required-star">*</span> {\'ms2_frontend_street\' | lexicon}</label>
                <div class="col-md-6 row">
                    {foreach [\'street\',\'building\',\'room\'] as $field}
                        <div class="col-md-4">
                            <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                                   name="{$field}" value="{$form[$field]}"
                                   class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>

    </div>

    <button type="button" name="ms2_action" value="order/clean" class="btn btn-default ms2_link">
        <i class="glyphicon glyphicon-remove"></i> {\'ms2_frontend_order_cancel\' | lexicon}
    </button>

    <hr/>
    <div class="well">
        <div class="col-md-offset-2">
            <h3>{\'ms2_frontend_order_cost\' | lexicon}:
                <span id="ms2_order_cost">{$order.cost ?: 0}</span>
                {\'ms2_frontend_currency\' | lexicon}
            </h3>
            <button type="submit" name="ms2_action" value="order/submit" class="btn btn-default btn-primary ms2_link">
                {\'ms2_frontend_order_submit\' | lexicon}
            </button>
        </div>
    </div>
</form>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_order.tpl',
      'content' => '<form class="form-horizontal ms2_form" id="msOrder" method="post">
    <div class="row">
        <div class="col-md-6">
            <h4>{\'ms2_frontend_credentials\' | lexicon}:</h4>
            {foreach [\'email\',\'receiver\',\'phone\'] as $field}
                <div class="form-group input-parent">
                    <label class="col-md-4 control-label" for="{$field}">
                        <span class="required-star">*</span> {(\'ms2_frontend_\' ~ $field) | lexicon}
                    </label>
                    <div class="col-sm-6">
                        <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                               name="{$field}" value="{$form[$field]}"
                               class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                    </div>
                </div>
            {/foreach}

            <div class="form-group input-parent">
                <label class="col-md-4 control-label" for="comment">
                    <span class="required-star">*</span> {\'ms2_frontend_comment\' | lexicon}</label>
                <div class="col-sm-6">
                    <textarea name="comment" id="comment" placeholder="{\'ms2_frontend_comment\' | lexicon}"
                              class="form-control{(\'comment\' in list $errors) ? \' error\' : \'\'}">{$form.comment}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6" id="payments">
            <h4>{\'ms2_frontend_payments\' | lexicon}:</h4>
            <div class="form-group">
                <label class="col-md-4 control-label"><span class="required-star">*</span>
                    {\'ms2_frontend_payment_select\' | lexicon}</label>
                <div class="col-sm-6">
                    {foreach $payments as $payment index=$index}
                        {var $checked = !$order.payment && $index == 0 || $payment.id == $order.payment}
                        <div class="checkbox">
                            <label class="payment input-parent">
                                <input type="radio" name="payment" value="{$payment.id}" id="payment_{$payment.id}"
                                        {$checked ? \'checked\' : \'\'}>
                                {if $payment.logo?}
                                    <img src="{$payment.logo}" alt="{$payment.name}" title="{$payment.name}"/>
                                {else}
                                    {$payment.name}
                                {/if}
                                {if $payment.description?}
                                    <p class="small">
                                        {$payment.description}
                                    </p>
                                {/if}
                            </label>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" id="deliveries">
            <h4>{\'ms2_frontend_deliveries\' | lexicon}:</h4>
            <div class="form-group">
                <label class="col-md-4 control-label">
                    <span class="required-star">*</span> {\'ms2_frontend_delivery_select\' | lexicon}
                </label>
                <div class="col-sm-6">
                    {foreach $deliveries as $delivery index=$index}
                        {var $checked = !$order.delivery && $index == 0 || $delivery.id == $order.delivery}
                        <div class="checkbox">
                            <label class="delivery input-parent">
                                <input type="radio" name="delivery" value="{$delivery.id}" id="delivery_{$delivery.id}"
                                       data-payments="{$delivery.payments | json_encode}"
                                        {$checked ? \'checked\' : \'\'}>
                                {if $delivery.logo?}
                                    <img src="{$delivery.logo}" alt="{$delivery.name}" title="{$delivery.name}"/>
                                {else}
                                    {$delivery.name}
                                {/if}
                                {if $delivery.description?}
                                    <p class="small">
                                        {$delivery.description}
                                    </p>
                                {/if}
                            </label>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <h4>{\'ms2_frontend_address\' | lexicon}:</h4>
            {foreach [\'index\',\'region\',\'city\'] as $field}
                <div class="form-group input-parent">
                    <label class="col-md-4 control-label" for="{$field}">
                        <span class="required-star">*</span> {(\'ms2_frontend_\' ~ $field) | lexicon}
                    </label>
                    <div class="col-sm-6">
                        <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                               name="{$field}" value="{$form[$field]}"
                               class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                    </div>
                </div>
            {/foreach}
            <div class="form-group input-parent">
                <label class="col-md-4 control-label" for="street">
                    <span class="required-star">*</span> {\'ms2_frontend_street\' | lexicon}</label>
                <div class="col-md-6 row">
                    {foreach [\'street\',\'building\',\'room\'] as $field}
                        <div class="col-md-4">
                            <input type="text" id="{$field}" placeholder="{(\'ms2_frontend_\' ~ $field) | lexicon}"
                                   name="{$field}" value="{$form[$field]}"
                                   class="form-control{($field in list $errors) ? \' error\' : \'\'}">
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>

    </div>

    <button type="button" name="ms2_action" value="order/clean" class="btn btn-default ms2_link">
        <i class="glyphicon glyphicon-remove"></i> {\'ms2_frontend_order_cancel\' | lexicon}
    </button>

    <hr/>
    <div class="well">
        <div class="col-md-offset-2">
            <h3>{\'ms2_frontend_order_cost\' | lexicon}:
                <span id="ms2_order_cost">{$order.cost ?: 0}</span>
                {\'ms2_frontend_currency\' | lexicon}
            </h3>
            <button type="submit" name="ms2_action" value="order/submit" class="btn btn-default btn-primary ms2_link">
                {\'ms2_frontend_order_submit\' | lexicon}
            </button>
        </div>
    </div>
</form>',
    ),
  ),
  '7b93b8a437516374be5c0d6b62b88921' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msGetOrder',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msGetOrder',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div id="msCart">
    <div class="table-responsive">
        <table class="table table-striped">
            <tr class="header">
                <th class="image col-md-2">&nbsp;</th>
                <th class="title col-md-4">{\'ms2_cart_title\' | lexicon}</th>
                <th class="count col-md-2">{\'ms2_cart_count\' | lexicon}</th>
                <th class="weight col-md-1">{\'ms2_cart_weight\' | lexicon}</th>
                <th class="price col-md-1">{\'ms2_cart_cost\' | lexicon}</th>
            </tr>
            {foreach $products as $product}
                <tr>
                    <td class="image">
                        {if $product.thumb?}
                            <img src="{$product.thumb}" alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                        {else}
                            <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                                 srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                                 alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                        {/if}
                    </td>
                    <td class="title">
                        {if $product.id?}
                            <a href="{$product.id | url}">{$product.name}</a>
                        {else}
                            {$product.name}
                        {/if}
                        {if $product.options?}
                            <div class="small">
                                {$product.options | join : \'; \'}
                            </div>
                        {/if}
                    </td>
                    <td class="count">{$product.count} {\'ms2_frontend_count_unit\' | lexicon}</td>
                    <td class="weight">{$product.weight} {\'ms2_frontend_weight_unit\' | lexicon}</td>
                    <td class="price">{$product.price} {\'ms2_frontend_currency\' | lexicon}</td>
                </tr>
            {/foreach}
            <tr class="footer">
                <th class="total" colspan="2">{\'ms2_cart_total\' | lexicon}:</th>
                <th class="total_count">
                    <span class="ms2_total_count">{$total.cart_count}</span> {\'ms2_frontend_count_unit\' | lexicon}
                </th>
                <th class="total_weight">
                    <span class="ms2_total_weight">{$total.cart_weight}</span> {\'ms2_frontend_weight_unit\' | lexicon}
                </th>
                <th class="total_cost">
                    <span class="ms2_total_cost">{$total.cart_cost}</span> {\'ms2_frontend_currency\' | lexicon}
                </th>
            </tr>
        </table>
    </div>

    <h4>
        {\'ms2_frontend_order_cost\' | lexicon}:
        {if $total.delivery_cost}
            {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon} + {$total.delivery_cost}
            {\'ms2_frontend_currency\' | lexicon} =
        {/if}
        <strong>{$total.cost}</strong> {\'ms2_frontend_currency\' | lexicon}
    </h4>
</div>
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_get_order.tpl',
      'content' => '<div id="msCart">
    <div class="table-responsive">
        <table class="table table-striped">
            <tr class="header">
                <th class="image col-md-2">&nbsp;</th>
                <th class="title col-md-4">{\'ms2_cart_title\' | lexicon}</th>
                <th class="count col-md-2">{\'ms2_cart_count\' | lexicon}</th>
                <th class="weight col-md-1">{\'ms2_cart_weight\' | lexicon}</th>
                <th class="price col-md-1">{\'ms2_cart_cost\' | lexicon}</th>
            </tr>
            {foreach $products as $product}
                <tr>
                    <td class="image">
                        {if $product.thumb?}
                            <img src="{$product.thumb}" alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                        {else}
                            <img src="{\'assets_url\' | option}components/minishop2/img/web/ms2_small.png"
                                 srcset="{\'assets_url\' | option}components/minishop2/img/web/ms2_small@2x.png 2x"
                                 alt="{$product.pagetitle}" title="{$product.pagetitle}"/>
                        {/if}
                    </td>
                    <td class="title">
                        {if $product.id?}
                            <a href="{$product.id | url}">{$product.name}</a>
                        {else}
                            {$product.name}
                        {/if}
                        {if $product.options?}
                            <div class="small">
                                {$product.options | join : \'; \'}
                            </div>
                        {/if}
                    </td>
                    <td class="count">{$product.count} {\'ms2_frontend_count_unit\' | lexicon}</td>
                    <td class="weight">{$product.weight} {\'ms2_frontend_weight_unit\' | lexicon}</td>
                    <td class="price">{$product.price} {\'ms2_frontend_currency\' | lexicon}</td>
                </tr>
            {/foreach}
            <tr class="footer">
                <th class="total" colspan="2">{\'ms2_cart_total\' | lexicon}:</th>
                <th class="total_count">
                    <span class="ms2_total_count">{$total.cart_count}</span> {\'ms2_frontend_count_unit\' | lexicon}
                </th>
                <th class="total_weight">
                    <span class="ms2_total_weight">{$total.cart_weight}</span> {\'ms2_frontend_weight_unit\' | lexicon}
                </th>
                <th class="total_cost">
                    <span class="ms2_total_cost">{$total.cart_cost}</span> {\'ms2_frontend_currency\' | lexicon}
                </th>
            </tr>
        </table>
    </div>

    <h4>
        {\'ms2_frontend_order_cost\' | lexicon}:
        {if $total.delivery_cost}
            {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon} + {$total.delivery_cost}
            {\'ms2_frontend_currency\' | lexicon} =
        {/if}
        <strong>{$total.cost}</strong> {\'ms2_frontend_currency\' | lexicon}
    </h4>
</div>
',
    ),
  ),
  '1c7ed04a79d9a1e3d638d37ef5740e4b' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msOptions',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msOptions',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{foreach $options as $name => $values}
    <div class="form-group">
        <label class="col-md-2 control-label" for="option_{$name}">{(\'ms2_product_\' ~ $name) | lexicon}:</label>
        <div class="col-md-10">
            <select name="options[{$name}]" class="input-sm form-control" id="option_{$name}">
                {foreach $values as $value}
                    <option value="{$value}">{$value}</option>
                {/foreach}
            </select>
        </div>
    </div>
{/foreach}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_options.tpl',
      'content' => '{foreach $options as $name => $values}
    <div class="form-group">
        <label class="col-md-2 control-label" for="option_{$name}">{(\'ms2_product_\' ~ $name) | lexicon}:</label>
        <div class="col-md-10">
            <select name="options[{$name}]" class="input-sm form-control" id="option_{$name}">
                {foreach $values as $value}
                    <option value="{$value}">{$value}</option>
                {/foreach}
            </select>
        </div>
    </div>
{/foreach}',
    ),
  ),
  'ef9a6819bdd91e41607100a50a87973a' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msProductOptions',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msProductOptions',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{foreach $options as $option}
    <div class="form-group">
        <label class="col-md-2 control-label">{$option.caption}:</label>
        <div class="col-md-10 form-control-static">
            {if $option.value is array}
                {$option.value | join : \', \'}
            {else}
                {$option.value}
            {/if}
        </div>
    </div>
{/foreach}
',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_product_options.tpl',
      'content' => '{foreach $options as $option}
    <div class="form-group">
        <label class="col-md-2 control-label">{$option.caption}:</label>
        <div class="col-md-10 form-control-static">
            {if $option.value is array}
                {$option.value | join : \', \'}
            {else}
                {$option.value}
            {/if}
        </div>
    </div>
{/foreach}
',
    ),
  ),
  'd80397848866f72f7ad080960f3f0773' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msGallery',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msGallery',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<div id="msGallery">
    {if $files?}
        <div class="fotorama"
             data-nav="thumbs"
             data-thumbheight="45"
             data-allowfullscreen="true"
             data-swipe="true"
             data-autoplay="5000">
            {foreach $files as $file}
                <a href="{$file[\'url\']}" target="_blank">
                    <img src="{$file[\'small\']}" alt="" title="">
                </a>
            {/foreach}
        </div>
    {else}
        <img src="{(\'assets_url\' | option) ~ \'components/minishop2/img/web/ms2_medium.png\'}"
             srcset="{(\'assets_url\' | option) ~ \'components/minishop2/img/web/ms2_medium@2x.png\'} 2x"
             alt="" title=""/>
    {/if}
</div>

',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_gallery.tpl',
      'content' => '<div id="msGallery">
    {if $files?}
        <div class="fotorama"
             data-nav="thumbs"
             data-thumbheight="45"
             data-allowfullscreen="true"
             data-swipe="true"
             data-autoplay="5000">
            {foreach $files as $file}
                <a href="{$file[\'url\']}" target="_blank">
                    <img src="{$file[\'small\']}" alt="" title="">
                </a>
            {/foreach}
        </div>
    {else}
        <img src="{(\'assets_url\' | option) ~ \'components/minishop2/img/web/ms2_medium.png\'}"
             srcset="{(\'assets_url\' | option) ~ \'components/minishop2/img/web/ms2_medium@2x.png\'} 2x"
             alt="" title=""/>
    {/if}
</div>

',
    ),
  ),
  'c8d47295c368d744848b841a65e1367f' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail',
    ),
    'object' => 
    array (
      'id' => 10,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{var $style = [
\'logo\' => \'display:block;margin: auto;\',
\'a\' => \'color:#348eda;\',
\'p\' => \'font-family: Arial;color: #666666;font-size: 12px;\',
\'h\' => \'font-family:Arial;color: #111111;font-weight: 200;line-height: 1.2em;margin: 40px 20px;\',
\'h1\' => \'font-size: 36px;\',
\'h2\' => \'font-size: 28px;\',
\'h3\' => \'font-size: 22px;\',
\'th\' => \'font-family: Arial;text-align: left;color: #111111;\',
\'td\' => \'font-family: Arial;text-align: left;color: #111111;\',
]}

{var $site_url = (\'site_url\' | option) | preg_replace : \'#/$#\' : \'\'}
{var $assets_url = \'assets_url\' | option}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{\'site_name\' | option}</title>
</head>
<body style="margin:0;padding:0;background:#f6f6f6;">
<div style="height:100%;padding-top:20px;background:#f6f6f6;">
    {block \'logo\'}
        <a href="{$site_url}">
            <img style="{$style.logo}"
                 src="{$site_url}{$assets_url}components/minishop2/img/web/ms2_small@2x.png"
                 alt="{$site_url}"
                 width="120" height="90"/>
        </a>
    {/block}
    <!-- body -->
    <table class="body-wrap" style="padding:0 20px 20px 20px;width: 100%;background:#f6f6f6;margin-top:10px;">
        <tr>
            <td></td>
            <td class="container" style="border:1px solid #f0f0f0;background:#ffffff;width:800px;margin:auto;">
                <div class="content">
                    <table style="width:100%;">
                        <tr>
                            <td>
                                <h3 style="{$style.h}{$style.h3}">
                                    {block \'title\'}
                                        miniShop2
                                    {/block}
                                </h3>

                                {block \'products\'}
                                    <table style="width:90%;margin:auto;">
                                        <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th style="{$style.th}">{\'ms2_cart_title\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_count\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_weight\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_cost\' | lexicon}</th>
                                        </tr>
                                        </thead>
                                        {foreach $products as $product}
                                            <tr>
                                                <td style="{$style.th}">
                                                    {if $product.thumb?}
                                                        <img src="{$site_url}{$product.thumb}"
                                                             alt="{$product.pagetitle}"
                                                             title="{$product.pagetitle}"
                                                             width="120" height="90"/>
                                                    {else}
                                                        <img src="{$site_url}{$assets_url}components/minishop2/img/web/ms2_small@2x.png"
                                                             alt="{$product.pagetitle}"
                                                             title="{$product.pagetitle}"
                                                             width="120" height="90"/>
                                                    {/if}
                                                </td>
                                                <td style="{$style.th}">
                                                    {if $product.id?}
                                                        <a href="{$product.id | url : [\'scheme\' => \'full\']}"
                                                           style="{$style.a}">
                                                            {$product.name}
                                                        </a>
                                                    {else}
                                                        {$product.name}
                                                    {/if}
                                                    {if $product.options?}
                                                        <div class="small">
                                                            {$product.options | join : \'; \'}
                                                        </div>
                                                    {/if}
                                                </td>
                                                <td style="{$style.th}">{$product.count} {\'ms2_frontend_count_unit\' | lexicon}</td>
                                                <td style="{$style.th}">{$product.weight} {\'ms2_frontend_weight_unit\' | lexicon}</td>
                                                <td style="{$style.th}">{$product.price} {\'ms2_frontend_currency\' | lexicon}</td>
                                            </tr>
                                        {/foreach}
                                        <tfoot>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th style="{$style.th}">
                                                {$total.cart_count} {\'ms2_frontend_count_unit\' | lexicon}
                                            </th>
                                            <th style="{$style.th}">
                                                {$total.cart_weight} {\'ms2_frontend_weight_unit\' | lexicon}
                                            </th>
                                            <th style="{$style.th}">
                                                {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon}
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <h3 style="{$style.h}{$style.h3}">
                                        {\'ms2_frontend_order_cost\' | lexicon}:
                                        {if $total.delivery_cost}
                                            {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon} + {$total.delivery_cost}
                                            {\'ms2_frontend_currency\' | lexicon} =
                                        {/if}
                                        <strong>{$total.cost}</strong> {\'ms2_frontend_currency\' | lexicon}
                                    </h3>
                                {/block}
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /body -->
    <!-- footer -->
    <table style="clear:both !important;width: 100%;">
        <tr>
            <td></td>
            <td class="container">
                <!-- content -->
                <div class="content">
                    <table style="width:100%;text-align: center;">
                        <tr>
                            <td align="center">
                                <p style="{$style.p}">
                                    {block \'footer\'}
                                    <a href="{$site_url}" style="color: #999999;">
                                        {\'site_name\' | option}
                                    </a>
                                    {/block}
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /footer -->
</div>
</body>
</html>',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email.tpl',
      'content' => '{var $style = [
\'logo\' => \'display:block;margin: auto;\',
\'a\' => \'color:#348eda;\',
\'p\' => \'font-family: Arial;color: #666666;font-size: 12px;\',
\'h\' => \'font-family:Arial;color: #111111;font-weight: 200;line-height: 1.2em;margin: 40px 20px;\',
\'h1\' => \'font-size: 36px;\',
\'h2\' => \'font-size: 28px;\',
\'h3\' => \'font-size: 22px;\',
\'th\' => \'font-family: Arial;text-align: left;color: #111111;\',
\'td\' => \'font-family: Arial;text-align: left;color: #111111;\',
]}

{var $site_url = (\'site_url\' | option) | preg_replace : \'#/$#\' : \'\'}
{var $assets_url = \'assets_url\' | option}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{\'site_name\' | option}</title>
</head>
<body style="margin:0;padding:0;background:#f6f6f6;">
<div style="height:100%;padding-top:20px;background:#f6f6f6;">
    {block \'logo\'}
        <a href="{$site_url}">
            <img style="{$style.logo}"
                 src="{$site_url}{$assets_url}components/minishop2/img/web/ms2_small@2x.png"
                 alt="{$site_url}"
                 width="120" height="90"/>
        </a>
    {/block}
    <!-- body -->
    <table class="body-wrap" style="padding:0 20px 20px 20px;width: 100%;background:#f6f6f6;margin-top:10px;">
        <tr>
            <td></td>
            <td class="container" style="border:1px solid #f0f0f0;background:#ffffff;width:800px;margin:auto;">
                <div class="content">
                    <table style="width:100%;">
                        <tr>
                            <td>
                                <h3 style="{$style.h}{$style.h3}">
                                    {block \'title\'}
                                        miniShop2
                                    {/block}
                                </h3>

                                {block \'products\'}
                                    <table style="width:90%;margin:auto;">
                                        <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th style="{$style.th}">{\'ms2_cart_title\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_count\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_weight\' | lexicon}</th>
                                            <th style="{$style.th}">{\'ms2_cart_cost\' | lexicon}</th>
                                        </tr>
                                        </thead>
                                        {foreach $products as $product}
                                            <tr>
                                                <td style="{$style.th}">
                                                    {if $product.thumb?}
                                                        <img src="{$site_url}{$product.thumb}"
                                                             alt="{$product.pagetitle}"
                                                             title="{$product.pagetitle}"
                                                             width="120" height="90"/>
                                                    {else}
                                                        <img src="{$site_url}{$assets_url}components/minishop2/img/web/ms2_small@2x.png"
                                                             alt="{$product.pagetitle}"
                                                             title="{$product.pagetitle}"
                                                             width="120" height="90"/>
                                                    {/if}
                                                </td>
                                                <td style="{$style.th}">
                                                    {if $product.id?}
                                                        <a href="{$product.id | url : [\'scheme\' => \'full\']}"
                                                           style="{$style.a}">
                                                            {$product.name}
                                                        </a>
                                                    {else}
                                                        {$product.name}
                                                    {/if}
                                                    {if $product.options?}
                                                        <div class="small">
                                                            {$product.options | join : \'; \'}
                                                        </div>
                                                    {/if}
                                                </td>
                                                <td style="{$style.th}">{$product.count} {\'ms2_frontend_count_unit\' | lexicon}</td>
                                                <td style="{$style.th}">{$product.weight} {\'ms2_frontend_weight_unit\' | lexicon}</td>
                                                <td style="{$style.th}">{$product.price} {\'ms2_frontend_currency\' | lexicon}</td>
                                            </tr>
                                        {/foreach}
                                        <tfoot>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th style="{$style.th}">
                                                {$total.cart_count} {\'ms2_frontend_count_unit\' | lexicon}
                                            </th>
                                            <th style="{$style.th}">
                                                {$total.cart_weight} {\'ms2_frontend_weight_unit\' | lexicon}
                                            </th>
                                            <th style="{$style.th}">
                                                {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon}
                                            </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <h3 style="{$style.h}{$style.h3}">
                                        {\'ms2_frontend_order_cost\' | lexicon}:
                                        {if $total.delivery_cost}
                                            {$total.cart_cost} {\'ms2_frontend_currency\' | lexicon} + {$total.delivery_cost}
                                            {\'ms2_frontend_currency\' | lexicon} =
                                        {/if}
                                        <strong>{$total.cost}</strong> {\'ms2_frontend_currency\' | lexicon}
                                    </h3>
                                {/block}
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /body -->
    <!-- footer -->
    <table style="clear:both !important;width: 100%;">
        <tr>
            <td></td>
            <td class="container">
                <!-- content -->
                <div class="content">
                    <table style="width:100%;text-align: center;">
                        <tr>
                            <td align="center">
                                <p style="{$style.p}">
                                    {block \'footer\'}
                                    <a href="{$site_url}" style="color: #999999;">
                                        {\'site_name\' | option}
                                    </a>
                                    {/block}
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /footer -->
</div>
</body>
</html>',
    ),
  ),
  '09f3cad5c1aa27d5974e756610196af6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.new.user',
    ),
    'object' => 
    array (
      'id' => 11,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.new.user',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_new_user\' | lexicon : $order}
{/block}

{block \'products\'}
    {parent}
    {if $payment_link?}
        <p style="margin-left:20px;{$style.p}">
            {\'ms2_payment_link\' | lexicon : [\'link\' => $payment_link]}
        </p>
    {/if}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_new_user.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_new_user\' | lexicon : $order}
{/block}

{block \'products\'}
    {parent}
    {if $payment_link?}
        <p style="margin-left:20px;{$style.p}">
            {\'ms2_payment_link\' | lexicon : [\'link\' => $payment_link]}
        </p>
    {/if}
{/block}',
    ),
  ),
  'f1497dca9a18a65716d5a7c6746c8476' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.new.manager',
    ),
    'object' => 
    array (
      'id' => 12,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.new.manager',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_new_manager\' | lexicon : $order}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_new_manager.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_new_manager\' | lexicon : $order}
{/block}',
    ),
  ),
  '603cc72d127a748f699766a6ae430df3' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.paid.user',
    ),
    'object' => 
    array (
      'id' => 13,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.paid.user',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_paid_user\' | lexicon : $order}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_paid_user.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_paid_user\' | lexicon : $order}
{/block}',
    ),
  ),
  '3d77c8957b47c6206815f46532972f3d' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.paid.manager',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.paid.manager',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_paid_manager\' | lexicon : $order}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_paid_manager.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_paid_manager\' | lexicon : $order}
{/block}',
    ),
  ),
  'ef1f9d307f34583027b08c3580f6aad6' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.sent.user',
    ),
    'object' => 
    array (
      'id' => 15,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.sent.user',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_sent_user\' | lexicon : $order}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_sent_user.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_sent_user\' | lexicon : $order}
{/block}',
    ),
  ),
  '78478639002a79a8cf333f413b5ceeb3' => 
  array (
    'criteria' => 
    array (
      'name' => 'tpl.msEmail.cancelled.user',
    ),
    'object' => 
    array (
      'id' => 16,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'tpl.msEmail.cancelled.user',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_cancelled_user\' | lexicon : $order}
{/block}',
      'locked' => 0,
      'properties' => NULL,
      'static' => 0,
      'static_file' => 'core/components/minishop2/elements/chunks/chunk.ms_email_cancelled_user.tpl',
      'content' => '{extends \'tpl.msEmail\'}

{block \'title\'}
    {\'ms2_email_subject_cancelled_user\' | lexicon : $order}
{/block}',
    ),
  ),
);