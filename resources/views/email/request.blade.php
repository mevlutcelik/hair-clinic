<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Forever</title>
    
</head>
<div class="header" style="border-style: solid;border-width: 2px;border-color: #eee;background-color: #ffcf00;padding: 0.5rem;">
    <div class="logo">
        <img src="https://hairforeverclinic.com/wp-content/uploads/2018/03/Hair-3.png" alt="Hair Forever" style="height: 4rem;margin-bottom: -0.5rem;">
    </div>
</div>
<div class="main">
    <h1 style="font-size: xx-large;">Appointment</h1>
    <div class="time" style="margin: 1rem 0;"><small>Time: {{ date('c') }}</small></div>
    <div class="form">
        <div class="form-item" style="margin-bottom: 1rem;">
            <div class="label" style="font-size: large;font-weight: bold;margin-bottom: 0.5rem;">Name</div>
            <div class="message-box" style="border-style: solid;border-width: 2px;border-color: #eee;padding: 0.5rem 0.7rem;">{{ $name }}</div>
        </div>
        <div class="form-item" style="margin-bottom: 1rem;">
            <div class="label" style="font-size: large;font-weight: bold;margin-bottom: 0.5rem;">Email</div>
            <div class="message-box" style="border-style: solid;border-width: 2px;border-color: #eee;padding: 0.5rem 0.7rem;">{{ $email }}</div>
        </div>
        <div class="form-item" style="margin-bottom: 1rem;">
            <div class="label" style="font-size: large;font-weight: bold;margin-bottom: 0.5rem;">Phone</div>
            <div class="message-box" style="border-style: solid;border-width: 2px;border-color: #eee;padding: 0.5rem 0.7rem;">{{ $phone }}</div>
        </div>
        <div class="form-item" style="margin-bottom: 1rem;">
            <div class="label" style="font-size: large;font-weight: bold;margin-bottom: 0.5rem;">Message</div>
            <div class="message-box" style="border-style: solid;border-width: 2px;border-color: #eee;padding: 0.5rem 0.7rem;">{{ $messagetext }}</div>
        </div>
    </div>
</div>

</html>