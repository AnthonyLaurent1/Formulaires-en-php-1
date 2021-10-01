<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_firstname">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="telephone">Téléphone :</label>
        <input type="tel" id="telephone" name="user_tel">
    </div>
    <div>
        <label for="sujet">Choix :</label>
        <select id="sujet" name="user_select">
            <option>Vacances au soleil</option>
            <option>Vacances à la neige</option>
            <option>Vacances dans les îles</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div>
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

