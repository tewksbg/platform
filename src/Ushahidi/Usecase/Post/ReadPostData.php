<?php

/**
 * Ushahidi Platform Post Data
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Usecase\Post;

use Ushahidi\Data;

class ReadPostData extends Data
{
	public $id;
	public $locale;
	//public $type;
	public $parent_id;
}