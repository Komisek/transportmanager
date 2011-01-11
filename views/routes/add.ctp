<div class="routes form">
    <script type="text/javascript">
        $(document).ready(function(){
            $('#RouteAddForm .autocomplete').autocomplete('/stations/ajaxget',{
                max: '15'
            });
            $.datepicker.regional['cs'] = {
		closeText: 'Zavřít',
		prevText: '&#x3c;Dříve',
		nextText: 'Později&#x3e;',
		currentText: 'Nyní',
		monthNames: ['leden','únor','březen','duben','květen','červen',
        'červenec','srpen','září','říjen','listopad','prosinec'],
		monthNamesShort: ['led','úno','bře','dub','kvě','čer',
		'čvc','srp','zář','říj','lis','pro'],
		dayNames: ['neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'],
		dayNamesShort: ['ne', 'po', 'út', 'st', 'čt', 'pá', 'so'],
		dayNamesMin: ['ne','po','út','st','čt','pá','so'],
		weekHeader: 'Týd',
		dateFormat: 'dd.mm.yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['cs']);

            $.datepicker.setDefaults( $.datepicker.regional[ "" ] );
            $('#RouteAddForm .dtpicker').datetimepicker($.datepicker.regional[ "cs" ]);
        });

        addedStations = 0;

        function removeStation(i)
        {
            $('#addedStations #'+i).remove();
            addedStations = addedStations - 1;
        }

        $(document).ready(function(){
            $("#addStation").click(function(event){
                i = addedStations;
                $("#addedStations").append('<div id="'+i+'" class="input text"><label for="Station'+i+'Name">Stanice:</label><input class="text-input small-input autocomplete" name="data[Station]['+i+'][name]" id="Station'+i+'Name" type="text"><a href="#" id="remStation" onclick="removeStation('+i+'); return false;"><img src="/img/rem.gif"></a></div>');
                addedStations = addedStations + 1;
                $('#RouteAddForm .autocomplete').autocomplete('/stations/ajaxget',{
                    max: '15'
                });
                event.preventDefault();
            });
        });

    </script>
<?php

    echo $this->SimplaBoxes->clear();
    pr($this->data);
    echo $this->SimplaBoxes->start_content_box(__('Přidávání trasy', true));
    echo $this->SimplaBoxes->start_content_tab(true);

    echo $this->Form->create('Route');
    /*echo $this->Ajax->autoComplete('Route.start_station_id', '/stations/ajaxget', array('type' => 'text'));
    echo $this->Ajax->autoComplete('Route.end_station_id', '/stations/ajaxget');*/
    echo $this->SimplaForm->input_small('Route.start_station', array('label' => __('Počáteční stanice', true), 'type' => 'text', 'class' => 'text-input small-input autocomplete'));

    echo '<div id="addedStations"></div>';
    echo 'Přidat průběžnou stanici: ';
    echo $html->link($html->image('add.png', array('alt' => 'Přidat průběžnou stanici')),'#', array('escape' => false, 'title' => 'Přidat průběžnou stanici', 'id' => 'addStation'));

    echo $this->SimplaForm->input_small('Route.end_station', array('label' => __('Cílová stanice', true), 'type' => 'text', 'class' => 'text-input small-input autocomplete'));
    echo $this->SimplaForm->input_small('Route.datum_cas_odjezdu', array('label' => __('Datum a čas odjezdu', true), 'type' => 'text', 'class' => 'text-input small-input dtpicker'));
    echo $this->SimplaForm->input_small('Route.datum_cas_prijezdu', array('label' => __('Datum a čas příjezdu', true), 'type' => 'text', 'class' => 'text-input small-input dtpicker'));
    echo $this->SimplaForm->select('Route.periodicity_id', $periodicities, 5, array('legend' => __('Periodicita jízdy', true)));

    echo $this->SimplaForm->end(array('label' => __('Přidat', true)));

    echo $this->SimplaBoxes->end_content_tab();
    echo $this->SimplaBoxes->end_content_box();
?>
</div>