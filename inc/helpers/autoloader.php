<?php
/**
 * Autoloader file
 * @package Writer X
 */
namespace Writing_Theme\Inc\Helpers\Autoloader;

/**
 * Autoloader function
 * @param
 * @return
 */
function autoloader($resource = '') {
    $resource_path = false;
    $namespace_root = 'WRITER_X_THEME\\';
    $resource = trim($resource, '\\');

    if ( empty( $resource ) || strpos( $resource, '\\' ) === false || strpos( $resource, $namespace_root ) !== 0 ) {
        // Not our namespace, bail out.
        return;
    }

    // Remove our root namespace.
    $resource = str_replace( $namespace_root, '', $resource );

    $path = explode(
        '\\',
        str_replace( '_', '-', strtolower( $resource ) )
    );
}
