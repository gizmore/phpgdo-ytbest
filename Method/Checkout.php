<?php
namespace GDO\YTBest\Method;

use GDO\Core\GDT_Token;
use GDO\Form\GDT_Form;
use GDO\Form\GDT_Submit;
use GDO\Form\MethodForm;

final class Checkout extends MethodForm
{

	protected function createForm(GDT_Form $form): void
	{
		$form->addFields(
			GDT_Token::make('yt')
		);
		$form->actions()->addField(GDT_Submit::make());
	}


}
