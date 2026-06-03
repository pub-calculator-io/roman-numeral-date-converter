<?php
/*
Plugin Name: Roman Numeral Date Converter by Calculator.iO
Plugin URI: https://www.calculator.io/roman-numeral-date-converter/
Description: Instantly convert dates to Roman numerals and back with our free Roman Numeral Date Converter. Perfect for tattoos, weddings, birthdays, and historical dates.
Version: 1.0.0
Author: www.calculator.io / Roman Numeral Date Converter
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_roman_numeral_date_converter
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Roman Numeral Date Converter by www.calculator.io";

function calcio_roman_numeral_date_converter_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Roman Numeral Date Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_roman_numeral_date_converter_iframe"></iframe></div>';
}


add_shortcode( 'calcio_roman_numeral_date_converter', 'calcio_roman_numeral_date_converter_shortcode' );