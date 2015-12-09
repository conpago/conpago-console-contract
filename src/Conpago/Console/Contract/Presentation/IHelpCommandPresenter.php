<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 18.05.15
 * Time: 00:37
 *
 * @package    Conpago-Console-Contract
 * @subpackage Presentation
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Console\Contract\Presentation;

/**
 * Provides presentation layer for help command.
 */
interface IHelpCommandPresenter
{

    /**
     * Prints name and description of command.
     *
     * @param string $command Command name.
     * @param string $desc    Command heko description.
     *
     * @return void
     */
    public function printCommandInfo($command, $desc);
}
