<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-15
	 * Time: 11:53
	 */

	namespace Conpago\Console\Contract;

	interface ICommandPresenter
	{
		public function run($string);
	}
