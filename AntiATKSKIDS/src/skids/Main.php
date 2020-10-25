<?php

namespace skids;

use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\defaults\BanCommand;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\plugin;
use pocketmine\command\KickCommand;

class Main extends PluginBase implements Listener
{

    public function onEnable()
    {
        @mkdir($this->getDataFolder());
        $this->saveResource("atkskids.yml");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->myConfig = new Config($this->getDataFolder() . "atkskids.yml", Config::YAML);
        $this->getServer()->getLogger()->info("
    ");
    }

    public function onLogin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $names = ["AtkOnTop", "DuskTheRealKM", "ATK On Topp", "VorgeRyan", "xvqle", "", "givenchyvale", "valentinesxo", "", "DuskDaddy", "RejectsATK"];
        if(in_array($player->getName(),$names)){
            $player->kick("§cYou've been permanently banned from our server.§e\nReason: you are a fucking atk skid kys"
            $player->setBanned(true);
            Server::getInstance()->broadcastMessage("\n§c".$player->getName()." §7 has been permanently banned by §c"."dirty ass atk skid"."\n\n");
        }