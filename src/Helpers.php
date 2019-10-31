<?php 

namespace Composers;
class Helpers {
    public function current_url()
	{
		$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		return $url;
	}
}