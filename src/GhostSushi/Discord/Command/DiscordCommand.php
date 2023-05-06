<?php

namespace GhostSushi\Discord\Command;

use GhostSushi\Discord\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;
use pocketmine\Server;

class DiscordCommand extends Command
{
    public function __construct() {
        parent::__construct("discord", "voir notre discord", "discord", ["ds"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player){
            $sender->sendMessage(Main::getInstance()->getConfig()->get("message-discord"));
        }
    }
}
