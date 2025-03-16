<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdoul-aziz Mohamed - Expert en Cybersécurité</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Abdoul-aziz Mohamed</h1>
            <p>Expert en Cybersécurité et Data Science</p>
            <img src="im5.jpg">
            <div class="buttons">
                <a href="assets/CV-Aziz.pdf" download class="btn">Télécharger mon CV</a>
                <button id="toggle-dark-mode" class="btn">Mode sombre</button>
            </div>
        </div>
    </header>

    <section id="about" class="container">
        <h2><i class="fas fa-user"></i> À propos</h2>
        <p>
            Curieux, motivé et déterminé, je suis spécialisé en Cybersécurité et en fouille de données. 
            Titulaire d'un Master en Cybersécurité, j'ai approfondi mes connaissances dans des domaines 
            tels que le cloud computing, le cryptage de données, l'ethical hacking et le machine learning. 
            J'ai également travaillé sur des outils comme Zabbix, Hadoop, et des protocoles de sécurité 
            comme Kerberos et HBase.
        </p>
    </section>

    <section id="skills" class="container">
        <h2><i class="fas fa-list"></i> Compétences</h2>
        <ul>
            <li><i class="fas fa-check"></i> Langages de programmation : Java, C/C++, HTML, CSS, JavaScript, PHP, MySQL, Python</li>
            <li><i class="fas fa-check"></i> Outils : Zabbix, Hadoop, Docker, Spark, Kerberos</li>
            <li><i class="fas fa-check"></i> Certifications : Palo Alto Network Academy, Cisco CCNA Security, Machine Learning</li>
        </ul>
    </section>

    <section id="experience" class="container">
        <h2><i class="fas fa-briefcase"></i> Expérience professionnelle</h2>
        <div class="experience-item">
            <h3>Responsable du service Informatique</h3>
            <p>Garde-Côtes Djiboutienne | Depuis 2024</p>
            <ul>
                <li>Maintenance des serveurs et administration de la messagerie MS Exchange.</li>
                <li>Sécurisation des systèmes d'information avec des outils comme Fortinet, VPN et filtrage web.</li>
            </ul>
        </div>
        <div class="experience-item">
            <h3>Agent du service Informatique</h3>
            <p>Banque de Dépôt et Crédit de Djibouti (BDCD) | Novembre 2021 – Septembre 2024</p>
            <ul>
                <li>Administration des serveurs et des systèmes de surveillance IP CCTV.</li>
                <li>Mise en place de protocoles de sécurité (Kerberos, Zabbix) et de cryptage.</li>
            </ul>
        </div>
    </section>

    <section id="contact" class="container">
        <h2><i class="fas fa-envelope"></i> Contact</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Abdoul-aziz Mohamed. Tous droits réservés.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>