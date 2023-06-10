<?php
/*
Plugin Name: Roman Numeral Date Converter by Calculator.iO
Plugin URI: https://www.calculator.io/roman-numeral-date-converter/
Description: The Roman Numerals Date Converter can convert dates from Arabic numerals to Roman numerals and back. Get any date in Roman or Arabic numerals.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_roman_numeral_date_converter
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_roman_numeral_date_converter(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/roman-numeral-date-converter/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Roman Numeral Date Converter</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_roman_numeral_date_converter_iframe"></iframe></div>';
}

add_shortcode( 'ci_roman_numeral_date_converter', 'display_ci_roman_numeral_date_converter' );