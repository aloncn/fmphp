<?php
/**
 * Created by
 * Auth: farmer [bejea#qq.com]
 * Careate time: 2017/8/6.'-'.16:38
 */
class BaseController
{
	protected $view;
	protected  $mail;
	public function _construct(){

	}

	public function __destruct()
	{
		$view = $this->view;

		if ($view instanceof View) {
			extract($view->data);
			require $view->view;
		}

		$mail = $this->mail;
		if ( $mail instanceof Mail ) {
			$mailer = new Nette\Mail\SmtpMailer($mail->config);
			$mailer->send($mail);
		}


	}
}