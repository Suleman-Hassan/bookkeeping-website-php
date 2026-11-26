</main>
<footer class="site-footer">
  <div class="container footer-top">
    <div class="footer-brand">
      <a class="brand brand-light" href="index.php"><span class="brand-mark">c<span>.</span></span><span><?= htmlspecialchars(BUSINESS_NAME) ?><small>BOOKKEEPING</small></span></a>
      <p>Clear books. Confident decisions.<br>More time to grow your business.</p>
    </div>
    <div><h4>Explore</h4><a href="services.php">Our services</a><a href="pricing.php">Packages</a><a href="about.php">Our story</a></div>
    <div><h4>Get in touch</h4><a href="mailto:<?= htmlspecialchars(BUSINESS_EMAIL) ?>"><?= htmlspecialchars(BUSINESS_EMAIL) ?></a><a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', BUSINESS_PHONE)) ?>"><?= htmlspecialchars(BUSINESS_PHONE) ?></a><a href="contact.php">Send an enquiry</a></div>
    <div class="footer-note"><span class="eyebrow">A little more peace of mind</span><p>Let’s make bookkeeping one less thing on your to-do list.</p><a class="text-link light-link" href="contact.php">Start a conversation <span>↗</span></a></div>
  </div>
  <div class="container footer-bottom"><span>© <?= date('Y') ?> <?= htmlspecialchars(BUSINESS_NAME) ?>. All rights reserved.</span><span>Built around clarity, care & consistency.</span></div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>
