<?php

/**
 * Ushahidi Platform Tag Search Data
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Core\Usecase\Tag;

use Ushahidi\Core\Data;
use Ushahidi\Core\SearchData;
use Ushahidi\Core\Traits\Data\SortableData;

class SearchTagData extends SearchData
{
	use SortableData;

	public $q; // LIKE tag
	public $tag;
	public $type;
	public $parent;
}
