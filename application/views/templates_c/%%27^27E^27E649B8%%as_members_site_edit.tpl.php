<?php /* Smarty version 2.6.18, created on 2014-05-12 21:10:19
         compiled from as_members_site_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_members_site_edit.tpl', 8, false),)), $this); ?>
<form action="/index.php/members/site/<?php if ($this->_tpl_vars['site_id']): ?>update/<?php echo $this->_tpl_vars['site_id']; ?>
<?php else: ?>create<?php endif; ?>/" method="post" name="site" id="site">

<p>Use this form to add or to edit your site information. [<a href="/index.php/help/topic/account_sites/1/" class="help">Help</a>]</p>

<?php if ($this->_tpl_vars['rsAliases']): ?>
<p><label for="site_alias_id">Identity</label>
<select name="site_alias_id">
<option value=""<?php if ($this->_tpl_vars['rsSite']->site_alias_id == ""): ?> selected<?php endif; ?>> <?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsUser']), $this);?>

<?php $_from = $this->_tpl_vars['rsAliases']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsAlias']):
?>
<option value="<?php echo $this->_tpl_vars['rsAlias']->alias_id; ?>
"<?php if ($this->_tpl_vars['rsSite']->site_alias_id == $this->_tpl_vars['rsAlias']->alias_id): ?> selected<?php endif; ?>> <?php echo $this->_tpl_vars['rsAlias']->alias_name; ?>

<?php endforeach; endif; unset($_from); ?>
</select></p>
<?php endif; ?>

<p><label for="site_name">Site name:</label>
<input type="text" name="site_name" id="site_name" value="<?php echo $this->_tpl_vars['rsSite']->site_name; ?>
" size="50"><br clear="left">
</p>

<p>
<label for="site_url">URL:</label>
<input type="text" name="site_url" id="site_url" value="<?php echo $this->_tpl_vars['rsSite']->site_url; ?>
" size="50"><br clear="left">
</p>

<p>
<label for="site_rss_feed">URL for XML feed:</label>
<input type="text" name="site_rss_feed" value="<?php echo $this->_tpl_vars['rsSite']->site_rss_feed; ?>
" size="50"><br>
</p>

<p>
<strong>Do you want this site listed in the directory?</strong><br>
<input type="radio" name="site_in_directory" value="1"<?php if ($this->_tpl_vars['rsSite'] != '' && $this->_tpl_vars['rsSite']->site_in_directory == 1): ?> checked<?php elseif ($this->_tpl_vars['rsSite']->site_in_directory == ''): ?>checked<?php endif; ?>> Yes
<input type="radio" name="site_in_directory" value="0"<?php if ($this->_tpl_vars['rsSite'] != '' && $this->_tpl_vars['rsSite']->site_in_directory == 0): ?> checked<?php endif; ?>> No</p>
</p>

<p><input type="submit" value="Update site"></p>

</form>

<script type="text/javascript">
<?php echo '
$(document).ready(function ()
{
	$(\'#site\').validate(
	{
		rules:
		{
			site_name: {required: true},
			site_url: {required: true, url: true}
		}
	});
});
'; ?>

</script>