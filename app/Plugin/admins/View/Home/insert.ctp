<?php
echo $this->Form->create('Book', array(
    'enctype' => 'multipart/form-data',
    //'action'  => '/admin/book/insert'
));
echo $this->Form->file('Document.submittedfile');