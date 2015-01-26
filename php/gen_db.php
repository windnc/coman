#!/usr/bin/php
<?
  	date_default_timezone_set('UTC');

	$db_name = dirname(__file__) . "/../db/corpus.sqlite3";
	echo $db_name;
	$db = new SQLite3( $db_name );
	if( !$db ) {
		echo "error: fail to open db: $db_name\n";
		echo $error . "\n";
		die;
	}

	$query = "create table org_info ( id integer primary key, name text)";
	$db->exec( $query );

	$query = "create table org_file ( id integer primary key,  id org_info_id, name text)";
	$db->exec( $query );

?>
