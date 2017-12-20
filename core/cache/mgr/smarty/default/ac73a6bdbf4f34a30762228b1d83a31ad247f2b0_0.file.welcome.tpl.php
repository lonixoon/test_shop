<?php /* Smarty version 3.1.27, created on 2017-12-18 12:04:56
         compiled from "C:\www\OSPanel\domains\test_shop\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:632561965a3784b8e929b3_15993407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac73a6bdbf4f34a30762228b1d83a31ad247f2b0' => 
    array (
      0 => 'C:\\www\\OSPanel\\domains\\test_shop\\manager\\templates\\default\\welcome.tpl',
      1 => 1513237212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632561965a3784b8e929b3_15993407',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3784b8e93bb5_90788584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3784b8e93bb5_90788584')) {
function content_5a3784b8e93bb5_90788584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '632561965a3784b8e929b3_15993407';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>