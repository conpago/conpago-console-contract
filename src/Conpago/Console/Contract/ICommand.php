<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 13.11.13
 * Time: 20:21
 *
 * @package    Conpago-Console-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Console\Contract;

/**
 * Provides a command which can be executed.
 */
interface ICommand
{

    /**
     * Execute the command.
     *
     * @return void
     */
    public function execute(): void;
}
