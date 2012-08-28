<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('ucp_header.html'); ?>


<form id="ucp" method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>">

<h2><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></h2>

<div class="panel">
	<div class="inner"><span class="corners-top"><span></span></span>
	<fieldset>
	<?php if ($this->_rootref['ERROR']) {  ?><p class="error"><?php echo (isset($this->_rootref['ERROR'])) ? $this->_rootref['ERROR'] : ''; ?></p><?php } if ($this->_rootref['S_MCHAT_INDEX']) {  ?>

	<dl>
		<dt><label for="mchat_index"><?php echo ((isset($this->_rootref['L_DISPLAY_MCHAT'])) ? $this->_rootref['L_DISPLAY_MCHAT'] : ((isset($user->lang['DISPLAY_MCHAT'])) ? $user->lang['DISPLAY_MCHAT'] : '{ DISPLAY_MCHAT }')); ?>:</label></dt>
		<dd>
			<label><input type="radio" name="user_mchat_index" value="1"<?php if ($this->_rootref['S_DISPLAY_MCHAT']) {  ?> id="mchat_index" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
			<label><input type="radio" name="user_mchat_index" value="0"<?php if (! $this->_rootref['S_DISPLAY_MCHAT']) {  ?> id="mchat_index"  checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
	</dl>
	<?php } ?>

	<dl>
		<dt><label for="mchat_sound"><?php echo ((isset($this->_rootref['L_SOUND_MCHAT'])) ? $this->_rootref['L_SOUND_MCHAT'] : ((isset($user->lang['SOUND_MCHAT'])) ? $user->lang['SOUND_MCHAT'] : '{ SOUND_MCHAT }')); ?>:</label></dt>
		<dd>
			<label><input type="radio" name="user_mchat_sound" value="1"<?php if ($this->_rootref['S_SOUND_MCHAT']) {  ?> id="mchat_sound" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
			<label><input type="radio" name="user_mchat_sound" value="0"<?php if (! $this->_rootref['S_SOUND_MCHAT']) {  ?> id="mchat_sound" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
	</dl>
	<?php if ($this->_rootref['S_MCHAT_INDEX']) {  ?>

	<dl>
		<dt><label for="mchat_statsindex"><?php echo ((isset($this->_rootref['L_DISPLAY_STATS_INDEX'])) ? $this->_rootref['L_DISPLAY_STATS_INDEX'] : ((isset($user->lang['DISPLAY_STATS_INDEX'])) ? $user->lang['DISPLAY_STATS_INDEX'] : '{ DISPLAY_STATS_INDEX }')); ?>:</label></dt>
		<dd>
			<label><input type="radio" name="user_mchat_stats_index" value="1"<?php if ($this->_rootref['S_STATS_MCHAT']) {  ?> id="mchat_statsindex" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
			<label><input type="radio" name="user_mchat_stats_index" value="0"<?php if (! $this->_rootref['S_STATS_MCHAT']) {  ?> id="mchat_statsindex" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
	</dl>
	<?php } if ($this->_rootref['S_MCHAT_TOPICS']) {  ?>

	<dl>
		<dt><label for="mchat_topics"><?php echo ((isset($this->_rootref['L_DISPLAY_NEW_TOPICS'])) ? $this->_rootref['L_DISPLAY_NEW_TOPICS'] : ((isset($user->lang['DISPLAY_NEW_TOPICS'])) ? $user->lang['DISPLAY_NEW_TOPICS'] : '{ DISPLAY_NEW_TOPICS }')); ?>:</label></dt>
		<dd>
			<label><input type="radio" name="user_mchat_topics" value="1"<?php if ($this->_rootref['S_TOPICS_MCHAT']) {  ?> id="mchat_topics" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
			<label><input type="radio" name="user_mchat_topics" value="0"<?php if (! $this->_rootref['S_TOPICS_MCHAT']) {  ?> id="mchat_topics" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
	</dl>
	<?php } if ($this->_rootref['S_MCHAT_AVATARS']) {  ?>

	<dl>
		<dt><label for="mchat_avatars"><?php echo ((isset($this->_rootref['L_DISPLAY_AVATARS'])) ? $this->_rootref['L_DISPLAY_AVATARS'] : ((isset($user->lang['DISPLAY_AVATARS'])) ? $user->lang['DISPLAY_AVATARS'] : '{ DISPLAY_AVATARS }')); ?>:</label></dt>
		<dd>
			<label><input type="radio" name="user_mchat_avatars" value="1"<?php if ($this->_rootref['S_AVATARS_MCHAT']) {  ?> id="mchat_avatars" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label> 
			<label><input type="radio" name="user_mchat_avatars" value="0"<?php if (! $this->_rootref['S_AVATARS_MCHAT']) {  ?> id="mchat_avatars" checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
	</dl>
	<?php } ?>	
	</fieldset>
	<span class="corners-bottom"><span></span></span></div>
</div>	
<fieldset class="submit-buttons">
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?><input type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" name="reset" class="button2" />&nbsp; 
	<input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />
	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

</fieldset>
</form>


<?php $this->_tpl_include('ucp_footer.html'); ?>