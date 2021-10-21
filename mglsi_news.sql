-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 oct. 2021 à 19:15
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mglsi_news`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text,
  `dateCreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `dateModification` datetime DEFAULT CURRENT_TIMESTAMP,
  `categorie` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie_article` (`categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `dateCreation`, `dateModification`, `categorie`, `image`) VALUES
(1, 'Première victoire du Sénégal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-06-16 13:48:02', '2021-10-17 04:50:29', 1, 'senegal.jpg'),
(2, 'Election en Mauritanie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-01-25 17:33:38', '2021-10-17 04:51:55', 17, 'election_mauritanie.jpg'),
(4, 'Pétrole au Sénégal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-09-25 17:33:38', '2021-10-17 04:54:22', 17, 'petrole_senegal.jpg'),
(5, 'Inauguration d\'un ENO à l\'UVS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-06-24 17:33:38', '2021-06-25 17:33:38', 3, 'uvs.jpg'),
(11, 'La France Champion du Monde', 'Les Bleus exultent après leur victoire contre la Croatie en finale de la Coupe du monde, à Moscou le 15 juillet. DYLAN MARTINEZ / REUTERS\r\nLe football français est longtemps passé pour un indécrottable romantique, dont on célébrait les glorieuses défaites, Séville 1982 par exemple, tandis que les autres nations accumulaient les titres. Fidèle à ce qu’il était sur le terrain, un travailleur de l’ombre et un apôtre de la victoire avant tout, Didier Deschamps a transformé son équipe de France en une terrible machine à gagner. Ironie de l’histoire, pour quelqu’un qui était surnommé « la Dèche » et a connu le cauchemar bulgare de 1993.\r\n\r\n\r\nDimanche 15 juillet, au stade Loujniki de Moscou, les Tricolores se sont montrés impitoyables (4-2) face à des Croates méritants, pour remporter le Mondial 2018. Pendant que le président russe Vladimir Poutine, enfin sorti de sa tanière, s’éloignait sous le déluge moscovite comme étranger à la joie tricolore, les joueurs français pouvaient brandir un trophée historique, vingt ans après les deux coups de tête victorieux de Zinédine Zidane au Stade de France. 1998-2018, le lien est tout trouvé : le capitaine Didier Deschamps devenu le sélectionneur Didier Deschamps.\r\n\r\nLa leçon de l’Euro 2016 a été bien apprise\r\nA défaut d’être impressionnante par son niveau de jeu, cette finale, décousue, a été la plus prolifique depuis l’unique sacre anglais à domicile face à la RFA en 1966 (4-2). Qu’importe la manière, dans dix ans, seule cette deuxième étoile ajoutée au maillot tricolore pendant l’été moscovite restera. La leçon de l’Euro 2016 a été bien apprise. Deschamps n’aime pas perdre et c’est certainement pour cela qu’il a presque tout gagné dans sa carrière : notamment deux Ligues des champions, un Euro et, désormais, deux Coupes du monde… « Une finale, cela se gagne, oui. Parce que celle qu’on a perdue il y a deux ans, on ne l’a toujours pas digérée », avait-il dit mardi soir.\r\n\r\nLes bras tendus vers le ciel et le poing rageur, le sélectionneur tricolore pouvait laisser exploser une joie mêlée à sa légendaire rage de vaincre. Après le Brésilien Mario Zagallo et l’Allemand Franz Beckenbauer, il peut désormais s’enorgueillir d’être le troisième à avoir gagné la Coupe du monde à la fois en tant que joueur et en tant qu’entraîneur.\r\n\r\nUne performance inimaginable pour celui qui, au départ, n’était jamais le meilleur footballeur, ni le meilleur entraîneur, mais qui a toujours su transmettre sa hargne et sa détermination à un groupe. « C’est tellement beau, tellement merveilleux, a-t-il exulté, Je suis super heureux pour ce groupe-là, car on est partis de loin quand même. Cela n’a pas été toujours simple, mais à force de travail, d’écoute… Là, ils sont sur le toit du monde pour quatre ans. »\r\n\r\nDidier Deschamps sonné après la victoire des Bleus, à Moscou le 15 juillet.\r\nSolidité défensive\r\nKylian Mbappé poursuit, lui, sa quête de records : à 19 ans, il est le deuxième plus jeune buteur en finale d’une Coupe du monde, derrière le Brésilien Pelé (en 1958). Sans forcément en être conscient, le Parisien, désigné meilleur jeune du tournoi, restera sur l’une des images fortes de ce mois de compétition, l’unique accroc à l’opération de communication maîtrisée du Kremlin : son high five avec l’une des quatre Pussy Riot, affublées d’un costume policier, et dont le mouvement a revendiqué l’envahissement de la pelouse en deuxième période.\r\n\r\nElu homme du match, parfois éclipsé par son jeune coéquipier, Antoine Griezmann a, lui, répondu présent au meilleur moment d’un coup franc précis sur le premier but, d’un penalty plein de sang-froid sur le deuxième et grâce, en général, à une performance éclatante tout au long des quatre-vingt-dix minutes.\r\n\r\nPlus globalement, comme sa devancière de 1998, cette équipe de France aura bâti son succès sur une solidité défensive insoupçonnée avant la compétition, à laquelle elle aura ajouté un jeu ultra-direct et rapide, redoutable pour forcer les défenses adverses.\r\n\r\nKylian Mbappé ne va pas tarder à faire un high five avec une Pussy Riot.\r\nUn mur de damiers rouge et blanc\r\nPourtant, cette finale, spécialement la première période, aura été paradoxalement l’un des matchs les moins aboutis des Bleus, depuis l’entame contre l’Australie, le 16 juin. Une ouverture du score contre son camp de Mario Mandzukic et un penalty contestable (une main d’Ivan Perisic qui semblait non intentionnelle) obtenu grâce à la VAR (arbitrage vidéo), voilà les deux maigres coups d’éclat qui ont permis aux Français de faire basculer la rencontre.\r\n\r\nLe troisième but tricolore, inscrit par Paul Pogba, au terme d’une contre-attaque, et la frappe chirurgicale de Kylian Mbappé pour le quatrième, n’ont été que la punition attendue et infligée à un adversaire qui, mené et épuisé par ses trois prolongations successives, devait dès lors se découvrir. En capitaine fair-play, le gardien Hugo Lloris a offert aux Croates, d’une relance calamiteuse, la réduction du score. Pas certain que cela suffise à les consoler, pas plus que le titre de meilleur joueur de la Coupe du monde attribué au capitaine Luka Modric.\r\n\r\nAux abords du stade Loujniki, comme à l’intérieur des tribunes de ce gigantesque stade, théâtre des Jeux de Moscou en 1980, les Français ont dû faire face à une forte adversité. Tout d’abord à la forte supériorité numérique des supporteurs croates, 10 000 balkaniques qui ont constitué un véritable mur de damiers rouge et blanc. Puis au soutien massif des autres spectateurs à l’outsider. Brésiliens, qui se voyaient en finale, Colombiens, Sud-Coréens ou Mexicains, beaucoup avouaient soutenir la Croatie.\r\n\r\nL’égale de l’Argentine et de l’Uruguay\r\n« Elle joue avec le cœur, avec plus de passion. Pour clôturer cette Coupe du monde folle, la victoire d’une équipe inattendue serait idéale. Mais je pense que la France va gagner, vous avez les meilleurs joueurs », prophétisait Leandro, venu de Rio avec ses amis. Les Bleus pouvaient tout de même compter sur quelques soutiens éparpillés, à l’image de Munzi, un Malaisien fanatique de Mbappé, ou de Kensuke, un Japonais qui arborait le maillot d’un certain Lilian Thuram, double buteur lors de la demi-finale du Mondial 1998 contre… la Croatie.\r\n\r\nAvec ce deuxième succès sur les six dernières Coupes du monde, l’équipe de France distance l’Angleterre et l’Espagne. Surtout, elle égale des nations de football telles que l’Uruguay et l’Argentine. Devant, il ne reste plus que l’Italie et l’Allemagne (quatre titres) et le Brésil (cinq titres). Nantis d’une moyenne d’âge de 25 ans et 10 mois, ces Bleus paraissent armés pour continuer à gagner.\r\n\r\nDidier Deschamps sera normalement encore aux commandes jusqu’à l’Euro 2020, au moins. Quoi de plus logique pour ce père la victoire, qui a su s’adapter à une jeune génération qui le lui rend à merveille, comme le prouve l’intrusion joyeuse et festive de ses joueurs en conférence de presse. « Excusez-les, ils sont jeunes et heureux », a résumé Deschamps, arrosé d’eau des pieds à la tête.', '2019-10-17 04:53:58', '2021-10-17 04:53:58', 1, 'CDM.jpg'),
(17, 'Vol de diamant', 'Un vol sans arme, ni haine, ni violence. Un homme a dérobé un diamant d’une valeur de 30.000 euros le week-end dernier dans une bijouterie de Saint-Tropez. Comme le relate France Bleu Provence, il s’est présenté peu avant la fermeture devant la boutique, avec l’apparence d’un touriste ne maîtrisant pas la langue française, et bien évidemment équipé d’un masque anti-Covid. Après avoir demandé à voir quelques bijoux, il s’arrête sur un diamant à 30.000 euros. Il propose de laisser un acompte et d’aller retirer le reste de la somme.\r\n\r\nMais lorsqu’il dépose le billet, il en profite pour dérober subtilement le fameux diamant. Ce n’est que plus tard, lorsque les employés veulent remettre le diamant à sa place qu’ils se rendent compte qu’il n’est plus là. Et l’homme déjà loin. Ce qui fait dire à une source proche de l’enquête qu’il s’agit là d’un vol « à la Arsène Lupin, comme dans la série ».', '2021-10-21 06:13:22', '2021-10-21 06:20:08', 6, '640x410_diamants-illustration.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Sport'),
(2, 'Santé'),
(3, 'Education'),
(14, 'Economie'),
(5, 'Informatique'),
(6, 'Faits divers'),
(17, 'Politique');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenoms` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `login`, `nom`, `prenoms`, `password`, `mail`, `type`) VALUES
(1, 'Karim', 'Sarr', 'Abdou Karim', 'passer', 'elou.aks@gmail.com', 'lambda'),
(4, 'elou', 'Sarr', 'Abdou Karim', 'passer', 'elou.aks@gmail.com', 'admin'),
(5, 'eloulouni', 'Diop', 'Abdou Karim54', 'passer', 'elou.aks@gmail.com11', 'lambda'),
(6, 'Login', 'Gassama', 'Abdou Karim54', 'passer', 'elou.aks@gmail.sa', 'lambda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
