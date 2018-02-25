<?php
require_once 'cache.class.php';

$c = new Cache(
    array(
        'name' => 'github-api-cache',
        'path' => 'cache/',
        'extension' => '.cache'
    )
);

// Delete all expired cache
$c->eraseExpired();

// Get cached jobs or retrive from github api
if($c->isCached('github')){
    $jobs = $c->retrieve('github');
} else {
    $json_url = 'https://jobs.github.com/positions.json?description=php';
    $json = file_get_contents($json_url);
    $jobs = json_decode($json);
    $c->store('github', $jobs, 3600);
}
