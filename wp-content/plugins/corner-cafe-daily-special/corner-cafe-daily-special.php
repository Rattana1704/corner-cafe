<?php
/*
Plugin Name: Corner Cafe Daily Special
Description: Displays three daily specials with external pictures.
Version: 1.0
Author: Rattana, Björn
*/

function show_daily_specials() {
    return "
        <div style='
            background-color: #fffdfa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        '>
            <h2>Today's Specials</h2>

            <div style='
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            '>
                <div style='
                    background-color: white;
                    border-radius: 8px;
                    flex: 1;
                    min-width: 220px;
                    max-width: 320px;
                    padding: 15px;
                '>
                    <img
                        src='https://www.thecookierookie.com/wp-content/uploads/2024/04/featured-chicken-club-sandwich-recipe.jpg'
                        alt='Chicken Sandwich'
                        style='
                            border-radius: 8px;
                            height: 200px;
                            object-fit: cover;
                            width: 100%;
                        '
                    >

                    <h3>Special 1</h3>
                    <p>Chicken Sandwich and Coffee</p>
                    <strong>99 kr</strong>
                </div>

                <div style='
                    background-color: white;
                    border-radius: 8px;
                    flex: 1;
                    min-width: 220px;
                    max-width: 320px;
                    padding: 15px;
                '>
                    <img
                        src='https://www.indianhealthyrecipes.com/wp-content/uploads/2022/11/tomato-soup-recipe.jpg'
                        alt='Tomato Soup with Bread'
                        style='
                            border-radius: 8px;
                            height: 200px;
                            object-fit: cover;
                            width: 100%;
                        '
                    >

                    <h3>Special 2</h3>
                    <p>Tomato Soup with Bread</p>
                    <strong>89 kr</strong>
                </div>

                <div style='
                    background-color: white;
                    border-radius: 8px;
                    flex: 1;
                    min-width: 220px;
                    max-width: 320px;
                    padding: 15px;
                '>
                    <img
                        src='https://twocupsflour.com/wp-content/uploads/2020/12/Untitled-1200-x-1200-px-8.jpg'
                        alt='Chocolate Cake'
                        style='
                            border-radius: 8px;
                            height: 200px;
                            object-fit: cover;
                            width: 100%;
                        '
                    >

                    <h3>Special 3</h3>
                    <p>Chocolate Cake and Coffee</p>
                    <strong>75 kr</strong>
                </div>
            </div>
        </div>
    ";
}

add_shortcode(
    "daily_special",
    "show_daily_specials"
);