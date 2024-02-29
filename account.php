<section class="account">
    <h1>Formulaire d'inscrSITHption</h1>
    <form action="inscription.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        <br>
        <button type="submit">S'inscrire</button>
    </form>

    <h1>Formulaire de connexSITHion</h1>
    <form action="connexion.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="mot_de_passe">Mot de passe:</label>
        <input type="password" name="mot_de_passe" id="mot_de_passe" required>
        <br>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</section >