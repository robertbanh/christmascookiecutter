<?
$_meta_desc = "Send us an email at Christmas Cookie Cutter.";
$_h1 = "Contact Us";
$_h2 = "Send us an email!";

require $_SERVER['DOCUMENT_ROOT'].'/_header.php';
?>
<div id="main">
    <div class="contact-us">
        <h3>Let us know how we can help.</h3>
        <form action="https://formspree.io/f/mgeprard" method="POST">
            <label>
                Your email:
            </label>
            <input type="email" name="_replyto" required="required">

            <label>
                Your message:
            </label>
            <textarea name="message" required="required"></textarea>
            <br>

            <button type="submit">Send</button>
        </form>
    </div>
</div>
<?
    require $_SERVER['DOCUMENT_ROOT'].'/_footer.php';
?>