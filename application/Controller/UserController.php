<?php

/**
 * Class UserController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Core\Controller;
use Mini\Core\Redirect;
use Mini\Core\Request;
use Mini\Core\Auth;
use Mini\Model\VehicleRequest;

class UserController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class.use Mini\Model\VehicleRequest;
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions.
        Auth::checkAuthentication();
    }

    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/user/index
     */
    public function index()
    {
        
    }

    /**
     * ACTION: Show the form for creating a new resource.
     *
     * This method handles what happens when you move to http://yourproject/user/addRequest
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a admin" form on user/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to user/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function create()
    {
        
    }

    /**
     * Create a new admin object and stores to the database.
     *
     * @return void
     */
    public function store() {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

    }

     /**
     * ACTION: Show the form for editing the specified resource.
     * This method handles what happens when you move to http://yourproject/user/editsong
     * @param int $id Id of the to-edit admin
     */
    public function edit($id)
    {
        
    }

    /**
     * ACTION: Update the specified resource in storage.
     *
     * This method handles what happens when you move to http://yourproject/user/updatesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a admin" form on user/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to user/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function update($id)
    {
        
    }

    /**
     * ACTION: Remove the specified resource from storage.
     * 
     * This method handles what happens when you move to http://yourproject/user/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a admin" button on user/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to user/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete admin
     */
    public function delete($id)
    {
      
    }
}
