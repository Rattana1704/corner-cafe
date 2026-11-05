<?php
/*
Plugin Name: Corner Cafe Contact
Description: Displays contact information for Corner Cafe.
Version: 1.0
Author: Björn, Rattana
*/

function show_cafe_contact() {
    return "
    <div style='
        border-radius: 10px;
        padding: 20px;
        text-align: center;'>

            <h2>Contact Us</h2>

        

            <div style='
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            
            
            
        '>

            

            <div style='flex: 1; min-width: 250px;'>
                <img src='http://localhost/corner-cafe/wp-content/uploads/2026/11/pexels-ahmed-akeri-801514718-29647355.jpg' alt='cafe staff' style='width: 100%; border-radius: 8px;'>
            </div>

            <div style='flex: 1; min-width: 250px;'>
                <p>
                    <strong>Address</strong><br>
                    Gustafsborgsvägen 3, Bergianska Trädgården, 11418 Stockholm
                </p>

                <p>
                    <strong>Phone</strong><br>
                    +46 8 123 456 789
                </p>

                <p>
                    <strong>Email</strong><br>
                    info@cornercafe.se
                </p>
            </div>
        </div>
    </div>";
}

add_shortcode(
    "cafe_contact",
    "show_cafe_contact"
);
            
           


            
         


