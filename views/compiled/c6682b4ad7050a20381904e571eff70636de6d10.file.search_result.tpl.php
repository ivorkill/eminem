<?php /* Smarty version Smarty-3.1.18, created on 2015-10-05 11:15:17
         compiled from "views\search_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15141560bbc32d3d582-35031810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6682b4ad7050a20381904e571eff70636de6d10' => 
    array (
      0 => 'views\\search_result.tpl',
      1 => 1443621968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15141560bbc32d3d582-35031810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bbc32dab392_33875156',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bbc32dab392_33875156')) {function content_560bbc32dab392_33875156($_smarty_tpl) {?><div class="content">
	<div id="search">
		<h1>Search results:</h1>
		<section>
			<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
			<article>
				<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
				<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
					<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>

			</article>
			<?php } ?>
		</section>
	</div>
</div><?php }} ?>
