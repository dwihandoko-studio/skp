<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Elink_main
 *
 * @author lahir
 */
class Skparsiparis_main extends Lws_Modular {
    
    protected $auto_load_model = FALSE;
    
    public function __construct($cmodul_name = FALSE, $header_title = FALSE) {
        parent::__construct($cmodul_name, $header_title);
        $this->_layout = "appui";
        $this->init_skparsiparismain();
    }
    
    private function init_skparsiparismain() {
//        $this->my_location = "back_bone/";
        $this->init_backend_menu();
    }
}
