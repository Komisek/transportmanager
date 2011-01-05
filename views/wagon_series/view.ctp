<div class="wagonSeries view">
<h2><?php  __('Vozová řada (detail)');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brzdici Vaha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['brzdici_vaha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cislo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['cislo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delka'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['delka']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oznaceni'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['oznaceni']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pocet Naprav'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['pocet_naprav']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rozvor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['rozvor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rucni Brzda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['rucni_brzda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unosnost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['unosnost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vyska Nad Temenem Kolejnice'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['vyska_nad_temenem_kolejnice']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vzdalenost Os'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wagonSeries['WagonSeries']['vzdalenost_os']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upravit vozovou řadu', true), array('action' => 'edit', $wagonSeries['WagonSeries']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazat vozovou řadu', true), array('action' => 'delete', $wagonSeries['WagonSeries']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wagonSeries['WagonSeries']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vozové řady', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat vozovou řadu', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit nákladní vozy', true), array('controller' => 'cargo_wagons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat nákladní vůz', true), array('controller' => 'cargo_wagons', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Výpis vagónu v této řadě');?></h3>
	<?php if (!empty($wagonSeries['CargoWagon'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Číslo HIM'); ?></th>
		<th><?php __('Číslo Vozu'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wagonSeries['CargoWagon'] as $cargoWagon):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cargoWagon['cislo_him'];?></td>
			<td><?php echo $cargoWagon['cislo_vozu'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'cargo_wagons', 'action' => 'view', $cargoWagon['id'])); ?>
				<?php echo $this->Html->link(__('Upravi', true), array('controller' => 'cargo_wagons', 'action' => 'edit', $cargoWagon['id'])); ?>
				<?php echo $this->Html->link(__('Smazat', true), array('controller' => 'cargo_wagons', 'action' => 'delete', $cargoWagon['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargoWagon['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
