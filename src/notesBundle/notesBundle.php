<?php

namespace notesBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class notesBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
