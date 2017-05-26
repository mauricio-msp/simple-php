<?php

namespace Src\Url;


class Url {
    
    /**
     * @var type array
     */
    
    
    private $url;
    
    
    /**
     * __constructor 
     */
    
    public function __construct() {}
    
    
    public function load() {
        $uri = filter_input(INPUT_GET, 'url');
        
        if(isset($uri) && is_string($uri)):
            $this->url = explode('/', $uri);
			if(file_exists(dir['views'] . $this->url[0] . '.twig')):
				include dir['views'] . $this->url[0] . '.twig';
			elseif(is_dir(dir['views'] . $this->url[0])):
				if(isset($this->url[1]) && file_exists(dir['views'] . $this->url[0] . '/' . $this->url[1] . '.twig')):
					include dir['views'] . $this->url[0] . '/' . $this->url[1] . '.twig';
				else:
					echo 'Error 404';
					//include dir['views'] . 'error/404.twig';
				endif;
			else:
				echo 'Error 404';
			endif;
		else:
			if(file_exists(dir['views'] . 'template/welcome.html')):
				include dir['views'] . 'template/welcome.html';
			else:
				echo 'Error 404';
			endif;
        endif;
		
    }
}

