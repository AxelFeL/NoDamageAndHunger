<?php

namespace AxelFeL;

use pocketmine\player\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerExhaustEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onDamage(EntityDamageEvent $event):void {
        if(!$event->getEntity() instanceof Player) return;
        
        $event->cancel();
    }
    
    public function onHunger(PlayerExhaustEvent $event):void {
        $event->cancel();
    }
}
