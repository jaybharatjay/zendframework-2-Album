<?php
//http://framework.zend.com/manual/2.2/en/user-guide/database-and-models.html
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;

use Zend\View\Model\ViewModel;
//

class AlbumController extends AbstractActionController
{
protected $albumTable;
public function getAlbumTable()
     { 
         if (!$this->albumTable) {
             $sm = $this->getServiceLocator();
             $this->albumTable = $sm->get('Album\Model\AlbumTable');
         }
         return $this->albumTable;
     }
	public function indexAction(){
		echo "Hi Jay";
         return new ViewModel(array(
             'albums' => $this->getAlbumTable()->fetchAll(),
         ));
       
   }
    public function addAction()
     {
		echo "I m add";
     }
}