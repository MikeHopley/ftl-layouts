<?php
namespace Tests\Unit;

use App\Services\RangeCompactor;
use PHPUnit\Framework\TestCase;

class RangeCompactorTest extends TestCase
{
	/** @test */
	public function it_finds_the_new_sector_range()
	{
		$ranges = new RangeCompactor([]);

		$currentRange = [1, 2];
		$newMax = 3;
		$result = $ranges->newSectorRange($currentRange, $newMax);

		$this->assertEquals([1, 3], $result);

		$currentRange = 3;
		$newMax = 4;
		$result = $ranges->newSectorRange($currentRange, $newMax);

		$this->assertEquals([3, 4], $result);
	}

	/** @test */
	public function it_caps_the_result_by_ship_sector_limits()
	{
		$data = [1, 2, 3, 4, 5, 6, 7, 8];
		$result = [
			['sectors' => 1, 'values' => 1],
			['sectors' => 2, 'values' => 2],
			['sectors' => 3, 'values' => 3],
			['sectors' => 4, 'values' => 4],
			['sectors' => 5, 'values' => 5],
			['sectors' => 6, 'values' => 6],
			['sectors' => 7, 'values' => 7],
			['sectors' => 8, 'values' => 8],
		];
		$ranges = new RangeCompactor($data);
		$ranges->trim();
		$ranges->compact();

		$this->assertEquals($result, $ranges->compacted);

		// Now impose sector limits
		$result = [
			['sectors' => 3, 'values' => 3],
			['sectors' => 4, 'values' => 4],
			['sectors' => 5, 'values' => 5],
			['sectors' => 6, 'values' => 6],
		];
		$ranges = new RangeCompactor($data, 3, 6);
		$ranges->trim();
		$ranges->compact();

		$this->assertEquals($result, $ranges->compacted);
	}

	/** @test @dataProvider data */
	public function it_compacts_ranges($data, $result)
	{
		$ranges = new RangeCompactor($data);
		$ranges->compact();

		$this->assertEquals($result, $ranges->compacted);
	}

	public function data()
	{
		return [
			[
				[2, 3],
				[
					['sectors' => 1, 'values' => 2],
					['sectors' => 2, 'values' => 3],
				]
			],
			[
				[2, 2, 3],
				[
					['sectors' => [1, 2], 'values' => 2],
					['sectors' => 3, 'values' => 3],
				]
			],
			[
				[
					[2, 3], [2, 3], [3, 5],	[4, 6], [5, 7], [5, 7],	[6, 8], [7, 8],
				],
				[
					['sectors' => [1, 2], 'values' => [2, 3]],
					['sectors' => 3, 'values' => [3, 5]],
					['sectors' => 4, 'values' => [4, 6]],
					['sectors' => [5, 6], 'values' => [5, 7]],
					['sectors' => 7, 'values' => [6, 8]],
					['sectors' => 8, 'values' => [7, 8]],
				]
			]
		];
	}
}
