<div class="large-12 columns content border-top-x antialiased">
	<?php
		echo '<div class="row text-center">';
		echo '<div class="large-12 columns"><div class="large-5 message-flash">';
		echo $this->Session->flash();
		echo '</div></div>';
		echo '<div class="large-5 contact-form login-panel antialiased">';
		echo $this->Form->create('User');
		echo __('<h4>Client Login</h4>');
		echo $this->Form->input('username', array('label'=>'Username', 'placeholder'=>'Enter Username', 'div'=>false));
		echo $this->Form->input('password', array('label'=>'Password', 'placeholder'=>'Password', 'div'=>false));
		echo '<div class="large-12 columns text-right">';
		echo '<input type="submit" id="submit" value="Login" />';
		echo '</div>';
		echo '</form>';
		echo '</div></div>';
	?>
</div>
<?php echo $this->element('footer'); ?>