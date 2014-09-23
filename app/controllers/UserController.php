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
            $title = "Welcome";
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

}

?>