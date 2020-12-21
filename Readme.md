# <img src='assets/PG.jpeg' width='200'>

<h1>Peregrine Communications</h1>
<h2>Task: Build responsive website.</h2>
<br/>
<br/>
<h2>Deployment</h2>
<br/>
The website is currently hosted on github pages at:
https://darbjm.github.io/Peregrine-Communications<br/>

Viewing the website on your machine simply requires opening the index.html with a web browser.
<br/>
<br/>

<h2>Use of libraries</h2>
<br/>
In the Navbar, I use bootstraps containers and rows to show I can use them. However, I stop using them as I wanted to use libraries as little as possible to show I could work without them. Normally I would use bootstrap to help make the website responsive.
<br/>
<br/>

<h2>Different approaches</h2>
<br/>
I've switched methods of working such as using a mix of CSS and jQuery.
Normally I would stick to one where possible to keep everything simple.
However, I wanted to show I'm happy working with both.
<br/>
<br/>

<h2>PHP</h2>
<br/>
I wanted to build a contact form that worked on the frontend using PHP but Github pages does not allow PHP.
<br/>
This is my PHP code for submitting a simple contact form:

```
<?php
        // Submit email
         if (isset($_POST['submit']) && $_POST['email'] != '') {
              //Check the email is valid
              if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                  $email = $_POST['email'];

                  $mailTo = "ownersemail@gmail.com";
                  $subject = "From my website";
                  $body = "New subscriber: ".$email.

                   mail($mailTo, $subject, $body);
              }
         }
?>
```

<br/>

<h2>Final Thoughts</h2>
<br/>
This was a really enjoyable task and I learnt a lot. A couple of tricky problems such as sizing the article images, and getting the navbar to animate smoothly, but overall I'm happy with the result.
