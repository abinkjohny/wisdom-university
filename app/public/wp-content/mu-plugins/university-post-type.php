<?php 
function university_post_types() {
    register_post_type('event', array(
        'labels' => array(
            'name' => 'Events',
            'all_item' => 'All Events',
            'edit_item' => 'Edit Event',
            'singular_name' => 'Event',
            'add_new_item' => 'Add New Event'
        ),
        'menu_icon' => 'dashicons-calandar',
        'public' => true,
        'has_archive' => true
        
    ));
}
?>