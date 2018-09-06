<?php

class View
{
	function generate($template_view, $message = false, $data = null)
	{
		include 'app/views/'.$template_view;
	}
}
