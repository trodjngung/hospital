<?php 
App::uses('AppController', 'Controller');
class PostsController extends AppController{
 public $uses = [
			'Post',
 			'User'
	];
	//public function beforeFilter() {
	//$this->Auth->allow('add');
	//}
	
	/*
	public $helpers = array('Html', 'Form');
	
	//////User
	
	public function isAuthorized($user) {
		// All registered users can add posts
		if ($this->action === 'add') {
			return true;
		}
	
		// The owner of a post can edit and delete it
		if (in_array($this->action, array('edit', 'delete'))) {
			$PostId = (int) $this->request->params['pass'][0];
			if ($this->Post->isOwnedBy($PostId, $user['id'])) {
				return true;
			}
		}
	
		return parent::isAuthorized($user);
	}
	
	*/
	// Index
	public function index() {
		$this->set('posts', $this->Post->find('all'));
		$this->loadModel('User');
		$this->set('auth', $this->Auth->user());
		$this->set('users', $this->User->find('all'));
		
	}
	public function view($id = null) {
		$this->set('posts', $this->Post->find('all',array('order'=>'Post.id DESC')));
		
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$this->set('post', $post);
		$this->set ( 'title_for_layout', $post['Post']['title'] );
		//$this->set (Router::connect,$post['Post']['title']);
		//$id=$post['Post']['title'];
		$this->set(array('action'=>'view',$id));
		
	}
	
	// Add function
	public function add() {
		$this->set ( 'title_for_layout', __ ( 'TITLE_11' ) );
		$this->set ( 'description_for_meta', __ ( 'META_DESCRIPTION_1' ) );
		$this->set ( 'keyword_for_meta', __ ( 'META_KEYWORD_1' ) );
		$this->set ( 'topic_path', __ ( 'TOPIC_PATH_11' ) );
		$this->set('posts', $this->Post->find('all'));
		
		if ($this->request->is('post')) {
			$Post = $this->request->data ;
			$body = $Post['Post']['body'];
			$get_link = '#img src="(.*?)"#';
			preg_match($get_link, $body, $match);
			if($match==null){
				$Post['Post']['image']= '/files/360days.png';
			}
			else
			{
			$image = $match[1];
			$Post['Post']['image']=$image;
			}
			//$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			$this->Post->create();
			if ($this->Post->save($Post)) {		
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array (
						'action' => 'index',
						
				));
			}
			
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}
	//Edit function
	public function edit($id = null) {
		
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
	
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			$body = $post['Post']['body'];
			preg_match('#img src="(.*?)"#', $body, $match);	
			$image = $match[1];
			$post['Post']['image']=$image;
			//debug($image);
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}
	
		if (!$this->request->data) {
			$this->request->data = $post;
		}
		$this->set('Post', $post);
		
		
	}
	
	// Delete function
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
	
		if ($this->Post->delete($id)) {
			$this->Session->setFlash(
					__('The post with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Session->setFlash(
					__('The post with id: %s could not be deleted.', h($id))
			);
		}
	
		return $this->redirect(array('controller'=>'posts','action' => 'index'));
	}
	
	public function upload(){
	
	}
	
}

?>
