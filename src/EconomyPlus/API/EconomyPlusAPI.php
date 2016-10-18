<?php
namespace EconomyPlus\API;
use pocketmine\Player;
use pocketmine\Server;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\plugin\Plugin;

use EconomyPlus\EconomyPlus;
use EconomyPlus\EconomyPlayer;

use pocketmine\utils\TextFormat;

/* Copyright (C) ImagicalGamer - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Jake C <imagicalgamer@outlook.com>, September 2016
 */

class EconomyPlusAPI extends PluginBase{

  public function __construct(EconomyPlus $plugin)
  {
    $this->plugin = $plugin;
  }

  public function getMoney($player, Plugin $plugin)
  {
    if($player instanceof Player)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player->getName());
      return $player->getMoney();
    }
    else if(is_string($player))
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player);
      return $player->getMoney();
    }
    else if($player instanceof EconomyPlayer)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      return $player->getMoney();
    }
    else{
      throw new \InvalidArgumentException("Arugment passed to EconomyPlusAPI::getMoney() must be type of string or pocketmine\Player");
    }
  }

  public function setMoney($player, int $amount, Plugin $plugin)
  {
    if($player instanceof Player)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player->getName());
      $player->setMoney($amount);
    }
    else if(is_string($player))
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player);
      $player->setMoney($amount);
    }
    else if($player instanceof EconomyPlayer)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player->setMoney($amount);
    }
    else{
      throw new \InvalidArgumentException("Arugment passed to EconomyPlusAPI::setMoney() must be type of string or pocketmine\Player");
    }
  }

  public function reduceMoney($player, int $amount, Plugin $plugin)
  {
    if($player instanceof Player)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player->getName());
      $player->subtractMoney($amount);
    }
    else if(is_string($player))
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player);
      $player->subtractMoney($amount);
    }
    else if($player instanceof EconomyPlayer)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player->subtractMoney($amount);
    }
    else{
      throw new \InvalidArgumentException("Arugment passed to EconomyPlusAPI::reduceMoney() must be type of string or pocketmine\Player");
    }
  }

  public function addMoney($player, int $amount, Plugin $plugin)
  {
    if($player instanceof Player)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->plugin, $player->getName());
      $player->addMoney($amount);
    }
    else if(is_string($player))
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player = new EconomyPlayer($this->player, $player);
      $player->addMoney($amount);
    }
    else if($player instanceof EconomyPlayer)
    {
      if($this->plugin->debug){
        echo(TextFormat::toANSI(TextFormat::AQUA . "[" . date("H:i:s", time()) . "] " . TextFormat::RESET . TextFormat::GRAY . "[Server thread/DEBUG]: [EconomyPlus] " .$plugin->getName() . " called method " . __METHOD__ . "()\n"));
      }
      $player->addMoney($amount);
    }
    else{
      throw new \InvalidArgumentException("Arugment passed to EconomyPlusAPI::addMoney() must be type of string or pocketmine\Player");
    }
  }
}
