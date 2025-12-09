<?php include 'templates/header.php'; ?>

<!-- HERO -->
<section class="contact-hero">
    <div class="contact-hero-overlay">
        <h1>Contact Us</h1>
        <p>We're here to help with bookings, enquiries, and guest support.</p>
    </div>
</section>

<!-- CONTACT INFO + FORM -->
<section class="contact-section">
    <div class="container contact-grid">

        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>Our team at <strong>The Grand Coastline</strong> is available to assist with your stay, reservations, and any questions you may have.</p>

            <div class="info-block">
                <h3>Hotel Address</h3>
                <p>The Grand Coastline<br> Eastbourne, East Sussex</p>
            </div>

            <div class="info-block">
                <h3>Email</h3>
                <p><a href="mailto:550304@escg.ac.uk">550304@escg.ac.uk</a></p>
            </div>

            <div class="info-block">
                <h3>Opening Hours</h3>
                <p>Monday - Sunday: 8:00 AM - 10:00 PM</p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send Us a Message</h2>

            <form action="send-message.php" method="POST">

                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="Your Name">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="you@example.com">

                <label for="message">Message</label>
                <textarea id="message" name="message" required placeholder="How can we help?"></textarea>

                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</section>

<!-- GOOGLE MAP -->
<section class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2523.8403800518013!2d0.2820034083814454!3d50.75999334082687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df74070f4b2cb3%3A0xc01efa5ab3c55cac!2sThe%20Grand%20Hotel%2C%20an%20SLH%20Hotel!5e0!3m2!1sen!2suk!4v1764936101612!5m2!1sen!2suk"
            width="100%" 
            height="350" 
            style="border:0; border-radius: var(--radius-card);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<?php include 'templates/footer.php'; ?>
