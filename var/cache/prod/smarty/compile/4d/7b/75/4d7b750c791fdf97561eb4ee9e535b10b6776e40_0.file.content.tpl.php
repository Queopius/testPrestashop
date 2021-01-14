<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 15:47:36
  from 'C:\laragon\www\testPrestashop\admin127smg6iw\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff32a8875aa05_61258551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d7b750c791fdf97561eb4ee9e535b10b6776e40' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\admin127smg6iw\\themes\\default\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff32a8875aa05_61258551 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
