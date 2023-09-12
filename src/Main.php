<?php

declare(strict_types=1);

namespace Joestarfish\FakePearl;

use pocketmine\plugin\PluginBase;
use customiesdevs\customies\item\CustomiesItemFactory;
use Joestarfish\FakePearl\item\FakePearl;
use pocketmine\utils\Config;

class Main extends PluginBase {
	private static Config $config;

	public function onLoad(): void {
		self::$config = $this->getConfig();

		CustomiesItemFactory::getInstance()->registerItem(
			FakePearl::class,
			'fake_pearl:fake_pearl',
			self::$config->get('item-name', 'Fake Pearl'),
		);
	}

	public static function getItemTexture() {
		return self::$config->get('texture', 'ender_pearl');
	}
}
