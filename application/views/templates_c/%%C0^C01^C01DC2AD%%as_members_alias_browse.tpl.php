<?php /* Smarty version 2.6.18, created on 2014-05-12 21:15:43
         compiled from as_members_alias_browse.tpl */ ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post" name="profile">

<?php if ($this->_tpl_vars['rsAliases']): ?>
<p>The following aliases are available for you to edit:</p>
<?php $_from = $this->_tpl_vars['rsAliases']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsAliases']):
?>

[<a href="/index.php/members/alias/edit/<?php echo $this->_tpl_vars['rsAliases']->alias_id; ?>
/">Edit</a>]
[<a href="/index.php/members/alias/delete/<?php echo $this->_tpl_vars['rsAliases']->alias_id; ?>
/">Delete</a>] <strong><?php echo $this->_tpl_vars['rsAliases']->alias_name; ?>
</strong><br>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<p>You have yet to create any aliases. [<a href="<?php echo $_SERVER['PHP_SELF']; ?>
?userID=<?php echo $this->_tpl_vars['userID']; ?>
&amp;view=edit">Add one</a>]</p>
<?php endif; ?>