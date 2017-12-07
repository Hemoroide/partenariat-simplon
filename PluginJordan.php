<?php
/*
Plugin Name: Jordan Plugin
Description: Un plugin pour integrer texte de Simplon
Version: 0.1
Author: SUZANNE Jordan
License: GPL2
*/

function HelloSimplon() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire simplon.co - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'HelloSimplon');

