<?php

class AdminController
{
  	public function startupage()
    {
      View::adminloginload('admin', 'adminlogin');
    }
    public function checkadmin()
    {
      View::adminload('adminpages', 'startpage');
    }
}
