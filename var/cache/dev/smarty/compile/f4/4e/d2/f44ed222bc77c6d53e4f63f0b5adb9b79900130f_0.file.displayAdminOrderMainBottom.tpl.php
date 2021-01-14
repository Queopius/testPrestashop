<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 17:17:59
  from 'C:\laragon\www\testPrestashop\modules\ps_checkout\views\templates\hook\displayAdminOrderMainBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff33fb753f1c4_56720074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f44ed222bc77c6d53e4f63f0b5adb9b79900130f' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\modules\\ps_checkout\\views\\templates\\hook\\displayAdminOrderMainBottom.tpl',
      1 => 1609771144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./partials/adminOrderView.tpl' => 1,
  ),
),false)) {
function content_5ff33fb753f1c4_56720074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card mt-2" id="ps_checkout">
  <div class="card-header">
    <h3 class="card-header-title">
      <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleLogoUri']->value,'html','UTF-8' ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleName']->value,'html','UTF-8' ));?>
" width="20" height="20">
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleName']->value,'html','UTF-8' ));?>

    </h3>
  </div>
  <div class="card-body">
    <div class="paypal-order-notifications">
    </div>
    <div class="paypal-order-container">
    </div>
    <div class="paypal-order-loader text-center">
      <button class="btn-primary-reverse onclick unbind spinner"></button>
    </div>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:./partials/adminOrderView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('legacy'=>false,'orderPrestaShopId'=>$_smarty_tpl->tpl_vars['orderPrestaShopId']->value,'orderPayPalBaseUrl'=>$_smarty_tpl->tpl_vars['orderPayPalBaseUrl']->value), 0, false);
}
}
