<?php

namespace RossMcNeil\GoogleFontsLoader;

class GoogleFontsLoader
{

    private function cleanFontSpaces(string $string = '')
    {
        return str_replace(' ', '+', $string);
    }

    public function load(array $fonts = [])
    {
        if (!$fonts && !config('googlefontsloader.fonts')) return;

        $fonts = ($fonts) ? implode('|', $fonts) : implode('|', config('googlefontsloader.fonts'));

        $fonts = $this->cleanFontSpaces($fonts);

        return sprintf('<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=%s&display=%s" />', $fonts, config('googlefontsloader.display'));
    }
}