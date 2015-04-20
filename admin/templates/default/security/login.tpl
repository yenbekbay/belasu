<!DOCTYPE html>
<html lang="{$_config.manager_lang_attribute}" {if $_config.manager_direction EQ 'rtl'}dir="rtl"{/if}>
<head>
<title>{$_lang.login_title}</title>
<meta http-equiv="Content-Type" content="text/html; charset={$_config.modx_charset}" />
{if $_config.manager_favicon_url}<link rel="shortcut icon" href="{$_config.manager_favicon_url}" />{/if}
    
<link rel="stylesheet" type="text/css" href="{$_config.manager_url}assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="{$_config.manager_url}templates/default/css/login.css" />
    
<script src="assets/ext3/adapter/ext/ext-base.js" type="text/javascript"></script>
<script src="assets/ext3/ext-all.js" type="text/javascript"></script>
<script src="assets/modext/core/modx.js" type="text/javascript"></script>
<script src="{$_config.connectors_url}lang.js.php?topic=login" type="text/javascript"></script>
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
 <label>{$language_str}:
 <select name="cultureKey" id="login-language-select">
  {$languages}
 </select>
 </label>
</div>
{$onManagerLoginFormPrerender}
<br/>

<div id="container">

<div id="panel-login-div" class="x-panel form x-form-label-right">
 <div class="x-panel-ml">
  <div class="x-panel-mr">
   <div class="x-panel-mc">
   
   <a id="login-logo" href="{$_config.site_url}">
	<img src="/assets/img/logo_transparent.png" alt=""/>
   </a>   
    
   <form id="login-form" action="" method="post">
    <input type="hidden" name="login_context" value="mgr" />
    <input type="hidden" name="modahsh" value="{$modahsh}" />
    <input type="hidden" name="returnUrl" value="{$returnUrl}" />
    	    
    <div class="x-panel x-panel-noborder"><div class="x-panel-bwrap"><div class="x-panel-body x-panel-body-noheader">
    <br class="clear" />
    
    {if $error_message}<p class="error">{$error_message}</p>{/if}
    </div></div></div>

    <div class="x-form-item login-form-item login-form-item-first">
      <div class="x-form-element login-form-element">
        <input type="text" id="login-username" name="username" tabindex="1" autocomplete="on" value="{$_post.username}" class="x-form-text x-form-field" placeholder="{$_lang.login_username}" />
      </div>
    </div>
    
    <div class="x-form-item login-form-item">
      <div class="x-form-element login-form-element">
        <input type="password" id="login-password" name="password" tabindex="2" autocomplete="on" class="x-form-text x-form-field" placeholder="{$_lang.login_password}" />
      </div>
    </div>

    <br class="clear" />

    <div class="login-cb-row">
        <div class="login-cb-col one">
            <div class="x-form-check-wrap login-rm-cb">
                <input type="checkbox" id="login-rememberme" name="rememberme" tabindex="3" autocomplete="on" {if $_post.rememberme}checked="checked"{/if} class="x-form-checkbox x-form-field" value="1" />
                <label for="login-rememberme" class="x-form-cb-label">{$_lang.login_remember}</label>
            </div>
        </div>
        <div class="login-cb-col two">
            <div class="login-fl-link">
               <a href="javascript:void(0);" id="fl-link" style="{if $_post.username_reset}display:none;{/if}">{$_lang.login_forget_your_login}</a>
            </div>
        </div>
    </div>

    {$onManagerLoginFormRender}
    
    <br class="clear" />

    <button class="x-btn-text login-form-btn" name="login" type="submit" value="1" id="login-btn" tabindex="4">{$_lang.login_button}</button>
   </form>

    {if $allow_forgot_password}
    <div class="forgot-login">
    <form id="fl-form" action="" method="post">
       <div id="forgot-login-form" style="{if NOT $_post.username_reset}display: none;{/if}">
                      
           <div class="x-form-item login-form-item">
              <div class="x-form-element login-form-element">
                <input type="text" id="login-username-reset" name="username_reset" class="x-form-text x-form-field" value="{$_post.username_reset}" placeholder="{$_lang.login_username}" />
              </div>
              <div class="x-form-clear-left"></div>
           </div>

           <br class="clear" />
           
           <button class="x-btn-text login-form-btn" name="forgotlogin" type="submit" value="1" id="fl-btn">{$_lang.login_send_activation_email}</button>
           
       </div>
    </form>
    </div>
    {/if}
    
    <br class="clear" />

   </div>
  </div>
 </div>
</div>

</div>

</body>
</html>
