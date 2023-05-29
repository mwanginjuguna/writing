<?php
/**
 * This singleton ensures a class is not instantiated more than once.
 * @package Writer X
 */

namespace Writing_Theme\Inc\Traits;

trait Singleton {
    public function __construct()
    {
        // constructor
    }

    public function __clone()
    {
        // prevents object cloning
    }

    /**
     * Ensure class is only instantiated once.
     * @return mixed
     */
    final public static function getInstance(): mixed
    {
        static $instance = [];

        $calledClass = get_called_class();

        if (!isset($instance[ $calledClass ])) {
            $instance [ $calledClass ] = new $calledClass();

            do_action(sprintf('writer_x_theme_singleton_init%s', $calledClass));
        }

        return $instance[ $calledClass ];
    }
}
