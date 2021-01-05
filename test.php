<div id="contact_form">
  <form method="post" class="p-8 bg-gray-100 shadow-sm rounded-2xl">
    <div class="mb-6">
      <label for="name" class="block mb-3 text-gray-700">Pseudo:</label>
      <input type="text" id="name" name="pseudo" class="w-full p-3 bg-white border border-gray-200 rounded-2xl focus:outline-none" placeholder="votre pseudonyme" required />
    </div>

    <div class="mb-6">
      <label for="email" class="block mb-3 text-gray-700">Adresse Email:</label>
      <input type="email" id="email" name="email" class="w-full p-3 border border-gray-200 rounded-2xl focus:outline-none" placeholder="votre adresse email" required />
    </div>

    <div class="mb-6">
      <label for="plateform" class="block mb-3 text-gray-700">Plateforme:</label>
      <select class="w-full p-3 border-gray-200 rounded-2xl focus:outline-none appearance-none" name="plateform" required>
        <option value="">-- Comment m'avez-vous connu --</option>
        <option value="twitch">Twitch</option>
        <option value="facebook">Facebook Gaming</option>
        <option value="twitter">Twitter</option>
        <option value="insta">Instagram</option>
        <option value="friends">Amis</option>
        <option value="others">Autre</option>
      </select>
    </div>

    <div class="mb-6">
      <label for="VotreDéfi" class="block mb-3 text-gray-700">Votre Defi / Le Montant: </label><textarea name="message" maxlength="255" placeholder="Veuillez noter le défi ainsi que le montant de celui-ci le plus correctement possible" class="w-full px-10 pb-20 pt-8 border border-gray-200 rounded-2xl focus:outline-none resize-none" required></textarea>
    </div>

    <button type="submit" class="w-full px-12 py-3 bg-gradient-to-r from-blue-500 to-green-400 text-white font-bold rounded-2xl focus:outline-none">
      Valide ton défi
    </button>
  </form>

  <?php
  if (isset($_POST['message'])) {
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";
    $entete .= 'Content-Transfer-Encoding: 8bit' . "\r\n";

    $enteteclient = 'MIME-Version: 1.0' . "\r\n";
    $enteteclient .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $enteteclient .= 'From: zackandkitsu@zack-challenges.eu' . "\r\n";
    $enteteclient .= 'Content-Transfer-Encoding: 8bit' . "\r\n";

    $message = 
          '
          <h1><b>Bienvenu à toi sur le site de Zack-challenges</b></h1>
          <br>
          <p><b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">Votre pseudo : </b><b>' . $_POST['pseudo'] .'<br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">Votre adresse Email : </b><b>' . $_POST['email'] . '
          <br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">La plateforme que vous suivez ? : </b><b>' . $_POST['plateform'] . '<br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;
          width:700px;">Message : </b><b>' . $_POST['message'] . '</p>
          <h2>Message envoyé sur le site de Zack-Challenges.eu pour une demande de défis</h1>
          '
          ;

    $messageclient = '<h1>Message envoyé depuis la page Contact de Zack-Challenges.eu</h1>
          <h2>Voici le récapitulatif de votre message</h2>
          <p><b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;" >Votre Identifiant : </b>' . $_POST['pseudo'] . '<br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">Votre Email : </b>' . $_POST['email'] . '<br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">Plateforme : </b><b>' . $_POST['plateform'] . '<br>
          <b style="color: #00b9ff; font-size:20px; font-family: "Muli", sans-serif;">Votre Message : </b>' . $_POST['message'] . '</p>';

    $retour = mail('zackandkitsu@zack-challenges.eu', 'Envoi depuis page Contact', $message, $entete);
    $retourclient = mail($_POST['email'], 'Accusé de réception', $messageclient, $enteteclient);
  }
  ?>
</div>