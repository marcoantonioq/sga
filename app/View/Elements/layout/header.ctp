<?php $user = $this->Session->read('Auth.User'); ?>
<?php $fazenda = $this->Session->read('Auth.Fazenda');  ?>
<div id="header">
    <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">
            <div class='brand' style='width:48px; height:48px;'>
                <?php echo $this->Html->image(
                    '/img/template/vaca.png',
                    array(
                        'url'=>'/',
                        'alt'=>'logo',
                        'class'=>"brand",
                        'width'=>'48px'
                    )
                ); ?>
            </div>
        
            <div class="nav-no-collapse">
                <ul class="nav">
                    <li class="<?= ($_SERVER['REQUEST_URI'] == "/sga/") ? 'active':''?>">
                        <?php echo $this->Link->icon('Dashboard',
                            'icon16 icomoon-icon-screen-2',
                            '/'
                        ); ?>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-cog"></span> Settings
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                        
                            <li class="menu">
                                <ul>
                                    <li>                                                    
                                        <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a>
                                    </li>
                                    <li>                                                    
                                        <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon16 icomoon-icon-picture-2"></span>Themes</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-bell-2 nofloat"></span><span class="notification">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="notif">
                                    <li class="header"><strong>Notificações</strong> (1) items</li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                            <span class="event">1 usuário registrado</span>
                                        </a>
                                    </li>
                                    <li class="view-all">
                                        <a href="#">Ver todas notificações
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
                                    <li>
                                        <?php echo $this->Link->icon('Mensagens',
                                            'icon16 icomoon-icon-comments-2',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'message'
                                            )
                                        ) ?>
                                    </li>
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
                                        <?php echo $this->Link->icon('Logout', 
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
</div><!-- End #header -->
