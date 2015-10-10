<?php
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Eminem');
// Toon de template: output html
$templateParser->display('head.tpl');

$page = (empty($_GET['page'])) ? '' : $_GET['page'];
$templateParser->assign('curr_page',$page);
$templateParser->display('header.tpl');
switch ($page) {
	case 'home':
		$templateParser->display('home.tpl');
		break;
	case 'news':
		$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
		$templateParser->assign('curr_page',$page_nr);
		require 'model/select_newsarticles.php';
		$templateParser->assign('data', $result);
		$templateParser->display('newsarticles.tpl');
		break;
	case 'events':
		require 'model/select_events.php';
		$templateParser->assign('eventData', $result);
		$templateParser->display('events.tpl');
		break;
	case 'albums':
		$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
		$templateParser->assign('curr_page',$page_nr);
		require 'model/select_albums.php';
		$templateParser->assign('albumData', $result);
		$templateParser->display('albums.tpl');
		break;
	case 'search':
		$search_string = isset($_POST['search_string']) ? $_POST['search_string'] : "";
		require 'model/search_articles.php';
		$templateParser->assign('data', $search_result);
		$templateParser->display('search_result.tpl');
		break;
	case 'about':
		$templateParser->display('about.tpl');
		break;
	default:
		$templateParser->display('home.tpl');
		break;
}

$templateParser->display('footer.tpl');