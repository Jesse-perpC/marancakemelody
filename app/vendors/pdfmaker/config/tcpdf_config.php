<?php
//============================================================+
// File name   : tcpdf_config.php
// Begin       : 2004-06-11
// Last Update : 2008-01-09
//
// Description : Congiguration file for TCPDF.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com s.r.l.
//               Via Della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Configuration file for TCPDF.
 * @author Nicola Asuni
 * @copyright 2004-2008 Nicola Asuni - Tecnick.com S.r.l (www.tecnick.com) Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
 * @package com.tecnick.tcpdf
 * @version 2.1.000
 * @link http://tcpdf.sourceforge.net
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 2004-10-27
 */

// If you define the constant K_TCPDF_EXTERNAL_CONFIG, the following settings will be ignored.

if (!defined("K_TCPDF_EXTERNAL_CONFIG")) {
	
	// PLEASE SET THE FOLLOWING CONSTANTS:
	
	/**
	 * installation path (/var/www/tcpdf/)
	 */
	//define ("K_PATH_MAIN", "/home/v1957/public_html/vendors/pdfmaker/");
	define ("K_PATH_MAIN", "C:/www/vhosts/localhost/cake_1_2/vendors/pdfmaker/");
	
	/**
	 * url path (http://localhost/tcpdf/)
	 */
	define ("K_PATH_URL", "https://www.minilaen.ee/cms/pdfmaker/");
	
	/**
	 * path for PDF fonts
	 * use K_PATH_MAIN."fonts/old/" for old non-UTF8 fonts
	 */
	define ("K_PATH_FONTS", K_PATH_MAIN."fonts/");
	
	/**
	 * cache directory for temporary files (full path)
	 */
	define ("K_PATH_CACHE", K_PATH_MAIN."cache/");
	
	/**
	 * cache directory for temporary files (url path)
	 */
	define ("K_PATH_URL_CACHE", K_PATH_URL."cache/");
	
	/**
	 *images directory
	 */
	define ("K_PATH_IMAGES", K_PATH_MAIN."images/");
	
	/**
	 * blank image
	 */
	define ("K_BLANK_IMAGE", K_PATH_IMAGES."_blank.png");
	
	/**
	 * page format
	 */
	define ("PDF_PAGE_FORMAT", "A4");
	
	/**
	 * page orientation (P=portrait, L=landscape)
	 */
	define ("PDF_PAGE_ORIENTATION", "P");
	
	/**
	 * document creator
	 */
	define ("PDF_CREATOR", "TCPDF");
	
	/**
	 * document author
	 */
	define ("PDF_AUTHOR", "TCPDF");
	
	/**
	 * header title
	 */
	define ("PDF_HEADER_TITLE", "header title");
	
	/**
	 * header description string
	 */
	define ("PDF_HEADER_STRING", "first row\nsecond row\nthird row");
	
	/**
	 * image logo
	 */
	define ("PDF_HEADER_LOGO", "logo_example.png");
	
	/**
	 * header logo image width [mm]
	 */
	define ("PDF_HEADER_LOGO_WIDTH", 20);
	
	/**
	 *  document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch]
	 */
	define ("PDF_UNIT", "mm");
	
	/**
	 * header margin
	 */
	define ("PDF_MARGIN_HEADER", 5);
	
	/**
	 * footer margin
	 */
	define ("PDF_MARGIN_FOOTER", 10);
	
	/**
	 * top margin
	 */
	define ("PDF_MARGIN_TOP", 25);
	
	/**
	 * bottom margin
	 */
	define ("PDF_MARGIN_BOTTOM", 25);
	
	/**
	 * left margin
	 */
	define ("PDF_MARGIN_LEFT", 35);
	
	/**
	 * right margin
	 */
	define ("PDF_MARGIN_RIGHT", 15);
	
	/**
	 * main font name
	 */
	define ("PDF_FONT_NAME_MAIN", "vera"); //vera
	
	/**
	 * main font size
	 */
	define ("PDF_FONT_SIZE_MAIN", 10);
	
	/**
	 * data font name
	 */
	define ("PDF_FONT_NAME_DATA", "vera"); //vera
	
	/**
	 * data font size
	 */
	define ("PDF_FONT_SIZE_DATA", 8);
	
	/**
	 *  scale factor for images (number of points in user unit)
	 */
	define ("PDF_IMAGE_SCALE_RATIO", 4);
	
	/**
	 * magnification factor for titles
	 */
	define("HEAD_MAGNIFICATION", 1.1);
	
	/**
	 * height of cell repect font height
	 */
	define("K_CELL_HEIGHT_RATIO", 1.25);
	
	/**
	 * title magnification respect main font size
	 */
	define("K_TITLE_MAGNIFICATION", 1.3);
	
	/**
	 * reduction factor for small font
	 */
	define("K_SMALL_RATIO", 2/3);
}

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
