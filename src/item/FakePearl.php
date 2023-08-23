<?php

declare(strict_types=1);

namespace Joestarfish\FakePearl\item;

use customiesdevs\customies\item\CreativeInventoryInfo;
use customiesdevs\customies\item\ItemComponents;
use customiesdevs\customies\item\ItemComponentsTrait;
use pocketmine\entity\Location;
use pocketmine\item\EnderPearl;
use Joestarfish\FakePearl\entity\projectile\FakePearl as FakePearlEntity;
use Joestarfish\FakePearl\Main;
use pocketmine\entity\projectile\Throwable;
use pocketmine\item\ItemIdentifier;
use pocketmine\player\Player;

class FakePearl extends EnderPearl implements ItemComponents {
	use ItemComponentsTrait;

	public function __construct(ItemIdentifier $identifier, string $name = "Unknown") {
		parent::__construct($identifier, $name);
		$this->initComponent(Main::$texture, new CreativeInventoryInfo(CreativeInventoryInfo::CATEGORY_ITEMS));
	}

	protected function createEntity(Location $location, Player $thrower) : Throwable {
		return new FakePearlEntity($location, $thrower);
	}
}
