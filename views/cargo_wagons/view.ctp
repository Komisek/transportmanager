<div class="cargoWagons view">
<h2><?php  __('Nákladní vůz (detail)');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vozová řada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($cargoWagon['WagonSeries']['oznaceni'], array('controller' => 'wagon_series', 'action' => 'view', $cargoWagon['WagonSeries']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Číslo Him'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['him']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Číslo Vozu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['cislo_vozu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vlastní hmotnost (Kg)'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['vlastni_hmotnost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rychlost (km/h)'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['rychlost_km']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Revize'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['revize']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Délka vozu (Dm)'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['delka_vozu_dm']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('počet náprav'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['pocet_naprav']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Popis vozu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cargoWagon['CargoWagon']['popis_vozu']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upravit nákladní vůz', true), array('action' => 'edit', $cargoWagon['CargoWagon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazat nákladní vůz', true), array('action' => 'delete', $cargoWagon['CargoWagon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['CargoWagon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat nákladní vůz', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat vozovou řadu', true), array('controller' => 'wagon_series', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat vlakovou soupravu', true), array('controller' => 'trains', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Přiřazené vlakové soupravy');?></h3>
	<?php if (!empty($cargoWagon['Train'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Číslo vlaku'); ?></th>
		<th><?php __('Číslo trasy'); ?></th>
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
			<td><?php echo $train['stav_rezervace'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'trains', 'action' => 'view', $train['id'])); ?>
				<?php echo $this->Html->link(__('Upravit', true), array('controller' => 'trains', 'action' => 'edit', $train['id'])); ?>
				<?php echo $this->Html->link(__('Smazat', true), array('controller' => 'trains', 'action' => 'delete', $train['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $train['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
