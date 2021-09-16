<?php

namespace App\_Framework\Http\Controllers;

use App\_Framework\Core\View;

class HomeController
{
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
        $this->view->render("home");
    }
  
    public function create()
    {

    }

    public function store()
    {

    }
  
    public function edit()
    {

    }

    public function show($id)
    {

    }
  
    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}