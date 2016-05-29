<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Http\Response;

use Windwalker\Http\Response\Response;

/**
 * The HtmlResponse class.
 *
 * @since  {DEPLOY_VERSION}
 */
class HtmlResponse extends TextResponse
{
	/**
	 * Property type.
	 *
	 * @var  string
	 */
	protected $type = 'text/html';
}
