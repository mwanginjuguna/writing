<?php

/**
 * Bootstraps the theme.
 */

namespace WriterXTheme\Inc;

use Writing_Theme\Inc\Traits\Singleton;

class WriterXTheme
{
    use Singleton;

    protected function __construct()
    {
        // load class
        $this->set_hooks();
    }

    protected function set_hooks() {
        // actions and filters
    }
}
