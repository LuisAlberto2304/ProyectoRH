<?php include "../includes/headerAdmin.php";
require_once "../includes/config/MySQL_ConexionDB.php";
require_once "functionsAdmin.php"; 
require_once "../funciones.php"; 

$employ = getInfoEmploy($IDUsuario);
?>
<section>
    <h2>Table for the Employees</h2>
    <div>
        <table border="1" class="tableAdmin">
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Second Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>CellPhone number</th>
                <th>Password</th>
                <th>Contract Date</th>
                <th>Workstation</th>
                <th colspan="2">Options</th>
            </tr>
            <?php foreach($employ as $renglon) {?>
            <tr>
                <tr>
                <td><?= $renglon['numero']?></td>
                <td><?= $renglon['nombre']?></td>
                <td><?= $renglon['apelPaterno']?></td>
                <td><?= $renglon['apelMaterno']?></td>
                <td><?= $renglon['email']?></td>
                <td><?= ($renglon['sexo'] ?? '') === 'F' ? 'Female' : 'Male';?></td>
                <td><?= $renglon['edad']?></td>
                <td><?= $renglon['celular']?></td>
                <td><?= $renglon['contrasena']?></td>
                <td><?= $renglon['fechaContrato']?></td>
                <?php $workspace = workspace($renglon['numero']); ?>
                <td><?php echo $workspace; ?></td>
                <td><a href="">Modify</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        <?php } ?>
        </table>
    </div>
    <div>
        <br>
        <h2>Add a employee</h2>
        <form action="" class="formPage">
            <fieldset>
                <div class="firstInput">
                    <label for="name">Firstname</label>
                    <input type="text" id="name" name="name" placeholder="Write the name of the employee">
                </div>
                <br>
                <div>
                    <label for="lastName">First Lastname</label>
                    <input type="text" id="lastName" name="lastName" placeholder="First Lastname">
                </div>
                <br>
                <div>
                    <label for="secondLastName">Second Lastname</label>
                    <input type="text" id="secondLastName" name="secondLastName" placeholder="Second Lastname">
                </div>
                <br>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email">
                </div>
                <br>
                <div>
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" name="gender" placeholder="Gender">
                </div>
                <br>
                <div>
                    <label for="phone">Phone number</label>
                    <input type="text" id="phone" name="phone" placeholder="Phone number 555 555 55 55">
                </div>
                <br>
                <div>
                    <label for="password">Password</label>
                    <input type="text" id="password" name="password" placeholder="Password">
                </div>
                <br>
                <div>
                    <label for="contractDate">Contract Date</label>
                    <input type="date" id="contractDate" name="contractDate">
                </div>
                <br>
                <div>
                    <label for="workstation">Workstation</label>
                    <input type="text" id="workstation" name="workstation" placeholder="The Workstation">
                </div>
                <br>
                <div>
                    <label for="supervisor">The supervisor</label>
                    <input type="number" id="supervisor" name="supervisor" placeholder="Number of the supervisor">
                </div>
                <br>
                <div>
                    <button type="submit">Add a employee</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php include "../includes/footer.php" ?>