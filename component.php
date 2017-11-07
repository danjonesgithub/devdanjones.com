<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

//custom header from: http://www.admin-enclave.com/en/tutorials/joomla/36-customize-the-jdoc-include-type-head-part.html
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'rendererheader.php';
?>
<!DOCTYPE html>
<html>
<head>
  	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<jdoc:include type="head" />
    <link href="/templates/devdanjones/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
</head>
<body class="contentpane">
	<div id="all">
		<div id="main">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	</div>
</body>
</html>
