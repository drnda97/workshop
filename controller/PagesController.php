<?php

// require('./classes/View.php');
class PagesController
{
	protected $mail = 'drndica54@gmail.com';
	public function startupage()
	{
		$view = new View();
		$products = new Product;
		$view->data['random'] = $products->returnRand();
		$view->load('pages', 'start-up-page');
	}
	public function actionpage()
	{
		$view = new View();
		$products = new Product;
		$view->data['random'] = $products->returnRand();
		$view->load('pages', 'actionpage');
	}
	public function contact()
	{
		$view = new View();
		$view->load('pages', 'contact');
	}
	public function about()
	{
		$view = new View();
		$view->load('pages', 'about');
	}
	public function noJsScript()
	{
		View::adminloginload('pages', 'noJsScript');
	}
	public function mailMe()
	{
		var_dump($_POST);
		$err = array();
		$msg = wordwrap($_POST['msg']);
		$subject = "My subject";
		$header = 'From:'. $name .' '. $last_name;
		if (!isset($_POST['submit'])) {
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
		if (!isset($_POST['name'])|| !isset($_POST['last-name'])|| !isset($_POST['email'])|| !isset($_POST['msg'])) {
			$err[] = 'Missing fields';
		}
		$name = trim($_POST['name']);
		$last_name = trim($_POST['last-name']);
		$email = trim($_POST['email']);
		$msg = trim($_POST['msg']);

		if (count($err) > 0) {
			$err_str = implode('&err[]=', $err);
		}
		$err_str = '?' . substr($err_str, 1);
		header('Location: '. $_SERVER['HTTP_REFERER'] . $err_str);

		mail($this->mail, $subject, $msg, $header);
	}
}
