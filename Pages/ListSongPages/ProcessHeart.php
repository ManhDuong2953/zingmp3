<?php
session_start();
require_once "../../Config/configConnectDB.php";
$song_id = $_REQUEST["song_id"];
$id_user = $_SESSION["id_user"];
$isFavorite = $_REQUEST["isFavorite"];
if ($isFavorite == "true") {
    $sql_incre_listener = $pdo->prepare("INSERT INTO favorite_list (song_id, user_id) VALUES ('$song_id','$id_user')");
    $sql_incre_listener->execute();
    $sql_count_like = $pdo->prepare("SELECT COUNT(user_id) AS like_count FROM zingmusic.favorite_list WHERE song_id = $song_id");
    $sql_count_like->execute();
    $like_count = $sql_count_like->fetch(PDO::FETCH_ASSOC);
    $like_quantity = $like_count['like_count'] + 1;
    $sql_incre_like = $pdo->prepare("INSERT INTO song (like_count) VALUES ($like_quantity)");
    $sql_incre_like->execute();
} else {
    $sql_decre_listener = $pdo->prepare("DELETE FROM favorite_list WHERE song_id = '$song_id' AND user_id = '$id_user'");
    $sql_decre_listener->execute();
    $sql_count_like = $pdo->prepare("SELECT COUNT(user_id) AS like_count FROM zingmusic.favorite_list WHERE song_id = $song_id");
    $sql_count_like->execute();
    $like_count = $sql_count_like->fetch(PDO::FETCH_ASSOC);
    $like_quantity = $like_count['like_count'] - 1;
    $sql_decre_like = $pdo->prepare("INSERT INTO song (like_count) VALUES ($like_quantity)");
    $sql_decre_like->execute();
}
