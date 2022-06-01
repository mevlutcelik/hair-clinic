<div class="map">
    <iframe frameborder="0"
        src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=15&q=H%C3%BCseyina%C4%9Fa%2C+Sahne+Sk.+34435+Beyo%C4%9Flu%2F%C4%B0stanbul"
        width="100%" height="900"></iframe>
    <div class="user-card">
        <img src="https://www.kahillogistic.com/images/marwah-e1650023155749.webp" alt="Marwah Kahil">
        <div>
            <div class="location">Beyoğlu / İstanbul</div>
            <div class="work-hours"><strong>Monday - Friday:</strong> 9.00 am - 6.00 pm</div>
            <div class="work-hours"><strong>Saturday and Sunday:</strong> 10.00 am - 6.00 pm</div>
            <div>I'm Marwah Kahil, lets me or write on Whatsapp!</div>
            <div>My GSM Number is <strong style="font-family: 'Poppins', system-ui, sans-serif;">+90 (530) 762 83
                    00</strong></div>
        </div>
    </div>
    <div class="form">
        <div class="form-title">Appointment</div>
        <div class="form-desc">Don't waste your time, make it online</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('page.post') }}" autocomplete="off" autocapitalize="on">
            <div style="margin: 1rem 0;font-weight:600;" id="form-alert-message"></div>
            <div class="first-line">
                <input type="text" id="name" autocapitalize="words" placeholder="Name">
                <input type="email" id="email" inputmode="email" placeholder="Email">
                <input type="tel" id="phone" pattern="[0-9]*" inputmode="tel" placeholder="Phone">
            </div>
            <textarea id="message" placeholder="Message"></textarea>
            <button type="submit">Submit Your Request</button>
        </form>
    </div>
</div>