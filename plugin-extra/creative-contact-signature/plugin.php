<?php

class pluginCreativeSignature extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'Signature',
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Signature').'</label>';
		$html .= '<input name="label" type="text" value="'.$this->getValue('label').'">';
		$html .= '<span class="tip">'.$L->get('Insert signature').'</span>';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class="col-md-4 p-3 mb-1">';
		$html .= '<span class="display-1 sign">'.$this->getValue('label').'</span>';
 		$html .= '</div>';

		return $html;
	}
}