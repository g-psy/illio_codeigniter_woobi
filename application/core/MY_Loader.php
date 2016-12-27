<?php

class MY_Loader extends CI_Loader {

	public function template($template_name, $vars = array(), $return = FALSE)
	{
		$param = array();

		$html_header = isset($vars['html_header']) ? $vars['html_header'] : 'layout/html_header';
		$layout_header = isset($vars['layout_header']) ? $vars['layout_header'] : 'layout/layout_header';
		$layout_footer = isset($vars['layout_footer']) ? $vars['layout_footer'] : 'layout/layout_footer';
		$html_footer = isset($vars['html_footer']) ? $vars['html_footer'] : 'layout/html_footer';

		$param['html_header'] = $html_header;
		$param['layout_header'] = $layout_header;
		$param['layout_footer'] = $layout_footer;
		$param['html_footer'] = $html_footer;
		$param['template_name'] = $template_name;
		$param['vars'] = $vars;

		$this->view('layout/layout_body', $param);
	}
}

?>
