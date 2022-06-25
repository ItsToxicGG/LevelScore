<?php

namespace ItsToxicGG;

use pocketmine\plugin\PluginBase;
use ItsToxicGG\listeners\EventListener;
use ItsToxicGG\listeners\TagResolveListener;
use Laith98Dev\LevelSystem\DataMgr;

class LvlScore extends PluginBase {

  /** @var DataMgr */	
  public $Levelsystem;

  protected function onEnable(): void{
	        $this->Levelsystem = new DataMgr($this);
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->getServer()->getPluginManager()->registerEvents(new TagResolveListener($this), $this);
  }
	
  public function getLevelsystem(): DataMgr{
		return $this->Levelsystem;
  }	
} 
