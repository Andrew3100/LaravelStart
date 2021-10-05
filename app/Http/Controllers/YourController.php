<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends \App\Http\Controllers\Controller {

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}


