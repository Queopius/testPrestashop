<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-06 19:10:53
  from 'C:\laragon\www\testPrestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff5fd2d9affa6_84014956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3abf98c60bc8be3d4ca734a9f6b61baddb12e192' => 
    array (
      0 => 'C:\\laragon\\www\\testPrestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff5fd2d9affa6_84014956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4223355745ff5fd2d8bf018_39921093', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15093314975ff5fd2d8bf875_94615166 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8820890555ff5fd2d8bf411_06565279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15093314975ff5fd2d8bf875_94615166', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6667299985ff5fd2d9ae489_44213676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7609457185ff5fd2d9aeb43_01871109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_833785235ff5fd2d9ae072_79997482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6667299985ff5fd2d9ae489_44213676', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7609457185ff5fd2d9aeb43_01871109', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3456533095ff5fd2d9af685_83441348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_21394926185ff5fd2d9af322_84663970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3456533095ff5fd2d9af685_83441348', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4223355745ff5fd2d8bf018_39921093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4223355745ff5fd2d8bf018_39921093',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8820890555ff5fd2d8bf411_06565279',
  ),
  'page_title' => 
  array (
    0 => 'Block_15093314975ff5fd2d8bf875_94615166',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_833785235ff5fd2d9ae072_79997482',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6667299985ff5fd2d9ae489_44213676',
  ),
  'page_content' => 
  array (
    0 => 'Block_7609457185ff5fd2d9aeb43_01871109',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_21394926185ff5fd2d9af322_84663970',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3456533095ff5fd2d9af685_83441348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8820890555ff5fd2d8bf411_06565279', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_833785235ff5fd2d9ae072_79997482', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21394926185ff5fd2d9af322_84663970', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
