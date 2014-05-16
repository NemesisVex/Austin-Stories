<?php /* Smarty version 2.6.18, created on 2014-05-12 21:02:46
         compiled from as_global_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'as_global_footer.tpl', 6, false),array('modifier', 'escape', 'as_global_footer.tpl', 8, false),)), $this); ?>
	</td>
	<td class="buffer-cell"></td>
</tr>
<tr>
	<td class="nav-cell" colspan="3">
	all posts &copy; respective authors. site design and code &copy; 2003-<?php echo ((is_array($_tmp='now')) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 <a href="http://www.gregbueno.com/">greg bueno</a>. <a href="/index.php/aus/terms/">terms and conditions of services</a>.
<?php if (@ENVIRONMENT != 'production'): ?>
<a href="http://austinstories<?php echo ((is_array($_tmp=$_ENV['REQUEST_URI'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">dev</a>.
<a href="http://test.austin-stories.com<?php echo ((is_array($_tmp=$_ENV['REQUEST_URI'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">test</a>.
<a href="http://www.austin-stories.com<?php echo ((is_array($_tmp=$_ENV['REQUEST_URI'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">prod</a>.
<?php endif; ?>
	</td>
</tr>
</table>

<?php echo '
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7828220-4");
pageTracker._trackPageview();
} catch(err) {}
</script>
'; ?>


</body>
</html>