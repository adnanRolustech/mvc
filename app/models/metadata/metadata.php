<?php

/**
 * metadata file for database schema
 */

/**
 * metadata class for table structures
 */
class metadata {
    
    
    /**
     * tables and their fields and types
     */
    public static $tables = array(
        'course' => array(
            'id' => 'integer',
            'course_name' => 'string',
            'created_at' => 'timestamps'
        ),
        'student' => array(
            'id' => 'integer',
            'student_name' => 'string',
            'created_at' => 'timestamps'
        ),
        'teacher' => array(
            'id' => 'integer',
            'teacher_name' => 'string',
            'created_at' => 'timestamps'
        )
    );

}
