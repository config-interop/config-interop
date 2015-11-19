<?php

namespace Interop\Config;

/**
 * Describes the interface of a configuration object.
 */
interface ConfigurationInterface
{
    /**
     * Determine if a configuration value exists.
     *
     * @param string $key
     *
     * @return boolean
     */
    public function has($key);

    /**
     * Get a configuration value.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Set a configuration value.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function set($key, $value);
}
