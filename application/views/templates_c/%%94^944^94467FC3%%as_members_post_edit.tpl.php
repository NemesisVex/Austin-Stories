<?php /* Smarty version 2.6.18, created on 2014-05-12 21:08:29
         compiled from as_members_post_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_members_post_edit.tpl', 9, false),array('modifier', 'regex_replace', 'as_members_post_edit.tpl', 12, false),array('modifier', 'escape', 'as_members_post_edit.tpl', 12, false),array('modifier', 'date_format', 'as_members_post_edit.tpl', 17, false),)), $this); ?>
<form action="/index.php/members/post/<?php if ($this->_tpl_vars['post_id']): ?>update/<?php echo $this->_tpl_vars['post_id']; ?>
<?php else: ?>create<?php endif; ?>/" method="post" name="post" id="post">

<p>Use this form to post or change an entry to the portal. [<a href="/index.php/help/topic/portal_post/1/" class="help">Help</a>]</p>

<div class="box-body">
<p><em>Here is a live preview of your post. Make sure JavaScript is enabled.</em></p>

<p>
<strong><a href="<?php echo $this->_tpl_vars['input']['site_url']; ?>
" id="preview_site_name"><?php echo $this->_tpl_vars['input']['site_name']; ?>
</a></strong> by <span id="preview_user_name"><?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsPost']), $this);?>
</span><br>
<span class="headline"><a href="<?php echo $this->_tpl_vars['input']['portal_url']; ?>
" id="preview_headline"><?php echo $this->_tpl_vars['input']['portal_headline']; ?>
</a></span><br>
</p>
<p id="preview_body_text"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['portal_body_text'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/<(|\/)a([^>]*)>/", "") : smarty_modifier_regex_replace($_tmp, "/<(|\/)a([^>]*)>/", "")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</p>
</div>

<?php if ($this->_tpl_vars['input']['portal_date_added']): ?>
<p>
<label>Date posted:</label> <?php echo ((is_array($_tmp=$this->_tpl_vars['input']['portal_date_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%h %d, %Y %H:%M:%S") : smarty_modifier_date_format($_tmp, "%h %d, %Y %H:%M:%S")); ?>
<br>
</p>
<?php endif; ?>

<p><label for="portal_site_id">Site:</label>
<select name="portal_site_id" id="portal_site_id">
<?php $_from = $this->_tpl_vars['rsSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsSite']):
?>
<option value="<?php echo $this->_tpl_vars['rsSite']->site_id; ?>
"<?php if ($this->_tpl_vars['input']['portal_site_id'] == $this->_tpl_vars['rsSite']->site_id): ?> selected<?php endif; ?>> <?php echo $this->_tpl_vars['rsSite']->site_name; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select></p>

<p><label for="portal_headline">Headline:</label>
<input type="text" name="portal_headline" id="portal_headline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['portal_headline'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="40"><br clear="left">
</p>

<p>
<label for="portal_url">URL to entry:</label>
<input type="text" name="portal_url" id="portal_url" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['input']['portal_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size="40"><br clear="left">
</p>

<p>
<strong>Portal text:</strong> (max. 50 words)<br>
<textarea name="portal_body_text" id="portal_body_text" rows="7" cols="50"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['input']['portal_body_text'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/<(|\/)a([^>]*)>/", "") : smarty_modifier_regex_replace($_tmp, "/<(|\/)a([^>]*)>/", "")))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea><br clear="left">
</p>

<p>
<strong>Save this post as:</strong><br>
<input type="radio" name="portal_publish_status" value="0"<?php if ($this->_tpl_vars['input']['portal_publish_status'] == 0): ?> checked<?php endif; ?>> <strong>A draft</strong> (text is saved but not posted to the site)<br>
<input type="radio" name="portal_publish_status" value="1"<?php if ($this->_tpl_vars['input']['portal_publish_status'] == 1): ?> checked<?php endif; ?>> <strong>A published post</strong> (text is saved and posted to site)<br>
</p>

<input type="hidden" name="portal_date_added" value="<?php if ($this->_tpl_vars['input']['portal_date_added']): ?><?php echo $this->_tpl_vars['input']['portal_date_added']; ?>
<?php else: ?><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
<?php endif; ?>">

<p><input type="submit" value="Save post"></p>

</form>

<script type="text/javascript">
var aliases = new Array();
var site_urls = new Array();

<?php $_from = $this->_tpl_vars['rsSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsSite']):
?>
aliases[<?php echo $this->_tpl_vars['rsSite']->site_id; ?>
] = '<?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsSite']), $this);?>
';
site_urls[<?php echo $this->_tpl_vars['rsSite']->site_id; ?>
] = "<?php echo $this->_tpl_vars['rsSite']->site_url; ?>
";
<?php endforeach; endif; unset($_from); ?>

<?php echo '
function preview_text(source, destination)
{
	destination.html(source.value);
}

$(document).ready(function ()
{
	$(\'#preview_headline\').html($(\'#portal_headline\').val());
	$(\'#preview_url\').html($(\'#portal_url\').val());
	$(\'#preview_body_text\').html($(\'#portal_body_text\').val());
	$(\'#preview_site_name\').html($(\'#portal_site_id option:selected\').text());
	$(\'#preview_site_name\').attr(\'href\', site_urls[$(\'#portal_site_id option:selected\').val()]);
	$(\'#preview_user_name\').html(aliases[$(\'#portal_site_id option:selected\').val()]);
	
	$(\'#portal_headline\').keyup(function () {preview_text(this, $(\'#preview_headline\'));});
	$(\'#portal_url\').blur(function () {preview_text(this, $(\'#preview_url\'));});
	$(\'#portal_body_text\').keyup(function () {preview_text(this, $(\'#preview_body_text\'));});
	$(\'#portal_site_id\').change(function ()
	{
		var site_id = $(\'#portal_site_id option:selected\').val();
		var site_name = $(\'#portal_site_id option:selected\').text();
		
		$(\'#preview_site_name\').html(site_name);
		$(\'#preview_site_name\').attr(\'href\', site_urls[site_id]);
		$(\'#preview_user_name\').html(aliases[site_id]);
	});
	
	$(\'#post\').validate(
	{
		rules:
		{
			portal_headline: {required: true},
			portal_url: {required: true, url: true},
			portal_body_text: {required: true}
		}
	});
});
'; ?>

</script>