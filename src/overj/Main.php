<?php 


namespace overj;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

public function onEnable(){
$this->getLogger()->info("[0v3rCore] Join activé");
}

public function onJoin (PlayerJoinEvent $event){

	$player = $event->getPlayer();
	$event->setJoinMessage( joinMessage: " ");

	if(!$player->hasPlayedBefore()){

	Server::getInstance()->broadcastMessage( message: "§7[§6+§7] §7Bienvenu(e) a ce joueur§6" . $player->getName() . " qui se connecte pour la premiere fois§7");

	}else{
	
	Server::getInstance()->broadcastMessage( message: "§7[§a+§7]" . $player->getName() . " ");
	
}

}

public function onQuit (PlayerQuitEvent $event){

	$player = $event->getPlayer();
	$event->setQuitMessage( quitMessage: " ");
}

}

