<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYFARM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <style>
        body {
            background: #f4f4f4;
        }

        /*start of top div*/
        .top-details {
            background-color: #222;
            display: flex;
            color: #444;
            font-size: 16px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 620;
            font-family: monospace;
            align-items: center;

        }

        .notify {
            display: flex;
            justify-content: center;
        }


        .top-details div {
            flex: 1;
        }

        .top-details .top-social a {
            color: #444;
            font-size: 18px;
            padding: 10px;
            transition: all 1s;

        }

        .top-details .top-social a:hover {
            color: dodgerblue;
        }

        @media(max-width:576px) {
            .top-details {
                padding-left: 5px;
            }

            .top-details .top-social {
                display: none;
            }

            .email,
            .mobile {
                font-size: .8rem;
            }
        }

        /* end of top div   */


        /*    start of navigation bar*/
        nav {
            margin-top: 3rem;
        }

        /*    end  of navigation bar*/

        /*    start of slider*/
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5) !important;

        }

        /*    end of slider*/

        /*    start of about*/

        .col-about {
            background: url(img/1.jpg);
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            height: 50vh;
        }

        .col-about-text {
            background: #e8e7e7;
            border-radius: 10px;
        }

        /*    end of about*/
        /* farmer practise area*/


        .practise-info-div {
            border-left: 5px solid yellowgreen;
            background: #fafafa;
            text-align: left;
            padding-left: 10px;
        }

        .card-image-div {
            position: relative;
            overflow: hidden;
        }


        .card-image-div img {
            transition: all .6s ease-in-out;
            cursor: zoom-in;
        }

        .card-image-div:hover img {
            transform: scale(1.2);
            opacity: 0.7;

        }





        /*farmer practise area*/
        /*start of comment section*/
        .comment-form {
            border-top: 1px solid #eee;
            padding-top: 45px;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .comment-form .form-group {
            margin-bottom: 30px;
        }

        .comment-form h4 {
            margin-bottom: 40px;
            font-size: 18px;
            line-height: 22px;
        }


        .comment-form .name {
            padding-left: 0px;
        }

        @media (max-width: 767px) {

            .comment-form .name {
                padding-right: 0px;
                margin-bottom: 1rem;
            }
        }

        .comment-form .email {
            padding-right: 0px;
        }

        @media (max-width: 991px) {

            .comment-form .email {
                padding-left: 0px;
            }
        }

        .comment-form .form-control {
            border: 1px solid #f0e9ff;
            border-radius: 5px;
            height: 48px;
            padding-left: 18px;
            font-size: 13px;
            background: transparent;
        }

        .comment-form .form-control:focus {
            outline: 0;
            box-shadow: none;
        }

        .comment-form .form-control::placeholder {
            font-weight: 300;
            color: #999999;
        }

        .comment-form .form-control::placeholder {
            color: #777777;
        }

        .comment-form textarea {
            padding-top: 18px;
            border-radius: 12px;
            height: 100% !important;
        }

        .comment-form ::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            font-size: 13px;
            color: #777;
        }

        .comment-form ::-moz-placeholder {
            /* Firefox 19+ */
            font-size: 13px;
            color: #777;
        }

        .comment-form :-ms-input-placeholder {
            /* IE 10+ */
            font-size: 13px;
            color: #777;
        }

        .comment-form :-moz-placeholder {
            /* Firefox 18- */
            font-size: 13px;
            color: #777;
        }

        /*end of comment section*/
        /*    start of footer*/
        footer {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(img/3.jpg);
            background-attachment: fixed;
            color: #d5d5d5;
            padding-top: 2rem;
        }

        hr.light {
            border-top: 1px solid #d5d5d5;
            width: 70%;

        }

        form.subscribe {
            margin-left: 30px;
            text-align: center;
            margin-top: 20px;
        }

        hr.dark {
            border-top: 1px solid #d5d5d5;
            width: 40%;

        }

        hr.blue {
            border-top: 1px solid #d5d5d5;
            width: 100%;

        }

        .footer-logo {
            width: 100px;
        }

        /*    end  of footer*/




        /*  START OF  AREA VIEW PAGE CSS*/
        /*    start of latest transaction*/
        #row-latest-transaction {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/2.jpg);
            height: 50vh;
        }

        #col-latest-transaction {
            background: #f4f4f4;
        }

        /*    end of latest transaction*/
        /*    start of ongoing transaction*/
        #row-ongoing-transaction {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(img/18.jpg);
            height: 50vh;
        }

        #col-ongoing-transaction {
            background: #f4f4f4;
        }

        /*    end of ongoing transaction*/
        /*  END OF  AREA VIEW PAGE CSS*/

    </style>
</head>

<body>
