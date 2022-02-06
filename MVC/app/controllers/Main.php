<?php
class Main extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Home/home');
    }

    public function home()
    {
        $this->view('Home/home');
    }

    public function timeline()
    {
        $this->view('Home/timeline');
    }
}
