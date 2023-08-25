<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: divider
 *
 * @since 2.3.0
 * @version 1.0.0
 *	@By Masoud Najjar khodabakhsh (masoudnkh)
 */

if ( ! class_exists( 'CSF_Field_Divider' ) ) {
	class CSF_Field_Divider extends CSF_Fields {
        public function render(){
            $divider_color = isset($this->field['divider-color']) ? $this->field['divider-color'] : '#000';
            $divider_style = isset($this->field['divider-style']) ? $this->field['divider-style'] : 'solid';
            $divider_size = isset($this->field['divider-size']) ? $this->field['divider-size'] : '1px';

            echo $this->field_before();
            echo '<hr style="border-color:' . $divider_color . '; border-style:' . $divider_style . '; border-width:' . $divider_size . ';">';
            echo $this->field_after();
        }
    }
}
