<?php 
use ImageCrud\Core\ImageCrud;

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */

    protected $layout = 'crud/layout';
    
    public function showProfile($id)
    {
        //$user = User::find($id);

        return View::make('hello', array('user' => $id));
    }

    public function showTemplate($id)
    {
        $title = "User Registration";
        //$user = User::find($id);

        return View::make('template', array('user' => $id,'title'=>$title));
    }

    public function register()
    {
        $title = "Registro";

        $register = Input::get('registerButton');

        if($register != false){
            $password = Input::get('password');
            $username = Input::get('username');
            $password = Hash::make($password);
            $user = new User;

            $user->email = $username;
            $user->name = '';
            $user->password = $password;

            $user->save();

            $params = array('email'=>$username,'password'=>$password);

//            return Redirect::to('users/welcome', $params)->with('message', 'Login Failed');
            return Redirect::action('UserController@login', array('password'=>$password,'username'=>$username));
            
        }

        return View::make('users/register', array('title'=>$title));
    }

    public function login()
    {
        $password = Input::get('password');
        $username = Input::get('username');
        $title = "Login";
        $login = Auth::check();
        if(($password == null || $username == null) && $login == false){
            return View::make('users/login', array('title'=>$title));
        }
        if (Auth::attempt(array('email' => $username, 'password' => $password)) || Auth::check())
        {
            return View::make('users/welcome', array('title'=>$title));
        } else {
            return View::make('users/login', array('title'=>$title));
        }
    }

    public function logout()
    {
        Auth::logout(); 
        return Redirect::action('UserController@login');
    }

    public function postExample1()
    {
        return $this->getExample1();
    }
 
    public function getExample1()
    {
        $image_crud = new ImageCRUD();
 
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('email');
        $image_crud->set_table('users')
            ->set_image_path('assets/uploads');
 
        $output = $image_crud->render();

        return $this->_example_output($output);
    }

    public function postExample5()
    {
        return $this->getExample5();
    }
    
    public function getExample5()
    {
        $image_crud = new ImageCRUD();
        $image_crud->unset_upload();
        $image_crud->unset_delete();
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('email');
        $image_crud->set_table('users')
        ->set_image_path('assets/uploads');
        $output = $image_crud->render();
        return $this->_example_output($output);
    }
 
    public function postExample4()
    {
        return $this->getExample4();
    }

    public function getExample4()
    {
        $image_crud = new ImageCRUD();
        $image_crud->set_primary_key_field('id');
        $image_crud->set_url_field('email');
        $image_crud->set_title_field('email');
        $image_crud->set_table('users')
//        ->set_ordering_field('priority')
        ->set_image_path('assets/uploads');
        $output = $image_crud->render();
        return $this->_example_output($output);
    }

    private function _example_output($output = null)
    {
        return View::make('crud/example', $output);
    }
}

?>