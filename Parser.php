<?php
/**
 * Created by PhpStorm.
 * User: tea
 * Date: 11.01.2018
 * Time: 22:36
 */
require_once 'ParserInterface.php';

class Parser implements ParserInterface
{
    public function process(string $url, string $tag): array
    {
        return [
            'just',
            'do',
            'it'
        ];
    }
}