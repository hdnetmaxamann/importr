<?php

declare(strict_types=1);
namespace HDNET\Importr\Service\Targets;

/**
 * Description of AbstractTarget
 *
 * @author timlochmueller
 */
abstract class AbstractTarget
{

    /**
     * @var array
     */
    protected $configuration;

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param array $configuration
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addConfiguration($key, $value)
    {
        $this->configuration[$key] = $value;
    }
}
