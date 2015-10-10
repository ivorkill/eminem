<?php /* Smarty version Smarty-3.1.18, created on 2015-10-09 16:46:53
         compiled from "views\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24615560296fc13a6b3-72906479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d03d389ad3c554f60a8219e57b61e0e79343dd' => 
    array (
      0 => 'views\\events.tpl',
      1 => 1444402013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24615560296fc13a6b3-72906479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560296fc15ffa1_40390818',
  'variables' => 
  array (
    'eventData' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560296fc15ffa1_40390818')) {function content_560296fc15ffa1_40390818($_smarty_tpl) {?><div class="content">
	<h1>Events</h1>
	<div id="events">
	    <section>
			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
			<content>
				<p><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>

				<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>

				<?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
</p>
			</content>
		    <?php } ?>
		</section>
	</div>
</div><?php }} ?>
