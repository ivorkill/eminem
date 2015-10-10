<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 16:28:44
         compiled from "views\albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724560296fcea3449-37823706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b7b9fa5eb9ff3030793a75b7d83f1d812a71a1' => 
    array (
      0 => 'views\\albums.tpl',
      1 => 1444400923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724560296fcea3449-37823706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560296fcec76b4_71535013',
  'variables' => 
  array (
    'albumData' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560296fcec76b4_71535013')) {function content_560296fcec76b4_71535013($_smarty_tpl) {?><div class="content">
	<h1>Albums</h1>
	<?php echo $_smarty_tpl->getSubTemplate ("pagination_albums.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="albums">  
	    <section>
			<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value) {
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
			<content>
				<h1><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</h1>
				<p><?php echo $_smarty_tpl->tpl_vars['album']->value['image'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['album']->value['date'];?>
</p>
			</content>
		    <?php } ?>
		</section>
	</div>
</div><?php }} ?>
