<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2016-05-10
 * Time: 3:58 PM
 */

namespace Hydra;


use Interop\Container\ContainerInterface;

class ContainerProxy
{
    /** @var ContainerInterface */
    private $containerInterface;

    /**
     * ContainerProxy constructor.
     *
     * @param ContainerInterface $containerInterface
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface = $containerInterface;
    }

    /**
     * @return ContainerInterface
     */
    protected function getContainerInterface() {
        return $this->containerInterface;
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key) {
        return $this->containerInterface->get($key);
    }

    /**
     * @param $key
     *
     * @return bool
     */
    public function has($key) {
        return $this->containerInterface->has($key);
    }

    /**
     * @param $namespace string
     */
    public function addNamespace($namespace) {
        $this->containerInterface[(string)$namespace] = [];
    }

    /**
     * @param $namespace string
     * @param $key string
     * @param $value
     */
    public function add($namespace, $key, $value) {
        $this->containerInterface[(string)$namespace][(string)$key] = $value;
    }
}