<?php
namespace TYPO3\{{UPPERCAMELCASE_EXTENSIONKEY}}\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Your Name <your@email.tld>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Foo Controller
 *
 * @package {{EXTENSIONKEY}}
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class FooController extends AbstractController {

	/**
	 * Foo Repository
	 *
	 * @var \TYPO3\{{UPPERCAMELCASE_EXTENSIONKEY}}\Domain\Repository\FooRepository
	 * @inject
	 */
	protected $fooRepository;

	/**
	 * Show general information
	 *
	 * @return void
	 */
	public function indexAction() {
		$foos = $this->fooRepository->findAll();
		$this->view->assign('foos', $foos);
	}

}
?>