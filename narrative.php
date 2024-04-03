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
            <button class="option" type="submit" name="level_id" value="1">Option 1</button>
            <button class="option" type="submit" name="level_id" value="2">Option 2</button>
        </form>

    <?php elseif ($level == 1) : ?>
    <?php elseif ($level == 2) : ?>
    <?php elseif ($level == 3) : ?>
    <?php elseif ($level == 4) : ?>
    <?php elseif ($level == 5) : ?>

    <?php elseif ($level == 6) : ?>
    <?php elseif ($level == 7) : ?>
    <?php elseif ($level == 8) : ?>
    <?php elseif ($level == 9) : ?>
    <?php elseif ($level == 10) : ?>

    <?php elseif ($level == 11) : ?>
    <?php elseif ($level == 12) : ?>
    <?php elseif ($level == 13) : ?>
    <?php elseif ($level == 14) : ?>
    <?php elseif ($level == 15) : ?>
    <?php else : testPage() ?>
    <?php endif; ?>
<?php } ?>