<?php

declare(strict_types=1);

namespace Joestarfish\FakePearl;

use pocketmine\plugin\PluginBase;
use customiesdevs\customies\item\CustomiesItemFactory;
use Joestarfish\FakePearl\item\FakePearl;

class Main extends PluginBase{

	public static string $texture;
	public static string $item_name;
	public function onLoad(): void {

		$config = $this->getConfig();
		self::$texture = $config->getNested("texture", "ender_pearl");
		self::$item_name = $config->getNested("item-name", "Fake Pearl");

		CustomiesItemFactory::getInstance()->registerItem(FakePearl::class, "minecraft:fake_pearl", self::$item_name);
	}

}
