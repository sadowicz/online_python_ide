<?php

require_once "_util/env_loader.php";

$env = get_env();

$containerRunning = shell_exec("if docker ps | grep -q {$env['DOCKER_CONTAINER_NAME']}; then printf 'true'; else printf 'false'; fi");
if ($containerRunning === 'true') {
    print "Killed container: ".shell_exec("docker kill $(docker ps -q --filter ancestor={$env['DOCKER_CONTAINER_NAME']})")."\n";
} else {
    echo "The python-interpreter container isn't running\n";
}