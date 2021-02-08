<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Cache\Cache;
class TopicsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Flash'); // Include the FlashComponent
		// Auth component allow visitors to access add action to register  and access logout action 
		$this->Auth->allow(['frontfile', 'all',]);

    }
    public function frontfile()
        {
            // find('all') get all records from Topics model
            // We uses set() to pass data to view
            $this->set('frontfile', $this->Topics->find('all'));
            echo $this->Form->input('username');
            
}


}