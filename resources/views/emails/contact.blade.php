<!DOCTYPE html>
    <html lang="fr">
      <head>
        <meta charset="utf-8">
      </head>
      <body>
        <h2>Prise de contact sur mon beau site</h2>
        <p>Réception d'une prise de contact avec les éléments suivants :</p>
        <ul>
          <li><strong>entreprise</strong> : {{ $contact['entreprise'] }}</li>
          <li><strong>nom</strong> : {{ $contact['nom'] }}</li>
          <li><strong>prenom</strong> : {{ $contact['prenom'] }}</li>
          <li><strong>entreprise</strong> : {{ $contact['entreprise'] }}</li>
          <li><strong>adresse</strong> : {{ $contact['adresse'] }}</li>
          <li><strong>code_postal</strong> : {{ $contact['code_postal'] }}</li>
          <li><strong>ville</strong> : {{ $contact['ville'] }}</li>
          <li><strong>telephone</strong> : {{ $contact['telephone'] }}</li>
          <li><strong>email</strong> : {{ $contact['email'] }}</li>
          <li><strong>message</strong> : {{ $contact['message'] }}</li>
        </ul>
      </body>
    </html>

           