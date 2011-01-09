<div class="locomotives form">
<h2><?php __('Locomotive');?></h2>
    <?php
        echo $this->SimplaBoxes->start_content_box(__('Úprava hnacího vozu', true));
            echo $this->SimplaBoxes->start_content_tab(true);

            echo $this->Form->create('Locomotive');
            echo $this->Form->input('id');
            echo $this->SimplaForm->input_small('cislo_hv', array('label' => 'Číslo HV'));
            echo $this->SimplaForm->input_small('maximalni_rychlost', array('label' => 'Maximální rychlost'));
            echo $this->SimplaForm->input_small('rada', array('label' => 'Řada'));
            echo $this->SimplaForm->input_small('rozvor_pevny', array('label' => 'Rozvor (pevný)'));
            echo $this->SimplaForm->input_small('rozvor_celkovy', array('label' => 'Rozvor (celkový)'));
            echo $this->SimplaForm->input_small('delka_pres_narazniky', array('label' => 'Délka přes nárazníky'));
            echo $this->SimplaForm->input_small('max_hmotnost_na_napravu', array('label' => 'Maximální hmotnost na nápravu'));
            echo $this->SimplaForm->input_small('hmotnost_ve_sluzbe', array('label' => 'Hmotnost ve službě'));
            echo $this->SimplaForm->input_small('brzdici_vaha_g', array('label' => 'Délka přes nárazníky'));
            echo $this->SimplaForm->input_small('brzdici_vaha_g', array('label' => 'Délka přes nárazníky'));
            echo $this->SimplaForm->input_small('brzdici_vaha_g', array('label' => 'Délka přes nárazníky'));
            echo $this->SimplaForm->input_small('brzdici_vaha_rucni_brzdy', array('label' => 'Délka přes nárazníky'));
            echo $this->SimplaForm->input_small('Train', array('label' => 'Přiřazená vlaková souprava'));


            echo $this->SimplaForm->end(array('label' => __('Ulož', true)));

            echo $this->SimplaBoxes->end_content_tab();
        echo $this->SimplaBoxes->end_content_box();
    ?>
</div>
<div class="actions">
	<h3><?php __('Kam dál?'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $this->Form->value('Locomotive.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Locomotive.id'))); ?></li>
                <li><?php echo $this->Html->link(__('Zobraz nákladní vozy', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Zobraz vozové řady', true), array('controller' => 'wagon_series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Zobraz vlakové soupravy', true), array('controller' => 'trains', 'action' => 'index')); ?> </li>
	</ul>
</div>



