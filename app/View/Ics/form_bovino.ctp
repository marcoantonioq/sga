

    <?php echo $this->Form->create('Ic'); ?>


    <?php 
        $this->Form->inputDefaults(array(
            'label' => false,
            'class' => 'span12',
        ));
    ?>

    <?php 

        echo $this->Form->input('id', array(
            'label'=>'id',
        ));

        echo $this->Form->input('bovino_id', array(
            'label'=>'Bovino',
        ));

        echo $this->Form->input('semem_id', array(
            'label'=>'Semêm',
        ));

        echo $this->Form->input('tipo', array(
            'label'=>'Tipo',
            'type'=>'select',
            'options'=>array(
                'ia'=>'Inseminação Artificial',
                'mc'=>'Monta Controlada',
                'mn'=>'Monta Campo',
            )
        ));

        echo $this->Form->input('status', array(
            'label'=>'tipo',
            'type'=>'select',
            'options'=>array(
                'ics'=>'ICs',
                'gestante'=>'Gestante',
                'parto'=>'Parto',
                'abordo'=>'Abordo',
            )
        ));

        echo $this->Form->input('data', array(
            'label'=>'data',
            'type'=>'datetime-local'
        ));

        echo $this->Form->input('dataparto', array(
            'label'=>'dataparto',
            'type'=>'datetime-local'
        ));

        echo $this->Form->input('descricao', array(
            'label'=>'descricao',
        ));
    ?>

    <div class="row-fluid">
        <div class="form-actions">
            <button type="submit" class="btn btn-info">Save</button>
            <?php echo $this->Html->link('Cancel',
                array('action'=>'index'),
                array('class'=>'btn btn-warning')
            );?>  
        </div>  
    </div>