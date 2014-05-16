<?php /* Smarty version 2.6.18, created on 2014-05-12 21:08:18
         compiled from as_members_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_members_index.tpl', 19, false),array('modifier', 'date_format', 'as_members_index.tpl', 34, false),)), $this); ?>
<?php if ($this->_tpl_vars['rsPosts']): ?>
<div style="border-bottom:1px solid #FFB114; font-size: 11px;"><strong>RECENT POSTS</strong></div>
<p>
<?php $_from = $this->_tpl_vars['rsPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsPost']):
?>
[<a href="/index.php/members/post/edit/<?php echo $this->_tpl_vars['rsPost']->portal_id; ?>
/">Edit</a>] [<a href="/index.php/members/post/delete/<?php echo $this->_tpl_vars['rsPost']->portal_id; ?>
/">Delete</a>] <strong><a href="<?php echo $this->_tpl_vars['rsPost']->portal_url; ?>
"><?php echo $this->_tpl_vars['rsPost']->portal_headline; ?>
</a></strong><br>
<?php endforeach; endif; unset($_from); ?>
</p>

<p><a href="/index.php/members/post/browse/<?php echo $this->_tpl_vars['user_id']; ?>
/">Browse all posts</a> &raquo;</p>
<?php endif; ?>

<div style="border-bottom:1px solid #FFB114; font-size: 11px;">
<strong>FAVORITE SITES</strong>
</div>

<?php if ($this->_tpl_vars['rsFavorites']): ?>
<p>
<?php $_from = $this->_tpl_vars['rsFavorites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsFavorite']):
?>
<strong><a href="<?php echo $this->_tpl_vars['rsFavorite']->site_url; ?>
"><?php echo $this->_tpl_vars['rsFavorite']->site_name; ?>
</a></strong> by <a href="/index.php/directory/posts/<?php echo $this->_tpl_vars['rsFavorite']->site_id; ?>
/"><?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsFavorite']), $this);?>
</a><?php if ($this->_tpl_vars['rsFavorite']->site_rss_feed): ?> [<a href="/index.php/directory/feed/<?php echo $this->_tpl_vars['rsFavorite']->site_id; ?>
/">RSS</a>]<?php endif; ?><br>
<?php endforeach; endif; unset($_from); ?>
</p>
<?php else: ?>
<p>You have yet to add sites to your favorites list.</p>
<?php endif; ?>

<?php if ($this->_tpl_vars['rsFeedPosts']): ?>
<div style="border-bottom:1px solid #FFB114; font-size: 11px;"><strong>LATEST POSTS BY FAVORITE SITES</strong></div>

<?php $_from = $this->_tpl_vars['rsFeedPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsFeedPost']):
?>
<p style="text-align: justify">
<a href="<?php echo $this->_tpl_vars['rsFeedPost']->site_url; ?>
"><?php echo $this->_tpl_vars['rsFeedPost']->site_name; ?>
</a> by <a href="/index.php/directory/posts/<?php echo $this->_tpl_vars['rsFeedPost']->site_id; ?>
/"><?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsFeedPost']), $this);?>
</a><br>
<span class="headline"><a href="<?php echo $this->_tpl_vars['rsFeedPost']->portal_url; ?>
"><?php echo $this->_tpl_vars['rsFeedPost']->portal_headline; ?>
</a></span><br>
<?php echo $this->_tpl_vars['rsFeedPost']->portal_body_text; ?>
<br>
<span class="date">-- posted <?php echo ((is_array($_tmp=$this->_tpl_vars['rsFeedPost']->portal_date_added)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y %I:%M:%S %p") : smarty_modifier_date_format($_tmp, "%m/%d/%Y %I:%M:%S %p")); ?>
</span>
</p>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<p>There are no posts yet to show. Please add journals to your favorite list, or tell your favorite authors to update.</p>
<?php endif; ?>
