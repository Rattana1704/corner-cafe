<?php
/*
Plugin Name: Corner Cafe About
Description: Displays information about Corner Cafe.
Version: 1.0
Author: Björn, Rattana
*/

function show_cafe_about() {
    return "
        <div style='
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            border-radius: 10px;
            padding: 20px;
            background-color: #fffdfa;
        '>
            <div style='
                flex: 1;
                min-width: 250px;
            '>
                <h2>About Our Cafe</h2>

                <p>
                    Located near Stockholm University (Frescati) in the beautiful Bergius Botanic Garden, Corner Cafe is a vibrant, student-run hangout. It is the perfect spot to unwind with live music, locally roasted fair-trade coffee, expertly crafted espresso drinks, and a curated selection of over 20 loose-leaf black, herbal, and green teas.
                </p>
                <p>
                    Whether you need a quiet corner to study, a welcoming space to catch up with friends, or a lively hub to attend Student Club events—like open mic nights, art exhibits, creative writing workshops, dissertation boot camps, and holiday craft fairs—Corner Cafe is built around community.
                </p>
                <p>
                    Open throughout the academic year, the café was founded by three Stockholm University students who wanted to bridge the gap between campus life and the local community. We are a team of passionate coffee, tea, and food enthusiasts dedicated to creating a warm, inclusive environment where students and locals alike can connect and feel at home. Driven by a deep commitment to sustainability, we consciously source our ingredients and products from ecologically aware companies and local suppliers, ensuring that every cup we pour supports both the environment and our regional community.
                </p>
            </div>
            <div style='flex: 1; min-width: 250px;'>
                <img src='http://localhost/corner-cafe/wp-content/uploads/2026/11/pexels-pavel-danilyuk-6612725.jpg' alt='cafe staff' style='width: 100%; border-radius: 8px;'>
            </div>
        </div>
    
    <p>
        Welcome to Corner Cafe!
    </p>";
}

add_shortcode(
    "cafe_about",
    "show_cafe_about"
);
