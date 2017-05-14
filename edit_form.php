<?php
 
class block_simplehtml_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
 
        // Section header title according to language file.
        // $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
        $mform->addElement('header', 'configheader', "Konfigurasi Block");
 
        // A sample string variable with a default value.
        // $mform->addElement('text', 'config_text', get_string('blockstring', 'block_simplehtml'));
        $mform->addElement('text', 'config_text', "Text depan");
        $mform->setDefault('config_text', 'nilai default');
        $mform->setType('config_text', PARAM_RAW);        
 
    }
}