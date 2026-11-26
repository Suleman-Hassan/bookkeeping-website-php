<?php
require_once 'config.php';
$pageTitle = "Let's talk";
$success = false; $error = '';
$name = $email = $phone = $package = $message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $phone = trim($_POST['phone'] ?? '');
  $package = trim($_POST['package'] ?? '');
  $message = trim($_POST['message'] ?? '');
  if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    $error = 'Please enter your name, a valid email address and a short message.';
  } else {
    $subject = 'New website enquiry from ' . $name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nInterested in: $package\n\nMessage:\n$message";
    $headers = "From: website@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n";
    $headers .= "Reply-To: $email\r\n";
    if (BUSINESS_EMAIL !== 'hello@example.com' && @mail(BUSINESS_EMAIL, $subject, $body, $headers)) {
      $success = true;
      $name = $email = $phone = $package = $message = '';
    } else {
      $error = 'Your form is ready, but email delivery is not configured yet. Please contact the business by email or phone.';
    }
  }
}
include 'includes/header.php';
?>
<section class="page-hero contact-hero"><div class="container"><div class="eyebrow">LET'S START WITH A CONVERSATION</div><h1>Tell us a little<br>about <em>your business.</em></h1><p>No pressure, no complicated forms. Just a good place to start.</p></div></section>
<section class="section contact-section"><div class="container contact-layout"><div class="contact-aside"><div class="eyebrow">GET IN TOUCH</div><h2>We're here to<br><em>make things clearer.</em></h2><p>Share what you're looking for and we'll be in touch to discuss the next step.</p><div class="contact-detail"><span>EMAIL</span><a href="mailto:<?= htmlspecialchars(BUSINESS_EMAIL) ?>"><?= htmlspecialchars(BUSINESS_EMAIL) ?></a></div><div class="contact-detail"><span>PHONE</span><a href="tel:<?= htmlspecialchars(preg_replace('/[^0-9+]/', '', BUSINESS_PHONE)) ?>"><?= htmlspecialchars(BUSINESS_PHONE) ?></a></div><div class="contact-detail"><span>BASED IN</span><p><?= htmlspecialchars(BUSINESS_LOCATION) ?></p></div></div>
<div class="form-card">
<?php if ($success): ?><div class="form-success"><span>✓</span><h3>Thank you for reaching out.</h3><p>Your enquiry has been sent. We'll be in touch soon.</p></div><?php else: ?>
<h3>Send us an enquiry</h3><p class="form-intro">Fields marked with * are required.</p>
<?php if ($error): ?><div class="form-error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<form method="post" action="contact.php" novalidate>
  <div class="form-row"><label>Your name *<input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required placeholder="e.g. Alex Morgan"></label><label>Email address *<input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required placeholder="you@business.com"></label></div>
  <div class="form-row"><label>Phone number<input type="tel" name="phone" value="<?= htmlspecialchars($phone) ?>" placeholder="+1 (___) ___-____"></label><label>What can we help with?<select name="package"><option value="">Please select</option><?php foreach (['Getting Started','Ongoing Bookkeeping','Bookkeeping Catch-Up','Not sure yet'] as $option): ?><option <?= $package === $option ? 'selected' : '' ?>><?= htmlspecialchars($option) ?></option><?php endforeach; ?></select></label></div>
  <label>Tell us a little about your business *<textarea name="message" rows="5" required placeholder="What kind of business do you run, and what bookkeeping support are you looking for?"><?= htmlspecialchars($message) ?></textarea></label>
  <button class="btn btn-primary form-submit" type="submit">Send my enquiry <span>↗</span></button><small class="privacy-note">Your information will only be used to respond to your enquiry.</small>
</form><?php endif; ?>
</div></div></section>
<?php include 'includes/footer.php'; ?>
