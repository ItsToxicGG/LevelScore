<?php

namespace ItsToxicGG;

use pocketmine\plugin\PluginBase;
use ItsToxicGG\listeners\EventListener;
use ItsToxicGG\listeners\TagResolveListener;
use Laith98Dev\LevelSystem\Main;

class LvlScore extends PluginBase {

  /** @var Main */	
  public $Levelsystem;

  protected function onEnable(): void{
     $this->Levelsystem = $this->getServer()->getPluginManager()->getPlugin("LevelSystem");
     $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
     $this->getServer()->getPluginManager()->registerEvents(new TagResolveListener($this), $this);
  }	
} 
