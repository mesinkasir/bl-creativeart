<?php

class pluginCreativeContact extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'Contact',
			'text'=>''
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Title').'</label>';
		$html .= '<input name="label" type="text" value="'.$this->getValue('label').'">';
		$html .= '<span class="tip">'.$L->get('This title is almost always used in the sidebar of the site').'</span>';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Contact Information').'</label>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class="col-md-8 p-3 mb-1 text-end">';
		$html .= '<h2>'.$this->getValue('label').'</h2>';
		$html .= '<div class="plugin-content">';
		$html .= html_entity_decode(nl2br($this->getValue('text')));
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}
}