<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 19:10:48
  from 'C:\laragon\www\testPrestashop\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff5fd28cfbbc7_99076211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '819e61baa94e9a3fedcf246f60131303e88f8417' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5fd28cfbbc7_99076211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '19093645795ff5fd28cb6b29_92243843';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8368991595ff5fd28cfa028_94328709', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_8368991595ff5fd28cfa028_94328709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_8368991595ff5fd28cfa028_94328709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
