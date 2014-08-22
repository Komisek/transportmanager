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
                    <br/>
                    <table>
                        <tr>
                            <th>Důvod zamítnutí</th>
                            <th><?php echo $train['Train']['zprava_mi']; ?></th>
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
				<?php echo $this->Html->link(__('Detail', true), array('controller' => 'cargo_wagons', 'action' => 'view', $cargoWagon['id'])); ?>
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
            <?php endif;
            echo $this->SimplaBoxes->end_content_tab();
            echo $this->SimplaBoxes->end_content_box();?>
       <?php echo $this->SimplaBoxes->start_content_box(__('Informace o soupravě', true));
                echo $this->SimplaBoxes->start_content_tab(true);?>
                <table>
                        <tr>
                            <th>Datum odeslání zprávy</th>
                            <th><?php echo $train['Train']['modified']; ?></th>
                        </tr>
                        <tr>
                            <th>Výchozí stanice</th>
                            <th><?php echo $routes[$train['Route']['id']-1]['StartStation']['name']; ?></th>
                        </tr>
                        <tr>
                            <th>Čas odjezdu</th>
                            <th><?php echo $train['Route']['datum_cas_odjezdu']; ?></th>
                        </tr>
                        <tr>
                            <th>Cílová  stanice</th>
                            <th><?php echo $routes[$train['Route']['id']-1]['EndStation']['name']; ?></th>
                        </tr>
                        <tr>
                            <th>Čas příjezdu</th>
                            <th><?php echo $train['Route']['datum_cas_prijezdu']; ?></th>
                        </tr>
                        <tr>
                            <th>Periodicita</th>
                            <th><?php echo $routes[$train['Route']['id']-1]['Periodicity']['name']; ?></th>
                        </tr>
                        <tr>
                            <th>Hmotnost vlaku</th>
                            <th><?php
                            $hmotnost=0;
                            $i=0;
                            foreach ($train['Locomotive'] as $locomotive) {
                                $hmotnost += $train['Locomotive'][$i]['hmotnost_ve_sluzbe'];
                                $i++;
                            }
                            $hmotnost *= 1000;
                            $i=0;
                            foreach ($train['CargoWagon'] as $locomotive) {
                                $hmotnost += $train['CargoWagon'][$i]['vlastni_hmotnost'];
                                $i++;
                            }
                            echo $hmotnost.' Kg';
                            ?></th>
                        </tr>
                        <tr>
                            <th>Délka vlaku</th>
                            <th><?php
                            $hmotnost=0;
                            $i=0;
                            foreach ($train['CargoWagon'] as $locomotive) {
                                $hmotnost += $train['CargoWagon'][$i]['delka_vozu_dm'];
                                $i++;
                            }
                            $hmotnost /= 10;
                            $i=0;
                            foreach ($train['Locomotive'] as $locomotive) {
                                $hmotnost += $train['Locomotive'][$i]['delka_pres_narazniky'];
                                $i++;
                            }
                            echo $hmotnost.' m';
                            ?></th>
                        </tr>
                        <tr>
                            <th>Maximální rychlost</th>
                            <th><?php echo $train['CargoWagon'][0]['rychlost_km'].' Km/h'; ?></th>
                        </tr>
                        <tr>
                            <th>Maximální nápravové zatížení</th>
                            <th><?php echo $train['Locomotive'][0]['max_hmotnost_na_napravu'].' T'; ?></th>
                        </tr>
                </table>
        <?php echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();?>
</div>
