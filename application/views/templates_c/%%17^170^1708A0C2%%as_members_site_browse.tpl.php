<?php /* Smarty version 2.6.18, created on 2014-05-12 21:10:16
         compiled from as_members_site_browse.tpl */ ?>
<?php if ($this->_tpl_vars['rsSites']): ?>
<p>The following sites are available for you to edit:</p>

<?php $_from = $this->_tpl_vars['rsSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsSites']):
?>
[<a href="/index.php/members/site/edit/<?php echo $this->_tpl_vars['rsSites']->site_id; ?>
/">Edit</a>]
[<a href="/index.php/members/site/delete/<?php echo $this->_tpl_vars['rsSites']->site_id; ?>
/">Delete</a>] <strong><a href="<?php echo $this->_tpl_vars['rsSites']->site_url; ?>
"><?php echo $this->_tpl_vars['rsSites']->site_name; ?>
</a></strong><br>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<p>You don't have any sites.</p>
<?php endif; ?>