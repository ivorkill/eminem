<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 16:27:03
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183785609036dd5a316-99757481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1444400822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183785609036dd5a316-99757481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5609036dd5cc72_85023061',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5609036dd5cc72_85023061')) {function content_5609036dd5cc72_85023061($_smarty_tpl) {?><div class="pagination">
	<ul class="pagination-item">
		<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='1') {?> class="selected"<?php }?>><a href="?page=news&page_nr=1">1</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='2') {?> class="selected"<?php }?>><a href="?page=news&page_nr=2">2</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='3') {?> class="selected"<?php }?>><a href="?page=news&page_nr=3">3</a></li>
	</ul>
</div><?php }} ?>
