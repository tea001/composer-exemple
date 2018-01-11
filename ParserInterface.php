<?php
/**
 * Created by PhpStorm.
 * User: tea
 * Date: 11.01.2018
 * Time: 21:46
 */

interface ParserInterface
{

    public function process(string $url, string $tag): array;
}