<?php $user = $this->Session->read('Auth.User'); ?>
<?php //pr($permission); exit; ?>
<div class="row-fluid">
    <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">

            <div class="nav-no-collapse">
                <ul class="nav">
                    <li class="dropdown">
                        <?php 
                            $alerts = $this->requestAction('Alerts/alerts'); 
                            $eventos = $this->requestAction('Eventos/count'); 
                            $datas = $this->requestAction('Calendarios/count');  
                            // echo count($calendarios); exit;
                        ?>
                        <?php 
                            // pr($alerts); exit;
                            $message = array();

                            foreach ($alerts as $alert) {

                                $id = $alert['Alert']['id'];

                                foreach ($alert['Group'] as $group) {
                                    if ($group['id'] == $user['group_id']){
                                        $message[$id]=$alert['Alert'];
                                    }
                                }

                                foreach ($alert['User'] as $users) {
                                    if ($users['id'] == $user['id']){
                                        $message[$id]=$alert['Alert'];
                                    }
                                }
                            }

                            $alertas = count($message)+$datas+$eventos;
                            // exit;
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-bell-2 nofloat"></span><span class="notification"><?= $alertas; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="notif">
                                    <li class="header"><strong>Notificações</strong> (<?=$alertas; ?>) items</li>

                                    <li>
                                        <a href="/sga/alerts/">
                                            <span class="icon"><span class="icon16 icomoon-icon-bell-2"></span></span>
                                            <span class="event"><?= count($message); ?> alertas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sga/eventos">
                                            <span class="icon">
                                                <?php echo $this->Html->image("/img/icones/animais-pesagem-histo.png") ?>
                                            </span>
                                            <span class="event"><?= $eventos ?> eventos abertos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/sga/calendarios">
                                            <span class="icon">
                                                <?php echo $this->Html->image("/img/icones/calendario-sanitario.png") ?>
                                            </span>
                                            <span class="event"><?= $datas ?> datas</span>
                                        </a>
                                    </li>
                                    <li class="view-all">
                                        <a href="/sga/alerts/">Ver todas notificações
                                            <span class="icon16 icomoon-icon-arrow-right-8"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <?php echo $this->Html->image(
                                '/images/avatar.jpg', 
                                array(
                                    "class"=>"image",
                                    'width'=>'32px',
                                    'height'=>'32px'
                                )
                            );?>
                            <span class="txt"><?= $user['email'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li>
                                        <?php echo $this->Link->icon('Editar perfil',
                                            'icon16 icomoon-icon-user-3',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'edit',
                                                $user['id']
                                            )
                                        ) ?>
                                    </li>
                                    <!-- <li>
                                        <?php echo $this->Link->icon('Mensagens',
                                            'icon16 icomoon-icon-comments-2',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'message'
                                            )
                                        ) ?>
                                    </li> -->
                                    <li>
                                        <?php echo $this->Link->icon('Novo usuário',
                                            'icon16 icomoon-icon-plus-2',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'add'
                                            )
                                        ) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Link->icon('Sair', 
                                            'icon16 icomoon-icon-exit',
                                            array(
                                                'controller' => 'users', 
                                                'action' => 'logout'
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php if(!empty($fazenda)): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <?php echo $this->Html->image(
                                "/img/icones/fazendas.png", 
                                array(
                                    "class"=>"image",
                                    'width'=>'32px',
                                    'height'=>'32px'
                                )
                            );?>
                            <span class="txt"><?= $fazenda['nome'] ?></span>
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li>
                                        <?php echo $this->Link->icon('Editar perfil',
                                            'icon16 icomoon-icon-user-3',
                                            array(
                                                'controller'=>'fazendas',
                                                'action'=>'edit',
                                                $fazenda['id']
                                            )
                                        ) ?>
                                    </li>
                                     <li>
                                        <?php echo $this->Link->icon('Logout', 
                                            'icon16 icomoon-icon-exit',
                                            array(
                                                'controller' => 'fazendas', 
                                                'action' => 'login'
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.nav-collapse -->
          </div>
        </div><!-- /navbar-inner -->
      </div><!-- /navbar -->
</div>