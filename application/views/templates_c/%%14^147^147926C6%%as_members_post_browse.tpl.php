<?php /* Smarty version 2.6.18, created on 2014-05-12 21:11:31
         compiled from as_members_post_browse.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'as_members_post_browse.tpl', 22, false),)), $this); ?>
<?php if ($this->_tpl_vars['rsPosts']): ?>
<form action="/index.php/members/post/remove/" method="post" name="posts">

<?php if ($this->_tpl_vars['page_links']): ?>
<p>
More results: <?php echo $this->_tpl_vars['page_links']; ?>

</p>
<?php endif; ?>

<table class="bordered wide">
<tr>
	<th>HEADLINE</th>
	<th>DATE POSTED</th>
	<th>SITE</th>
	<th>PUBLISH STATUS</th>
	<th>OPTIONS</th>
	<th></th>
</tr>
<?php $_from = $this->_tpl_vars['rsPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsPost']):
?>
<tr>
	<td><a href="<?php echo $this->_tpl_vars['rsPost']->portal_url; ?>
"><?php echo $this->_tpl_vars['rsPost']->portal_headline; ?>
</a></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['rsPost']->portal_date_added)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y %H:%M:%S") : smarty_modifier_date_format($_tmp, "%m/%d/%Y %H:%M:%S")); ?>
</td>
	<td><?php echo $this->_tpl_vars['rsPost']->site_name; ?>
</td>
	<td><?php if ($this->_tpl_vars['rsPost']->portal_publish_status == 1): ?>published<?php else: ?>unpublished<?php endif; ?></td>
	<td>[<a href="/index.php/members/post/edit/<?php echo $this->_tpl_vars['rsPost']->portal_id; ?>
/">Edit</a>]&nbsp;[<a href="/index.php/members/post/delete/<?php echo $this->_tpl_vars['rsPost']->portal_id; ?>
/">Delete</a>]</td>
	<td><input type="checkbox" class="portal_id" name="portal_id[]" value="<?php echo $this->_tpl_vars['rsPost']->portal_id; ?>
"></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<p><input type="checkbox" id="portal_ids"> Select all</p>


<p>
<input type="hidden" name="site_user_id" value="<?php echo $this->_tpl_vars['site_user_id']; ?>
">
<input type="submit" value="Delete checked posts">
</p>

<?php if ($this->_tpl_vars['page_links']): ?>
<p>
More results: <?php echo $this->_tpl_vars['page_links']; ?>

</p>
<?php endif; ?>

</form>

<script type="text/javascript">
<?php echo '
$(document).ready(function()
{
	$("#portal_ids").click(function()				
	{
		var checked_status = this.checked;
		$(".portal_id").each( function()
		{
			this.checked = checked_status;
		});
	});
});
'; ?>

</script>
<?php else: ?>
<p>This user has made no posts.</p>
<?php endif; ?>