<?php

require_once 'page.php';
require_once 'request.php';

require_once 'client_request.php';
require_once 'libraries/articles/article.php';
require_once 'libraries/articles/page.php';

require 'functions.php';

use \client\request as client_request;
use \libraries\article\article;
// line above is the same as:
// use \libraries\article\article as article;

// dump request data
request::dump();

// render the entire page
$page = new page();
$page->render();


// render the client's request
$client_request = new client_request();
echo $client_request->getText();

// prepare an article containing pages and render it
$article = new \libraries\article\article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->render();


use function \my_functions\strlen;

//   \my_functions\strlen
var_dump(strlen('Hello, there'));