<?php /* Smarty version 2.6.18, created on 2014-05-12 21:15:44
         compiled from as_members_alias_edit.tpl */ ?>
<form action="/index.php/members/alias/<?php if ($this->_tpl_vars['alias_id']): ?>update/<?php echo $this->_tpl_vars['alias_id']; ?>
/<?php else: ?>create/<?php endif; ?>" method="post" name="site">

<p>If you have a journal that you don't want associated with your account name, use this form to create or to edit an alias for your account. You can then associate this alias with your sites. [<a href="/index.php/help/topic/account_aliases/1/" class="help">Help</a>]</p>

<p><label for="alias_name">Alias name:</label>
<input type="text" name="alias_name" value="<?php echo $this->_tpl_vars['rsAlias']->alias_name; ?>
" size="50"></p>

<p><input type="submit" value="Update alias"></p>

</form>