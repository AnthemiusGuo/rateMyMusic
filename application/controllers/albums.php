<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Albums extends P_Controller {
	function __construct() {
		parent::__construct(false);

	}
	function index() {
        
    }
    function grab() {
        $this->template->load('default_front', 'albums/grab');
    }
    function grabDetail($url) {
        if (((int)($url) . "") == $url) {
        	$id = $url;
        } else {

        }
        

        $api_url = 'https://api.douban.com/v2/music/'.$id;
        $rst = $this->call_remote_by_curl($api_url);
        $album_info = json_decode($rst,true);
        if ($album_info==null) {
        	//出错处理
        	
        } else {
        	

        }

        $artists = array();
    	foreach ($album_info['author'] as $value) {
    		$artists[] = $value['name'];
    	}
    	$album_info['artisits'] = implode(',',$artists);
    	$this->album_info = $album_info;
    	// var_dump($album_info);
    	$this->load->view('albums/grabDetail');
       
    }
}