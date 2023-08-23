<?php

declare(strict_types=1);

namespace Joestarfish\FakePearl\entity\projectile;

use pocketmine\entity\projectile\EnderPearl;
use pocketmine\event\entity\ProjectileHitEvent;

class FakePearl extends EnderPearl {
	protected function onHit(ProjectileHitEvent $event) : void{ 
		// noop 
	}
}
