<?php

require_once ("./vendor/autoload.php");

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Discord\DiscordDriver;
use React\EventLoop\Factory;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'discord' =>[
        'token' => $_ENV['DISCORD_BOT_TOKEN'],
        'options' => [],
    ],
];

// Load the driver(s) you want to use
DriverManager::loadDriver(\JABirchall\BotMan\Drivers\Discord\DiscordDriver::class);
$loop = Factory::create();
$botman = BotManFactory::createForDiscord($config, $loop);

// Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hello yourself.');
});

// Start listening
$botman->listen();
$loop->run();
