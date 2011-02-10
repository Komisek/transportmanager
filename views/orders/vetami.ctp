<div class="trains view">
    <?php //pr($train);?>
    <?php
        echo $this->SimplaBoxes->clear();?>
    <h2><?php __('Vlaková souprava č: '.$train['Train']['id']);?></h2>
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

    <ul>
        <li><?php echo $this->Html->link(__('Stáhnout datovou větu', true), array('controller' => 'orders', 'action' => 'xmlmi', $train['Train']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Schválit', true), array('controller' => 'orders', 'action' => 'schvaleni', $train['Train']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Neschválit', true), array('controller' => 'orders', 'action' => 'neschvaleni', $train['Train']['id'])); ?> </li>
    </ul>

