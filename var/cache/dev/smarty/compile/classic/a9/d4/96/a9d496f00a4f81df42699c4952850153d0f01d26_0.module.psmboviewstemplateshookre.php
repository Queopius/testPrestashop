<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-04 16:57:58
  from 'module:psmboviewstemplateshookre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ff33b06e26cb8_04308517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d496f00a4f81df42699c4952850153d0f01d26' => 
    array (
      0 => 'module:psmboviewstemplateshookre',
      1 => 1609771126,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff33b06e26cb8_04308517 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\testPrestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<?php echo '<script'; ?>
>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesTitleTranslated']->value,'javascript' ));?>
',
        'Close': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesCloseTranslated']->value,'javascript' ));?>
',
      },
      recommendedModulesUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendedModulesUrl']->value,'javascript' ));?>
',
      shouldAttachRecommendedModulesAfterContent: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesAfterContent']->value);?>
,
      shouldAttachRecommendedModulesButton: <?php echo intval($_smarty_tpl->tpl_vars['shouldAttachRecommendedModulesButton']->value);?>
,
      shouldUseLegacyTheme: <?php echo intval($_smarty_tpl->tpl_vars['shouldUseLegacyTheme']->value);?>
,
    });
  }
<?php echo '</script'; ?>
>
<!-- end C:\laragon\www\testPrestashop/modules/ps_mbo/views/templates/hook/recommended-modules.tpl --><?php }
}
