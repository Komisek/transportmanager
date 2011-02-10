<?php //pr($cargoWagons)?>
<?php echo $this->Wizard->progressMenu(array('route' => 'Výběr trasy', 'locomotive' => ' * Výběr hnacího vozu', 'cargo' => ' * Výběr nákladního vozu', 'driver' => ' * Výběr strojvedoucího', 'review' => ' * Dokončení vlakové soupravy'), array('wrap' => 'wrap'));?><br/>
<br/><br/>
<?php echo $form->create('Train',array('id'=>'TrainCreateForm','url'=>$this->here));?>
<?php
        echo $this->SimplaBoxes->clear();
        echo $this->SimplaBoxes->start_content_box(__('Krok '.$wizard->stepNumber().': Výběr nákladních vozů', true));
        ?><div class="cargoScroll"><?php
        echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->SimplaTableWp->start_table('CargoWagon');
                /*echo $this->SimplaTableWp->table_head(
                        array(
                            __('Číslo NV', true),
                            __('Číslo HIM', true),
                            __('Vozová řada', true),
                            __('Akce', true)
                        ));*/
        $out ='';
        $out .= '<thead>'.NL;
        $out .= '<tr>'.NL;
        $out .= '<th><input class="check-all" type="checkbox" /></th>'.NL;
            $out .= '<th>'.__('Číslo NV', true).'</th>'.NL;
            $out .= '<th>'.__('Číslo HIM', true).'</th>'.NL;
            $out .= '<th filter-type="ddl">'.__('Vozová řada', true).'</th>'.NL;
            $out .= '<th>'.__('Akce', true).'</th>'.NL;
        $out .= '</tr>'.NL;
        $out .= '</thead>'.NL;
        echo $out;

                echo $this->SimplaTableWp->table_body(
                        $cargoWagons,
                        array(
                            'CargoWagon.cislo_vozu',
                            'CargoWagon.him',
                            'WagonSeries.oznaceni',
                            'actions' => array(
                                'Locomotive.view' => __('Detail', true),
                                'Locomotive.edit' => __('Upravit', true),
                                'Locomotive.delete' => __('Smazat', true),
                                )
                            ));
                echo $this->SimplaTableWp->table_foot(
                        array(
                            'addAction' =>  array('text' => __('Přidat nový hnací vůz', true), 'url' => array('admin' => true, 'controller' => 'locomotives', 'action' => 'add')),
                            'pagination' => true
                        ));
            echo $this->SimplaTableWp->end_table();?>
        </div>
    <?php  echo $this->SimplaBoxes->end_content_tab();
            echo $this->SimplaBoxes->end_content_box();?>
    <div class="submit">
        <?php
         echo $form->submit('Continue', array('div'=>false));
         echo $form->submit('Cancel', array('name'=>'Cancel','div'=>false));
         ?>
    </div>

<?php
echo $form->end();

$this->Html->script('picnet-release/picnet.table.filter.min',  array('inline' => false));
?>

<script type="text/javascript">
    $(document).ready(function(){
        var options = {
            selectOptionLabel: '<?php __('Vyberte ...');?>',
            enableCookies: 'false'
        };

        $('div.cargoScroll table').tableFilter(options);
        $('div.cargoScroll table .filters #filter_4').hide();
    });
</script>
