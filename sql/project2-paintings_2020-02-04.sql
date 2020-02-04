# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: project2-paintings
# Generation Time: 2020-02-04 16:23:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Paintings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Paintings`;

CREATE TABLE `Paintings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paintingName` varchar(150) DEFAULT NULL,
  `authorFirstName` varchar(25) DEFAULT NULL,
  `authorSecondName` varchar(25) DEFAULT NULL,
  `paintingCreationYear` int(4) unsigned DEFAULT NULL,
  `paintingMedium` varchar(60) DEFAULT NULL,
  `paintingImageLink` varchar(500) DEFAULT NULL,
  `paintingDescription` varchar(1000) DEFAULT NULL,
  `paintingCreationYearIsEstimate` tinyint(1) unsigned DEFAULT NULL,
  `paintingHeight` float unsigned DEFAULT NULL,
  `paintingWidth` float unsigned DEFAULT NULL,
  `metAssetLink` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Paintings` WRITE;
/*!40000 ALTER TABLE `Paintings` DISABLE KEYS */;

INSERT INTO `Paintings` (`id`, `paintingName`, `authorFirstName`, `authorSecondName`, `paintingCreationYear`, `paintingMedium`, `paintingImageLink`, `paintingDescription`, `paintingCreationYearIsEstimate`, `paintingHeight`, `paintingWidth`, `metAssetLink`)
VALUES
	(2,'Still life with Peaches','Auguste','Renoir',1881,'Oil on Canvas','assets/renoir-peaches.jpg','Reviewers of the 1882 Impressionist exhibition were dazzled by this \"very appealing\" still life of \"a certain fruit bowl of \'Peaches,\' whose velvety execution verges on a trompe l\'oeil.\" Painted the previous summer at the country house of Renoir?s patron Paul Berard, it is one of two still lifes that feature the same faïence jardinière.',0,21,25.5,'https://www.metmuseum.org/art/collection/search/437429?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=0&amp;rpp=20&amp;pos=18'),
	(3,'A Farm in Brittany','Paul','Gauguin',1894,'Oil on Canvas','assets/gauguin-farm.jpg','From early in his career Gauguin was attracted to the relatively remote and unspoiled terrain of Brittany in northwestern France. Breton culture, infused with vestiges of its pagan Celtic past, appealed to his taste for the primitive and the exotic. The artist is thought to have made this work during his fifth and final visit to the region in 1894, between voyages to the tropics.',1,28.5,35.63,'https://www.metmuseum.org/art/collection/search/436448?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=40&amp;rpp=20&amp;pos=52'),
	(4,'The Repast of the Lion','Henri','Rousseau (le Douanier)',1907,'Oil on Canvas','assets/rousseau-lion.jpg','This work was probably shown in the Salon d\'Automne of 1907, but it treats a theme that Rousseau first explored in Surprised! of 1891 (National Gallery, London). He based the exotic vegetation of his many jungle pictures on studies that he made in Paris?s botanical gardens, and adapted the wild beasts from popular ethnographic journals and illustrated children\'s books.',1,44.75,63,'https://www.metmuseum.org/art/collection/search/438822?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=160&amp;rpp=20&amp;pos=177'),
	(5,'Young Woman Knitting','Berthe','Morisot',1883,'Oil on Canvas','assets/morisot-youngwoman.jpg','Morisot, who exhibited with the Impressionists between 1874 and 1886, painted a number of figures out-of-doors in which she tried to achieve the same informal and spontaneous appearance as her watercolors and pastels. The light palette and the modelling of form through touches of color in this work of about 1883 are characteristic.\n',1,19.75,23.63,'https://www.metmuseum.org/art/collection/search/437159?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=120&amp;rpp=20&amp;pos=130'),
	(6,'Fishing','Edouard','Manet',1862,'Oil on Canvas','assets/manet-fishing.jpg','Patterned after elements in landscapes by Peter Paul Rubens, the present painting gives currency to Delacroix\'s recommendation to Manet: \"Look at Rubens, draw inspiration from Rubens, copy Rubens. Rubens was God.\" Manet and his future wife, Suzanne Leenhoff, are the couple at lower right dressed in seventeenth-century costume and posed like Rubens and his wife in the Flemish painter\'s Park of the Château de Steen (Kunsthistorisches Museum, Vienna).',1,30.25,48.5,'https://www.metmuseum.org/art/collection/search/436951?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=200&amp;rpp=20&amp;pos=207'),
	(7,'Madame C&eacute;zanne (Hortense Fiquet, 1850-1922) in the Conservatory','Paul','C&eacute;zanne',1891,'Oil on Canvas','assets/cezanne-wife.jpg','Hortense Fiquet, a former artist\'s model, met Cézanne about 1869; they had a son in 1872, fourteen years before they married. This painting, one of more than two dozen for which Hortense posed, is set in the conservatory of Jas de Bouffan, the Cézanne family estate near Aix. The unfinished canvas offers a revealing glimpse into Cézanne?s working method. He placed Madame Cézanne?s carefully modeled head slightly off-center, cradled between a lush tree and a spindly plant, and then proceeded to build up the rest of the pyramidal composition, touch by exacting touch. ',0,36.25,28.75,'https://www.metmuseum.org/art/collection/search/435875?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=280&amp;rpp=20&amp;pos=282'),
	(8,'The Monet Family in Their Garden at Argenteuil\n','Edourard','Manet',1874,'Oil on Canvas','assets/manet-family.jpg','In July and August 1874 Manet vacationed at his family?s house in Gennevilliers, just across the Seine from Monet at Argenteuil. The two painters saw each other often that summer, and on a number of occasions they were joined by Renoir. While Manet was painting this picture of Monet with his wife Camille and their son Jean, Monet painted Manet at his easel (location unknown). Renoir, who arrived just as Manet was beginning to work, borrowed paint, brushes, and canvas, positioned himself next to Manet, and painted Madame Monet and Her Son (National Gallery of Art, Washington, D.C.).',0,24,39.25,'https://www.metmuseum.org/art/collection/search/436965?searchField=All&amp;sortBy=Relevance&amp;showOnly=openAccess&amp;ft=impressionist&amp;offset=40&amp;rpp=20&amp;pos=41'),
	(9,'Cypresses','Vincent','Van Gogh',1889,'Oil on Canvas','assets/vangogh-cypresses.jpg','Cypresses was painted in late June 1889, shortly after Van Gogh began his yearlong stay at the asylum in Saint-Rémy. The subject, which he found \"beautiful as regards lines and proportions, like an Egyptian obelisk,\" both captivated and challenged the artist: \"It?s the dark patch in a sun-drenched landscape, but it?s one of the most interesting dark notes, the most difficult to hit off exactly that I can imagine.\"',0,36.25,29.13,'https://www.metmuseum.org/art/collection/search/437980'),
	(10,'Wheat Field with Cypresses','Vincent','Gogh',1889,'Oil on Canvas','assets/vangogh-wheatfield.jpg','Cypresses gained ground in Van Gogh?s work by late June 1889 when he resolved to devote one of his first series in Saint-Rémy to the towering trees. Van Gogh regarded the present work as one of his ?best? summer landscapes and was prompted that September to make two studio renditions: one on the same scale (National Gallery, London) and the other a smaller replica, intended as a gift for his mother and sister (private collection).',0,28.88,36.75,'https://www.metmuseum.org/art/collection/search/436535'),
	(11,'Gardanne','Paul ','C&eacute;zanne',1885,'Oil on Canvas','assets/cezanne-gardanne.jpg','This is one of three views of Gardanne, a hill town near Aix-en-Provence where Cézanne worked from the summer of 1885 through the spring of 1886. The steeple of the local church crowns the cluster of red-roofed buildings which animate the sloping terrain. Faceted and geometric, the structures anticipate early-twentieth-century Cubism.',1,31.5,25.25,'https://www.metmuseum.org/art/collection/search/435871'),
	(12,'Dish of Apples','Paul ','C&eacute;zanne',1876,'Oil on Canvas','assets/cezanne-apples.jpg','This rich and dense still life, featuring a napkin shaped like Mont Sainte-Victoire, was painted about 1876?77 in the house of Cézanne\'s father in Aix. The decorative screen visible in the background was long thought to have been made by the artist in his youth.',1,18.13,21.75,'https://www.metmuseum.org/art/collection/search/437989');

/*!40000 ALTER TABLE `Paintings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
