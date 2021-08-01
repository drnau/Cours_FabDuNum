<?php
    function texteFormatage($chaineTexte, $codeFormatage) {
        switch ($codeFormatage) {
            case $codeFormatage == "div":
                return "<$codeFormatage>$chaineTexte</$codeFormatage>";
                break;
            case $codeFormatage == "p":
                return "<$codeFormatage>$chaineTexte</$codeFormatage>";
                break;
            case $codeFormatage == "h1":
                return "<$codeFormatage>$chaineTexte</$codeFormatage>";
                break;
            case $codeFormatage == "h2":
                return "<$codeFormatage>$chaineTexte</$codeFormatage>";
                break;
            default:
                break;
        }
    }
    echo texteFormatage("bonjour", "div");
    echo texteFormatage("bonjour", "p");
    echo texteFormatage("bonjour", "h1");
    echo texteFormatage("bonjour", "h2");
    echo texteFormatage("bonjour", "h3");
?>