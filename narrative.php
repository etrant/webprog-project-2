
<?php function testPage()
{
?>
    <img src="images/start.jpg" alt="">
    <div class="narrative">
        <p>
            This is a test page.
        </p>
    </div>
    <form id="options" method="post" action="game.php">
        <button class="option" type="submit" name="level_id" value="0">Return to start</button>
    </form>
<?php
}
?>

<?php function generateStory(int $level)
{ ?>
    <?php if ($level == 0) : ?>
        <img src="images/start.jpg" alt="">
        <div class="narrative">
            <p>
                You awaken to find yourself in solitude, a cool breeze brushes lightly against your skin.
                Before you stands a dilapidated stone structure, its ancient walls whispering tales of old.
                <br><br>
                The forest around you hums with life, yet you find yourself strikingly <strong>alone</strong>.
            </p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="1">Explore the structure.</button>
            <button class="option" type="submit" name="level_id" value="5">Take in your surroundings.</button>
        </form>

    <?php elseif ($level == 1) : ?>
        <img src="images/approach.webp" alt="">
        <div class="narrative">
            <p>As you approach the ancient structure, the air grows denser, the whispers of the walls becoming clearer, almost beckoning you closer. Moss-covered stones and creeping vines tell a story of abandonment and the relentless march of time. You feel a chill down your spine, not from the breeze, but from the eerie sensation of being watched.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="2">Inside the structure.</button>
            <button class="option" type="submit" name="level_id" value="4">Turn back.</button>
        </form>
    <?php elseif ($level == 2) : ?>
        <img src="images/walls.webp" alt="" srcset="">
        <div class="narrative">
            <p>The interior is dark, the light from the door quickly swallowed by the shadows. As your eyes adjust, you notice symbols etched into the stone—arcane and unfathomable. You feel an urge to trace them with your fingers but resist, fearing the consequences.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="3">Venture deeper.</button>
            <button class="option" type="submit" name="level_id" value="4">Turn back.</button>
        </form>
    <?php elseif ($level == 3) : ?>
        <img src="images/hints.webp" alt="">
        <div class="narrative">
            <p>Amidst the rubble and decay, you find remnants of those who once sought refuge or perhaps knowledge within these walls. Notes, faded and barely legible, hint at a hidden key to unlock deeper secrets. Yet, the key is nowhere to be found here.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="4">Turn back.</button>
        </form>
    <?php elseif ($level == 4) : ?>
        <img src="images/start.jpg" alt="">
        <div class="narrative">
            <p>You return to where it all began. The hum of the forest seranading you. Though eerily, you have observed no wildlife, nor other people...</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="1">Explore the structure.</button>
            <button class="option" type="submit" name="level_id" value="5">Take in your surroundings.</button>
            <button class="option" type="submit" name="level_id" value="18">Rest.</button>
        </form>
    <?php elseif ($level == 5) : ?>
        <img src="images/observe.png" alt="">
        <div class="narrative">
            <p>Choosing to understand the environment you've been thrust into, you step away from the structure and allow the forest's hidden life to guide your senses.
                <br><br>
                You take note of a nearby clearing which looks like it leads to a meadow.
                <br><br>
                You also note the sound of rushing water, maybe there's a river nearby.
            </p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="1">Explore the structure.</button>
            <button class="option" type="submit" name="level_id" value="6">Explore the meadows.</button>
            <button class="option" type="submit" name="level_id" value="11">Investigate the sound of water.</button>
            <button class="option" type="submit" name="level_id" value="18">Rest.</button>
        </form>
    <?php elseif ($level == 6) : ?>
        <img src="images/meadows.png" alt="">
        <div class="narrative">
            <p>The meadows stretch endlessly, a sea of green and gold swaying gently. As you walk, the sense of isolation deepens, the whispers of the grass the only sound. This place feels untouched, sacred, and foreboding.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="7">Keep walking.</button>
            <button class="option" type="submit" name="level_id" value="10">Turn back.</button>
        </form>
    <?php elseif ($level == 7) : ?>
        <img src="images/meadows.png" alt="">
        <div class="narrative">
            <p>Trusting your instincts, you press on, the silence growing heavier with each step. The grass no longer whispers, and the wind holds its breath. It's as if the meadow itself is watching, waiting. You pause, considering the strangeness of this silence in a place once teeming with unseen life.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="8">Keep walking.</button>
            <button class="option" type="submit" name="level_id" value="10">Turn back.</button>
        </form>
    <?php elseif ($level == 8) : ?>
        <img src="images/meadows.png" alt="">
        <div class="narrative">
            <p>Compelled by an unknown force or perhaps curiosity, you decide to continue. With each step, the meadows seem to stretch and distort, the scenery blending into a continuous, unchanging landscape. The concept of time loses meaning here; the sun hangs motionless in the sky.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="9">Keep walking.</button>
            <button class="option" type="submit" name="level_id" value="10">Turn back.</button>
        </form>
    <?php elseif ($level == 9) : ?>
        <img src="images/endless.webp" alt="">
        <div class="narrative">
            <p> Suddenly, you realize the path behind you has vanished, replaced by more of the endless meadow. Panic rises as you try to find the path back. The meadow has claimed you. The forest, in its eerie silence, has embraced you wholly. Your solitude concludes.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <?php incrementScore([$_SESSION["user"]]) ?>
            <button class="option" type="submit" name="level_id" value="0">Play again?</button>
        </form>
    <?php elseif ($level == 10) : ?>
        <img src="images/start.jpg" alt="">
        <div class="narrative">
            <p>With a sense of urgency, you pivot, hoping to retrace your steps. The meadows, vast and seemingly endless, now feel suffocating. But as you begin to walk back, the air gradually fills with the sounds of life once again. The oppressive silence retreats, chased away by the rustling of grass and the distant calls of birds. The sun seems to move once more, casting longer shadows that mark the passage of time.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="1">Explore the structure.</button>
            <button class="option" type="submit" name="level_id" value="6">Explore the meadows.</button>
            <button class="option" type="submit" name="level_id" value="11">Investigate the sound of water.</button>
            <button class="option" type="submit" name="level_id" value="18">Rest.</button>
        </form>
    <?php elseif ($level == 11) : ?>
        <img src="images/river.jpg" alt="">
        <div class="narrative">
            <p>The river's flow is a soothing presence in the unsettling silence of the forest. Its clear waters reveal more than just the reflection of the towering trees and the sky above. Beneath the surface, something glints unnaturally. </p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="12">Reach into the water.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 12) : ?>
        <img src="images/river.jpg" alt="">
        <div class="narrative">
            <p>Braving the cold, you reach into the water and retrieve a small, ornate key.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 13) : ?>
        <img src="images/start.jpg" alt="">
        <div class="narrative">
            <p>
                The forest, with all its enigmatic allure, watches silently as you tread familiar paths.
                <br><br>
                You safely return to where it all began.
            </p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="19">Explore the structure.</button>
            <button class="option" type="submit" name="level_id" value="18">Rest.</button>
        </form>
    <?php elseif ($level == 14) : ?>
        <img src="images/hints.webp" alt="">
        <div class="narrative">
            <p>Amidst the rubble and decay, you find remnants of those who once sought refuge or perhaps knowledge within these walls. Notes, faded and barely legible, hint at a hidden key to unlock deeper secrets. Yet, the key is nowhere to be found here.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="15">Insert the ornate key.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 15) : ?>
        <img src="images/hints.webp" alt="">
        <div class="narrative">
            <p>The key fits perfectly into the lock, which turns with an echoing click that seems to resonate through the forest. The door swings open, revealing a pathway leading down into the earth.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="16">Proceed into the unknown.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 16) : ?>
        <img src="images/stairs.jpg" alt="" srcset="">
        <div class="narrative">
            <p>The path down is lit by a faint, phosphorescent glow emanating from the moss that lines the walls. It spirals deeper into the earth, a stark contrast to the vibrant life above ground. The air grows cooler, and the silence is profound, broken only by your footsteps. </p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="17">Proceed into the unknown.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 17) : ?>
        <img src="images/ending.jpg" alt="" srcset="">
        <div class="narrative">
            <p>The staircase ends not where you began, but at the edge of the forest, the ancient structure nowhere in sight. The air is fresh, the sun warm on your skin, and the sounds of the forest life are a comforting, familiar chorus. It's as if you've stepped out into a world similar to, but somehow different from, the one you left behind. A glance back reveals no doorway, no staircase, nothing but the dense forest, as if the path and the structure had never existed at all.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <?php incrementScore([$_SESSION["user"]]) ?>
            <button class="option" type="submit" name="level_id" value="0">Play again?</button>
        </form>
    <?php elseif ($level == 18) : ?>
        <img src="images/sleepbad.jpeg" alt="" srcset="">
        <div class="narrative">
            <p>The seranading hum of the forest makes your brow grow heavy. You find a shaded spot under a nearby tree. As your eyes shut, the forest transforms. The comforting hum of life becomes a chorus of whispers. Sleep finds you, but you will never awaken.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <?php incrementScore([$_SESSION["user"]]) ?>
            <button class="option" type="submit" name="level_id" value="0">Play again?</button>
        </form>
    <?php elseif ($level == 19) : ?>
        <img src="images/approach.webp" alt="">
        <div class="narrative">
            <p>As you approach the ancient structure, the air grows denser, the whispers of the walls becoming clearer, almost beckoning you closer. Moss-covered stones and creeping vines tell a story of abandonment and the relentless march of time. You feel a chill down your spine, not from the breeze, but from the eerie sensation of being watched.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="20">Inside the structure.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>
    <?php elseif ($level == 20) : ?>
        <img src="images/walls.webp" alt="" srcset="">
        <div class="narrative">
            <p>The interior is dark, the light from the door quickly swallowed by the shadows. As your eyes adjust, you notice symbols etched into the stone—arcane and unfathomable. You feel an urge to trace them with your fingers but resist, fearing the consequences.</p>
        </div>
        <form id="options" method="post" action="game.php">
            <button class="option" type="submit" name="level_id" value="14">Venture deeper.</button>
            <button class="option" type="submit" name="level_id" value="13">Turn back.</button>
        </form>

    <?php else : testPage() ?>
    <?php endif; ?>
<?php } ?>