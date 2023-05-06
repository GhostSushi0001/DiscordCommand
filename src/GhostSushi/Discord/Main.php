<?php

namespace GhostSushi\Discord;
use GhostSushi\Discord\Command\DiscordCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase{
    public static Config $config;

    use SingletonTrait;

    protected function onLoad(): void {
        self::setInstance($this);
    }


    public function onEnable(): void
    {
        $this->getResource("config.yml");
        $this->saveDefaultConfig();
        $this->getServer()->getCommandMap()->register("", new DiscordCommand());
        $this->getServer()->getLogger()->notice("La plugin Discord de ghost est enable\n§c
███████╗ █████╗ ███████╗██╗   ██╗████████╗███████╗ █████╗ ███╗   ███╗
██╔════╝██╔══██╗██╔════╝╚██╗ ██╔╝╚══██╔══╝██╔════╝██╔══██╗████╗ ████║
█████╗  ███████║███████╗ ╚████╔╝    ██║   █████╗  ███████║██╔████╔██║
██╔══╝  ██╔══██║╚════██║  ╚██╔╝     ██║   ██╔══╝  ██╔══██║██║╚██╔╝██║
███████╗██║  ██║███████║   ██║      ██║   ███████╗██║  ██║██║ ╚═╝ ██║
╚══════╝╚═╝  ╚═╝╚══════╝   ╚═╝      ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝discord.gg/easyteam");
    }
    public function onDisable(): void
    {
        $this->getServer()->getLogger()->notice("La plugin Discord de ghost est disable\n§c
███████╗ █████╗ ███████╗██╗   ██╗████████╗███████╗ █████╗ ███╗   ███╗
██╔════╝██╔══██╗██╔════╝╚██╗ ██╔╝╚══██╔══╝██╔════╝██╔══██╗████╗ ████║
█████╗  ███████║███████╗ ╚████╔╝    ██║   █████╗  ███████║██╔████╔██║
██╔══╝  ██╔══██║╚════██║  ╚██╔╝     ██║   ██╔══╝  ██╔══██║██║╚██╔╝██║
███████╗██║  ██║███████║   ██║      ██║   ███████╗██║  ██║██║ ╚═╝ ██║
╚══════╝╚═╝  ╚═╝╚══════╝   ╚═╝      ╚═╝   ╚══════╝╚═╝  ╚═╝╚═╝     ╚═╝discord.gg/easyteam");
    }
}