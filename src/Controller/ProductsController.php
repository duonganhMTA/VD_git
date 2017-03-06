<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class ProductsController extends AppController
{	
	public function initialize()
    {
        parent::initialize();
    }

    //hiển thị sản phẩm
	public function viewproduct(){
		$sp = $this->Products->getAllProduct();
        $this->set('sp', $this->paginate($sp,['limit' => 8,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));
	}

	// chi tiết sản phẩm
	public function detailproduct($id_product){
		//$this->viewBuilder()->layout(false);
		 $sp = $this->Products->get($id_product);
        $this->set(compact('sp'));
	}

	//sản phẩm cùng thể loại
	public function getproduct($id)
	{	
		$sp = $this->Products->find('all',['conditions' => ['Products.id_type' =>$id]]);
		$this->set('sp', $this->paginate($sp,['limit' => 8,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));
    	//return $sp;
	}
}
?>