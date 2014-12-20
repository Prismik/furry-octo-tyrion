<?php include 'includes/header.php'; ?>
<div class="mainContent">
<h1 class="title">Contact me</h1>

<div class="contactPull shown"><div class="arrowRight"></div></div>
<div class="box-left shown">
    <b>If</b>
    <ul class="ifList">
        <li>
            <img title="idea" src="resources/images/c_idea.svg" alt="Idea" />
            <span>You have an idea that i can help you to implement.</span>
        </li>
        <li>
            <img title="vivid" src="resources/images/c_idea.svg" alt="Idea" />
            <span>You want you or your business to be a vivid individuality.</span>
        </li>
        <li>
            <img title="vivid" src="resources/images/c_code.svg" alt="Idea" />
            <span>There is a wish to get me involved in some creative work.</span>
        </li>
        <li>
            <img title="vivid" src="resources/images/c_talk.svg" alt="Idea" />
            <span>You just want to say "Hi!"</span>
        </li>
    </ul>
    <b>Then</b> <br />
    <p>
        The best and the most comfortable way to talk to me is to send me an email to:
        <a href="mailto:info@francisbeauchamp.com">info@francisbeauchamp.com</a>
    </p>
    <p>
        Please point out your goals, deadlines and budget. 
    </p>
    <p>
        I'll get back to you within 24 hours with my availability and we can then discuss the details.
    </p>
</div>
<div>
<div class="box-right hidden">
    <form id="contactForm" action="sendMail.php" method="POST" onsubmit="return validate(this);">
    <div id="user">
       <label>Username</label>
       <input type="text" name="username">
    </div>
    <table border="" style="margin: 0 auto">
        <tr>
            <td>
                <label for="name">Name<sup>*</sup></label>
                <input class=" required input" type="text" id="name" name="name"
                       autocomplete="off"
                       style="width: 150px; float: right; margin-right: 20px" required/>
            </td>
            <td id="org">
                <label for="organisation" style="margin-top: 5px;">Organisation</label>
                <input class="input" type="text" id="organisation"
                       name="organisation" autocomplete="off" style="float: right;" />
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email<sup>*</sup></label>
                <input class="required input" type="email" id="email" name="email"
                       autocomplete="off"
                       style="width: 150px; float: right; margin-right: 20px" required/>
            </td>
            <td id="phone">
                <label for="phone" style="margin-top: 5px;">Phone</label>
                <input class="input" id="phone" type="tel" name="phone"
                       autocomplete="off" style="float: right;" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="message">Message<sup>*</sup></label> <br />
                <textarea class="required input" id="message" name="message"
                          rows="7" cols="70" required></textarea>
            </td>
        </tr>
        <tr>
           <td>
                So far so good, so <button class="sexyButton" type="submit" value="send">Send</button>
           </td>
            <td>
                <?php echo '<span id="thanks" style="float: right; color: orange">'.$_SESSION['thanks'].'</span>'; unset($_SESSION['thanks']);?>
            </td>
        </tr>
    </table>
    </form>
</div>
<br style="clear:both;"/>
</div>
<script>
$(function () {
    $('.contactPull').click(function(e) {
        e.preventDefault();
        $('.contactPull').toggleClass("shown hidden");
        $('.box-left').toggleClass("shown hidden");
        $('.box-right').toggleClass("shown hidden");
        setTimeout(function() {
            $('.box-right.shown').css("z-index", "2");
        }, 600);
        $('.box-right.hidden').css("z-index", "-1");
    });
});
</script>
<script type="text/javascript">
    $(document).ready( function() {
      $('#thanks').delay(2000).fadeOut();
    });
    var input = document.getElementsByClassName('required');
    var message = document.getElementById('message');
    keyupHandler = function(input){
        if (input.value.length){
            input.setAttribute('class', 'input');
        }
        else {
            input.setAttribute('class', 'invalid input');
        }
    }

    for (i=0; i<input.length; i++){
        input[i].onkeyup = function(){
            keyupHandler(this);
        }
    }

    message.onkeyup = function() {
        keyupHandler(this);
    }

    function validate(form) {
        var name= form.name.value.trim();
        if (name.length == 0) {
            form.name.focus();
            form.name.select();
            form.name.className = 'invalid input'

            return false;
        }

        var email= form.email.value.trim();
        if (email.length == 0) {
            form.email.focus();
            form.email.select();
            form.email.className = 'invalid input'

            return false;
        }

        var msg= form.message.value.trim();
        if (msg.length == 0) {
            form.message.focus();
            form.message.select();
            form.message.className = 'invalid input'

            return false;
        }

        jQuery().lockSubmit();
    }
</script>
</div>
<?php include 'includes/footer.php'; ?>
