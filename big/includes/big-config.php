<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
//CAN USE FOR EDISON!
$siteKey = "6LcYiEEUAAAAAD1wrQodfmWYtRqnh-wIbNyjUnY1";
$secretKey = "6LcYiEEUAAAAAMYc27aLZEK3Mpll9SfH-tYnnViS";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//name of the file of the current url
//echo basename($_SERVER['PHP_SELF']); 
//die;

define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 
//define(words that define it, content);

//echo "constant: " . THIS_PAGE;
//die;

//flexbox.php
//galleries.php
//map.php
//calendar.php
//youtube.php
//parallax.php
//shoppingcarts.php
//webcam.php
//siteapp.php

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Jesse Hernandez: WEB120 BIG Research';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'flexbox.php':
        $title = 'Jesse Hernandez: Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;    
        
    case 'galleries.php':
        $title = 'Jesse Hernandez: Galleries Research';
        $logo = '';
        $PageID = 'Galleries Research';
    break;
        
    case 'map.php':
        $title = 'Jesse Hernandez: Map Research';
        $logo = '';
        $PageID = 'Map Research';
    break;

    case 'calendar.php':
        $title = 'Jesse Hernandez: Calendar Research';
        $logo = '';
        $PageID = "Jesse's Event Calendar";
    break;    
        
    case 'youtube.php':
        $title = 'Jesse Hernandez: Web Dev TedTalks';
        $logo = '';
        $PageID = 'YouTube Video';
    break;     
        
    case 'parallax.php':
        $title = 'Jesse Hernandez: Parallax Research &amp; Example';
        $logo = '';
        $PageID = 'Parallax Research';
    break; 
    
    case 'siteapp.php':
        $title = 'Jesse Hernandez: Responsive Websites vs Native Mobile Apps';
        $logo = '';
        $PageID = 'Responsive Websites vs Native Mobile Apps';
    break; 
        
    case 'shoppingcarts.php':
        $title = 'Jesse Hernandez: Shopping Carts Research &amp; Example';
        $logo = '';
        $PageID = 'Shopping Carts Research';
    break; 
        
    case 'webcam.php':
        $title = 'Jesse Hernandez: Two Webcam Examples';
        $logo = '';
        $PageID = 'Two Webcam Examples';
    break; 
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

$curDate = date('D M j, Y');