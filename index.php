@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz@8..144&family=Rubik&family=Teko:wght@300&display=swap');

/*

use font families

font-family: 'Bebas Neue', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Kdam Thmor Pro', sans-serif;
font-family: 'Roboto Flex', sans-serif;
font-family: 'Rubik', sans-serif;
font-family: 'Teko', sans-serif;
*/

.main-content {
    background-size: auto;
    background-position: top;
    height: 100%;
    background: -webkit-linear-gradient(rgba(0, 0, 0, 0.815), rgba(0, 0, 0, 0.815)), url(../images/traintrack1.jpg);
    color: white;
    padding-top: 100px;
    padding-bottom: 100px;
}

.footer-content {
    background-size: auto;
    background-position: top;
    height: 100%;
    background: -webkit-linear-gradient(rgba(0, 0, 0, 0.815), rgba(0, 0, 0, 0.815)), url(../images/traintrack1.jpg);
    color: white;
    padding-top: 100px;
    padding-bottom: 100px;
}

.footer-content .title {
    text-align: center;
    font-family: 'Roboto Flex', sans-serif;
    font-weight: 800;
    font-size: 50px;
}

.footer-content .grid {
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(250px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d";
    padding: 45 45 45 45;
    margin-top: 40px;
    margin-bottom: 20px;
}

.t-item1 {
    grid-area: a;
}

.t-item1 .title,
.t-item2 .title,
.t-item3 .title,
.t-item4 .title {
    font-size: 20px;
    font-weight: 300;
    padding-bottom: 20px;
    font-family: 'Kdam Thmor Pro', sans-serif;
    color: rgba(233, 178, 0, 0.89);
    text-align: center;
    transition: 0.5s;
}

.t-item1 .body {
    text-align: center;
}

.t-item2 {
    grid-area: b;
}

.t-item2 ul {
    list-style-type: none;
}

.t-item2 ul li {
    padding-bottom: 20px;
}

.t-item2 ul li a {
    text-decoration: none;
    color: white;
    transition: 0.5s;
}

.t-item2 ul li a:hover {
    color: rgba(233, 178, 0, 0.89);
}

.t-item3 {
    grid-area: c;
}

.t-item3 ul {
    list-style-type: none;
}

.t-item3 ul li {
    padding-bottom: 20px;
}

.t-item3 ul li a {
    text-decoration: none;
    color: white;
    transition: 0.5s;
}

.t-item3 ul li a:hover {
    color: rgba(233, 178, 0, 0.89);
}

.t-item4 {
    grid-area: d;
}

.footer-hr {
    border-top: 1px solid white;
    margin-bottom: 20px;
    margin-top: 60px;
}

.footer-copy {
    padding: 0;
    text-align: center;
}

.contact-icons {
    overflow: hidden;
    margin-left: 450px;
    margin-top: 15px;
}

.contact-icons ul {
    list-style-type: none;
    float: left;
}

.contact-icons ul li {
    display: inline;
}


/* 
    ***************************************************************************************

                             commen laptop screen and small screens

                                            769px - 1400px

    ***************************************************************************************
*/

@media only screen and (min-device-width: 821px) and (max-device-width: 1400px) {}


/* 
    ***************************************************************************************

                                        iPads, Tablets

                                        481px — 768px

    ***************************************************************************************
*/

@media only screen and (min-device-width: 481px) and (max-device-width: 820px) {
    .footer-content {
        height: 100%;
        background: -webkit-linear-gradient(rgba(14, 13, 13, 0.815), rgba(31, 31, 31, 0.815)), url(../images/train3.jpg);
        background-position: center;
        background-size: cover;
    }
    .footer-content .title {
        font-size: 30px;
        font-weight: 200;
    }
    .footer-content .grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(250px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d";
        padding: 45 45 45 45;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    .contact-icons {
        overflow: hidden;
        margin-left: 250px;
        margin-top: 15px;
    }
}


/* 
    ***************************************************************************************

                                     commen mobile screen

                                            320x480

    ***************************************************************************************
*/

@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .footer-content {
        height: 100%;
        background: -webkit-linear-gradient(rgba(14, 13, 13, 0.815), rgba(31, 31, 31, 0.815)), url(../images/train2.jpg);
        background-position: center;
        background-size: cover;
    }
    .footer-content .title {
        font-size: 30px;
        font-weight: 200;
    }
    .footer-content .grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(250px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b" "c" "d";
        padding: 45 45 45 45;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    .t-item1 .title,
    .t-item2 .title,
    .t-item3 .title,
    .t-item4 .title {
        font-size: 18px;
        font-weight: 300;
        padding-bottom: 20px;
        font-family: 'Kdam Thmor Pro', sans-serif;
        color: rgba(233, 178, 0, 0.89);
        text-align: center;
        transition: 0.5s;
    }
    .footer-copy {
        text-align: center;
    }
    .contact-icons {
        overflow: hidden;
        margin-left: 80px;
        margin-top: 15px;
    }
}
