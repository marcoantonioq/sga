<?php
$crumbs = $this->Html->getCrumbs('<span class="divider"><span class="icon16 icomoon-icon-arrow-left-2"></span></span> ', array(
	'text' => $this->Html->link(
			"<span class='icon16 icomoon-icon-screen-2'></span>", 
			'/', 
			array(
				'escape'=>false,
				'class'=>"tip",
				'title'=>'Voltar para dashboard'
			)
		),
	'url' => array('controller' => 'pages', 'plugin'=>false, 'action' => 'display', 'home'),
    'escape' => false
));
?>


<?php if (!empty($crumbs)): ?>
	<ul class="breadcrumb">
	    <li>Você está aqui:</li>
		<li>
			<?php echo $crumbs; ?>
		</li>
	</ul>
<?php endif; ?>


<div class="logo right">
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
<h3><?=__($title_for_layout) ?></h3>