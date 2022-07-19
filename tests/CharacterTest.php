<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;

class CharacterTest extends TestCase {

	/** @test */
	public function test_character_Health_starting_at_1000_points()
	{
		//Given
		$goku = new Character;
		$Vegeta = new Character;
		
		//When
		$gokuHealth = $goku->getHealthGoku();
		$VegetaHealth = $Vegeta->getHealthVegeta();
		//Then
		$this->assertEquals(1000, $gokuHealth);
		$this->assertEquals(1000, $VegetaHealth);
	}

	public function test_character_Level_starting_at_1()
	{
		//Given
		$goku = new Character;
		
		//When
		$gokuLevel = $goku->getLevel();
		//Then
		$this->assertEquals(1, $gokuLevel);
	}

	public function test_character_may_be_Dead_or_Alive_starting_Alive()
{
	//Given
	$goku = new Character;
	//When
	$gokuLive = $goku->getLive();
	//Then
	$this->assertEquals(true, $gokuLive);
}

public function test_character_damage_received()
{
	//Given
	$goku = new Character;
	//When
	$gokuDamageReceived = $goku->getDamageReceived();
	//Then
	$this->assertEquals(500, $gokuDamageReceived);
}
}

/* 2. Characters can Deal Damage to Characters.
◦ Damage is subtracted from Health
◦ When damage received exceeds current Health, Health becomes 0 and the character dies */



