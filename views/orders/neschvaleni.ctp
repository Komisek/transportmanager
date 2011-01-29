<div class="trains form">
<?php echo $this->Form->create('Train');?>
	<fieldset>
 		<legend><?php __('Neschválení vlakové soupravy'); ?></legend>
	<?php
		echo $this->Form->input('id');
                echo $this->Form->input('zprava_mi', array('label' => 'Důvod zamítnutí'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('OK', true));?>
</div>
