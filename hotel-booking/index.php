<?php include 'templates/header.php'; ?>

<!-- HERO SECTION -->
<section class="hero">
    <img src="images/grand-coastline-hero.png" alt="The Grand Coastline Hotel" class="hero-bg">
    <div class="hero-overlay">
        <h1>Welcome to The Grand Coastline</h1>
        <a href="rooms.php" class="btn-primary">View Rooms</a>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="about">
    <div class="container about-inner">
        <div class="about-text">
            <h2>About Our Hotel</h2>
            <p>
                The Grand Coastline combines elegant design, premium comfort, and 
                modern amenities in the heart of East Sussex. Whether you're visiting 
                for business or leisure, our hotel offers a relaxing environment with 
                spacious rooms, exceptional service, and easy access to local attractions.
            </p>
            <p>
                Enjoy our on-site dining, high-speed Wi-Fi, coastal views, and 
                dedicated guest support.
            </p>
        </div>
        <div class="about-image">
            <img src="images/hotel-lobby.png" alt="Hotel Lobby" style="max-width: 100%; width: 60%; height: auto; display: block; margin: auto;">
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="features">
    <div class="container">
        <h2>Why Stay With Us?</h2>
        <div class="feature-grid">

            <div class="feature-card">
                <img src="images/room1.jpg" alt="Luxury Rooms">
                <h3>Modern Luxury Rooms</h3>
                <p>Stay in beautifully designed rooms with modern interiors and premium comfort.</p>
            </div>

            <div class="feature-card">
                <img src="images/dining.jpg" alt="Dining">
                <h3>On-Site Dining</h3>
                <p>Enjoy freshly prepared meals from our modern restaurant and lounge.</p>
            </div>

            <div class="feature-card">
                <img src="images/spa.jpg" alt="Spa and Relaxation">
                <h3>Spa & Relaxation</h3>
                <p>Relax with our dedicated spa facilities, designed for ultimate comfort.</p>
            </div>

        </div>
    </div>
</section>

<!-- OFFERS / PACKAGES SECTION -->
<section class="offers">
    <div class="container">
        <h2>Exclusive Offers & Packages</h2>
        <div class="offer-grid">
            <div class="offer-card">
                <h3>Romantic Getaway</h3>
                <p>Enjoy a 2-night stay for couples including breakfast and a spa treatment.</p>
                <span class="offer-price">From £199 per night</span>
                <a href="booking.php" class="btn-primary">Book Now</a>
            </div>
            <div class="offer-card">
                <h3>Family Fun Package</h3>
                <p>Stay 3 nights with breakfast included and free tickets to local attractions for kids.</p>
                <span class="offer-price">From £299 per night</span>
                <a href="booking.php" class="btn-primary">Book Now</a>
            </div>
            <div class="offer-card">
                <h3>Business Stay</h3>
                <p>Perfect for work trips: high-speed Wi-Fi, meeting room access, and breakfast.</p>
                <span class="offer-price">From £149 per night</span>
                <a href="booking.php" class="btn-primary">Book Now</a>
            </div>
        </div>
    </div>
</section>


<!-- LOCATION SECTION -->
<section class="location">
    <div class="container location-inner">
        <div class="location-text">
            <h2>Located in the Heart of East Sussex</h2>
            <p>Only minutes away from Eastbourne town centre, the beach, and local attractions.</p>
            <ul>
                <li>✔ 5 minutes from Eastbourne Pier</li>
                <li>✔ Near East Sussex College campuses</li>
                <li>✔ Surrounded by shops, cafés and transport links</li>
            </ul>
        </div>

        <div class="location-image">
            <img src="images/seafront.jpg" alt="Eastbourne Seafront" style="max-width: 100%; border-radius: var(--radius-card); box-shadow: 0 8px 25px rgba(0,0,0,0.08); margin-bottom: 20px;">
            
            <!-- Google Maps Embed -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2523.8403800518013!2d0.2820034083814454!3d50.75999334082687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df74070f4b2cb3%3A0xc01efa5ab3c55cac!2sThe%20Grand%20Hotel%2C%20an%20SLH%20Hotel!5e0!3m2!1sen!2suk!4v1764936101612!5m2!1sen!2suk"
                width="100%" 
                height="350" 
                style="border:0; border-radius: var(--radius-card);" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>


<!-- CTA -->
<section class="cta">
    <h2>Ready to Book Your Stay?</h2>
    <p>Explore our rooms and choose the perfect stay for you.</p>
    <a href="booking.php" class="btn-primary">Book Now</a>
</section>

<?php include 'templates/footer.php'; ?>
