<?php

class UserController  extends BaseController
{
    public function getIndex()
    {
        $users = User::all();

        return View::make('users.index')->with('users',$users);
        //return "Welcome to the users controller.";
    }

    public  function getHello(){
        return View::make('hello');
    }
}