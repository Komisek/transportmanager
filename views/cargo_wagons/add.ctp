<div class="cargoWagons form">
<h2><?php __('CargoWagon');?></h2>
    <?php
        echo $this->SimplaBoxes->start_content_box(__('Přidání nákladního vozu', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->Form->create('CargoWagon');
            echo $this->Form->select('wagon_series_id', $wagonSeries);
            echo $this->SimplaForm->input_small('him', array('label' => 'Číslo HIM'));
            echo $this->SimplaForm->input_small('cislo_vozu', array('label' => 'Číslo vozu'));
            echo $this->SimplaForm->input_small('vlastni_hmotnost', array('label' => 'Vlastní hmotnost (Kg)'));
            echo $this->SimplaForm->input_small('rychlost_km', array('label' => 'Rychlost (km/h)'));
            echo $this->Form->input('revize', array('label' => 'Revize'));
            echo $this->SimplaForm->input_small('delka_vozu_dm', array('label' => 'Délka vozu (dm)'));
            echo $this->SimplaForm->input_small('pocet_naprav', array('label' => 'Počet náprav'));
            echo $this->SimplaForm->input_small('Train', array('label' => 'Přiřazená vlaková souprava'));


            echo $this->SimplaForm->end(array('label' => __('Ulož', true)));

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Zobraz nákladní vozy', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobraz vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>
