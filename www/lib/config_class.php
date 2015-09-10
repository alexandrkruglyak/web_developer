<?php

abstract class Config {

	const SITENAME = "WEB-Developer";
	const SECRET = "DGLJDG5";
	const ADDRESS = "http://cms_example";
	const ADM_NAME = "Александр Кругляк";
	const ADM_EMAIL = "admin@myrusakov.ru";
	
	const API_KEY = "DKEL39DL";
	
	const DB_HOST = "localhost";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_NAME = "cms_example";
	const DB_PREFIX = "xyz_";
	const DB_SYM_QUERY = "?";
	
	const DIR_IMG = "/images/";
	const DIR_IMG_ARTICLES = "/images/articles/";
	const DIR_AVATAR = "/images/avatars/";
	const DIR_TMPL = "/home/cmslvl2/www/tmpl/";
	const DIR_EMAILS = "/home/cmslvl2/www/tmpl/emails/";
	
	const LAYOUT = "main";
	const FILE_MESSAGES = "/home/cmslvl2/www/text/messages.ini";
	
	const FORMAT_DATE = "%d.%m.%Y %H:%M:%S";
	
	const COUNT_ARTICLES_ON_PAGE = 3;
	const COUNT_SHOW_PAGES = 10;
	
	const MIN_SEARCH_LEN = 3;
	const LEN_SEARCH_RES = 255;
	
	const SEF_SUFFIX = ".html";
	
	const DEFAULT_AVATAR = "default.png";
	const MAX_SIZE_AVATAR = 51200;
}

?>