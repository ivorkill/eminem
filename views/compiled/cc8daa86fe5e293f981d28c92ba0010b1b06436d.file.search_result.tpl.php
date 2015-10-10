<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 12:20:09
         compiled from "search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4611560bb75933e149-15668747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8daa86fe5e293f981d28c92ba0010b1b06436d' => 
    array (
      0 => 'search_result.tpl',
      1 => 1443608377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4611560bb75933e149-15668747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb75945fa40_89678891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb75945fa40_89678891')) {function content_560bb75945fa40_89678891($_smarty_tpl) {?><h1>Search results:</h1>
<section>
	<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
 <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
		<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
			<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>

	</article>
	<?php } ?>
</section>
<?php }} ?>
