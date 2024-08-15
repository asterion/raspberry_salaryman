<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:asterion/raspberry_salaryman.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('192.168.1.129')
    ->set('remote_user', 'frutilla')
    ->set('sub_directory', 'salaryman')
    ->set('deploy_path', '/var/www/html');

// Hooks

after('deploy:failed', 'deploy:unlock');
