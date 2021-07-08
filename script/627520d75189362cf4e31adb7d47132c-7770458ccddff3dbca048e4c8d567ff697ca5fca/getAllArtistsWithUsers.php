<?php

const HOST = 'localhost';
const PORT = 3306;
const DATABASE = 'proton';
const USER = 'root';
const PASS = 'root';

function getPDO(): PDO {
	return new PDO(
		'mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DATABASE . ';charset=utf8mb4',
		USER,
		PASS,
		[
			PDO::MYSQL_ATTR_INIT_COMMAND => "set names 'utf8mb4'",
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	);
}

function select(string $sql): array {
	$pdo = getPDO();
	return $pdo->query($sql)->fetchAll();
}

function getAllArtistsWithUsers(): array {
	$artists = select('SELECT id, `name` FROM artists');
	foreach ($artists as $k => $artist) {
		$artist_users = select("SELECT user_id FROM artist_users WHERE artist_id = {$artist['id']}");
		foreach ($artist_users as $artist_user) {
			$artists[$k]['users'][] = select("SELECT id, email, first_name, last_name FROM users WHERE id = {$artist_user['user_id']}")[0];
		}
	}
	return $artists;
}

echo json_encode(
	getAllArtistsWithUsers()
);
