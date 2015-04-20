<?php /* Smarty version Smarty-3.0.4, created on 2012-08-27 22:04:44
         compiled from "W:/domains/belasu.com/admin/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20754503bb6bc7c2569-16001471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be813d4435df3354cdc8e880d240052f4f2d9e3a' => 
    array (
      0 => 'W:/domains/belasu.com/admin/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1345129838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20754503bb6bc7c2569-16001471',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'W:/domains/belasu.com/core/model/smarty/plugins\modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    
});
</script>