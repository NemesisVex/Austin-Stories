<?php /* Smarty version 2.6.18, created on 2014-05-12 21:02:46
         compiled from as_global_header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>austin stories<?php if ($this->_tpl_vars['page_title'] != ""): ?>: <?php echo $this->_tpl_vars['page_title']; ?>
<?php endif; ?></title>
<?php if ($this->_tpl_vars['geourl_template']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['geourl_template'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="alternate" type="application/rss+xml" title="Austin Stories RSS" href="http://www.austin-stories.com/rss.xml">
<link rel="alternate" type="application/rss+xml" title="Austin Stories Site News RSS" href="http://www.austin-stories.com/index.xml">
<link rel="stylesheet" href="/includes/austinstories.css" type="text/css">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['to_vigilante']; ?>
/includes/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['to_vigilante']; ?>
/includes/jquery.vigilante.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['config']['to_vigilante']; ?>
/includes/jquery.validate.pack.js"></script>
<?php echo '
<script type="text/javascript">
$(document).ready(function ()
{
	$(\'a[class="help"]\').click(function ()
	{
		window.open(this, \'help\', \'height=350, width=250, location=false, menubar=false, scrollbars=yes, status=no, toolbar=no\');
		return false;
	});
});
</script>
'; ?>

</head>
<body>
<!-- ukey="7EB125F6" -->
<table id="Content" cellspacing="0" border="0">
<tr>
	<td class="nav-cell" align="right" valign="top">
<a href="/">home</a> &#8226;
<a href="/index.php/directory/">directory</a> &#8226;
<a href="/index.php/members/">my austin stories</a> &#8226;
<a href="/index.php/help/">help</a> &#8226;
<a href="/index.php/aus/about/">about</a> &#8226;
<a href="/index.php/aus/contact/">contact</a>
	</td>
	<td bgcolor="#000000" class="buffer-cell"></td>
	<td id="SideCell" valign="top" rowspan="2">
<a href="/"><img src="/images/austin_stories_v02.gif" width="120" height="49" alt="" border="0"></a>
	</td>
</tr>
<tr>
	<td id="MainCell" valign="top">
<?php if ($this->_tpl_vars['breadcrumbs']): ?>
<div class="header3">
<p>
<?php echo $this->_tpl_vars['breadcrumbs']; ?>

</p>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['section_head']): ?><h1 class="header1"><?php echo $this->_tpl_vars['section_head']; ?>
<?php if ($this->_tpl_vars['section_label']): ?>: <?php echo $this->_tpl_vars['section_label']; ?>
<?php endif; ?></h1><?php endif; ?>

<?php if ($this->_tpl_vars['section_sublabel']): ?><h2 class="header2"><?php echo $this->_tpl_vars['section_sublabel']; ?>
</h2><?php endif; ?>
