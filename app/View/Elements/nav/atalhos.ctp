<div class="shortcuts">
    <ul>
        <li class="active">
            <?php echo $this->Html->link(
                $this->Html->image("/img/icones/rebanho.png"),
                array(
                    // 'manejo'=>true,
                    'controller'=>'bovinos',
                    'action'=>'index'
                ),
                array(
                    'class'=>'tip',
                    'escape'=>false,
                    'title'=>'Rebalho', 
                )
            );?>
        </li>

        <li class="active">
            <?php echo $this->Html->link(
                $this->Html->image("/img/icones/recebimentos.png"),
                array(
                    // 'financeiro'=>true,
                    'controller'=>'centralcustos',
                    'action'=>'index'
                ),
                array(
                    'class'=>'tip',
                    'escape'=>false,
                    'title'=>'Central de custos', 
                )
            );?>
        </li>
        <li>
            <?php echo $this->Html->link(
                $this->Html->image("/img/icones/clientes.png"),
                array(
                    // 'rh'=>true,
                    'controller'=>'pessoas',
                    'action'=>'index'
                ),
                array(
                    'class'=>'tip',
                    'escape'=>false,
                    'title'=>'Recurso humanos', 
                )
            );?>
        </li>
        <!-- <li>
            <?php echo $this->Html->link(
                $this->Html->image("/img/icones/admin.png"),
                array(
                    // 'admin'=>true,
                    'controller'=>'systtings',
                    'action'=>'index'
                ),
                array(
                    'class'=>'tip',
                    'escape'=>false,
                    'title'=>'Configuração do sistema', 
                )
            );?>
        </li> -->
    </ul>
</div>