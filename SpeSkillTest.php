<?php
class SpeSkillTest
{
    // Challenge 1: Narcissistic Number
    public static function isNarcissisticNumber($number)
    {

        $numString = strval($number);
        $numDigits = strlen($numString); 

        $sum = 0;

        for ($i = 0; $i < $numDigits; $i++) {
            $digit = intval($numString[$i]);
            $sum += pow($digit, $numDigits);
        }

        return $sum === $number;
    }

    // Challenge 2: Parity Outlier
    public static function findParityOutlier($arr)
    {
        $evenCount = 0;
        $oddCount = 0;
        $evenOutlier = 0;
        $oddOutlier = 0;

        foreach ($arr as $num) {
            if ($num % 2 === 0) {
                $evenCount++;
                $evenOutlier = $num;
            } else {
                $oddCount++;
                $oddOutlier = $num;
            }
        }

        if ($evenCount === 1) {
            return $evenOutlier;
        } elseif ($oddCount === 1) {
            return $oddOutlier;
        }

        return false;
    }

    // Challenge 3: Needle in a Haystack
    public static function findNeedle($haystack, $needle)
    {
        foreach ($haystack as $index => $value) {
            if ($value === $needle) {
                return $index;
            }
        }
        return -1; // Needle not found in haystack
    }

    // Challenge 4: The Blue Ocean Reverse
    public static function blueOcean($list1, $list2)
    {
        // Use array_diff to subtract list2 from list1
        $result = array_diff($list1, $list2);

        // Re-index the resulting array
        $result = array_values($result);

        return $result;
    }
}

$skill =  new SpeSkillTest();

echo $skill->isNarcissisticNumber(153); // true
echo "<br />";
echo $skill->isNarcissisticNumber(111); // false
echo "<br />";
echo $skill->findParityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]); //11
echo "<br />";
echo $skill->findParityOutlier([160, 3, 1719, 19, 11, 13, -21]); // 160
echo "<br />";
echo $skill->findParityOutlier([11, 13, 15, 19, 9, 13, -21]);
echo "<br />";
echo $skill->findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");
echo "<br />";
print_r($skill->blueOcean([1, 2, 3, 4, 6, 10], [1]));
echo "<br />";
print_r($skill->blueOcean([1, 5, 5, 5, 5, 3], [5]));
echo "<br />";
