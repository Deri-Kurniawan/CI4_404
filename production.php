<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>500 Internal Server Error!</title>
    <style>
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    body {
        padding: 0;
        margin: 0
    }

    #internal-error {
        position: relative;
        height: 100vh
    }

    #internal-error .internal-error {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .internal-error {
        max-width: 520px;
        width: 100%;
        text-align: center;
        line-height: 1.4
    }

    .internal-error .internal-error-404 {
        height: 190px
    }

    .internal-error .internal-error-404 h1 {
        font-family: montserrat, sans-serif;
        font-size: 146px;
        font-weight: 700;
        margin: 0;
        color: #232323
    }

    .internal-error .internal-error-404 h1>span {
        display: inline-block;
        width: 120px;
        height: 120px;
        background-image: url('https://colorlib.com/etc/404/colorlib-error-404-12/img/emoji.png');
        background-size: cover;
        -webkit-transform: scale(1.4);
        -ms-transform: scale(1.4);
        transform: scale(1.4);
        z-index: -1;
        animation: cryface 1s infinite;

    }

    @keyframes cryface {
        0% {
            transform: translateY(0%);
        }

        50% {
            transform: translateY(-10%);
        }

        100% {
            transform: translateY(0%);
        }
    }

    .internal-error h2 {
        font-family: montserrat, sans-serif;
        font-size: 22px;
        font-weight: 700;
        margin: 0;
        text-transform: uppercase;
        color: #232323
    }

    .internal-error p {
        font-family: montserrat, sans-serif;
        color: #787878;
        font-weight: 300
    }

    .internal-error a {
        font-family: montserrat, sans-serif;
        display: inline-block;
        padding: 12px 30px;
        font-weight: 700;
        background-color: #4e73df;
        color: #fff;
        border-radius: 40px;
        text-decoration: none;
        -webkit-transition: .2s all;
        transition: .2s all
    }

    .internal-error a:hover {
        opacity: .8
    }

    @media only screen and (max-width:767px) {
        .internal-error .internal-error-404 {
            height: 115px
        }

        .internal-error .internal-error-404 h1 {
            font-size: 86px
        }

        .internal-error .internal-error-404 h1>span {
            width: 86px;
            height: 86px
        }
    }
    </style>
    <style id="" media="all">
    /* cyrillic-ext */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gTD_u50.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3g3D_u50.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gbD_u50.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gfD_u50.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD3gnD_g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* cyrillic-ext */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }

    /* cyrillic */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    /* vietnamese */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
    }

    /* latin-ext */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */
    @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        src: url(/fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    </style>

    <link type="text/css" rel="stylesheet" href="css/style.css" />


    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div id="internal-error">
        <div class="internal-error">
            <div class="internal-error-404">
                <h1>5<span></span>0</h1>
            </div>

            <h2>Oops! system has a problem</h2>
            <p>We seem to have hit a snag. Please try again later...</p>
            <a href="<?= base_url(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/home'); ?>">Back to
                homepage</a>
        </div>
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"67957fd6f8d7051f","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'>
    </script>
</body>

</html>