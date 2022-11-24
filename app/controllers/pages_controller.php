<?php
require_once('app/controllers/base_controller.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $this->render('home');
  }

  public function error()
  {
    $this->render('error');
  }
}