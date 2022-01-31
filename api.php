<?php 
define('SELF', pathinfo(__file__, PATHINFO_BASENAME));
define('FCPATH', str_replace("\\", "/", str_replace(SELF, '', __file__)));
require_once FCPATH . 'config.php';
class api extends __abose
{
		private $form, $url, $jurl, $waif, $t_w, $times, $uuid, $type, $c_to_token, $x_token, $tit_error, $tit_tea_error, $param, $ccokie = '';
		private function data_send()
		{
				if (empty($this->url))
				{
						$this->_iserror();
				}
				$this->param = '?uid=' . USER_UID . '&token=' . USER_TOKEN . '&url=' . $this->url . '&type=' . $this->type . '&hd=' . USER_HD . '&wap=' . $this->form . '&ip=' . $_SERVER['REMOTE_ADDR'] . '&ios=' .$this->ios;
						
		}
		public function send(){
				$this->form = $_POST['ref'];
                $this->ios = $_POST['ios'];
				$this->jurl = @htmlspecialchars($_POST['url'] ? $_POST['url'] : $_GET['xml']);
				$this->type = @htmlspecialchars($_POST['type'] ? $_POST['type'] : $_GET['type']);
				$this->url = $_POST['url'];
				$this->data_send();
				if ($_POST['url'])
				{
						$playJson = $this->geturl($this->param);
						
						$playJson_T_P = json_decode($playJson,1);
						if ($playJson_T_P['type']=="xml")
						{
								$playJson = $this->other_loca($playJson,$_POST['url']);
								$playJson_T_P = json_decode($playJson);
						}
						print_r(json_encode($playJson_T_P));
						exit();
				}
		}
}
if (!empty($_GET['xml'])){
		$file = file_get_contents($_GET['xml']);
		header('Content-type: text/xml;charset=utf-8');
		echo $file;
		unlink($_GET['xml']);
		exit();
}
$a = new api();
$a->send();
?>