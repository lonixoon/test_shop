<?php /* Smarty version 3.1.27, created on 2017-12-18 12:04:43
         compiled from "C:\www\OSPanel\domains\test_shop\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13080551515a3784abb01591_72747633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab6ff4296fa85b20780aec19c54c1906937e699' => 
    array (
      0 => 'C:\\www\\OSPanel\\domains\\test_shop\\setup\\templates\\footer.tpl',
      1 => 1513237214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13080551515a3784abb01591_72747633',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3784abb0ada7_71992712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3784abb0ada7_71992712')) {
function content_5a3784abb0ada7_71992712 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/www/OSPanel/domains/test_shop/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '13080551515a3784abb01591_72747633';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>