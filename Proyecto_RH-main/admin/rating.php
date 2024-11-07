<?php include "../includes/headerAdmin.php" ?>
<section>
    <h2>Table for the rating</h2>
    <div>
        <table border="1" class="tableAdmin">
            <tr>
                <th>Code</th>
                <th>Score</th>
                <th>Evaluation Date</th>
                <th>Comments</th>
                <th>Employee</th>
                <th colspan="2">Options</th>
            </tr>
            <tr>
                <td>0</td>
                <td>0000</td>
                <td>0000</td>
                <td>----</td>
                <td>----</td>
                <td><a href="">Modify</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        </table>
    </div>
    <div>
    <h2>Make a score</h2>
        <form action="" class="formPage">
            <fieldset>
            <div class="firstInput">
                    <label for="code">Code</label>
                    <input type="text" id="code" name="code" placeholder="Write the code of the rating">
                </div>
                <br>
                <div>
                    <label for="score">Score</label>
                    <input type="number" id="score" name="score" placeholder="Score of the employee">
                </div>
                <br>
                <div>
                    <label for="evaluationDate">Evaluation Date</label>
                    <input type="date" id="evaluationDate" name="evaluationDate" >
                </div>
                <br>
                <div>
                    <label for="comments">Comentarys</label>
                    <textarea name="comments" id="comments"></textarea>
                </div>
                <br>
                <div>
                    <label for="employee">Employee</label>
                    <input type="number" id="employee" name="employee" placeholder="Number of the employee">
                </div>
                <br>
                <div>
                    <button type="submit">Make a score</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>
<?php include "../includes/footer.php" ?>