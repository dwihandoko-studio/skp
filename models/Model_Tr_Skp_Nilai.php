<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Model_Tr_Skp_Nilai
 *
 * @author lahir
 */
class Model_Tr_Skp_Nilai extends Tr_skp_nilai {

    public function __construct() {
        parent::__construct();
    }

    public function all($force_limit = FALSE, $force_offset = FALSE) {
        return parent::get_all(array("penilaian_message", "pegawai_message"), FALSE, TRUE, FALSE, 1, TRUE, $force_limit, $force_offset);
    }
}
