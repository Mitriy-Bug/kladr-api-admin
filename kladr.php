<?php
/**
 * @package    Plg_Content_Updaterating
 * @author     Dmitry Denisov <info@codersite.ru>
 * @copyright  (C) 2023 codersite.ru. All rights reserved.
 * @license    GNU General Public License version 3 or later; see LICENSE
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

/**
 * Base plugin class.
 *
 * @since  1.0
 */
class PlgContentKladr extends CMSPlugin
{

	public function onContentPrepareData($context, $data)
	{
		
		if ($context === 'com_content.article') {
			if ($data->catid === 23) {
				echo "
				<link href='/kladr/jquery.fias.min.css' rel='stylesheet'>
				<script src='https://yastatic.net/jquery/3.3.1/jquery.min.js' type='text/javascript'></script>
				<script src='/kladr/jquery.fias.min.js' type='text/javascript'></script>
				<script src='/kladr/script-admin.js' type='text/javascript'></script>";
			}
		} 
	}
}
