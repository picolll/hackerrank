<?php

/**
* Complete the mergeStrings function in your editor. It has 2 parameters:
* A string, a.
* A string, b.
* Your function must merge strings a and b, and then return a single merged string. A merge operation on two strings is described as follows:
 *
 * Append alternating characters from a and b, respectively, to some new string, mergedString.
 * Once all of the characters in one of the strings have been merged, append the remaining characters in the other string to mergedString.
 *
**
* Input Format
 *
* The locked stub code in your editor reads two strings, a and b, from stdin and passes them to your function.
 *
*
** Constraints
 *
* 1 ≤ |a|, |b| ≤ 25000
 *
**
* Output Format
 *
* Your function must return the merged string. This will be printed to stdout by the locked stub code in your editor.
 *
**
* Sample Input 1
 *
* abc
* def
 *
*
** Sample Output 1
 *
* adbecf
 *
*
*
* Sample Input 2
 *
* ab
* zsd
 *
**
* Sample Output 2
 *
* azbsd
 *
**
* Explanation
 *
* Sample Case 1
 *
* a = abc
 *
* b = def
 *
* Taking alternate characters from both the strings , we get adbecf
 *
* Sample Case 2
 *
* a = ab
 *
* b = zsd
 *
* Taking alternate characters from both the strings , we get azbsd
 */
$handle = fopen("php://stdin", "r");
$a      = trim(fgets($handle));
$b      = trim(fgets($handle));

$merge = [];

$a = str_split($a);
$b = str_split($b);

if (count($a) > count($b)) {

    for ($i = 0; $i < count($a); $i++) {
        $merge[] = $a[$i];
        if (isset($b[$i])) {
            $merge[] = $b[$i];
        }
    }

} else {
    for ($i = 0; $i < count($b); $i++) {
        if (isset($a[$i])) {
            $merge[] = $a[$i];
        }
        $merge[] = $b[$i];
    }
}

$string = implode($merge);
echo $string;

fclose($handle);

