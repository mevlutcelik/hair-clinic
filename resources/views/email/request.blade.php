<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Forever</title>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .header{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #fff;
            color: #212121;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center;
                    border-bottom: 2px solid rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
        }
        .logo{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            height: 5rem;
        }
        header img{
            height: 100%;
            max-height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .main{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
                -ms-flex-direction: column;
                    flex-direction: column;
            -webkit-box-align: center;
                -ms-flex-align: center;
                    align-items: center;
            -webkit-box-pack: center;
                -ms-flex-pack: center;
                    justify-content: center;
            margin: 4rem auto;
            width: 100%;
            max-width: 320px;
        }
        .time{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 1rem 0;
        }
        h1{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: xxx-large;
        }
        .form{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            width: 100%;
        }
        .form-item{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin-bottom: 2rem;
        }
        .label{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: large;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
    <div class="header">
        <div class="logo">
            <img src="https://hairforeverclinic.com/wp-content/uploads/2018/03/Hair-3.png" alt="Hair Forever">
        </div>
    </div>
    <div class="main">
        <h1>Appointment</h1>
        <div class="time"><small>Time: {{ date('c') }}</small></div>
        <div class="form">
            <div class="form-item">
                <div class="label">Name</div>
                <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                border: 2px solid rgba(0, 0, 0, 0.05);
                padding: 0.5rem 0.75rem;
                border-radius: 0.25rem;">{{ $name }}</div>
            </div>
            <div class="form-item">
                <div class="label">Email</div>
                <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                border: 2px solid rgba(0, 0, 0, 0.05);
                padding: 0.5rem 0.75rem;
                border-radius: 0.25rem;">{{ $email }}</div>
            </div>
            <div class="form-item">
                <div class="label">Phone</div>
                <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                border: 2px solid rgba(0, 0, 0, 0.05);
                padding: 0.5rem 0.75rem;
                border-radius: 0.25rem;">{{ $phone }}</div>
            </div>
            <div class="form-item">
                <div class="label">Message</div>
                <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                border: 2px solid rgba(0, 0, 0, 0.05);
                padding: 0.5rem 0.75rem;
                border-radius: 0.25rem;">{{ $messagetext }}</div>
            </div>
        </div>
    </div>
</html>