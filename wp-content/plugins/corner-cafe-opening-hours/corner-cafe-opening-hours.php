<?php
/*
Plugin Name: Corner Cafe Opening Hours
Description: Displays the opening hours for Corner Cafe.
Version: 1.0
Author: Rattana, Björn
*/

function show_cafe_opening_hours() {
    return "
        <div style='
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        '>
            <h2>Opening Hours</h2>

            <p>
                <strong>Monday – Friday</strong><br>
                08:00 – 17:00
            </p>

            <p>
                <strong>Saturday</strong><br>
                09:00 – 16:00
            </p>

            <p>
                <strong>Sunday</strong><br>
                Closed
            </p>

            <p>
                Welcome to Corner Cafe!
            </p>
        </div>
    ";
}

add_shortcode(
    "cafe_hours",
    "show_cafe_opening_hours"
);