<?php

/**
 * @name NV
 * @version α1
 * @main NV\NV
 * @api 3.0.0
 * @author ChaNu
 */

namespace NV;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;

class Nv extends PluginBase implements Listener {
	public function onEnable() {
		$cmd = new PluginCommand("nv",$this);
		$cmd ->setUsage("/nv");
		$cmd ->setDescription("야간투시 지급 명령어 입니다");
		$this->getServer()->getCommandMap()->register($this->getDescription()->getName(),$cmd);
	}
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) :bool

	{
		if ($command->getName () === "nv") {
			$sender->addEffect ( new EffectInstance ( Effect::getEffect ( 16 ), 99999, 0, false ) );
			$sender->sendTip ("§l[NV] Get NightVision Effect");
			return true;
		}


	}
}