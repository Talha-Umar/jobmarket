<?php
include 'db.php';

$cid=$_REQUEST['catid'];
 ?>
<html lang="en">
    <head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Job Search</title>
        <!-- stylesheets-->
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <style>
            #__next {
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            @media(min-width: 800px) {
                #__next {
                    width:60%;
                    margin-left: auto;
                    margin-right: auto;
                }
            }

            html {
                box-sizing: border-box;
                height: 100%;
            }

            select {
                -webkit-appearance: none;
            }

            input,textarea {
                outline: none!important;
            }

            *,*:before,*:after {
                box-sizing: inherit;
            }

            .alink {
                color: inherit;
                text-decoration: none;
            }

            .css-view-1dbjc4n[class*="184en5c"] {
                z-index: auto;
            }
        </style>
        <style id="react-native-stylesheet">
            [stylesheet-group="0"] {
            }

            html {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: rgba(0,0,0,0);
            }

            body {
                margin: 0;
            }

            button::-moz-focus-inner,input::-moz-focus-inner {
                border: 0;
                padding: 0;
            }

            input::-webkit-inner-spin-button,input::-webkit-outer-spin-button,input::-webkit-search-cancel-button,input::-webkit-search-decoration,input::-webkit-search-results-button,input::-webkit-search-results-decoration {
                display: none;
            }

            [stylesheet-group="0.1"] {
            }

            :focus:not([data-focusvisible-polyfill]) {
                outline: none;
            }

            [stylesheet-group="0.5"] {
            }

            .css-18t94o4 {
                cursor: pointer;
            }

            [stylesheet-group="1"] {
            }

            .css-1dbjc4n {
                -ms-flex-align: stretch;
                -ms-flex-direction: column;
                -ms-flex-negative: 0;
                -ms-flex-preferred-size: auto;
                -webkit-align-items: stretch;
                -webkit-box-align: stretch;
                -webkit-box-direction: normal;
                -webkit-box-orient: vertical;
                -webkit-flex-basis: auto;
                -webkit-flex-direction: column;
                -webkit-flex-shrink: 0;
                align-items: stretch;
                border: 0 solid black;
                box-sizing: border-box;
                display: -webkit-box;
                display: -moz-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                flex-basis: auto;
                flex-direction: column;
                flex-shrink: 0;
                margin-bottom: 0px;
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 0px;
                min-height: 0px;
                min-width: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
                padding-right: 0px;
                padding-top: 0px;
                position: relative;
                z-index: 0;
            }

            .css-76zvg2 {
                border-bottom-width: 0px;
                border-left-width: 0px;
                border-right-width: 0px;
                border-top-width: 0px;
                box-sizing: border-box;
                color: rgba(0,0,0,1.00);
                display: inline;
                font: 14px system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
                margin-bottom: 0px;
                margin-left: 0px;
                margin-right: 0px;
                margin-top: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
                padding-right: 0px;
                padding-top: 0px;
                white-space: pre-wrap;
                word-wrap: break-word;
            }

            .css-bfa6kz {
                max-width: 100%;
                overflow-x: hidden;
                overflow-y: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            [stylesheet-group="2"] {
            }

            .r-13awgt0 {
                -ms-flex-negative: 1;
                -ms-flex-positive: 1;
                -ms-flex-preferred-size: 0%;
                -webkit-box-flex: 1;
                -webkit-flex-basis: 0%;
                -webkit-flex-grow: 1;
                -webkit-flex-shrink: 1;
                flex-basis: 0%;
                flex-grow: 1;
                flex-shrink: 1;
            }

            .r-1wdxeg {
                border-bottom-color: rgba(208,210,214,1.00);
                border-left-color: rgba(208,210,214,1.00);
                border-right-color: rgba(208,210,214,1.00);
                border-top-color: rgba(208,210,214,1.00);
            }

            .r-1udh08x {
                overflow-x: hidden;
                overflow-y: hidden;
            }

            .r-edyy15 {
                padding-bottom: 8px;
                padding-left: 8px;
                padding-right: 8px;
                padding-top: 8px;
            }

            .r-z2wwpe {
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .r-nsbfu8 {
                padding-bottom: 16px;
                padding-left: 16px;
                padding-right: 16px;
                padding-top: 16px;
            }

            .r-1jkafct {
                border-bottom-left-radius: 2px;
                border-bottom-right-radius: 2px;
                border-top-left-radius: 2px;
                border-top-right-radius: 2px;
            }

            .r-vsl69l {
                border-bottom-color: rgba(213,216,224,1.00);
                border-left-color: rgba(213,216,224,1.00);
                border-right-color: rgba(213,216,224,1.00);
                border-top-color: rgba(213,216,224,1.00);
            }

            .r-1867qdf {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px;
                border-top-left-radius: 16px;
                border-top-right-radius: 16px;
            }

            .r-1phboty {
                border-bottom-style: solid;
                border-left-style: solid;
                border-right-style: solid;
                border-top-style: solid;
            }

            .r-rs99b7 {
                border-bottom-width: 1px;
                border-left-width: 1px;
                border-right-width: 1px;
                border-top-width: 1px;
            }

            .r-t7fnos {
                border-bottom-color: rgba(133,137,148,1.00);
                border-left-color: rgba(133,137,148,1.00);
                border-right-color: rgba(133,137,148,1.00);
                border-top-color: rgba(133,137,148,1.00);
            }

            .r-18c69zk {
                border-bottom-left-radius: 100px;
                border-bottom-right-radius: 100px;
                border-top-left-radius: 100px;
                border-top-right-radius: 100px;
            }

            [stylesheet-group="2.1"] {
            }

            .r-ymttw5 {
                padding-left: 16px;
                padding-right: 16px;
            }

            .r-1f1sjgu {
                padding-bottom: 12px;
                padding-top: 12px;
            }

            .r-1p6iasa {
                margin-bottom: 4px;
                margin-top: 4px;
            }

            .r-y285pg {
                margin-left: -8px;
                margin-right: -8px;
            }

            .r-c8eef1 {
                margin-bottom: 8px;
                margin-top: 8px;
            }

            .r-mfjstv {
                padding-bottom: 32px;
                padding-top: 32px;
            }

            [stylesheet-group="2.2"] {
            }

            .r-1awozwy {
                -ms-flex-align: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                align-items: center;
            }

            .r-14lw9ot {
                background-color: rgba(255,255,255,1.00);
            }

            .r-qklmqi {
                border-bottom-width: 1px;
            }

            .r-18u37iz {
                -ms-flex-direction: row;
                -webkit-box-direction: normal;
                -webkit-box-orient: horizontal;
                -webkit-flex-direction: row;
                flex-direction: row;
            }

            .r-1mwlp6a {
                height: 56px;
            }

            .r-184en5c {
                z-index: 1;
            }

            .r-1b7u577 {
                margin-right: 12px;
            }

            .r-1mlwlqe {
                -ms-flex-preferred-size: auto;
                -webkit-flex-basis: auto;
                flex-basis: auto;
            }

            .r-417010 {
                z-index: 0;
            }

            .r-1niwhzg {
                background-color: rgba(0,0,0,0.00);
            }

            .r-vvn4in {
                background-position: center;
            }

            .r-u6sd8q {
                background-repeat: no-repeat;
            }

            .r-4gszlv {
                background-size: cover;
            }

            .r-1p0dtai {
                bottom: 0px;
            }

            .r-1pi2tsx {
                height: 100%;
            }

            .r-1d2f490 {
                left: 0px;
            }

            .r-u8s1d {
                position: absolute;
            }

            .r-zchlnj {
                right: 0px;
            }

            .r-ipm5af {
                top: 0px;
            }

            .r-13qz1uu {
                width: 100%;
            }

            .r-1wyyakw {
                z-index: -1;
            }

            .r-ehq7j7 {
                background-size: contain;
            }

            .r-1t176gz {
                color: rgba(0,20,67,1.00);
            }

            .r-adyw6z {
                font-size: 20px;
            }

            .r-1kfrs79 {
                font-weight: 600;
            }

            .r-vrz42v {
                line-height: 28px;
            }

            .r-1ttztb7 {
                text-align: inherit;
            }

            .r-3twk1y {
                text-transform: none;
            }

            .r-150rngu {
                -webkit-overflow-scrolling: touch;
            }

            .r-eqz5dr {
                -ms-flex-direction: column;
                -webkit-box-direction: normal;
                -webkit-box-orient: vertical;
                -webkit-flex-direction: column;
                flex-direction: column;
            }

            .r-16y2uox {
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                flex-grow: 1;
            }

            .r-1wbh5a2 {
                -ms-flex-negative: 1;
                -webkit-flex-shrink: 1;
                flex-shrink: 1;
            }

            .r-11yh6sk {
                overflow-x: hidden;
            }

            .r-1rnoaur {
                overflow-y: auto;
            }

            .r-1sncvnh {
                -webkit-transform: translateZ(0px);
                transform: translateZ(0px);
            }

            .r-1xce7rv {
                background-color: rgba(208,210,214,1.00);
            }

            .r-2llsf {
                min-height: 100%;
            }

            .r-z7lthc {
                padding-bottom: 60px;
            }

            .r-1wtj0ep {
                -ms-flex-pack: justify;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                justify-content: space-between;
            }

            .r-jwli3a {
                color: rgba(255,255,255,1.00);
            }

            .r-1b43r93 {
                font-size: 14px;
            }

            .r-vw2c0b {
                font-weight: bold;
            }

            .r-rjixqe {
                line-height: 20px;
            }

            .r-1enofrn {
                font-size: 12px;
            }

            .r-1it3c9n {
                font-weight: normal;
            }

            .r-1cwl3u0 {
                line-height: 16px;
            }

            .r-f8vsa5 {
                background-color: rgba(255,249,237,1.00);
            }

            .r-1777fci {
                -ms-flex-pack: center;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
            }

            .r-ubezar {
                font-size: 16px;
            }

            .r-gnh785 {
                color: rgba(255,251,239,1.00);
            }

            .r-10x49cs {
                font-size: 10px;
            }

            .r-56xrmm {
                line-height: 12px;
            }

            .r-kzbkwu {
                padding-bottom: 12px;
            }

            .r-1ygmrgt {
                padding-top: 24px;
            }

            .r-1ok0lxs {
                color: rgba(133,137,148,1.00);
            }

            .r-14nekm4 {
                box-shadow: 0px 1px 2.22px rgba(0,0,0,0.22);
            }

            .r-1544tr9 {
                ;}

            .r-1w6e6rj {
                -ms-flex-wrap: wrap;
                -webkit-box-lines: multiple;
                -webkit-flex-wrap: wrap;
                flex-wrap: wrap;
            }

            .r-1i10wst {
                font-size: 18px;
            }

            .r-majxgm {
                font-weight: 500;
            }

            .r-135wba7 {
                line-height: 24px;
            }

            .r-10m5lkq {
                color: rgba(71,29,135,1.00);
            }

            .r-knv0ih {
                margin-top: 8px;
            }

            .r-31ssuo {
                color: rgba(89,102,133,1.00);
            }

            .r-17s6mgv {
                -ms-flex-pack: end;
                -webkit-box-pack: end;
                -webkit-justify-content: flex-end;
                justify-content: flex-end;
            }

            .r-l71dzp {
                margin-top: 14px;
            }

            .r-m2pi6t {
                padding-left: 4px;
            }

            .r-1pyaxff {
                padding-right: 8px;
            }

            .r-mabqd8 {
                height: 32px;
            }

            .r-1kesqaa {
                width: 84px;
            }

            .r-oi7v0 {
                background-color: rgba(71,29,135,1.00);
            }

            .r-eu3ka {
                height: 40px;
            }

            .r-1ss6j8a {
                padding-left: 6px;
            }

            .r-1qortcd {
                padding-right: 6px;
            }

            .r-gy4na3 {
                padding-left: 0px;
            }

            .r-9aemit {
                padding-right: 0px;
            }

            .r-i1rqw2 {
                background-color: rgba(253,246,236,1.00);
            }

            .r-1qhn6m8 {
                padding-left: 16px;
            }

            .r-95jzfe {
                padding-top: 16px;
            }

            .r-1x35g6 {
                font-size: 24px;
            }

            .r-37tt59 {
                line-height: 32px;
            }

            .r-1l7z4oj {
                padding-bottom: 16px;
            }

            .r-6z4lug {
                width: 185px;
            }

            .r-2yi16 {
                min-height: 36px;
            }

            .r-f727ji {
                padding-left: 12px;
            }

            .r-i023vh {
                padding-right: 16px;
            }

            .r-1m04atk {
                padding-left: 8px;
            }

            .r-12aat0 {
                box-shadow: 0px -2px 2px rgba(0,0,0,0.10);
            }

            .r-a2tzq0 {
                -ms-flex-pack: distribute;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-around;
                justify-content: space-around;
            }

            .r-1loqt21 {
                cursor: pointer;
            }

            .r-1otgn73 {
                -ms-touch-action: manipulation;
                touch-action: manipulation;
            }

            .r-1iud8zs {
                height: 50px;
            }

            .r-1h8ys4a {
                padding-top: 4px;
            }

            .r-1xlj8pv {
                color: rgba(111,115,127,1.00);
            }
        </style>
        
    </head>
    <body style="height:100%;background-color:#bdbfc4">
        <?php include 'header.php'; ?>
        <div id="__next">
            <div class="css-1dbjc4n r-13awgt0">

                <div class="css-1dbjc4n r-1awozwy r-14lw9ot r-qklmqi r-1wdxeg r-18u37iz r-1mwlp6a r-ymttw5 r-184en5c">
                    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n r-1b7u577" id="backButton">
                        <a href="index.php">
                            <div class="css-1dbjc4n r-1mlwlqe r-1udh08x r-417010" style="height: 24px; transform: rotate(180deg); width: 24px;">
                            
                            <img alt="" draggable="false" src="https://olxjobs-static.aasaanjobs.net/candidate_web/OlxIntegration/chevron-right.svg" class="css-9pa8cd">
                        </div>
                        </a>
                    </div>
                    <div class="css-1dbjc4n r-13awgt0">
                        <h1 style="margin: 0px; line-height: 0;">
                            <div dir="auto" class="css-76zvg2 r-1t176gz r-adyw6z r-1kfrs79 r-vrz42v r-1ttztb7 r-3twk1y">Category Job</div>
                        </h1>
                    </div>
                </div>

                <div class="css-1dbjc4n r-13awgt0">
                    <div class="css-1dbjc4n r-150rngu r-eqz5dr r-16y2uox r-1wbh5a2 r-11yh6sk r-1rnoaur r-1sncvnh">
                        <div class="css-1dbjc4n r-1xce7rv r-2llsf r-z7lthc">
                            
                            <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n r-1awozwy r-f8vsa5 r-18u37iz r-1777fci">
                                <div class="css-1dbjc4n">
                                    <div dir="auto" class="css-76zvg2 r-1t176gz r-ubezar r-vw2c0b r-rjixqe r-1ttztb7 r-3twk1y">Track your job application</div>
                                    <div dir="auto" class="css-76zvg2 r-1t176gz r-ubezar r-vw2c0b r-rjixqe r-1ttztb7 r-3twk1y">on the go!</div>
                                    <div class="css-1dbjc4n" style="background-color: rgb(71, 39, 173); margin-top: 17px; padding-top: 8px; padding-bottom: 8px; width: 50%;">
                                        <div dir="auto" class="css-76zvg2 r-1kihuf0 r-gnh785 r-10x49cs r-1it3c9n r-56xrmm r-1ttztb7 r-3twk1y">Download App</div>
                                    </div>
                                </div>
                                <div class="css-1dbjc4n r-1mlwlqe r-1udh08x r-417010" style="height: 110px; width: 157px;">
                                    <div class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-ehq7j7 r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(&quot;https://olxjobs-static.aasaanjobs.net/candidate_web/OlxIntegration/celebrity_jadeja.png&quot;);"></div>
                                    <img alt="" draggable="false" src="https://olxjobs-static.aasaanjobs.net/candidate_web/OlxIntegration/celebrity_jadeja.png" class="css-9pa8cd">
                                </div>
                            </div>

                            <div class="css-1dbjc4n r-150rngu r-eqz5dr r-16y2uox r-1wbh5a2 r-11yh6sk r-1rnoaur r-1sncvnh">
                                <div class="css-1dbjc4n r-edyy15">

                                    <div class="css-1dbjc4n">
                                        <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci r-kzbkwu r-1ygmrgt">
                                            <div dir="auto" class="css-76zvg2 r-1ok0lxs r-ubezar r-1it3c9n r-rjixqe r-1ttztb7 r-3twk1y">Apply to Jobs here for <?php
                                            $sql1 = "SELECT * FROM category WHERE id='$cid'";
                                            $result1 = mysqli_query($con, $sql1);
                                            $row1 = mysqli_fetch_assoc($result1);
                                            echo $row1['cate_name'];
                                             ?>  </div>
                                        </div>
                                    </div>
<?php 
$sql = "SELECT * FROM jobs WHERE cate_id='$cid'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>
    

<!-- Column Start -->
 <div class="css-1dbjc4n">
    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n">
        <div class="css-1dbjc4n r-14lw9ot r-z2wwpe r-14nekm4 r-1544tr9 r-1p6iasa r-nsbfu8">
            
            <!-- Top Row Title + Trusted Icon -->
            <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1w6e6rj">

                  <!-- Title -->
               <div dir="auto" class="css-76zvg2 css-bfa6kz r-1t176gz r-13awgt0 r-1i10wst r-majxgm r-135wba7 r-1ttztb7 r-3twk1y"><?php echo $row['job_title']; ?></div>
               <!-- /Title -->
        <!-- Trusted Icon -->
        <div class="css-1dbjc4n r-1mlwlqe r-1udh08x r-417010" style="height: 17px; width: 55px;">

            <div class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-ehq7j7 r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(&quot;https://olxjobs-static.aasaanjobs.net/candidate_web/trusted-tag.svg&quot;);"></div>
            <img alt="" draggable="false" src="https://olxjobs-static.aasaanjobs.net/candidate_web/trusted-tag.svg" class="css-9pa8cd">

        </div>
        <!-- Trusted Icon -->

            </div>
             <!-- /Top Row Title + Trusted Icon -->
             
              <!-- Company -->       
            <div dir="auto" class="css-76zvg2 css-bfa6kz r-10m5lkq r-1b43r93 r-majxgm r-rjixqe r-1ttztb7 r-3twk1y"><?php echo $row['company_name']; ?></div>
             <!-- /Company -->
          
                    <div class="css-1dbjc4n r-knv0ih">
                          <!-- descriotion -->
                        <div dir="auto" class="css-76zvg2 r-1t176gz r-1enofrn r-1it3c9n r-1cwl3u0 r-1ttztb7 r-3twk1y"><?php echo $row['job_description']; ?></div>
                         <!-- /descriotion -->

                          <!-- Experience -->
                        <div dir="auto" class="css-76zvg2 r-31ssuo r-1enofrn r-1it3c9n r-1cwl3u0 r-1ttztb7 r-3twk1y"><?php echo $row['experience_min']; ?> - <?php echo $row['experience_max']; ?> required</div>
                         <!-- /Experience -->
                    </div>
 <!-- Last Row Salary + Apply Button -->
  <div class="css-1dbjc4n r-18u37iz r-17s6mgv">
    <!-- Salary Section -->
        <div class="css-1dbjc4n r-13awgt0 r-18u37iz r-l71dzp">
            <!-- Currency Icon -->
            <div class="css-1dbjc4n r-1mlwlqe r-1kb76zh r-1udh08x r-417010" style="height: 16px; width: 16px;">
                <div class="css-1dbjc4n r-1niwhzg r-vvn4in r-u6sd8q r-ehq7j7 r-1p0dtai r-1pi2tsx r-1d2f490 r-u8s1d r-zchlnj r-ipm5af r-13qz1uu r-1wyyakw" style="background-image: url(&quot;https://olxjobs-static.aasaanjobs.net/candidate_web/OlxIntegration/profile-current-salary.svg&quot;);"></div>
                    <img alt="" draggable="false" src="https://olxjobs-static.aasaanjobs.net/candidate_web/OlxIntegration/profile-current-salary.svg" class="css-9pa8cd">
             </div>
             <!-- /Currency Icon -->

             <!-- Salary -->
             <div dir="auto" class="css-76zvg2 r-1t176gz r-1enofrn r-majxgm r-1cwl3u0 r-1ttztb7 r-3twk1y"><?php echo $row['salarymin']; ?> - <?php echo $row['salarymax']; ?></div>
             <div dir="auto" class="css-76zvg2 r-31ssuo r-1enofrn r-1it3c9n r-1cwl3u0 r-m2pi6t r-1pyaxff r-1ttztb7 r-3twk1y">monthly</div>
             <!-- /Salary -->

          </div>
          <!--/Salary Section -->

<!-- Apply Button -->
    <div class="css-1dbjc4n r-1awozwy r-18u37iz r-mabqd8 r-1777fci r-1kesqaa">
        <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n r-1awozwy r-oi7v0 r-1jkafct r-18u37iz r-mabqd8 r-1777fci r-ymttw5 r-1ss6j8a r-1qortcd r-13qz1uu">

            <div class="css-1dbjc4n r-1awozwy r-18u37iz r-1777fci">
                <a href="applyjob.php?job_id=<?php echo $row['id']; ?>"><div dir="auto" class="css-76zvg2 r-jwli3a r-1enofrn r-majxgm r-1cwl3u0 r-gy4na3 r-9aemit r-1ttztb7 r-3twk1y">Apply</div></a>
            </div>
        </div>
    </div>
 <!-- /Apply Button -->

  </div>
<!-- /Last Row Salary + Apply Button -->
            </div>
     </div>
</div>
<!-- /Column End-->
                                   
  <?php }
}  else {
?>                                 
<!-- Column Start -->
 <div class="css-1dbjc4n">
    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n">
        <div class="css-1dbjc4n r-14lw9ot r-z2wwpe r-14nekm4 r-1544tr9 r-1p6iasa r-nsbfu8">
            
           There is no Job 
             
            
            </div>
     </div>
</div>
<!-- /Column End-->
<?php } ?>
                                   
                                    
                              
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
        
  <?php include 'footer.php'; ?>      
    </body>
</html>
