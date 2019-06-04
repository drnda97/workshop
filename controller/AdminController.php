<?php

class AdminController
{
  	public function startupage()
    {
      View::adminloginload('admin', 'adminlogin');
    }
    public function startpage()
    {
      View::adminload('adminpages', 'startpage');
    }
}
