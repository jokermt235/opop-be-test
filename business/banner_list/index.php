<?php 
require_once 'dumper.php';

$data = '{"count":2,"next":null,"previous":null,"results":[{"id":1,"banner":"http://162.19.158.14/media/banners/banner1.jpg","shop":1},{"id":3,"banner":"http://162.19.158.14/media/banners/banner2.jpg","shop":1}]}';

$dump = Dumper::getInstance();

$dump->dump($data);
