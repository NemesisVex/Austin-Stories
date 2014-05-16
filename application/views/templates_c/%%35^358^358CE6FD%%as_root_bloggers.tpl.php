<?php /* Smarty version 2.6.18, created on 2013-07-22 11:19:33
         compiled from as_root_bloggers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'regex_replace', 'as_root_bloggers.tpl', 17, false),)), $this); ?>
<div class="columns">
<div class="column-right-short">
<p align="center"><a href="http://www.austinbloggers.org/"><img src="/images/bug_austinbloggers.png" width="88" height="33" alt="" border="0"></a></p>
<div class="box-body">
<p>In their own words: "The <strong>Austin Meta-Blog</strong> aggregates articles about Austin, blogged by our members."</p>

<p>The <strong><a href="http://www.austinbloggers.org/">Austin Bloggers</a></strong> also provide their own <a href="http://www.austinbloggers.org/blog/metablog.xml">RSS feed</a>, which <strong><a href="/">Austin Stories</a></strong> offers here.</p>
</div>
</div>

<div class="column-left-long">
<?php if ($this->_tpl_vars['feed']): ?>

<?php $_from = $this->_tpl_vars['feed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feed']):
?>
<?php if ($this->_tpl_vars['feed']['title'] != "(this entry has been removed)"): ?>
<p><strong><a href="<?php echo $this->_tpl_vars['feed']['link']; ?>
"><?php echo $this->_tpl_vars['feed']['title']; ?>
</a></strong><br>
<?php echo ((is_array($_tmp=$this->_tpl_vars['feed']['description'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\(via.+\))/", "<em>\\1</em>") : smarty_modifier_regex_replace($_tmp, "/(\(via.+\))/", "<em>\\1</em>")); ?>
<br></p>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<p>RSS feed unavailable at this time.</p>
<?php endif; ?>

</div>

</div>
