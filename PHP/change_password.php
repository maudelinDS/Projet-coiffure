<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd >
<html xmlns=" http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <title>Changement de mot de passe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="designform.css">
</head>

<body>

    <form>
        <table>


            <tr>
                <div class="ligne">
            <tr>

                <td><label for="Ancien mot de passe" class="label1"> Ancien mot de passe : </label></td>
                <div class="fr">
                    <td> <input type="password" name="ancien_mot_de_pass" class="textBox"></td><br><br>
                </div>
            </tr>

            </div>

            <div class="ligne">
                <tr>


                    <td> <label for=" Nouveau mot de passe" class="label1"> Nouveau mot de passe: </label></td>
                    <div class="fr">
                        <td> <input type="password" name="mot_de_passe1" class="textBox"></td><br><br>
                    </div>
                </tr>

            </div>

            <div class="ligne">
                <tr>


                    <td> <label for="Retaper Nouveau mot de passe" class="label1"> Retaper Nouveau mot de passe: </label></td>
                    <div class="fr">
                        <td> <input type="password" name="mot_de_passe2" class="textBox"></td><br><br>
                    </div>
                </tr>

            </div>
            <TR>
                <TD><INPUT TYPE="SUBMIT" VALUE="Mise a jour"></TD>
            </TR>
        </TABLE>

    </form>
    <div class="button_go_back">
      <a href="../PHP/page_user.php"><input type="button" class="GoBack" value="Go Back"></a>
   </div>
</body>

</html>