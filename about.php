<?php include 'includes/header.php'; ?>
<div class="mainContent">
<h1>About me</h1><h4>in a few words, I promise</h4>

<div id="skills">
    <h2>Skill set</h2>
    <div class="contentSlider">
        <svg class="sliderButton left" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            fill="#414141" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path id="arrow-27-icon" d="M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50z M228.292,389.899l-35.847-35.676L290.202,256l-97.757-98.225l35.847-35.676L361.555,256L228.292,389.899z"/>
        </svg>
        <div class="nodes">
            <div id="1" class="node hidden">1</div>
            <div id="2" class="node hidden">2</div>
            <div id="3" class="node pre">3</div>
            <div id="4" class="node active">
                <div class="level">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <div id="5" class="node post">5</div>
            <div id="6" class="node hidden">6</div>
            <div id="7" class="node hidden">7</div>
        </div>
        <svg class="sliderButton right" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            fill="#414141" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path id="arrow-27-icon" d="M256,50C142.229,50,50,142.229,50,256s92.229,206,206,206s206-92.229,206-206S369.771,50,256,50z M228.292,389.899l-35.847-35.676L290.202,256l-97.757-98.225l35.847-35.676L361.555,256L228.292,389.899z"/>
        </svg>
    </div>
</div>
</div>

<script>
$('.sliderButton.right').click(function() {
    var nodes = $('.node');
    var active = $('.active');
    var previous = $('.pre');
    var next = $('.post');
    var post = next.next();
    post.css({left: 540});
    nodes.first().css({left: 540});
    previous.removeClass('pre');
    previous.addClass('hidden left');

    active.removeClass('active');
    active.addClass('pre');
    next.removeClass('post');
    next.addClass('active');

    if (post.hasClass('node')) {
        post.removeClass('hidden');
        post.addClass('post');
    }
    else { 
        nodes.first().removeClass('hidden');
        nodes.first().addClass('post');
    }
    setTimeout(function() {
        post.removeAttr('style');
        nodes.first().removeAttr('style');
    }, 0);
    setTimeout(function() {
        nodes.removeClass('left right');
    }, 300);
});

$('.sliderButton.left').click(function() {
    var nodes = $('.node');
    var active = $('.active');
    var previous = $('.pre');
    var next = $('.post');
    var post = previous.prev();
    post.css({left: -180});
    nodes.last().css({left: -180});
    previous.removeClass('pre');
    previous.addClass('active');

    active.removeClass('active');
    active.addClass('post');
    next.removeClass('post');
    next.addClass('hidden right');

    if (post.hasClass('node')) {
        post.removeClass('hidden');
        post.addClass('pre');
    }
    else { 
        nodes.last().removeClass('hidden');
        nodes.last().addClass('pre');
    }
    setTimeout(function() {
            post.removeAttr('style');
            nodes.last().removeAttr('style');
        }, 0);
    setTimeout(function() {
        nodes.removeClass('left right');
    }, 300);
});
</script>
<?php include 'includes/footer.php'; ?>
