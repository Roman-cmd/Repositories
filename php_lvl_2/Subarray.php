<?php
//Алгоритм поиска максимальной суммы непрерывной подпоследовательности (алгоритм Кадане)
class Subarray
{
    private array $operation;

    public function __construct(int ...$operation)
    {
        $this->operation = $operation;
    }

    public function maxSubarraySum() : int|float
    {
        $maxCurrent = $this->operation[0];//Хранит максимальную сумму подпоследовательности, заканчивающуюся на текущем элементе
        $maxGlobal = $this->operation[0];//Хранит максимальную сумму среди всех подпоследовательностей.
        for ($i = 1, $count = count($this->operation); $i < $count; $i++) {
            $maxCurrent = max($this->operation[$i], $maxCurrent + $this->operation[$i]);
            if ($maxCurrent > $maxGlobal) {
                $maxGlobal = $maxCurrent;
            }
        }

        return $maxGlobal;
    }
}



/*Взято за пример
int ans = a[0],
	sum = 0,
	min_sum = 0;
for (int r=0; r<n; ++r) {
    sum += a[r];
    ans = max (ans, sum - min_sum);
    min_sum = min (min_sum, sum);
}*/