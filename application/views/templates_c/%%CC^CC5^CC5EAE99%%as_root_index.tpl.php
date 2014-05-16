<?php /* Smarty version 2.6.18, created on 2014-05-12 21:02:46
         compiled from as_root_index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_alias_name_object', 'as_root_index.tpl', 24, false),array('modifier', 'date_format', 'as_root_index.tpl', 24, false),array('modifier', 'escape', 'as_root_index.tpl', 54, false),array('modifier', 'regex_replace', 'as_root_index.tpl', 55, false),)), $this); ?>
<div class="columns">
<div class="column-left-short">

<?php if ($this->_tpl_vars['rsNewSites']): ?>
<div class="box-head">NEW SITES</div>
<div class="box-body">
<?php $_from = $this->_tpl_vars['rsNewSites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsNewSite']):
?>
<strong><a href="<?php echo $this->_tpl_vars['rsNewSite']->site_url; ?>
"><?php echo $this->_tpl_vars['rsNewSite']->site_name; ?>
</a></strong> by <?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsNewSite']), $this);?>
 <em>(Added: <?php echo ((is_array($_tmp=$this->_tpl_vars['rsNewSite']->site_date_added)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
)</em><br>
<?php endforeach; endif; unset($_from); ?>
<p><strong><a href="/index.php/directory/">All sites</a></strong> &raquo;</p>
</div><br>
<?php endif; ?>

<?php if ($this->_tpl_vars['rsEntries']): ?>
<div class="box-head">SITE NEWS</div>
<div class="box-body">
<?php $_from = $this->_tpl_vars['rsEntries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsEntry']):
?>
<em><?php echo ((is_array($_tmp=$this->_tpl_vars['rsEntry']->entry_created_on)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y") : smarty_modifier_date_format($_tmp, "%m/%d/%Y")); ?>
</em> <strong><a href="/index.php/news/entry/<?php echo $this->_tpl_vars['rsEntry']->entry_id; ?>
/"><?php echo $this->_tpl_vars['rsEntry']->entry_title; ?>
</a></strong><br>
<?php endforeach; endif; unset($_from); ?><br>

<p><strong><a href="/index.php/news/">Read more</a></strong> &raquo;</p>

</div><br>
<?php endif; ?>


<?php if ($this->_tpl_vars['feed']): ?>
<div class="box-head">AUSTIN BLOGGERS</div>
<div class="box-body">
<?php $_from = $this->_tpl_vars['feed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['feed']):
?>
<strong><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['feed']['link'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo $this->_tpl_vars['feed']['title']; ?>
</a></strong><br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['feed']['description'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\(via.+\))/", "<em>\\1</em>") : smarty_modifier_regex_replace($_tmp, "/(\(via.+\))/", "<em>\\1</em>")); ?>
<br>
<?php endforeach; endif; unset($_from); ?>

<p><strong><a href="/index.php/aus/bloggers/">Read more</a> &raquo;</strong></p>
</div>
<?php endif; ?>

<p><a href="/rss.xml"><img src="/images/rss_button.gif" width="36" height="14" alt="[RSS]" border="0"></a></p>

<p><a href="<?php echo $this->_tpl_vars['config']['to_journalcon']; ?>
/"><img src="<?php echo $this->_tpl_vars['config']['to_journalcon']; ?>
/images/jconbutton2.gif" alt="[JournalCon 2003]" width="144" height="45" border="1"></a></p>

</div>
<div class="column-right-long">

<?php $_from = $this->_tpl_vars['rsPosts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsPost']):
?>
<?php $this->assign('pubDate', ((is_array($_tmp=$this->_tpl_vars['rsPost']->portal_date_added)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %d, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %d, %Y"))); ?>
<?php $this->assign('prevDate', $this->_tpl_vars['pubDate']); ?>
<?php if ($this->_tpl_vars['nextDate'] != $this->_tpl_vars['prevDate']): ?>
<h3 class="pubdate"><?php echo $this->_tpl_vars['pubDate']; ?>
</h3>

<?php endif; ?>
<p>
<a href="<?php echo $this->_tpl_vars['rsPost']->site_url; ?>
"><?php echo $this->_tpl_vars['rsPost']->site_name; ?>
</a> by <a href="/index.php/directory/posts/<?php echo $this->_tpl_vars['rsPost']->site_id; ?>
/"><?php echo smarty_function_get_alias_name_object(array('obj' => $this->_tpl_vars['rsPost']), $this);?>
</a><br>
<span class="headline"><a href="<?php echo $this->_tpl_vars['rsPost']->portal_url; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['rsPost']->portal_headline)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></span><br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['rsPost']->portal_body_text)) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br>
<span class="date">-- posted <?php echo ((is_array($_tmp=$this->_tpl_vars['rsPost']->portal_date_added)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%m/%d/%Y %I:%M:%S %p") : smarty_modifier_date_format($_tmp, "%m/%d/%Y %I:%M:%S %p")); ?>
</span>
<?php $this->assign('nextDate', $this->_tpl_vars['prevDate']); ?>
</p>

<?php endforeach; endif; unset($_from); ?>

</div>
</div>
