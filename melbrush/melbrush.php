<?php
/*
Plugin Name: melbrush
Description: Adds support for the MEL language to the SyntaxHighlighter Evolved plugin.  Structure supplied from: http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/adding-a-new-brush-language/
Author: Skye Book
Version: 1.0.3
Author URI: http://devstreak.net/
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_mel_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_mel_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_mel_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-mel', plugins_url( 'shBrushMel.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.3' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_mel_addlang( $brushes ) {
    $brushes['MEL'] = 'mel';
    $brushes['mel'] = 'mel';
 
    return $brushes;
}
 
?>