<?php //phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols
session_start();
require_once(ROOT_PATH .'/Models/Favorite.php');

$request = new Favorite();

if (isset($_POST['blogId'])) {
    $b_id = $_POST['blogId'];
    $u_id = $_SESSION['user']['id'];

    $result = $request -> checkGood($b_id, $u_id);

    if (!empty($result)) {
        $request -> delGood($b_id, $u_id);
    } else {
        $request -> inGood($b_id, $u_id);
    }
}
