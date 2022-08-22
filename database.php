<?php

//create connection
            $db_host = 'localhost';
            $db_name = 'projectdb';
            $db_user = 'root';

            $mysqli = new mysqli($db_host, $db_user, "", $db_name);

            if($mysqli->connect_error){
            	printf("connect Failed: %s\n", $mysqli->connect_error);
            	exit();
            }


?>