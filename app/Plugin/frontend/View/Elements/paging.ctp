<?php
echo $this->Paginator->prev('« prev', null, null, array('class' => 'disabled'));
echo " | ".$this->Paginator->numbers()." | "; 
echo $this->Paginator->next('next »', null, null, array('class' => 'disabled')); 
echo " Page ".$this->Paginator->counter(); 
?>