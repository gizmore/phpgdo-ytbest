<?php
namespace GDO\YTBest\Method;

use GDO\Core\Method;
use GDO\Form\GDT_Form;
use GDO\Form\MethodForm;
use GDO\Form\GDT_Submit;
use GDO\Core\GDT_Object;
use GDO\Core\GDT_Token;

final class Checkout extends MethodForm
{

	public function createForm(GDT_Form $form): void
	{
		$form->addFields(
			GDT_Token::make('yt')
		);
		$form->actions()->addField(GDT_Submit::make());
	}




	
}
