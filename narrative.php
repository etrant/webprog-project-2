<?php
function testPage()
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

<?php
function generateStory(int $level)
{
    switch ($level) {
        case 0:
?>
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
<?php
            break;
        case 1:
?>

<?php
        default:
            testPage();
    } // closes the switch
} // closes the function
?>