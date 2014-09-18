<?php
/**
 * Custom Helper
 *
 */
class CustomHelper extends Helper {
	/** Generate Admin menus added by CroogoNav::add()
 *
 * @param array $menus
 * @param array $options
 * @return string menu html tags
 */
	public $helpers = array(
        'Html',
        'Form',
        'Session',
        'Js',
        'Layout',
    );


    public function menu($menuAlias, $options = array()) {
        $_options = array(
            'tag' => 'ul',
            'tagAttributes' => array(),
            'selected' => 'active',
            'dropdown' => false,
            'dropdownClass' => 'dropdown',
            'dropdownMenuClass' => 'dropdown-menu',
            'toggle' => 'dropdown-toggle',
            'menuClass' => 'nav nav-pills',
            'element' => 'menu',
        );
        $options = array_merge($_options, $options);

        if (!isset($this->_View->viewVars['menus_for_layout'][$menuAlias])) {
            return false;
        }
        $menu = $this->_View->viewVars['menus_for_layout'][$menuAlias];
        $output = $this->_View->element($options['element'], array(
            'menu' => $menu,
            'options' => $options,
                ));
        return $output;
    }
}