<?php
require_once 'model/note.php';

class notecontroller{
    //propiedades de la clase
    public $page_title;
    public $view;


    //creamos el constructor

    public function __construct(){
        $this->view = 'list_note';
        $this->page_title='';
        $this->noteObj = new Note();
    } 
}

?>