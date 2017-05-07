## OnePage Web Template

You can use this template to create your own OnePage website.  
Live preview: http://dawidgorecki.pl/onepage-prev

### Usage

Open index.php and select sections witch you need. Currently there is 6 sections available. All sections are in separate .php files in includes directory. Next modify header (header.php), footer (footer.php), navigation (navigation.php) and selected sections.

### Available sections

* section-about.php
* section-team.php
* section-menu.php
* section-gallery.php
* section-skills.php
* section-contact.php

To use contact section you must edit some values in send-mail.php

```php
$mail->Host = 'smtp.gmail.com'; 
$mail->Username = 'username@gmail.com';     // SMTP username
$mail->Password = 'secret';                 // SMTP password
$mail->addAddress('username@gmail.com');    // Recipient
$mail->Subject = 'Message from OnePage Web Template';
```

You can easily change header image - just replace header-bg.jpg in images directory.