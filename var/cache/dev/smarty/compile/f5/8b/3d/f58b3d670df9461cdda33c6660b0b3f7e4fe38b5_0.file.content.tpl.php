<?php
/* Smarty version 3.1.39, created on 2021-07-24 13:06:20
  from 'C:\wamp64\www\prestafab\admin746mnijdb\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60fc023cf07820_65146714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f58b3d670df9461cdda33c6660b0b3f7e4fe38b5' => 
    array (
      0 => 'C:\\wamp64\\www\\prestafab\\admin746mnijdb\\themes\\default\\template\\content.tpl',
      1 => 1626519318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60fc023cf07820_65146714 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
