<div class="trains view">
    <?php //pr($train);?>
    <?php
        echo $this->SimplaBoxes->clear();?>
    <h2><?php __('Vlaková souprava č: '.$train['Train']['id']);?></h2>
       <?php echo $this->SimplaBoxes->start_content_box(__('Informace o soupravě', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
                    <table>
                        <tr>
                            <th><?php __('Čas odjezdu'); ?></th>
                            <th><?php __('Čas příjezdu'); ?></th>
                            <th><?php __('Stav rezervace'); ?></th>
                        </tr>
                        <tr>
                            <th><?php echo $train['Route']['datum_cas_odjezdu']; ?></th>
                            <th><?php echo $train['Route']['datum_cas_prijezdu']; ?></th>
                            <th><?php echo $train['Train']['stav_rezervace']; ?></th>
                        </tr>
                    </table>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
        <?php echo $this->SimplaBoxes->start_content_box(__('Informace o hnacím vozu', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
                    <?php if (!empty($train['Locomotive'])):?>
                    <table cellpadding = "0" cellspacing = "0">
                	<tr>
                            <th><?php __('Číslo HV'); ?></th>
                            <th class="actions"><?php __('Actions');?></th>
                	</tr>
                        <?php
                        $i = 0;
                        foreach ($train['Locomotive'] as $locomotive):
                                $class = null;
                            if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
                        ?>
                        <tr<?php echo $class;?>>
                            <td><?php echo $locomotive['cislo_hv'];?></td>
                            <td class="actions">
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'locomotives', 'action' => 'view', $locomotive['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            <?php endif; ?>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
        <?php echo $this->SimplaBoxes->start_content_box(__('Informace o nákladních vozech', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
                    <?php if (!empty($train['CargoWagon'])):?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            <th><?php __('Číslo Him'); ?></th>
                            <th><?php __('Číslo Vozu'); ?></th>
                            <th class="actions"><?php __('Actions');?></th>
                        </tr>
                        <?php
                        $i = 0;
                        foreach ($train['CargoWagon'] as $cargoWagon):
                                $class = null;
                            if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
                        ?>
                        <tr<?php echo $class;?>>
                            <td><?php echo $cargoWagon['him'];?></td>
                            <td><?php echo $cargoWagon['cislo_vozu'];?></td>
                            <td class="actions">
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'cargo_wagon', 'action' => 'view', $cargoWagon['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            <?php endif; ?>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
        <?php echo $this->SimplaBoxes->start_content_box(__('Informace o strojvůdcích', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
	<?php if (!empty($train['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Name'); ?></th>
		<th><?php __('Surname'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($train['Employee'] as $employee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employee['name'];?></td>
			<td><?php echo $employee['surname'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Upravit', true), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Smazat', true), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['id'])); ?>
			</td>
		</tr>
                    <?php endforeach; ?>
                    </table>
            <?php endif; ?>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
        <?php echo $this->SimplaBoxes->start_content_box(__('Informace o trase', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
	<?php //pr($routes); ?>
    
        <?php if (!empty($train['Route'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Počáteční stanice'); ?></th>
		<th><?php __('Cílová stanice'); ?></th>
		<th><?php __('Periodicita'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($train['Route'] as $route):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $routes[0]['StartStation']['name'].' - '.$route['start_station_id'];?></td>
			<td><?php echo $routes[0]['EndStation']['name'].' - '.$route['start_station_id'];?></td>
			<td><?php echo $routes[0]['Periodicity']['name'].' - '.$route['start_station_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detal', true), array('controller' => 'routes', 'action' => 'view', $route['id'])); ?>
			</td>
		</tr>
                    <?php endforeach; ?>
                    </table>
            <?php endif; ?>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
</div>
