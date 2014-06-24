<?php $atalhos = $this->requestAction('Atalhos/listUser'); ?>

<?php foreach ($atalhos as $atalho): ?>
<li>
    <?php echo $this->Link->icon("<span class=\"txt\">{$atalho['Atalho']['title']}</span>",
        $atalho['Atalho']['class'],
        array(
            'plugin'=>$atalho['Atalho']['plugin'],
            'controller'=>$atalho['Atalho']['controller'],
            'action'=>$atalho['Atalho']['action'],
        )
    );?>
</li>
<?php endforeach; ?>