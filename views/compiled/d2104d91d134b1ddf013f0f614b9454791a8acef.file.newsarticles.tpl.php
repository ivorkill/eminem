<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 16:21:09
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1287055ffd2ba521cb8-53517791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444400468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287055ffd2ba521cb8-53517791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffd2ba566175_82378177',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffd2ba566175_82378177')) {function content_55ffd2ba566175_82378177($_smarty_tpl) {?><div class="content">
	<h1>Newsarticles</h1>
	<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="news">
		<section>
			<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
			<article>
				<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
				<p><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>
</p>
				<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
			</article>
		    <?php } ?>
		</section>
	</div>
</div><?php }} ?>
