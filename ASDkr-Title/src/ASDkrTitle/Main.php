<?php

namespace ASDkrTitle;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {

     public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	 }
	 
	 public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();
		$player->addTitle("§b●§f서버적속!§b●","§f서버접속을 환영합니다!");
	 }
}