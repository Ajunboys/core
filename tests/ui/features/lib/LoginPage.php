<?php
/**
* ownCloud
*
* @author Artur Neumann
* @copyright 2017 Artur Neumann info@individual-it.net
*
* This library is free software; you can redistribute it and/or
* modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
* License as published by the Free Software Foundation; either
* version 3 of the License, or any later version.
*
* This library is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU AFFERO GENERAL PUBLIC LICENSE for more details.
*
* You should have received a copy of the GNU Affero General Public
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
*
*/

namespace Page;

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class LoginPage extends OwncloudPage
{
	/**
	 * @var string $path
	 */
	protected $path = '/index.php/login';
	
	public function loginAs($username, $password)
	{
		$this->fillField("user", $username);
		$this->fillField("password", $password);
		$this->findById("submit")->click();
		return $this->getPage('FilesPage');
	}
}