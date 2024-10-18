<?php

function generateLocation($location)
{
    // On Index page location should be empty
    if ($location == "") {
        return;
    }

    // Sanitize location
    $location = htmlspecialchars($location);

    // Generate output
    $out = '<nav class="location">';

    // Root location
    $out .= '<a class="location__link location__link--home" href="/">';
    $out .= <<< HTML
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" width="20" height="20">
        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
        </svg>
        HTML;
    $out .= '</a>';

    // Location path
    $location_parts = explode("_", $location);
    for ($i = 0; $i < count($location_parts); $i++) {
        $out .= '<span class="location__separator">&raquo;</span>';
        $out .= '<a class="location__link';
        if ($i == count($location_parts) - 1) {
            $out .= ' location__link--active">';
        } else {
            $out .= '" href="/?e=';
            for ($j = 0; $j <= $i; $j++) {
                $out .= $location_parts[$j];
                if ($j < $i) {
                    $out .= "_";
                }
            }
            $out .= '">';
        }
        $out .= ucfirst($location_parts[$i]);
        $out .= '</a>';
    }

    // Close output
    $out .= '</nav>';
    echo $out;
}