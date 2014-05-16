<?php /* Smarty version 2.6.18, created on 2014-05-12 21:06:55
         compiled from as_directory_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_directory_index.tpl', 9, false),)), $this); ?>
<table class="bordered wide">
<tr>
	<th>SITE/AUTHOR</th>
	<th># OF POSTS</th>
	<th>RSS?</th>
</tr>
<?php $_from = $this->_tpl_vars['rsPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsPost']):
?>
<tr>
	<td><strong><a href="<?php echo $this->_tpl_vars['rsPost']->site_url; ?>
"><?php echo $this->_tpl_vars['rsPost']->site_name; ?>
</a></strong> by <?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsPost']), $this);?>
</td>
	<td align="center">[<?php if ($this->_tpl_vars['rsPost']->portal_id): ?><a href="/index.php/directory/posts/<?php echo $this->_tpl_vars['rsPost']->site_id; ?>
/"><?php echo $this->_tpl_vars['rsPost']->PostNumber; ?>
</a><?php else: ?>0<?php endif; ?>]</td>
	<td align="center"><?php if ($this->_tpl_vars['rsPost']->site_rss_feed): ?>[<a href="/index.php/directory/feed/<?php echo $this->_tpl_vars['rsPost']->site_id; ?>
/">yes</a>]<?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>