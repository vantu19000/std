<?php

class BMI_LOADER {

    protected $actions;

    protected $filters;

    private static $instance;

    public function __construct() {

        $this->actions = array();
        $this->filters = array();

    }

    public function add_action( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
        $this->actions = $this->add( $this->actions, $hook, $component, $callback, $priority, $accepted_args );
    }

    public function add_filter( $hook, $component, $callback, $priority = 10, $accepted_args = 1 ) {
        $this->filters = $this->add( $this->filters, $hook, $component, $callback, $priority, $accepted_args );
    }

    private function add( $hooks, $hook, $component, $callback, $priority, $accepted_args ) {

        $hooks[ $this->hook_index( $hook, $component, $callback ) ] = array(
            'hook'          => $hook,
            'component'     => $component,
            'callback'      => $callback,
            'priority'      => $priority,
            'accepted_args' => $accepted_args
        );

        return $hooks;

    }
    public static function get_instance() {
        if( is_null( self::$instance ) ) {
            self::$instance = new BMI_LOADER();
        }
        return self::$instance;
    }

    protected function hook_index( $hook, $component, $callback ) {
        return md5( $hook . get_class( $component ) . $callback );
    }

    public function remove( $hook, $component, $callback ) {

        $index = $this->hook_index( $hook, $component, $callback );

        if( isset( $this->filters[ $index ]  ) ) {
            remove_filter( $this->filters[ $index ][ 'hook' ],  array( $this->filters[ $index ][ 'component' ], $this->filters[ $index ][ 'callback' ] ) );
        }

        if( isset( $this->actions[ $index ] ) ) {
            remove_action( $this->filters[ $index ][ 'hook' ],  array( $this->filters[ $index ][ 'component' ], $this->filters[ $index ][ 'callback' ] ) );
        }

    }

    public function run() {

        foreach ( $this->filters as $hook ) {
            add_filter( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
        }

        foreach ( $this->actions as $hook ) {
            add_action( $hook['hook'], array( $hook['component'], $hook['callback'] ), $hook['priority'], $hook['accepted_args'] );
        }

    }

}