<?php
namespace Tests\Unit;

use App\Services\LevelCalculator;
use PHPUnit\Framework\TestCase;

class LevelCalculatorTest extends TestCase
{
	/** @test @dataProvider systemLevels */
	public function it_finds_the_system_levels($min, $max, $result)
	{
		$levels = new LevelCalculator($min, $max);

		$this->assertEquals($result, $levels->systems());
	}

	/** @test @dataProvider crewLevels */
	public function it_finds_the_crew_levels($min, $max, $result)
	{
		$levels = new LevelCalculator($min, $max);

		$this->assertEquals($result, $levels->crew());
	}

	public function crewLevels()
	{
		return [
			[0, 0, [0, 0, 0, 0, 0, 0, 0, 0]],
			[2, 3, [2, 2, 2, 2, 2, 2, 2, 2]],
			[2, 4, [2, 2, 2, 2, 3, 3, 3, 3]],
			[2, 5, [2, 2, 2, 3, 3, 3, 4, 4]],
			[2, 6, [2, 2, 3, 3, 4, 4, 5, 5]],
			[3, 5, [3, 3, 3, 3, 4, 4, 4, 4]],
			[3, 7, [3, 3, 4, 4, 5, 5, 6, 6]],
			[3, 6, [3, 3, 3, 4, 4, 4, 5, 5]],
			[3, 8, [3, 3, 4, 4, 5, 6, 6, 7]],
			[4, 5, [4, 4, 4, 4, 4, 4, 4, 4]],
			[4, 6, [4, 4, 4, 4, 5, 5, 5, 5]],
			[4, 7, [4, 4, 4, 5, 5, 5, 6, 6]],
			[4, 8, [4, 4, 5, 5, 6, 6, 7, 7]],
		];
	}

	public function systemLevels()
	{
		return [
			[1, 0, [ // Slug Instigator has this broken code
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
			]],

			[1, 1, [
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
				[1, 1],
			]],

			[1, 2, [
				[1, 2],
				[1, 2],
				[1, 2],
				[1, 2],
				[1, 2],
				[1, 2],
				[1, 2],
				[1, 2],
			]],

			[1, 3, [
				[1, 2],
				[1, 2],
				[1, 3],
				[1, 3],
				[2, 3],
				[2, 3],
				[2, 3],
				[2, 3],
			]],

			[1, 5, [
				[1, 2],
				[1, 2],
				[2, 4],
				[2, 4],
				[3, 5],
				[3, 5],
				[4, 5],
				[4, 5],
			]],
				
			[0, 6, [
				[1, 1],
				[1, 1],
				[1, 3],
				[2, 4],
				[3, 5],
				[3, 5],
				[4, 6],
				[5, 6],
			]],
				
			[1, 6, [
				[1, 2],
				[1, 2],
				[2, 4],
				[2, 4],
				[3, 5],
				[4, 6],
				[4, 6],
				[5, 6],
			]],

			[2, 4, [
				[2, 3],
				[2, 3],
				[2, 4],
				[2, 4],
				[3, 4],
				[3, 4],
				[3, 4],
				[3, 4],
			]],

			[2, 5, [
				[2, 3],
				[2, 3],
				[2, 4],
				[3, 5],
				[3, 5],
				[3, 5],
				[4, 5],
				[4, 5],
			]],

			[2, 7, [
				[2, 3],
				[2, 3],
				[3, 5],
				[3, 5],
				[4, 6],
				[5, 7],
				[5, 7],
				[6, 7],
			]],

			[2, 8, [
				[2, 3],
				[2, 3],
				[3, 5],
				[4, 6],
				[5, 7],
				[5, 7],
				[6, 8],
				[7, 8],
			]],

			[2, 9, [
				[2, 3],
				[2, 3],
				[3, 5],
				[4, 6],
				[5, 7],
				[6, 8],
				[7, 9],
				[8, 9],
			]],

			[2, 10, [
				[2, 3],
				[3, 4],
				[4, 6],
				[5, 7],
				[6, 8],
				[7, 9],
				[8, 10],
				[9, 10],
			]],

			[3, 5, [
				[3, 4],
				[3, 4],
				[3, 5],
				[3, 5],
				[4, 5],
				[4, 5],
				[4, 5],
				[4, 5],
			]],

			[4, 8, [
				[4, 5],
				[4, 5],
				[5, 7],
				[5, 7],
				[6, 8],
				[6, 8],
				[7, 8],
				[7, 8],
			]],
			
			[4, 10, [
				[4, 5],
				[4, 5],
				[5, 7],
				[6, 8],
				[7, 9],
				[7, 9],
				[8, 10],
				[9, 10],
			]],
		];
	}
}
