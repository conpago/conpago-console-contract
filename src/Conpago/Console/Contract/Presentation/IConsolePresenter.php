<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 16.05.15
 * Time: 23:38
 *
 * @package    Conpago-Console-Contract
 * @subpackage Presentation
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Console\Contract\Presentation;

/**
 * Provides presentation layer for console.
 */
interface IConsolePresenter
{

    /**
     * Writes string to console output.
     *
     * @param string $string Strign to write.
     *
     * @return void
     */
    public function write(string $string): void;
}
