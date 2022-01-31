<?php
    require_once HTML."/header.php";
    if (isset($_GET["editEmployee"])) {
        $id = $_GET["editEmployee"];
        $employee = getEmployee($id);
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ajax Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="styleSheet" href="<?php echo CSS;?>/main.css">
    <script defer src="../assets/js/validition.js"></script>
</head>

<body>
    <main>
        <form class="employeeForm" action="<?php echo CONTROLLERS;?>/employeeController.php" method="POST" id="formulary">
            <div class="formFlex">
                <div class="flexMember">
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" required value=<?= $this->employee['name'] ?>>
                </div>

                <div class="flexMember">
                    <label for="lastName">Last name</label><br>
                    <input type="text" id="lastName" name="lastName" required value=<?= $this->employee['lastName'] ?>>
                </div>
            </div>

            <div class="formFlex">
                <div class="flexMember">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required value=<?= $this->employee['email'] ?>>
                    <p>We will sell this data to some weird databank</p>
                </div>

                <div class="flexMember">
                    <label for="gender">Gender</label><br>
                <select id="selectGender" name="gender">
                    <option value="man" <?php if ($this->employee['gender_id'] == '1') {
                                            echo ' selected="selected"';
                                        } ?>>Male</option>
                    <option value="woman" <?php if ($this->employee['gender_id'] == '2') {
                                                echo ' selected="selected"';
                                            } ?>>Female</option>
                    <option value="undefined" <?php if ($this->employee['gender_id'] == '3') {
                                                    echo ' selected="selected"';
                                                } ?>>Non Binary</option>
                    <option selected value="other" <?php if ($this->employee['gender_id'] == '4') {
                                                    echo ' selected="selected"';
                                                } ?>>Other</option>
                </select>
                </div>
            </div>

            <div class="formFlex">
                <div class="flexMember">
                    <label for="city">City</label><br>
                    <input type="text" id="city" name="city" required value=<?= $this->employee['city'] ?>>
                </div>

                <div class="flexMember">
                    <label for="streetAddress">Stree number</label><br>
                    <input type="number" id="streetAddress" name="streetAddress" required value=<?= $this->employee['streetAddress'] ?>>
                </div>
            </div>

            <div class="formFlex">
                <div class="flexMember">
                    <label for="state">State</label><br>
                    <input type="text" id="state" name="state" required value=<?= $this->employee['state'] ?>>
                </div>

                <div class="flexMember">
                    <label for="age">Age</label><br>
                    <input type="number" id="age" name="age" value=<?= $this->employee['age'] ?> required>
                </div>
            </div>

            <div class="formFlex">
                <div class="flexMember">
                    <label for="employee-postalCode">Postal code</label><br>
                    <input type="number" id="postalCode" name="postalCode" required value=<?= $this->employee['postalCode'] ?>>
                </div>

                <div class="flexMember">
                    <label for="phoneNumber">Phone number</label><br>
                    <input type="text" id="phoneNumber" name="phoneNumber" value=<?= $this->employee['phoneNumber'] ?>>
                </div>
            </div>

            <div class="formFlex">
                <div class="flexButtons">
                    <button type="submit" name=<?= isset($_GET["editEmployee"]) ? "modifyEmployee" : "addEmployee" ?> class="btn btn-primary" id="formSub">submit</button>
                    <a href="<?php echo BASE_URL;?>employee/dashboard"><button type="button" class="btn btn-secondary">Return</button></a>
                </div>
            </div>
        </form>
    </main>
    <?php require_once HTML."/footer.php"; ?>
</body>

</html>