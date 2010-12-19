<div class="cargoWagons view">
<h2><?php  __('Cargo Wagon');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wagon Series'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargoWagon['WagonSeries']['oznaceni'], array('controller' => 'wagon_series', 'action' => 'view', $cargoWagon['WagonSeries']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo Him'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['cislo_him']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo Vozu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['cislo_vozu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Druh Brzdeni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['druh_brzdeni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Druh Brzdoveho Valce'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['druh_brzdoveho_valce']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Revize'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['dvojkoli_revize']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Typ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['dvojkoli_typ']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Velikost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['dvojkoli_velikost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dvojkoli Vyrobce'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['dvojkoli_vyrobce']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oprava Typ'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['oprava_typ']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pruznice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['pruznice']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rada']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rezim Vozu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rezim_vozu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Roky Revize Dvojkoli Bez Zvednuti Skrine'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['roky_revize_dvojkoli_bez_zvednuti_skrine']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Roky Revize Kotle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['roky_revize_kotle']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Roky Revize Vozu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['roky_revize_vozu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rozvadec'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rozvadec']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rucni Brzda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rucni_brzda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rychlost Km'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rychlost_km']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vlastni Hmotnost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['vlastni_hmotnost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zdrze'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['zdrze']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargo Wagon', true), array('action' => 'edit', $cargoWagon['CargoWagon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cargo Wagon', true), array('action' => 'delete', $cargoWagon['CargoWagon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['CargoWagon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargo Wagons', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Wagon', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wagon Series', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trains', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Trains');?></h3>
	<?php if (!empty($cargoWagon['Train'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Route Id'); ?></th>
		<th><?php __('Locomotive Id'); ?></th>
		<th><?php __('Engine Driver Id'); ?></th>
		<th><?php __('Stav Rezervace'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cargoWagon['Train'] as $train):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $train['id'];?></td>
			<td><?php echo $train['route_id'];?></td>
			<td><?php echo $train['locomotive_id'];?></td>
			<td><?php echo $train['engine_driver_id'];?></td>
			<td><?php echo $train['stav_rezervace'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'trains', 'action' => 'view', $train['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'trains', 'action' => 'edit', $train['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'trains', 'action' => 'delete', $train['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Train', true), array('controller' => 'trains', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
