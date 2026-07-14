<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>OpenShift CI/CD Demo</title>

    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            margin:0;
            padding:40px;
            text-align:center;
        }

        .container{
            width:900px;
            margin:auto;
            background:white;
            border-radius:15px;
            box-shadow:0px 5px 20px rgba(0,0,0,.2);
            padding:30px;
        }

        h1{
            color:#d60087;
            font-size:48px;
            margin-bottom:10px;
        }

        h2{
            color:#444;
        }

        img{
            width:100%;
            border-radius:15px;
            margin-top:20px;
        }

        .footer{
            margin-top:30px;
            font-size:20px;
            color:#666;
        }

        .version{
            color:#0b74de;
            font-weight:bold;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>🎉 삼성중공업 거제 야호!! 🎉</h1>

    <h2>OpenShift 4.20 + Tekton + ArgoCD CI/CD Demo</h2>

    <img src="images/geoje-yaho.png" alt="거제 야호">

    <div class="footer">

        <p>
            Application Version :
            <span class="version">v1.0</span>
        </p>

        <p>
            CI : Tekton Pipeline
        </p>

        <p>
            CD : Argo CD GitOps
        </p>

        <p>
            Running on OpenShift 4.20
        </p>

    </div>

</div>

</body>

</html>
