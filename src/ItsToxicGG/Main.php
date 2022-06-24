<?php

namespace ItsToxicGG;

use pocketmine\plugin\PluginBase;
use ItsToxicGG\listeners\EventListener;
use ItsToxicGG\listeners\TagResolveListener;

class Main extends PluginBase {

  protected function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->getServer()->getPluginManager()->registerEvents(new TagResolveListener($this), $this);
  }
} 
