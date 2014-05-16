<?php /* Smarty version 2.6.18, created on 2014-05-12 21:11:37
         compiled from as_members_post_rss_browse.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'as_members_post_rss_browse.tpl', 19, false),)), $this); ?>
<p>You can create a post based on your RSS or Atom feeds. [<a href="/index.php/help/topic/portal_rss/1/" class="help">Help</a>]</p>

<?php if ($this->_tpl_vars['feeds']): ?>
<p>Click <strong>Add</strong> next to the RSS entry you wish to post, and the portal submission form will be pre-populated with the RSS content.</p>

<table class="bordered">
<tr>
	<th>OPTIONS</th>
	<th>POST</th>
	<th>SITE</th>
</tr>
<?php $this->assign('e', 0); ?>
<?php $_from = $this->_tpl_vars['feeds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a'] => $this->_tpl_vars['feeds']):
?>
<?php $this->assign('channel', $this->_tpl_vars['feeds']->channel); ?>
<?php $_from = $this->_tpl_vars['feeds']->items; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['feed_items'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['feed_items']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['feed_item']):
        $this->_foreach['feed_items']['iteration']++;
?>
<tr>
	<td>
<form action="/index.php/members/post/rss/add/" method="post" name="feed_item_<?php echo $this->_tpl_vars['e']; ?>
" id="feed_item_<?php echo $this->_tpl_vars['e']; ?>
">
<input type="hidden" name="portal_headline" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['feed_item']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" size=40>
<input type="hidden" name="portal_url" value="<?php echo $this->_tpl_vars['feed_item']['link']; ?>
" size=40>
<input type="hidden" name="portal_body_text" value="<?php if ($this->_tpl_vars['feed_item']['description']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['feed_item']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php elseif ($this->_tpl_vars['feed_item']['atom_content']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['feed_item']['atom_content'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?>" size=40>
<input type="hidden" name="portal_user_id" value="<?php echo $this->_tpl_vars['site_user_id']; ?>
">
<input type="hidden" name="portal_site_id" value="<?php echo $this->_tpl_vars['site_ids'][$this->_tpl_vars['a']]; ?>
">
[<a href="javascript:" class="add_item">Add</a>]
</form>
	</td>
	<td><strong><a href="<?php echo $this->_tpl_vars['feed_item']['link']; ?>
"><?php echo $this->_tpl_vars['feed_item']['title']; ?>
</a></strong></td>
	<td><a href="<?php echo $this->_tpl_vars['channel']['link']; ?>
"><?php echo $this->_tpl_vars['channel']['title']; ?>
</a></td>
</tr>
<?php $this->assign('e', $this->_tpl_vars['e']+1); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
</table>

<script type="text/javascript">
<?php echo '
$(document).ready(function ()
{
	$(\'a[class=add_item]\').click(function () {this.parentNode.submit();});
});
'; ?>

</script>

<?php else: ?>
<p>To enable this function, <a href="/members/sites.php?userID=1">edit your site information</a> to include the URL of your RSS or Atom feed in the <strong>URL for syndication feed</strong> field.</p>

<?php endif; ?>