<?php 
include 'templates/header.php'; 
include 'config/db.php'; // your database connection

// Get room ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<h2>Invalid room selected.</h2>";
    include 'templates/footer.php';
    exit();
}

$room_id = intval($_GET['id']);

// Fetch room details
$room_query = $conn->prepare("SELECT * FROM rooms WHERE id = ? AND active = 1");
$room_query->bind_param("i", $room_id);
$room_query->execute();
$room = $room_query->get_result()->fetch_assoc();

if (!$room) {
    echo "<h2>Room not found.</h2>";
    include 'templates/footer.php';
    exit();
}

// Fetch room images
$img_query = $conn->prepare("SELECT * FROM room_images WHERE room_id = ? ORDER BY is_primary DESC, id ASC");
$img_query->bind_param("i", $room_id);
$img_query->execute();
$images = $img_query->get_result();
?>

<section class="room-details">

    <!-- IMAGE CAROUSEL -->
    <div class="room-carousel" id="carousel">
        <?php while ($img = $images->fetch_assoc()): ?>
            <img src="<?php echo $img['image_path']; ?>" 
                 alt="<?php echo $img['alt_text']; ?>" 
                 class="carousel-slide">
        <?php endwhile; ?>
    </div>

    <!-- ROOM INFO -->
    <div class="room-info-container">
        <h1><?php echo $room['name']; ?></h1>

        <div class="room-meta">
            <span class="meta-item">£<?php echo $room['price_per_night']; ?> / night</span>
            <span class="meta-item">Sleeps <?php echo $room['max_guests']; ?></span>
        </div>

        <p class="room-description">
            <?php echo nl2br($room['description']); ?>
        </p>

        <div class="room-features">
            <h3>Room Features</h3>
            <ul>
                <?php 
                $features = explode(",", $room['features']);
                foreach ($features as $feature) {
                    echo "<li>✔ " . trim($feature) . "</li>";
                }
                ?>
            </ul>
        </div>

        <a href="booking.php?room=<?php echo $room_id; ?>" class="btn-primary">
            Book This Room
        </a>
    </div>

</section>

<script>
// SIMPLE CAROUSEL SCRIPT
let slides = document.querySelectorAll(".carousel-slide");
let index = 0;

function showSlide(i) {
    slides.forEach((slide, idx) => {
        slide.style.display = idx === i ? "block" : "none";
    });
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

showSlide(index);
setInterval(nextSlide, 3000);
</script>

<?php include 'templates/footer.php'; ?>
