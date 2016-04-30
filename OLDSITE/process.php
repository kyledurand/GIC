<?php

require_once 'config.php';

// make sure we're not being accessed directly
if ( !is_array($config) || empty($_POST) ) die();

$form = new DynaForm($config);
$form->setVariables(array_map('stripslashes', $_POST));

if ( !$form->isComplete() ) {
	die($form->error);
} else {
	$form->sendMails();
	$form->redirect();
}

class DynaForm {
	var $post;
	var $required;

	var $error;
	var $config;

	function DynaForm($config) {
		$this->config = $config;
	}

	function setVariables($post) {
		$this->post = $post;
		$this->required = explode(',', $post['required']);
	}

	function isComplete() {
		if ( is_array($this->required) && count($this->required) ) {
			foreach ($this->required as $field) {
				if ( strlen($field) && (!isset($this->post[$field]) || strlen($this->post[$field]) == 0) ) {
					$missing[] = $field;
				}
			}

			if ( isset($missing) ) {
				$this->_setError(str_replace('%missing%', implode(',', $missing), $this->config['error_incomplete']));
				return false;
			}
		}

		if ( isset($this->post['email']) && !empty($this->post['email']) && !$this->_isEmail($this->post['email']) ) {
			$this->_setError(str_replace('%email%', $this->post['email'], $this->config['error_email']));
			return false;
		}

		return true;
	}

	function sendMails() {
		$this->_makeMessage();

		$this->_sendAdminEmail();

		if ( isset($this->post['email']) && !empty($this->post['email']) ) {
			$this->_sendUserEmail();
		}
	}

	function redirect() {
		header('Location: ' . $this->config['thankyou_page']);
		exit;
	}

	function _setError($error) {
		$this->error = str_replace('%error%', $error, $this->config['error_template']);
	}

	function _makeMessage() {
		$this->message = '';

		foreach ($this->post as $field => $value) {
			if ( $field == 'required' ) continue;
			$this->_addLine($field, $value);
		}
		
		$this->message .= "\n";
		$this->_addLine('Date and Time', date('r'));
		$this->_addLine('IP Address', $_SERVER['REMOTE_ADDR']);
		$this->_addLine('Browser', $this->_getBrowser());
		$this->_addLine('OS', $this->_getOS());
	}

	function _addLine($field, $value) {
		$this->message .= "$field: $value\n";
	}

	function _getBrowser() {
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

		if ( strpos($ua, 'msie') !== false ) return 'Internet Explorer';
		if ( strpos($ua, 'firefox') !== false ) return 'Firefox';
		if ( strpos($ua, 'safari') !== false ) return 'Safari';
		if ( strpos($ua, 'opera') !== false ) return 'Opera';
		if ( strpos($ua, 'mozilla') !== false ) return 'Mozilla';

		return 'Unknown';
	}

	function _getOS() {
		$ua = strtolower($_SERVER['HTTP_USER_AGENT']);

		if ( strpos($ua, 'windows nt 5.1') !== false ) return 'Windows XP';
		if ( strpos($ua, 'windows nt 5.0') !== false ) return 'Windows 2000';
		if ( strpos($ua, 'windows 98') !== false ) return 'Windows 98';
		if ( strpos($ua, 'windows nt 6.0') !== false ) return 'Windows Vista'; // future-proof
		if ( strpos($ua, 'windows') !== false ) return 'Windows';

		if ( strpos($ua, 'mac os x') !== false ) return 'Mac OS X';
		if ( strpos($ua, 'macintosh') !== false ) return 'Macintosh';

		if ( strpos($ua, 'linux') !== false ) return 'Linux';

		return 'Unknown';
	}

	function _sendAdminEmail() {
		return $this->_sendMail($this->config['admin_email'], $this->config['admin_subject'], $this->message); 
	}

	function _sendUserEmail() {
		return $this->_sendMail($this->post['email'], $this->config['user_subject'], $this->config['user_message']); 
	}

	function _sendMail($to, $subject, $message) {
		$headers = 'From: ' . $this->config['from'] . "\r\n";
		return mail($to, $subject, $message, $headers);
	}

	function _isEmail($email) {
		if ( strpos($email, '@') && strpos($email, '.') ) {
			return preg_match("/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i", $email);
		} else {
			return false;
		}
	}
}
?>
