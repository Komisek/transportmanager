<div class="locomotives index">
	<h2><?php __('Locomotives');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('brzda_parkovaci_druh');?></th>
			<th><?php echo $this->Paginator->sort('brzda_primocara_druh');?></th>
			<th><?php echo $this->Paginator->sort('brzda_rucni_druh');?></th>
			<th><?php echo $this->Paginator->sort('brzda_tahova_druh');?></th>
			<th><?php echo $this->Paginator->sort('brzdici_vaha');?></th>
			<th><?php echo $this->Paginator->sort('cislo_prukazu_zpusobnosti');?></th>
			<th><?php echo $this->Paginator->sort('delka_pres_narazniky');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_revize');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_velikost');?></th>
			<th><?php echo $this->Paginator->sort('dvojkoli_vyrobce');?></th>
			<th><?php echo $this->Paginator->sort('hmotnost');?></th>
			<th><?php echo $this->Paginator->sort('inventarni_cislo');?></th>
			<th><?php echo $this->Paginator->sort('klimatizace');?></th>
			<th><?php echo $this->Paginator->sort('km_revize_celkova');?></th>
			<th><?php echo $this->Paginator->sort('km_revize_dvojkoli');?></th>
			<th><?php echo $this->Paginator->sort('km_revize_provozni');?></th>
			<th><?php echo $this->Paginator->sort('komunikacni_zarizeni');?></th>
			<th><?php echo $this->Paginator->sort('maximalni_rychlost');?></th>
			<th><?php echo $this->Paginator->sort('motor_typ');?></th>
			<th><?php echo $this->Paginator->sort('oprava_napln');?></th>
			<th><?php echo $this->Paginator->sort('oprava_probihajici');?></th>
			<th><?php echo $this->Paginator->sort('oznaceni');?></th>
			<th><?php echo $this->Paginator->sort('provozni_cislo');?></th>
			<th><?php echo $this->Paginator->sort('rada');?></th>
			<th><?php echo $this->Paginator->sort('rok_vyroby');?></th>
			<th><?php echo $this->Paginator->sort('rychlomer_cislo');?></th>
			<th><?php echo $this->Paginator->sort('rychlomer_typ');?></th>
			<th><?php echo $this->Paginator->sort('vykon');?></th>
			<th><?php echo $this->Paginator->sort('vyrobce');?></th>
			<th><?php echo $this->Paginator->sort('vyrobni_cislo');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($locomotives as $locomotive):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $locomotive['Locomotive']['id']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['brzda_parkovaci_druh']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['brzda_primocara_druh']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['brzda_rucni_druh']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['brzda_tahova_druh']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['brzdici_vaha']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['cislo_prukazu_zpusobnosti']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['delka_pres_narazniky']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['dvojkoli_revize']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['dvojkoli_velikost']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['dvojkoli_vyrobce']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['hmotnost']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['inventarni_cislo']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['klimatizace']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['km_revize_celkova']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['km_revize_dvojkoli']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['km_revize_provozni']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['komunikacni_zarizeni']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['maximalni_rychlost']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['motor_typ']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['oprava_napln']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['oprava_probihajici']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['oznaceni']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['provozni_cislo']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['rada']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['rok_vyroby']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['rychlomer_cislo']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['rychlomer_typ']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['vykon']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['vyrobce']; ?>&nbsp;</td>
		<td><?php echo $locomotive['Locomotive']['vyrobni_cislo']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $locomotive['Locomotive']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $locomotive['Locomotive']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $locomotive['Locomotive']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $locomotive['Locomotive']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Locomotive', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Archived Transportations', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Archived Transportation', true), array('controller' => 'archived_transportations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>