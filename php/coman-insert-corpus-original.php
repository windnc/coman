#!/usr/bin/php
<?
  	date_default_timezone_set('UTC');

	if( count( $argv ) != 4 ) {
		echo "usage: coman-insert-corpus-original.php name prefix-dir flist\n";
		die;
	}
	else {
		echo "corpus name: $argv[1]\n";
		echo "flist: $argv[2]\n";

	}

	// check file
	echo "inspecting flist... ";
	$cont = file_get_contents( $argv[3] );
	$arr = explode( "\n", $cont );
	for( $i=0; $i<count($arr); $i++ ) {
		if( trim( $argv[$i] ) == "" ) continue;
		$fn = $argv[2] . "/" . $arr[$i];
		echo $fn . "\n";
	}
	echo number_format( count( $arr ) ) . "\n";




	// db
	$db_name = dirname(__file__) . "/../db/corpus.sqlite3";
	$db = new SQLite3( $db_name );
	if( !$db ) {
		echo "error: fail to open db: $db_name\n";
		echo $error . "\n";
		die;
	}


	
?>
