<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Candidates- Job Market</title>
    <!-- stylesheets-->
	  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/lib/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/color.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
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
        <link rel="stylesheet" href="https://employer.waahjobs.com/_next/static/css/f3c68ca3490114386ae9.css">

</head>

<body>
    <?php include 'header.php'; ?>

 <div id="__next">
            <div class="css-1dbjc4n r-13awgt0">

                <div class="css-1dbjc4n r-1awozwy r-14lw9ot r-qklmqi r-1wdxeg r-18u37iz r-1mwlp6a r-ymttw5 r-184en5c">
                    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n r-1b7u577" id="backButton">
                        
                    </div>
                    <div class="css-1dbjc4n r-13awgt0">
                        <h1 style="margin: 0px; line-height: 0;">
                            <div dir="auto" class="css-76zvg2 r-1t176gz r-adyw6z r-1kfrs79 r-vrz42v r-1ttztb7 r-3twk1y" style="text-align: center !important;">Jobs Candidate</div>
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
                                            <div dir="auto" class="css-76zvg2 r-1ok0lxs r-ubezar r-1it3c9n r-rjixqe r-1ttztb7 r-3twk1y">Your Jobs Candidates are Here </div>
                                        </div>
                                    </div>
                                    <div class="css-1dbjc4n">
    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n">
        <div class="css-1dbjc4n r-14lw9ot r-z2wwpe r-14nekm4 r-1544tr9 r-1p6iasa r-nsbfu8">
            <button class="ant-btn link-btn font-bold" style="border: none;" id="download">
                  <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/excel.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
                <span>&nbsp;Download All Applications</span>
            </button>

            </div>
        </div>
    </div>
 <?php
            include '../db.php';
            $empid=$_SESSION['id'];
    $sql = "SELECT * FROM jobs where emp_id='$empid'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $jid=$row['id'];

     $sql1 = "SELECT * FROM applicant where job_id='$jid'";
$result1 = mysqli_query($con, $sql1);
if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result1)) {
$cannid=$row1['can_id'];
             ?>
 <div class="css-1dbjc4n">
    <div role="button" data-focusable="true" tabindex="0" class="css-18t94o4 css-1dbjc4n">
        <div class="css-1dbjc4n r-14lw9ot r-z2wwpe r-14nekm4 r-1544tr9 r-1p6iasa r-nsbfu8">
            
<div class="ant-col ant-col-24"><div class="ant-row job-details-container" style="row-gap: 0px;">

    <div class="ant-col ant-col-18 job-title">
        <button type="button" class="ant-btn ant-btn-link title-container"><div class="ant-typography ant-typography-ellipsis ant-typography-single-line ant-typography-ellipsis-single-line  font-bold text-capitalize" style="font-size: 18px;"><?php echo $row1['aname']; ?></div>
    </button><br>
    <button type="button" class="ant-btn ant-btn-link">
    <span class="ant-typography  color-blue-grey-5 p-top-8">Applied For: <b><?php 
         
$sql2 = "SELECT * FROM jobs where id='$jid'";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);
      echo $row2['job_title'];  
 ?> </b></span>
 </button>
   </div>

   <div class="ant-col ant-col-4 job-title" style="text-align: right;">
        <span class="category-icon" style="text-align: right;">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve" width="512px" height="512px"><g transform="translate(1 1)"><g><path d="M506.733,217.667L259.267,81.987c-2.56-1.707-5.973-1.707-8.533,0L3.267,217.667C0.707,219.373-1,221.933-1,225.347 c0,2.56,1.707,5.973,5.12,6.827l29.013,14.107v79.943l-23.04,51.017c-4.267,9.387-3.413,20.48,2.56,29.867 c5.973,9.387,15.36,14.507,26.453,14.507h5.973c10.24,0,19.627-4.267,25.6-13.653s6.827-20.48,2.56-29.867l-23.04-51.84v-71.676 l42.667,20.745v66.931c0,21.333,12.8,41.813,33.28,52.053l17.067,8.533C178.2,420.76,216.6,429.293,255,429.293 c38.4,0,76.8-8.533,112.64-25.6l17.067-8.533c20.48-10.24,33.28-30.72,33.28-52.053v-67.346l87.893-42.734 c3.413-1.707,5.12-4.267,5.12-7.68S509.293,219.373,506.733,217.667z M57.027,397.72c-2.56,4.267-6.827,6.827-11.947,6.827h-5.973 c-5.12,0-10.24-2.56-12.8-6.827s-2.56-9.387-0.853-13.653l16.213-35.84l16.213,35.84C60.44,388.333,59.587,393.453,57.027,397.72z M400.92,284.227v58.88c0,15.36-9.387,29.867-23.893,36.693l-17.067,8.533c-65.707,32.427-143.36,32.427-209.067,0l-17.067-8.533 c-14.507-7.68-23.893-22.187-23.893-36.693v-58.88l141.653,68.267c0.853,0.853,2.56,0.853,3.413,0.853s2.56,0,3.413,0 l103.314-50.232L400.92,284.227z M255,335.427L105.667,262.04c-0.943-0.314-2.002-0.51-3.09-0.55l-30.644-14.865l142.259-17.118 c5.294,17.524,21.353,29.973,40.809,29.973c23.893,0,42.667-18.773,42.667-42.667c0-23.893-18.773-42.667-42.667-42.667 c-22.407,0-40.311,16.511-42.452,38.272L43.287,232.73l-16.98-8.237L255,98.2l228.693,126.293L255,335.427z M263.533,215.107 c-0.853-5.12-5.12-8.533-9.387-7.68l-23.966,2.876c2.763-11.187,12.575-19.089,24.819-19.089c14.507,0,25.6,11.093,25.6,25.6 c0,14.507-11.093,25.6-25.6,25.6c-10.688,0-19.517-6.026-23.428-14.998l24.281-2.922 C260.973,223.64,264.387,219.373,263.533,215.107z" fill="#454545"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </span>
                        <span style="color: #454545;
    font-size: 16px;
    font-weight: 600;
    line-height: 45px;
    display: inline-block;"><?php echo $row1['education']; ?></span>
   </div>

    </div>
  
    <div class="ant-divider ant-divider-horizontal divider" role="separator"></div>

    <div class="ant-row job-card-footer" style="row-gap: 0px;">
        <div class="ant-col ant-col-6 margin-right-2rem">
       
            <button type="button" class="ant-btn link-btn font-bold" style="background: #F6F6F6; color: #C8C9CE; border: none;">
        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/cv.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
       <span>&nbsp; CV Unavailable</span>
    </button>
       
    </div>
        <div class="ant-col ant-col-10 margin-right-2rem" id="contacthide">
       
            <button type="button" class="ant-btn link-btn font-bold" style="background: #381E89; color: white;">
        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/phonelock.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
       <span>&nbsp; Unlock Contact</span>
    </button>
       
    </div>

    <div class="ant-col ant-col-10 margin-right-2rem" id="contactshow" style="display: none;">
       
            <button type="button" class="ant-btn link-btn font-bold" style="background: #F6F6F6; color: black; border: none;">
        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/call-volume-svgrepo-com.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
        
         <span>&nbsp; <?php echo $row1['whatsapp']; ?></span>
    </button>
       
    </div>
    <!-- Accept and Reject Buttons are commented below -->
<!--
     <div class="ant-col ant-col-4 margin-right-2rem" style="float: right;">
       
            <button type="button" class="ant-btn link-btn font-bold" style="background: #F6F6F6; color: black; border: solid red; border-radius: 25px;">
        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/cross.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
        
         <span>&nbsp; Reject</span>
    </button>
       
    </div>
    <div class="ant-col ant-col-4 margin-right-2rem" style="float: right;">
       
            <button type="button" class="ant-btn link-btn font-bold" style="background: #F6F6F6; color: black; border: solid green; border-radius: 25px;">
        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
        <div style="box-sizing: border-box; display: block; max-width: 100%;"><img alt="" aria-hidden="true" role="presentation" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;"></div>
        <img alt="pencil Icon" src="../assets/img/small-check-mark.svg?w=24&amp;q=80" decoding="async" class="p-right-2"  style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"> <i class="fa fa-phone-volume"></i>
    </div>
        
         <span>&nbsp; Accept</span>
    </button>
       
    </div>
-->
    
<!--
        <div class="ant-col ant-col-12 app-stats-container display-flex flex-align-items-center">
            <div class="ant-typography ant-typography-ellipsis ant-typography-single-line ant-typography-ellipsis-single-line color-blue-grey-5 ">Posted by</div>
        </div> -->

    </div>
</div>


     </div>
</div>                                                                                             
 </div>
 <?php  }
} } } ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div>

 <table id="table2excel" class="table table-striped table-hover" style="display: none;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Candidate Name</th>
                <th>Job Name</th>
                <th>Education</th>
                <th>Contact</th>
               
            </tr>
        </thead>
        <tbody>
             <?php
             $k=0;
            include '../db.php';
            $empid=$_SESSION['id'];
    $sql = "SELECT * FROM jobs where emp_id='$empid'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $jid=$row['id'];

     $sql1 = "SELECT * FROM applicant where job_id='$jid'";
$result1 = mysqli_query($con, $sql1);
if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result1)) {
$cannid=$row1['can_id'];
             ?>
            <tr><td><?php echo ++$k; ?></td>
                <td><?php echo $row1['aname']; ?></td>
                <td><?php     
$sql2 = "SELECT * FROM jobs where id='$jid'";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($result2);
      echo $row2['job_title'];  
 ?></td>
                <td><?php echo $row1['education']; ?></td>
                <td><?php echo $row1['whatsapp']; ?></td>
                
            </tr>
            <?php } } } } ?>
            
        </tbody>
       
    </table>
    <?php include 'footer.php'; ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="src/jquery.table2excel.js"></script>
<script type="text/javascript">
    $("#download").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude:".noExl",
    name:"Web Data",
    filename:"Job Candidates",//do not include extension
    fileext:".xls" // file extension
  });
});

  </script>

<script type="text/javascript">
$(document).ready(function(){



  $("#contacthide").click(function(){
    $("#contacthide").hide();
        $("#contactshow").show();
  });
  $("#contactshow").click(function(){
     $("#contacthide").show();
        $("#contactshow").hide();
  });
});
</script>

 
    
</body>
</html>
