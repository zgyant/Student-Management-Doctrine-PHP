<?php
// cli-config.php
require_once "bootstrap.php";

// replace with mechanism to retrieve EntityManager in your app
//$entityManager = GetEntityManager();

//return ConsoleRunner::createHelperSet($entityManager);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

?>