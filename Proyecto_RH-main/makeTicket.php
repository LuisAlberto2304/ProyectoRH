<?php include "includes/header.php" ?>
<section>
    <h2>Make a ticket</h2>
    <div>
        <form action="" class="formPage">
            <fieldset>
            <div class="firstInput">
                    <label for="name">Fisrtname</label> <!-- This information should be entered automatically -->
                    <input type="text" id="name" name="name" placeholder="Name">
                </div>
                <br>
                <div>
                    <label for="date">Date of the ticket</label> <!-- This information should be entered automatically -->
                    <input type="date" id="date" name="date">
                </div>
                <br>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>
                <div>  
                    <button type="submit">Make a ticket</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>