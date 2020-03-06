<?php
include("template/header.php"); ?>

<div class="row col-12 m-0 p-0 bg-page text-center" style="min-height: 100vh">
    <div class="col-12 d-flex my-auto" id="buttonstart">
        <input onclick="startExercice()" type="button" class="btn btn-primary mx-auto p-4 size50" value="Démarrer">
    </div>
    <div class="col-12 my-auto d-none" id="buttonrestart">
        <a href="<?= $_SERVER['REQUEST_URI'] ?>" class="btn btn-primary mx-auto p-2 size50">Recommencer</a>
    </div>
    <p class="col-12 my-auto text-white size50" id="showCount"></p>
    <p class="col-12 my-auto text-white" style="font-size: 30px" id="timingCount"></p>
    <div id="showExercice" class="col-12 m-0 p-0 d-none">
        <?php if ($_GET['type'] == 'colonne') { ?>
            <div class="text-white col-3 col-sm-2 mx-auto m-0 p-0 text-center">
                <table style="border-bottom: 4px solid white" class="col-12 mx-auto text-white text-right">
                    <tr>
                        <td></td>
                        <td>
                            <p id="topNumber" class="size50"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="signe" class="pb-2 pr-4 text-left size50"></p>
                        </td>
                        <td>
                            <p id="botNumber" class="pb-2 size50"></p>
                        </td>
                    </tr>
                </table>
                <input type="tel" name="" id="resultPlayer" onkeyup="showResult(1)" autofocus class="m-0 col-12 text-right size50 inputStyle p-0 pt-2 pb-2" placeholder="?">
            </div>
        <?php
        } else { ?>
            <div class="row text-white justify-content-center col-12 mx-auto m-0 p-0">
                <p id="topNumber2" class="size50 my-auto"></p>
                <p id="signe2" class="size50 my-auto"></p>
                <p id="botNumber2" class="size50 my-auto"></p>
                <p class="size50 my-auto">=</p>
                <input type="tel" name="" id="resultPlayer2" onkeyup="showResult(1)" autofocus class="m-0 size50 inputStyle p-0" style="max-width: 200px;" placeholder="?">
            </div>
        <?php } ?>
    </div>
    <div id="endExercice" class="col-12 m-0 p-0 d-none">
        <table class="table table-striped table-dark mx-auto my-auto">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Résultat</th>
                    <th scope="col">Durée</th>
                </tr>
            </thead>
            <tbody id="bodytable">
            </tbody>
        </table>
    </div>
</div>

<?php
include("template/footer.php");
