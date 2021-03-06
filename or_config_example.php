<?php

const URI_PREFIX = '/orm_router';

{ # orm_router specific vars
    $ControllerClass = 'ExampleController';
    $hash_password_fields = true;

    # SECURITY NOTICE: turn this off for production!
    # It exposes raw SQL queries. Useful for debugging.
    $show_internal_result_details = true;

    # SECURITY NOTICE: this exposes your database for CRUD actions!
    # Read the code in controllers/ExampleController.php
    # - especially the __callStatic function - and add access guards as needed
    $automatic_API_layer = true;
}

{ # new config style
    $db_user = '<your-db-user-here>';
    $db_password = '<your-password-here>';
    $db_name = '<your-database-name-here>';
    $db_type = '<mysql-pgsql-sqlite>';
    #$db_port = '<port>';
}

{ # postgres-specific options
    # $search_path = 'schema1, schema2, etc';
}
?>
