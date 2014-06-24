<?php
echo $this->Html->link(
	"<span class='black-icons {$icon}'></span>".__("{$title}"),
	$url, 
	array('escape'=>false)
); 