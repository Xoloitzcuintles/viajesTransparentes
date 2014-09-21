<?php 

class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        //$user = User::find($id);

        return View::make('hello', array('user' => $id));
    }

    public function showTemplate($id)
    {
        //$user = User::find($id);

        return View::make('template', array('user' => $id));
    }
}

?>