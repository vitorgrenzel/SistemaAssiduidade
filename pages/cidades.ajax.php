<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'root', '315218' ) ;
	mysql_select_db( 'db_proj_assiduidade', $con ); /*é o nome da database que vai aqui?*/

	$cod_estados = mysql_real_escape_string( $_REQUEST['id'] );

	$cidade = array();

	$sql = "SELECT id, nome
			FROM cidade
			WHERE cidade_id_estado=$id
			ORDER BY nome";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$cidade[] = array(
			'id'	=> $row['id'],
			'nome'			=> $row['nome'],
		);
	}

	echo( json_encode( $cidades ) );