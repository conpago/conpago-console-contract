<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-15
 * Time: 11:53
 *
 * @package    Conpago-Console-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Console\Contract;

/**
 * Provides presentation layer for command.
 */
interface ICommandPresenter
{

    /**
     * Presents message.
     *
     * @param string $message Message to show.
     *
     * @return void
     */
    public function show(string $message): void;
}
