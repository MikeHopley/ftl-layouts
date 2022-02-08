<?php
namespace App\Services;

class RangeCompactor
{
	public $compacted;
	public $trimmed;

	public function __construct(
		public array $data,
		public $minSector = 1,
		public $maxSector = 8
	) {
		$this->compacted = [];
		$this->trimmed = [];
	}

	public function trim()
	{
		$offset = $this->minSector - 1;
		$length = 8 - $offset - (8 - $this->maxSector);

		$this->trimmed = array_slice($this->data, $offset, $length, true);
	}

	public function compact()
	{
		foreach ($this->trimmed as $key => $value) {
			$this->outputSector($key, $value);
		}
	}

	public function outputSector($key, $value)
	{
		if ($this->isNewRange($value)) {
			return $this->compacted[] = [
				'sectors' => $key + 1,
				'values' => $value,
			];
		}

		$currentRange = end($this->compacted)['sectors'];
		$newMax = $key + 1;

		array_pop($this->compacted);
		$this->compacted[] = [
			'sectors' => $this->newSectorRange($currentRange, $newMax),
			'values' => $value,
		];
	}

	public function newSectorRange($current, $newMax)
	{
		if (is_array($current)) {
			array_pop($current);
			array_push($current, $newMax);
			return $current;
		}

		return [$current, $newMax];
	}

	public function isNewRange($value)
	{
		return empty($this->compacted)
			|| end($this->compacted)['values'] != $value;
	}
}
