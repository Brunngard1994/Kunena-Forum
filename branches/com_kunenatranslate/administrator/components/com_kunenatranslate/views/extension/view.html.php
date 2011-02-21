<?php
/**
 * @version $Id$
 * Kunena Translate Component
 * 
 * @package	Kunena Translate
 * @Copyright (C) 2010-2011 www.kunena.com All rights reserved
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.com
 */


// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class KunenaTranslateViewExtension extends JView
{
	function display($tpl = null){
		JToolBarHelper::title( JText::_( 'Kunena Translate' ).': <small><small>'.JText::_('Extension Manager').'</small></small>', 'generic.png' );
		fb($this->getLayout());
		$extension = $this->get('List');
		$this->assignRef('extension', $extension);
		
		parent::display($tpl);
	}
}