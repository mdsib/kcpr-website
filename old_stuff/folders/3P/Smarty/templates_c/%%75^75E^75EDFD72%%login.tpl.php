<?php /* Smarty version 2.6.26, created on 2010-08-27 12:28:05
         compiled from admin/login.tpl */ ?>
<?php if (! isset ( $this->_tpl_vars['errorMsg'] )): ?>
   Hey you! Are you supposed to be here?
<?php else: ?>
   <?php echo $this->_tpl_vars['errorMsg']; ?>

<?php endif; ?>
<form method="post">
User: <input type="text" name="user" />
Password: <input type="text" name="pword" />
<input type="submit" value="Login" />
</form>