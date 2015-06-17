<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 18.05.15
	 * Time: 00:37
	 */

	namespace Conpago\Console\Contract\Presentation;


	interface IHelpCommandPresenter {

		public function printCommandInfo( $command, $desc );
	}
