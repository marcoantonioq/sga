<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Histórico reprodutivo'); ?>

<?php $this->start('contents'); ?>

    <table class='responsive table table-bordered' id='checkAll'>
    <thead>
        <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('bovino_id'); ?></th>
                <th><?php echo $this->Paginator->sort('semem_id'); ?></th>
                <th><?php echo $this->Paginator->sort('tipo'); ?></th>
                <th><?php echo $this->Paginator->sort('status'); ?></th>
                <th><?php echo $this->Paginator->sort('data'); ?></th>
                <th><?php echo $this->Paginator->sort('dataparto'); ?></th>
                <th><?php echo $this->Paginator->sort('descricao'); ?></th>
                <th><?php echo $this->Paginator->sort('created'); ?></th>
                <th><?php echo $this->Paginator->sort('updated'); ?></th>
                <th class="actions"><?php echo __('Ações'); ?></th>
            <th id='masterCh' class='ch'>
                <input type='checkbox' name='{Ic}' value='all' class='styled' />
            </th>
        </tr>
    </thead>
        <?php foreach ($ics as $ic): ?>
        <tr>
            <td><?php echo h($ic['Ic']['id']); ?>&nbsp;</td>
            <td>
                <?php echo $this->Html->link($ic['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $ic['Bovino']['id'])); ?>
            </td>
            <td>
                <?php echo $this->Html->link($ic['Semem']['id'], array('controller' => 'semems', 'action' => 'view', $ic['Semem']['id'])); ?>
            </td>
            <td><?php echo h($ic['Ic']['tipo']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['status']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['data']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['dataparto']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['descricao']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['created']); ?>&nbsp;</td>
            <td><?php echo h($ic['Ic']['updated']); ?>&nbsp;</td>
            <td class="actions">

                <?php echo $this->Html->link( 
                    "<span class='icon12 brocco-icon-search'></span>", 
                    array('action' => 'view', $ic['Ic']['id']), 
                    array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
                 ); ?>

                <?php echo $this->Html->link(
                    "<span class='icon12 icomoon-icon-pencil'></span>", 
                    array('action' => 'edit', $ic['Ic']['id']),
                    array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
                ); ?>

                <?php echo $this->Form->postLink(
                    "<span class='icon12 icomoon-icon-remove'></span>", 
                    array('action' => 'delete', $ic['Ic']['id']), 
                    array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
                    __('Tem certeza de que deseja excluir?', $ic['Ic']['id'])
                ); ?>
            </td>

            <td class="chChildren">
                <?php echo $this->Form->checkbox('row.'.$ic['Ic']['id'], array( 'class'=>'styled' ));?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php $this->end(); ?>

<?php $this->start('box'); ?>

        <?php 
        echo $this->Link->icon('Bovinos', 
            'bended_arrow_left',
            array('controller' => 'bovinos', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Semems', 
            'bended_arrow_left',
            array('controller' => 'semems', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Eventos', 
            'bended_arrow_left',
            array('controller' => 'eventos', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

    <?php echo $this->Form->input('Filter.type.0', array(
        'label'=>false,
        'div'=>'span3',
        'options' => array(
            'Ic.id'=>'id',
            'Ic.bovino_id'=>'bovino_id',
            'Ic.semem_id'=>'semem_id',
            'Ic.tipo'=>'tipo',
            'Ic.status'=>'status',
            'Ic.data'=>'data',
            'Ic.dataparto'=>'dataparto',
            'Ic.descricao'=>'descricao',
            'Ic.created'=>'created',
            'Ic.updated'=>'updated',
        ),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>