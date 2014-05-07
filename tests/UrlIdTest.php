<?php
namespace Opine;

class UrlIdTest extends \PHPUnit_Framework_TestCase {
    private $db;

    public function setup () {
        date_default_timezone_set('UTC');
        $root = getcwd();
        $container = new Container($root, $root . '/container.yml');
        $this->db = $container->db;
    }

    public function testSample () {
        $this->assertTrue(true);
    }
}