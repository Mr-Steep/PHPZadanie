<?php
require_once 'app/header.php';
require_once 'app/footer.php';
require_once 'zad/zadanie_1.php';
require_once 'zad/zadanie_2.php';
?>
<div class="alert alert-secondary" role="alert">
    <h3>
        <div class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="name_country" placeholder="Введите страну">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <button type="submit" class="btn btn-primary">Посмотреть</button>
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <? $obj_first->getClassname() ?>
                <? $obj_first->getLetter(); ?>
                &nbsp;
                <? $obj_second->getClassname(); ?>
                <? $obj_second->getLetter(); ?>
            </div>
        </div>


    </h3>


</div>
<div class="container">
    <table class="table table-borderless">
        <thead>
        <tr>
            <td><font color="<? echo color_text(color_chis($el1)) ?>"><? echo $el1 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el2)) ?>"><? echo $el2 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el3)) ?>"><? echo $el3 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el4)) ?>"><? echo $el4 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el5)) ?>"><? echo $el5 ?></font></td>


        </tr>
        </thead>
        <tbody>
        <tr>
            <td><font color="<? echo color_text(color_chis($el6)) ?>"><? echo $el6 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el7)) ?>"><? echo $el7 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el8)) ?>"><? echo $el8 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el9)) ?>"><? echo $el9 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el10)) ?>"><? echo $el10 ?></font></td>
        </tr>
        <tr>
            <td><font color="<? echo color_text(color_chis($el11)) ?>"><? echo $el11 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el12)) ?>"><? echo $el12 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el13)) ?>"><? echo $el13 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el14)) ?>"><? echo $el14 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el15)) ?>"><? echo $el15 ?></font></td>
        </tr>
        <tr>
            <td><font color="<? echo color_text(color_chis($el16)) ?>"><? echo $el16 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el17)) ?>"><? echo $el17 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el18)) ?>"><? echo $el18 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el19)) ?>"><? echo $el19 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el20)) ?>"><? echo $el20 ?></font></td>
        </tr>
        <tr>
            <td><font color="<? echo color_text(color_chis($el21)) ?>"><? echo $el21 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el22)) ?>"><? echo $el22 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el23)) ?>"><? echo $el23 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el24)) ?>"><? echo $el24 ?></font></td>
            <td><font color="<? echo color_text(color_chis($el25)) ?>"><? echo $el25 ?></font></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="results"></div>

