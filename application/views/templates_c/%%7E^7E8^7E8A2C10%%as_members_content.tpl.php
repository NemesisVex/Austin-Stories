<?php /* Smarty version 2.6.18, created on 2014-05-12 21:03:02
         compiled from as_members_content.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'catch_error', 'as_members_content.tpl', 1, false),array('function', 'catch_message', 'as_members_content.tpl', 2, false),)), $this); ?>
<?php if ($this->_tpl_vars['session']->flashget('error')): ?><?php echo smarty_function_catch_error(array('error' => $this->_tpl_vars['session']->flashget('error'),'color' => "#F99"), $this);?>
<?php endif; ?>
<?php if ($this->_tpl_vars['session']->flashget('msg')): ?><?php echo smarty_function_catch_message(array('msg' => $this->_tpl_vars['session']->flashget('msg'),'color' => "#CCF"), $this);?>
<?php endif; ?>

<?php if ($_SESSION['is_logged_in']): ?>
<?php if ($this->_tpl_vars['nomirror'] == true): ?>
<p><a href="/">Austin Stories</a> is available to residents of Central Texas. Although your Vigilant Media account allows you to login, your account must first be approved for access.</p>

<p>Please <a href="/index.php/aus/contact/">contact the webmaster</a> about enabling your account for access to Austin Stories.</p>
<?php else: ?>

<div class="columns">
<div class="column-left-long">
<?php if ($this->_tpl_vars['members_content']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['members_content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
</div>
<div class="column-right-short">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "as_members_side.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>
<?php endif; ?>
<?php else: ?>
<p>To post an update or to edit your account information, please log in to your account.</p>

<p>If you don't have an account, please <strong><a href="/index.php/members/register/">sign up for one</a></strong>.</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "as_global_login.tpl", 'smarty_include_vars' => array('login_action' => '/index.php/members/login/','user_login' => $this->_tpl_vars['login'],'redirect' => $this->_tpl_vars['redirect'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p>Forgot your password? <strong><a href="/index.php/members/password/">Create a new one</a></strong>.</p>

<?php endif; ?>