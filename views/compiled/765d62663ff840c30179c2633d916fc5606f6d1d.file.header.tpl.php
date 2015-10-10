<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 14:14:02
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830955fbb737275170-26258758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444220041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830955fbb737275170-26258758',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fbb7372bc866_04969161',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fbb7372bc866_04969161')) {function content_55fbb7372bc866_04969161($_smarty_tpl) {?><header>
	<a href="?page=home"><img src="img/eminem_logo.png"></a>
	<nav class="nav">
		<ul class="nav-list">
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='home') {?> class="selected"<?php }?>><a href="?page=home">Home</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='news') {?> class="selected"<?php }?>><a href="?page=news">Newsarticles</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='events') {?> class="selected"<?php }?>><a href="?page=events">Events</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='albums') {?> class="selected"<?php }?>><a href="?page=albums">Albums</a></li>
			<li <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='about') {?> class="selected"<?php }?>><a href="?page=about">About</a></li>
		</ul>
	</nav>
	<?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</header>
<div id="wrapper"><?php }} ?>
