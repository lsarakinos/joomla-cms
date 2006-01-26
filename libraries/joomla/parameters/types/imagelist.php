<?php
/**
* @version $Id$
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/**
 * Renders a imagelist parameter
 *
 * @author 		Johan Janssens <johan@joomla.be>
 * @package 	Joomla.Framework
 * @subpackage 	Parameters
 * @abstract
 * @since 1.1
 */

class JParameter_ImageList extends JParameter
{
   /**
	* parameter type
	*
	* @access	protected
	* @var		string
	*/
	var	$_type = 'ImageList';
	
	function fetchElement($name, $value, &$node, $control_name)
	{
		$node->setAttribute('filter', '\.png$|\.gif$|\.jpg$|\.bmp$|\.ico$');
		
		$parameter =& $this->_parent->loadParameter('filelist');
		return $parameter->fetchElement($name, $value, $node, $control_name);
	}
}
?>