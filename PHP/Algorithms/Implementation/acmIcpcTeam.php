<?php
/**
 * ACM ICPC Team by picolll
 */
$handle = fopen("php://stdin", "r");
$nm     = trim(fgets($handle));
list($n, $m) = explode(' ', $nm);
$mArray        = [];
$maxTopic      = 0;
$maxTopicTeams = [];
for ($t = 1; $t <= $n; $t++) {
    $mArray[] = trim(fgets($handle));
}
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        $result          = $mArray[$i] | $mArray[$j];
        $currentMaxTopic = substr_count($result, '1');
        if ($maxTopic <= $currentMaxTopic) {
            $maxTopic = $currentMaxTopic;
            if (isset($maxTopicTeams[$maxTopic])) {
                $maxTopicTeams[$maxTopic]++;
            } else {
                $maxTopicTeams[$maxTopic] = 1;
            }
        }
    }
}
echo "$maxTopic\n$maxTopicTeams[$maxTopic]";
fclose($handle);

