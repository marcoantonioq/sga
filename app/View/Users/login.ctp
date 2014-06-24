<?php echo $this->Session->flash('auth'); ?>
<br><?= $this->Form->create('User', array('id'=>"loginForm", "class"=>"form-horizontal")); ?>
            <div class="form-row row-fluid">
                <div class="span12">
                    <div class="row-fluid">
                        <?php echo $this->Form->input('email', array(
                            'label'=>'Email:',
                            'type'=>'text',
                            'class'=>"span12",
                            'id'=>"username" 
                        )); ?>
                    </div>
                </div>
            </div>

            <div class="form-row row-fluid">
                <?php //pr($this->request->data); ?>
                <div class="span12">
                    <div class="row-fluid">                            
                        <?php echo $this->Form->input('password', array(
                            'label'=>'Senha:',
                            'type'=>'password',
                            'class'=>"span12",
                            "id"=>"password" 
                        )); ?>
                    </div>
                </div>
            </div>
            <div class="form-row row-fluid">                       
                <div class="span12"
                    <div class="row-fluid">
                        <div class="form-actions">
                        <div class="span12 controls">
                            <button type="submit" class="btn btn-info left" id="loginBtn"><span class="icon16 icomoon-icon-enter white"></span>Acessar</button>
                            <label class='rigth'>
                                <input type="checkbox" id="keepLoged" value="Value" class="styled" name="logged" /> Mantenha-me conectado
                            </label>
                        </div>
                        </div>
                    </div>
                </div> 
            </div>
<?php 
    echo $this->Form->end(); 
?>