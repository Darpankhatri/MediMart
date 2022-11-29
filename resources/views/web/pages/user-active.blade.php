<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .mail-sec-wrap {
            padding: 50px 0;
        }
    
        .mail-sec-wrap .mail-content {
            box-shadow: 0px 0px 5px -1px #000;
            padding: 40px 50px;
        }
    
        .mail-sec-wrap .mail-content h2 {
            text-align: center;
            color: #c30000;
            font-family: rasha;
            font-weight: 500;
            font-size: 84px;
            line-height: 52px;
            margin: 0 0 10px;
        }
    
        .mail-sec-wrap .mail-content h4 {
            font-size: 22px;
            font-weight: 500;
            letter-spacing: 1px;
            font-family: Poppins;
            color: #000;
            text-align: center;
        }
    
        .mail-sec-wrap .mail-content p {
            font-family: poppins;
            color: #000;
            font-weight: 400;
            margin: 0 0 15px;
            text-align: center;
            font-size: 18px;
        }
    
        .mail-sec-wrap .mail-content .mail-btn {}
    
        .mail-sec-wrap .mail-content .mail-btn .btn {
            color: #fff;
            background-color: #c30000;
            border: 1px solid #fff;
            font-family: Poppins;
            font-weight: 500;
            font-size: 22px;
            height: 48px;
            line-height: 48px;
            display: block;
            width: 45%;
            margin: 30px auto 15px;
            text-align: center;
            border-radius: 7px;
            transition: .3s all ease-in-out;
            text-decoration: none;
        }
    
        .mail-sec-wrap .mail-content .mail-btn .btn:hover {
            border: 1px solid #c30000;
            color: #c30000;
            background-color: #fff;
        }
    
        .mail-sec-wrap .mail-content h5 {
            font-size: 20px;
            font-weight: 500;
            font-family: Poppins;
            line-height: 25px;
            color: #000;
            text-align: center;
            margin: 0 0 15px;
        }
    
        .mail-sec-wrap .mail-content h5 a {
            color: #333;
        }
    
        .mail-sec-wrap .mail-content .bottom-content {
            border-top: 1px solid #000;
            margin: 50px 0 0 0;
            padding: 25px 0 0 0;
        }
    
        .mail-sec-wrap .mail-content .bottom-content p {
            font-family: poppins;
            color: #6a6262;
            font-weight: 400;
            margin: 0 0 15px;
            text-align: left;
            font-size: 18px;
        }
    
        .mail-sec-wrap .mail-content .bottom-content p b {
            color: #000
        }
    
        .mail-sec-wrap .mail-content .bottom-content .mail-icons {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    
        .mail-sec-wrap .mail-content .bottom-content .mail-icons a {
            font-family: poppins;
            color: #333;
            font-weight: 400;
            margin: 0 0 15px;
            text-align: left;
            font-size: 18px;
            text-decoration: underline
        }
    
        .mail-sec-wrap .mail-content .bottom-content .mail-icons ul {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: end;
            text-decoration: none;
            list-style: none;
        }
    
        .mail-sec-wrap .mail-content .bottom-content .mail-icons ul li {
            margin: 0 0 0 25px;
        }
    
        .mail-sec-wrap .mail-content .bottom-content .mail-icons ul li a {
            font-size: 23px;
            color: #333;
        }
    
    </style>
</head>


<body>
    <!-- mail-sec-start -->
    <section class="mail-sec-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="mail-content">
                        <h2>Graphical Password</h2>
                        <h4>Get Started</h4>
                        <p>you’re just one step away.</p>

                        <div class="mail-btn">
                            <a href="{{ route('user.active',['user'=>$user]) }}" class="btn">Active My Account</a>
                        </div>
                        <h5>Questions? Email us at <a href="javascript:;">support@kumarbrothers.com</a></h5>

                        <div class="bottom-content">
                            <p><b>Do not share any personal information</b>(Credit card info, bank account, address,
                                etc.) with anyone under any circumentances. Never disclose your personal banking information,
                                including account numbers or passwords.</p>


                            <p>© 2005 - 2022 Graphical Password  in conjunction with reflex media - all right reserved.</p>
                            <p>W8tech Cyprus Limited, Paster 6 Flat/Office 101 1055 Nicosia, Cyprus</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</html>
