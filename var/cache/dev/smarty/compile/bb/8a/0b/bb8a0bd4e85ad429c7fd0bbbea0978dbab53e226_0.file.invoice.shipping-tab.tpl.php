<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 16:57:55
  from 'C:\laragon\www\testPrestashop\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff33b0396bb19_24800439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb8a0bd4e85ad429c7fd0bbbea0978dbab53e226' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\pdf\\invoice.shipping-tab.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff33b0396bb19_24800439 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
