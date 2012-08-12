<?php
class Admin_Categories_Controller extends Base_Controller
{
    public $restful = true;
    
    public function get_index()
    {
        $this->layout->nest('content', 'categories.index', array('name' => 'jamie'));
    }

}