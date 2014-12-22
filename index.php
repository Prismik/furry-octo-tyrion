<?php
include 'includes/header.php';
$rand = rand(1, 5);
$mess;
switch($rand) {
    case 1: $mess= "I do web design as well (="; break;
    case 2: $mess= "No, I won't fix your computer"; break;
    case 3: $mess= "I convert caffeine into code"; break;
    case 4: $mess= "With multitasking capabilities"; break;
    case 5: $mess= "No, I won't support Internet Explorer"; break;
}
?>

<div class="header" id="tagline">
	<h1>Hi, my name is <span class="bold">Francis Beauchamp</span><br />
		and I'm a <span class="bold">programmer</span><sup style="font-size:20px;">*</sup>
	</h1>
    <h2>
    <b><sup style="font-size:14px;">*</sup><?php echo $mess; ?></b>
    </h2>
</div>
<div id="outer">
<div id="description">
    <h2>
    I love to create visual experiences. <br><br>
    That's right! I love to develop <span class="accent">video games</span>, <span class="accent">user interfaces</span> and programs that rely
    heavily on <span class="accent">front&#8209;end</span>. I'm easy to work with and I never stop until
    the job is done.
    </h2>
</div>
</div>

<?php include 'includes/footer.php'; ?>