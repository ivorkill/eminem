<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 16:27:31
         compiled from "views\pagination_albums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2204156178d23c5b0a1-36815603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dd2050fc826a5d3e9b4efd650a5bb4412ca7ccd' => 
    array (
      0 => 'views\\pagination_albums.tpl',
      1 => 1444400845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2204156178d23c5b0a1-36815603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56178d23c5d548_35992027',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56178d23c5d548_35992027')) {function content_56178d23c5d548_35992027($_smarty_tpl) {?><div class="pagination">
	<ul class="pagination-item">
		<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='1') {?> class="selected"<?php }?>><a href="?page=albums&page_nr=1">1</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='2') {?> class="selected"<?php }?>><a href="?page=albums&page_nr=2">2</a></li>
	</ul>
</div>
<?php }} ?>
