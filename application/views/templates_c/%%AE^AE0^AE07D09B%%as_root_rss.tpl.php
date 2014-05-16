<?php /* Smarty version 2.6.18, created on 2014-05-12 21:08:35
         compiled from as_root_rss.tpl */ ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="UTF-8"<?php echo '?>'; ?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:admin="http://webns.net/mvcb/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
<channel>
<title>Austin Stories</title>
<link>http://www.austin-stories.com/</link>
<description>a portal for austin-based online journal writers</description>
<dc:language>en-us</dc:language>
<?php $_from = $this->_tpl_vars['rsItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rsItem']):
?>
<item>
<title><![CDATA[<?php echo $this->_tpl_vars['rsItem']['portal_headline']; ?>
]]></title>
<link><?php echo $this->_tpl_vars['rsItem']['portal_url']; ?>
</link>
<description><![CDATA[<?php echo $this->_tpl_vars['rsItem']['portal_body_text']; ?>
]]></description>
<guid><?php echo $this->_tpl_vars['rsItem']['portal_url']; ?>
</guid>
<dc:creator><?php echo $this->_tpl_vars['rsItem']['user_display_name']; ?>
</dc:creator>
<dc:subject><?php echo $this->_tpl_vars['rsItem']['site_name']; ?>
</dc:subject>
<dc:date><?php echo $this->_tpl_vars['rsItem']['portal_date_added']; ?>
</dc:date>
</item>
<?php endforeach; endif; unset($_from); ?>
</channel>
</rss>