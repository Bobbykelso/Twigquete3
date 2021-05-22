<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$email = 'barth.aurelient182@gmail.com';

echo $twig->render('details.html.twig', ['email' => $email]);