<?php
/*
Plugin Name: Jordan Plugin
Description: Un plugin pour integrer texte de Simplon
Version: 1.0
Author: SUZANNE Jordan
License: GPL2
*/

function HelloSimplon() {
    return '<p>
    La publication de cet article est possible grâce à mon super partenaire<a href="https://simplon.co"> simplon.co </a>- une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('simplon', 'HelloSimplon');

