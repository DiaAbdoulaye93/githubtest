<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <table border="1">
            <caption> <h1>Inscription d'un étudiant pour l'année scolaire 2021 2022 </h1></caption>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td> <label for="prenom">Prénom:</label>
                            <td><input type="text" id="prenom" placeholder="prenom" required minlength="3"></td>
                        </tr>
                        <tr>
                            <td>Nom: </td>
                            <td><input type="text" placeholder="nom"></td>
                        </tr>
                        <tr>
                            <td>Date de naissance: </td>
                            <td><input type="date" min="1992-01-01" max="2005-01-01"></td>
                        </tr>
                        <tr>
                            <td>Lieu de naissance: </td>
                            <td><select name="" id="">
                                    <option value="">Choisir un lieu de naissance</option>
                                    <option value="">Dakar</option>
                                    <option value="">Saint louis</option>
                                    <option value="">Tamba Counda</option>
                                    <option value="">Thies</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Sex</td>
                            <td><input type="radio" name="sex"> M
                                <input type="radio" name="sex" id=""> F
                            </td>
                        </tr>
                        <tr>
                            <td>Hobbies</td>
                            <td>
                                <input type="checkbox" name="" id="">Sport
                                <input type="checkbox" name="" id="">Coran
                                <input type="checkbox" name="" id="">Internet
                                <input type="checkbox" name="" id="">Théatre
                            </td>
                        </tr>
                        <tr>
                            <td>Nombre d'inscriptions</td>
                            <td><input type="range" min="0", max="10" onmousemove="showRangeText(this.value);"><span id="RangeText"></span></td>
                        </tr>
                        <tr>
                            <td>Nombre d'enfants</td>
                            <td><input type="number" min="0" max="40"></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td><input type="tel"></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="email"></td>
                        </tr>
                        <tr>
                            <td>mot de pass</td>
                            <td><input type="password"></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr valign="top">
                            <td>Avatar</td>
                            <td><input type="file"></td>
                        </tr>
                        <tr>
                            <td>
                                Commentaire</td>
                            <td> <textarea name="" id="" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="S'inscrire">
                            </td>
                        </tr>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<script>
    function showRangeText(val) {
        document.getElementById('RangeText').textContent = val
        }
</script>