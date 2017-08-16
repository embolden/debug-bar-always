<?php
/*
 Plugin Name: Debug Bar Always
 Description: Always display the debug bar
 Author: Matt Keehner
 Version: 0.0.1
 */

add_action( 'init', 'dba_init' );

function dba_init() {
  add_filter( 'debug_bar_enable', function( $enable )         { return true; } );
  add_filter( 'show_admin_bar',   function( $show_admin_bar ) { return true; } );
}
