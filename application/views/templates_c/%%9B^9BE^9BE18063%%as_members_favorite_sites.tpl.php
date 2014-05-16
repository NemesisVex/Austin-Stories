<?php /* Smarty version 2.6.18, created on 2014-05-12 21:16:13
         compiled from as_members_favorite_sites.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_members_favorite_sites.tpl', 21, false),)), $this); ?>
<form action="/index.php/members/favorite/create/<?php echo $this->_tpl_vars['favorite_user_id']; ?>
/" method="post" name="favorites">

<p>Choose sites to add to your favorites list. You may select multiple sites.</p>

<?php if ($this->_tpl_vars['page_links']): ?>
<p>
<?php echo $this->_tpl_vars['page_links']; ?>

</p>
<?php endif; ?>

<table class="bordered wide">
<tr>
	<th></th>
	<th>SITE</th>
	<th>AUTHOR</th>
</tr>
<?php $_from = $this->_tpl_vars['rsSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e'] => $this->_tpl_vars['rsSite']):
?>
<tr>
	<td><input type="checkbox" name="favorite_site_ids[<?php echo $this->_tpl_vars['e']; ?>
]" value="<?php echo $this->_tpl_vars['rsSite']->site_id; ?>
"></td>
	<td valign="top"><strong><a href="<?php echo $this->_tpl_vars['rsSite']->site_url; ?>
"><?php echo $this->_tpl_vars['rsSite']->site_name; ?>
</a></strong></td>
	<td valign="top"><?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsSite']), $this);?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php if ($this->_tpl_vars['page_links']): ?>
<p>
<?php echo $this->_tpl_vars['page_links']; ?>

</p>
<?php endif; ?>

<p>
<input type="submit" name="do" value="Add">
</p>
</form>