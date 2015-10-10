<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 13:51:33
         compiled from "views\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1802256150745c90c91-73728584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a120b28bdce69bbcb9aab03d77011f941122be60' => 
    array (
      0 => 'views\\navigation.tpl',
      1 => 1443772896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1802256150745c90c91-73728584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_page' => 0,
    'page_nr' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56150745d224e8_88862407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56150745d224e8_88862407')) {function content_56150745d224e8_88862407($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['total_page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_page']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<?php if ($_smarty_tpl->tpl_vars['page_nr']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
		<input class="pagination_current" type="button" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
	<?php } else { ?>
		<a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> 
		<input class="pagination_page" type="button" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></a>
	<?php }?>
<?php }} ?><?php }} ?>
