<?php 
class MY_Form_validation extends CI_Form_validation {
    public function __construct()
    {
        parent::__construct();
        $this->_error_prefix    = '<div class="ui-widget" style="margin:5px;"><div class="ui-state-error ui-corner-all" style="display: inline-block; padding: 2px 4px"><span style="float: left; margin-right: 2px"></span> ';
        $this->_error_suffix    = '</div></div>';
    }
}
?>