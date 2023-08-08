<?php

add_action( 'ds_cron_hook', 'ds_do_nothing' );
function ds_do_nothing() {
	$value = random_int( 1, 100 );
	set_transient( 'ds_useless_transient', $value, 3600  );
}

add_filter( 'cron_schedules', 'add_super_frequent_event' );
function add_super_frequent_event( $schedules ) {
	$schedules['once_a_minute'] = array(
		'interval' => 60,
		'display'  => esc_html__( 'Once Per Minute' ),
	);
	return $schedules;
}

if (!wp_next_scheduled('ds_cron_hook')) {
	wp_schedule_event( time(), 'once_a_minute', 'ds_cron_hook' );
}
