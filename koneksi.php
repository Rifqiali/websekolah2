<?php
ini_set( 'display_errors', '1' );
ini_set( 'display_startup_errors', '1' );
error_reporting( E_ALL );
$base_url_admin   = "http://localhost/web-sekolah/admin";
$databaseHost     = 'localhost';
$databaseName     = 'web-sekolah';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect( $databaseHost, $databaseUsername, $databasePassword, $databaseName );
if ( ! $mysqli ) {
  die( "<script>alert('Gagal tersambung dengan database.')</script>" );
  }