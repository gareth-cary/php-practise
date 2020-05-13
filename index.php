<!DOCTYPE html>
<html lang="en">
<head>

  <title>Contact Form Design</title>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Practise PHP Contact Form</h1>
  <p>Gareth Cary</p>

  <main>
    <p>SEND E-MAIL</p>
    <form class="contact-form" action="contact-form-handler.php" method="post">
      <input type="text" name="name" placeholder="Full name">
      <input type="text" name="mail" placeholder="Your e-mail">
      <input type="text" name="subject" placeholder="Subject">
      <textarea name="message" placeholder="message"></textarea>
      <button type="submit" name="submit">Send Mail</button>


    </form>
  </main>
</body>
</html>
