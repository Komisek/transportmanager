<div class="wagonSeries form">
<h2><?php __('WagonSeries');?></h2>
    <?php
        echo $this->SimplaBoxes->start_content_box(__('Přidání vozové řady', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->Form->create('WagonSeries');
            echo $this->SimplaForm->input_small('cislo', array('label' => 'Číslo'));
            echo $this->SimplaForm->input_small('zakladni_rada', array('label' => 'Základní řada'));
            echo $this->SimplaForm->input_small('oznaceni', array('label' => 'Označení'));
            echo $this->SimplaForm->input_small('konstrukcni_skupina', array('label' => 'Konstrukční skupina'));
            echo $this->SimplaForm->input_small('delka', array('label' => 'Délka'));
            echo $this->SimplaForm->input_small('pocet_naprav', array('label' => 'Počet náprav'));
            echo $this->SimplaForm->input_small('rozvor', array('label' => 'Rozvor'));
            echo $this->SimplaForm->input_small('unosnost', array('label' => 'Únosnost'));
            echo $this->SimplaForm->input_small('vyska_nad_temenem_kolejnice', array('label' => 'Výška nad temenem kolejnice'));
            echo $this->SimplaForm->input_small('vzdalenost_os', array('label' => 'Vzdálenost os'));
            echo $this->SimplaForm->input_small('popis_vozu', array('label' => 'Popis vozu'));


            echo $this->SimplaForm->end(array('label' => __('Ulož', true)));

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Zobrazit zaměstnance', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobrazit role', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
	</ul>
</div>

