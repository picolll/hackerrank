<?php

/* Complete the function below to print 2 integers separated by a single space which will be your next move
  */



/**
 * Counts witch move is about to be next.
 * Return -1 when there are no moves available
 *
 * @param $board
 * @return int
 */
function witchMove($board)
{
    $move = 1;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($board[$i][$j] == 'X' || $board[$i][$j] == 'O') {
                $move++;
            }
        }
    }

    return ($move <= 9) ? $move : -1;
}

function isWin($board, $player)
{
    if ($board[0][0] == $player) {
        if (($board[0][1] == $player) && ($board[0][2] == $player)) {
            return true;
        }
        if (($board[1][1] == $player) && ($board[2][2] == $player)) {
            return true;
        }
        if (($board[1][0] == $player) && ($board[2][0] == $player)) {
            return true;
        }

    } elseif ($board[0][1] == $player) {
        if (($board[1][1] == $player) && ($board[2][1] == $player)) {
            return true;
        }

    } elseif ($board[0][2] == $player) {
        if (($board[1][2] == $player) && ($board[2][2] == $player)) {
            return true;
        }
        if (($board[1][1] == $player) && ($board[2][0] == $player)) {
            return true;
        }

    } elseif ($board[1][0] == $player) {
        if (($board[1][1] == $player) && ($board[1][2] == $player)) {
            return true;
        }

    } elseif ($board[2][0] == $player) {
        if (($board[2][1] == $player) && ($board[2][2] == $player)) {
            return true;
        }

    }

    return false;


}

function nextMove($board, $player, $move = 1)
{

    var_dump(isWin($board, $player));


}

$fp = fopen("php://stdin", "r");

//If player is X, I'm the first player.
//If player is O, I'm the second player.
fscanf($fp, "%s", $player);

//Read the board now. The board is a 3x3 array filled with X, O or _.
$board = array();
for ($i = 0; $i < 3; $i++) {
    fscanf($fp, "%s", $board[$i]);
    $board[$i] = str_split($board[$i]);
}
$move = witchMove($board);

nextMove($board, $player, $move);
