<?php /* Smarty version 2.6.18, created on 2014-05-12 21:03:02
         compiled from as_global_login.tpl */ ?>
<form action="<?php echo $this->_tpl_vars['login_action']; ?>
" method="post" name="loginForm">

<p>
<label for="login">Username:</label>
<input type="text" name="login" size=30<?php if ($this->_tpl_vars['user_login']): ?> value="<?php echo $this->_tpl_vars['user_login']; ?>
"<?php endif; ?>>
</p>

<p>
<label for="password">Password:</label>
<input type="password" name="password" size=30>
</p>

<p>
<input type="hidden" name="redirect" value="<?php if ($this->_tpl_vars['redirect']): ?><?php echo $this->_tpl_vars['redirect']; ?>
<?php else: ?><?php echo $_SERVER['REQUEST_URI']; ?>
<?php endif; ?>">
<input type="submit" value="Login">
</p>

</form>