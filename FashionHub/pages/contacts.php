<?php include '../includes/header.php' ?>
<?php include '../includes/nav.php' ?>


<div class="wrapper">
    <div class="contact-form-page">
        <div class="page-container">
            <div class="contact-container">
                <h2>Contact Us</h2>
                <form>
                    <label for="name">NAME</label>
                    <input type="text" id="name" placeholder="Kevin Nguyen" required>

                    <label for="email">EMAIL</label>
                    <input type="email" id="email" placeholder="example@email.com" required>

                    <label for="message">MESSAGE</label>
                    <textarea id="message" rows="4" placeholder="Write your message here..." required></textarea>

                    <button type="submit">Send Your Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php' ?>