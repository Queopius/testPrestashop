<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 17:17:59
  from 'C:\laragon\www\testPrestashop\modules\ps_checkout\views\templates\hook\partials\adminOrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff33fb758abb3_80049872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e3f4529fe4b47510955089ae3d8af4f0ebd4f5' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\modules\\ps_checkout\\views\\templates\\hook\\partials\\adminOrderView.tpl',
      1 => 1609771145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff33fb758abb3_80049872 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== window.ps_checkout) {
    ps_checkout.initialize({
      legacy: <?php echo intval($_smarty_tpl->tpl_vars['legacy']->value);?>
,
      orderPrestaShopId: <?php echo intval($_smarty_tpl->tpl_vars['orderPrestaShopId']->value);?>
,
      orderPayPalBaseUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderPayPalBaseUrl']->value,'javascript' ));?>
',
      orderPayPalContainer: '.paypal-order-container',
      orderPayPalLoaderContainer: '.paypal-order-loader',
      orderPayPalNotificationsContainer: '.paypal-order-notifications',
      orderPayPalRefundButton: '#ps_checkout button.refund',
      orderPayPalModalContainerPrefix: '#ps-checkout-refund-',
      orderPayPalModalContainer: '.ps-checkout-refund',
      orderPayPalModalNotificationsContainer: '.modal-notifications',
      orderPayPalModalContentContainer: '.modal-content-container',
      orderPayPalModalLoaderContainer: '.modal-loader',
      orderPayPalModalRefundForm: '.ps-checkout-refund-form',
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
