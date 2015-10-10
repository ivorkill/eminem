<?php /* Smarty version Smarty-3.1.18, created on 2015-09-30 12:24:48
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29882560bb24f4583d0-42773103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1443608686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29882560bb24f4583d0-42773103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb24f45d377_91476011',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb24f45d377_91476011')) {function content_560bb24f45d377_91476011($_smarty_tpl) {?><form method="POST" action="?page=search">
	<input type="text" name="search_string">
	<input type="submit" value="search">
</form><?php }} ?>
