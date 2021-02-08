<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }
    public function search()
    {
    $search = $this->request->getQuery('q');
    $products = $this->Products->find()
    ->where([
    'Name like' => '%'.$search.'%'
    ]);
    $this->set('products',$products);
    $this->set('search',$search);
    }
    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        // dd($product);
        $this->set('product', $product);
    }
    private function uploadImage($product)
    {
        $file = $this->getRequest()->getData('file');
        //$dirSperator = in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1']) ? '\\' : '/';
        // $dirSperator = '..\plugins\ShowProducts\webroot';
        if (!empty($file['name'])) {
        $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
        $arr_ext = array('jpg', 'jpeg', 'gif', 'png');
        // $mainFolder = 'pro';
        // $imgPath = sprintf('%s', $dirSperator);
        $uploadPath = "img/";

        if (in_array($ext, $arr_ext)) {
        // if (!is_dir(WWW_ROOT . sprintf('img%s%s', $dirSperator, $mainFolder))) {
        // mkdir(WWW_ROOT . sprintf('img%s%s', $dirSperator, $mainFolder));
        // }
        // if (!is_dir(WWW_ROOT . $uploadPath)) {
        // mkdir(WWW_ROOT . $uploadPath);
        // }
        $result = move_uploaded_file($file['tmp_name'], WWW_ROOT . $uploadPath . $file['name']);
        //print_r($result);exit;
        // Save file address to DB
        $product->image = $file['name'];

        $this->Products->save($product);
        $response = [
        'message' => $file['name'],
        ];

        } else {
        $response = ['status' => false, 'message' => 'Selected extension not allowed.'];
        }
        } else {
        $response = ['status' => true];
        }
        return $response;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            $result = $this->uploadImage($product);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}


