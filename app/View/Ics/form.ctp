
<?php echo $this->Form->create('Ic', array(
    'type' => 'get',
)); ?>


<?php 
    $this->Form->inputDefaults(array(
        'label' => false,
        'class' => 'span12',
    ));
?>

<?php 
    echo $this->Form->input('bovino_id', array(
        'label'=>'Bovino',
    ));
?>

<div class="row-fluid">
    <div class="form-actions">
        <?php echo $this->Form->button('Buscar',
            array(
                'class'=>'btn btn-warning',
                "type"=>"submit"
            )
        );?>  
    </div>  
</div>

<?php echo $this->Form->end(); ?>