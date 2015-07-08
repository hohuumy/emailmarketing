<?php 

	/**
	* 
	*/
	class CustomersController extends AppController
	{
		public function index(){
			$this ->set('posts',$this->Customer->find('all'));
		}
		public function add() {
			if($this->request->is('post')){
				$this->Customer->create();
				if ($this->Customer->save($this->request->data)) {
					$this->Session->setFlash(__('Customer has been save.'));
					return $this->redirect(array('action'=>'index'));
				}
				$this->Session->setFlash(__('Unable to add Customer.'));
			}
		}
		public function edit($id = null) {
			if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }
		    $post = $this->Customer->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Customer->id = $id;
		        if ($this->Customer->save($this->request->data)) {
		            $this->Session->setFlash(__('Your post has been updated.'));
		            return $this->redirect(array('action' => 'index'));
		        }
		        $this->Session->setFlash(__('Unable to update your post.'));
    		}

    		if (!$this->request->data) {
		        $this->request->data = $post;
		    }




		}
		public function delete($id) {
		    if ($this->request->is('get')) {
		        throw new MethodNotAllowedException();// đưa ra ngoại lệ method không cho phép
		    }

		    if ($this->Customer->delete($id)) {
		        $this->Session->setFlash(
		            __('The post with id: %s has been deleted.', h($id))
		        );			
		        return $this->redirect(array('action' => 'index'));
		    }
		}


	}

 ?>