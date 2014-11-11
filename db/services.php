<?php

// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Web service local plugin template external functions and service definitions.
 *
 * @package    localstart
 * @copyright  2014 Eloy Vieira
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// We defined the web service functions to install.
$functions = array(
        'local_start_get_user' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_user',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Return User data.',
                'type'        => 'read',
        ),		
        'local_start_save_user' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'save_user',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Save User data.',
                'type'        => 'read',
        ),		
        'local_start_geoinfo' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'geoinfo',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Geo Info data.',
                'type'        => 'read',
        ),			
        'local_start_event_save' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'event_save',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Event Save data.',
                'type'        => 'read',
        ),			
        'local_start_responder_forum' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'responder_forum',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Post reply.',
                'type'        => 'read',
        ),				
        'local_start_editar_forum' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'editar_forum',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Post edit.',
                'type'        => 'read',
        ),		
        'local_start_get_messages' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_messages',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Returns a list of messages',
                'type'        => 'read',
        ),			
        'local_start_reply_message' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'reply_message',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Message reply.',
                'type'        => 'read',
        ),			
        'local_start_get_grades' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_grades',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Retrieve grade items and, optionally, student grades',
                'type'        => 'read',
        ),		
        'local_start_update_grade' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'update_grade',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Update a grade items and, optionally, student grades',
                'type'        => 'read',
        ),		
        'local_start_get_forums_by_courses' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_forums_by_courses',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Returns a list of forums in a provided list of courses',
                'type'        => 'read',
        ),		
        'local_start_get_forum_discussions' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_forum_discussions',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Returns a list of forum discussions as well as a summary of the discussion',
                'type'        => 'read',
        ),		
        'local_start_get_forum_posts' => array(
                'classname'   => 'local_start_external',
                'methodname'  => 'get_forum_posts',
                'classpath'   => 'local/start/externallib.php',
                'description' => 'Describes the parameters for get_forum_posts.',
                'type'        => 'read',
        )
);

// We define the services to install as pre-build services. A pre-build service is not editable by administrator.
$services = array(
        '@start service' => array(
                'functions' => array ('local_start_get_user',
									'local_start_save_user',
									'local_start_geoinfo',
									'local_start_event_save',
									'local_start_responder_forum',
									'local_start_get_messages',
									'local_start_reply_message',
									'local_start_get_grades',
									'local_start_update_grade',
									'local_start_get_forums_by_courses',
									'local_start_get_forum_discussions',
									'local_start_get_forum_posts'),
                'restrictedusers' => 0,
                'enabled'=>1,
                'downloadfiles' => 1,
                'requiredcapability' => 'moodle/webservice:createtoken',
                'component' => 'local_start',
                'shortname' => 'local_start'
        )
);
