<?php
declare(strict_types = 1);

namespace ItsToxicGG\listeners;

use ItsToxicGG\Main;
use Ifera\ScoreHud\event\TagsResolveEvent;
use pocketmine\event\Listener;
use function count;
use function explode;

class TagResolveListener implements Listener{

	/** @var Main */
	private $plugin;

	public function __construct(Main $plugin){
		$this->plugin = $plugin;
	}

	public function onTagResolve(TagsResolveEvent $event){
		$tag = $event->getTag();
    $player = $event->getPlayer();
		$tags = explode('.', $tag->getName(), 2);
		$value = "";

		if($tags[0] !== 'levelsystem' || count($tags) < 2){
			return;
		}

		switch($tags[1]){
			case "lvl":
        $value = $this->plugin->levelsystem->getLevel($player);
				break;
      case "level":
        $value = $this->plugin->levelsystem->getLevel($player);
        break;
		}

		$tag->setValue((string) $value);
	}
}
