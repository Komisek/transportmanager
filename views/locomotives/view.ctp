<div class="locomotives view">
<h2><?php  __('Hnací vůz');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Číslo HV'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['cislo_hv']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Maximální rychlost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['maximalni_rychlost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Řada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rada']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rozvor (pevný)'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rozvor_pevny']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rozvor (celkový)'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['rozvor_celkovy']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Délka přes nárazníky'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['delka_pres_narazniky']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Maximální hmotnost na nápravu'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['max_hmotnost_na_napravu']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hmotnost ve službě'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['hmotnost_ve_sluzbe']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bzdící váha G'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzdici_vaha_g']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bzdící váha P'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzdici_vaha_p']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bzdící váha R'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzdici_vaha_r']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bzdící váha ruční brzdy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $locomotive['Locomotive']['brzdici_vaha_rucni_brzdy']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Upravit hnací vůz', true), array('action' => 'edit', $locomotive['Locomotive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Smazac hnací vůz', true), array('action' => 'delete', $locomotive['Locomotive']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $locomotive['Locomotive']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit hnací vozy', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Přidat hnací vůz', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit historii přepravy', true), array('controller' => 'archived_transportations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobrazit vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php __('Přiřazené vlakové soupravy');?></h3>
	<?php if (!empty($locomotive['Train'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Číslo vlaku'); ?></th>
		<th><?php __('Číslo trasy'); ?></th>
		<th><?php __('Stav Rezervace'); ?></th>
                <th><?php __('Datum a čas odjezdu'); ?></th>
                <th><?php __('Datum a čas příjezdu'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($locomotive['Train'] as $train):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $train['id'];?></td>
			<td><?php echo $train['route_id'];?></td>
			<td><?php echo $train['stav_rezervace'];?></td>
                        <td><?php
                        $i=0;
                        foreach ($routes as $route) {
                                //pr($route);
                                if ($train['id'] == $route['Train']['id']){
                                    echo $route['Route']['datum_cas_odjezdu'];
                                }
                                else
                                    $i++;
                            }
                        ?></td>
                        <td><?php
                        $i=0;
                        foreach ($routes as $route) {
                                //pr($route);
                                if ($train['id'] == $route['Train']['id']){
                                    echo $route['Route']['datum_cas_odjezdu'];
                                }
                                else
                                    $i++;
                            };
                        ?></td>
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
