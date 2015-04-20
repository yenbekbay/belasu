<?php /* Smarty version Smarty-3.0.4, created on 2012-08-28 16:55:24
         compiled from "W:/domains/belasu.com/admin/templates/default/security/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17510503cbfbc502193-96582530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e435d4675132b3462362f6a1556caa2d0b1d1f5' => 
    array (
      0 => 'W:/domains/belasu.com/admin/templates/default/security/login.tpl',
      1 => 1346158522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17510503cbfbc502193-96582530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_direction']) ? $_smarty_tpl->getVariable('_config')->value['manager_direction'] : null)=='rtl'){?>dir="rtl"<?php }?>>
<head>
<title><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_title']) ? $_smarty_tpl->getVariable('_lang')->value['login_title'] : null);?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($_smarty_tpl->getVariable('_config')->value['modx_charset']) ? $_smarty_tpl->getVariable('_config')->value['modx_charset'] : null);?>
" />
<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null)){?><link rel="shortcut icon" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null);?>
" /><?php }?>
    
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/login.css" />
    
<script src="assets/ext3/adapter/ext/ext-base.js" type="text/javascript"></script>
<script src="assets/ext3/ext-all.js" type="text/javascript"></script>
<script src="assets/modext/core/modx.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
lang.js.php?topic=login" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="assets/modext/core/modx.component.js" type="text/javascript"></script>
<script src="assets/modext/util/utilities.js" type="text/javascript"></script>
<script src="assets/modext/widgets/core/modx.panel.js" type="text/javascript"></script>
<script src="assets/modext/widgets/core/modx.window.js" type="text/javascript"></script>
<script src="assets/modext/sections/login.js" type="text/javascript"></script>
    
<meta name="robots" content="noindex, nofollow"/>
</head>
<body id="login">
<div id="login-language-select-div">
 <label><?php echo $_smarty_tpl->getVariable('language_str')->value;?>
:
 <select name="cultureKey" id="login-language-select">
  <?php echo $_smarty_tpl->getVariable('languages')->value;?>

 </select>
 </label>
</div>
<?php echo $_smarty_tpl->getVariable('onManagerLoginFormPrerender')->value;?>

<br/>

<div id="container">

<div id="panel-login-div" class="x-panel form x-form-label-right">
 <div class="x-panel-ml">
  <div class="x-panel-mr">
   <div class="x-panel-mc">
   
   <a id="login-logo" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['site_url']) ? $_smarty_tpl->getVariable('_config')->value['site_url'] : null);?>
">
	<img src="/assets/img/logo_transparent.png" alt=""/>
   </a>   
    
   <form id="login-form" action="" method="post">
    <input type="hidden" name="login_context" value="mgr" />
    <input type="hidden" name="modahsh" value="<?php echo $_smarty_tpl->getVariable('modahsh')->value;?>
" />
    <input type="hidden" name="returnUrl" value="<?php echo $_smarty_tpl->getVariable('returnUrl')->value;?>
" />
    	    
    <div class="x-panel x-panel-noborder"><div class="x-panel-bwrap"><div class="x-panel-body x-panel-body-noheader">
    <br class="clear" />
    
    <?php if ($_smarty_tpl->getVariable('error_message')->value){?><p class="error"><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</p><?php }?>
    </div></div></div>

    <div class="x-form-item login-form-item login-form-item-first">
      <div class="x-form-element login-form-element">
        <input type="text" id="login-username" name="username" tabindex="1" autocomplete="on" value="<?php echo (isset($_smarty_tpl->getVariable('_post')->value['username']) ? $_smarty_tpl->getVariable('_post')->value['username'] : null);?>
" class="x-form-text x-form-field" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_username']) ? $_smarty_tpl->getVariable('_lang')->value['login_username'] : null);?>
" />
      </div>
    </div>
    
    <div class="x-form-item login-form-item">
      <div class="x-form-element login-form-element">
        <input type="password" id="login-password" name="password" tabindex="2" autocomplete="on" class="x-form-text x-form-field" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_password']) ? $_smarty_tpl->getVariable('_lang')->value['login_password'] : null);?>
" />
      </div>
    </div>

    <br class="clear" />

    <div class="login-cb-row">
        <div class="login-cb-col one">
            <div class="x-form-check-wrap login-rm-cb">
                <input type="checkbox" id="login-rememberme" name="rememberme" tabindex="3" autocomplete="on" <?php if ((isset($_smarty_tpl->getVariable('_post')->value['rememberme']) ? $_smarty_tpl->getVariable('_post')->value['rememberme'] : null)){?>checked="checked"<?php }?> class="x-form-checkbox x-form-field" value="1" />
                <label for="login-rememberme" class="x-form-cb-label"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_remember']) ? $_smarty_tpl->getVariable('_lang')->value['login_remember'] : null);?>
</label>
            </div>
        </div>
        <div class="login-cb-col two">
            <div class="login-fl-link">
               <a href="javascript:void(0);" id="fl-link" style="<?php if ((isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null)){?>display:none;<?php }?>"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_forget_your_login']) ? $_smarty_tpl->getVariable('_lang')->value['login_forget_your_login'] : null);?>
</a>
            </div>
        </div>
    </div>

    <?php echo $_smarty_tpl->getVariable('onManagerLoginFormRender')->value;?>

    
    <br class="clear" />

    <button class="x-btn-text login-form-btn" name="login" type="submit" value="1" id="login-btn" tabindex="4"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_button']) ? $_smarty_tpl->getVariable('_lang')->value['login_button'] : null);?>
</button>
   </form>

    <?php if ($_smarty_tpl->getVariable('allow_forgot_password')->value){?>
    <div class="forgot-login">
    <form id="fl-form" action="" method="post">
       <div id="forgot-login-form" style="<?php if (!(isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null)){?>display: none;<?php }?>">
                      
           <div class="x-form-item login-form-item">
              <div class="x-form-element login-form-element">
                <input type="text" id="login-username-reset" name="username_reset" class="x-form-text x-form-field" value="<?php echo (isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null);?>
" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_username']) ? $_smarty_tpl->getVariable('_lang')->value['login_username'] : null);?>
" />
              </div>
              <div class="x-form-clear-left"></div>
           </div>

           <br class="clear" />
           
           <button class="x-btn-text login-form-btn" name="forgotlogin" type="submit" value="1" id="fl-btn"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_send_activation_email']) ? $_smarty_tpl->getVariable('_lang')->value['login_send_activation_email'] : null);?>
</button>
           
       </div>
    </form>
    </div>
    <?php }?>
    
    <br class="clear" />

   </div>
  </div>
 </div>
</div>

</div>

</body>
</html>
