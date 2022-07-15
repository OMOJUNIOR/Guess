<?php

// In here we created some variables with php built in functions 
//to randomly print out motivational qoutes for winners and loosers

//array containing qoutes for winners

$random_text = ["“Once you believe, the truth and a lie are quite the same thing. 
                Let your heart decide. It's in your heart you must confide...”",

                "“We all make choices, but in the end... our choices make us.”",

                    "“The right man in the wrong place can make all the difference in the world.”",

                    "“A hero need not speak. When he is gone, the world will speak for him.”",

                    "“Your moves are miscalculated and underestimating your enemies—your
                     biggest mistake. You will find the will of a single man can be broken.”"];

srand(time());// random number generater, but we will use it to take the texts as seed here

$sizeof = count($random_text); // we are counting the elements in the array and assigining it as a value to a variable

$random = (rand()%$sizeof); // in here we are rounding the numbers of the elemets (items in the arrray) which 
                            //will be generated automatically on the users screen

$win="$random_text[$random]"; // our final result has been assigned to a variable which we will use to echo the qoutes

// same procedure here only the variable and element of the array changed

$random_text2 = [
    "“You have not seen desperation and helplessness till you 
    have seen a man hopeless in love. Of course, unless you have seen a gamer.”",
    "“Behind every screen there is someone controlling you. And he is not your father.”",
    "“The proud do not endure. The greatest of us fall in the end.”",
    "“I believe there are winners and losers, and nothing else besides.”",
    "“Success is not final, failure is not fatal: it is the courage to continue that counts.”",

];

srand(time());

$sizeof2 = count($random_text);

$random2 = (rand()%$sizeof);

$lose="$random_text2[$random]";

// this is the variable containing my favorite programming qoute

$personalQoute="“Debugging is twice as hard as writing the code in the first place. Therefore, 
                if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.”";
