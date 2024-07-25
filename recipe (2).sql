-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 05:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`) VALUES
(1, 'Breakfast', '2024-07-15'),
(5, 'Lunch', '2024-07-15'),
(7, 'Dinner', '2024-07-16'),
(13, 'dd', '2024-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`) VALUES
(1, '09678818461', 'wowfood@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE `cuisines` (
  `id` int(11) NOT NULL,
  `cuisineName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuisines`
--

INSERT INTO `cuisines` (`id`, `cuisineName`) VALUES
(1, 'Italian Food'),
(2, 'Korean Food'),
(15, 'Japanese Food'),
(16, 'Burmese Food'),
(19, 'a Food');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `cuisineId` int(11) NOT NULL,
  `imagefile` varchar(225) NOT NULL,
  `totaltime` varchar(225) NOT NULL,
  `preparetime` varchar(225) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ingredient` varchar(1000) NOT NULL,
  `step1` varchar(1000) NOT NULL,
  `step2` varchar(1000) NOT NULL,
  `step3` varchar(1000) NOT NULL,
  `tips` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `categoryId`, `cuisineId`, `imagefile`, `totaltime`, `preparetime`, `description`, `ingredient`, `step1`, `step2`, `step3`, `tips`, `date`) VALUES
(11, 'Bread Pudding', 1, 1, '1721473922bread.jpg', '50 minutes', '25 mins', '                                                                                                                                                                                                                                                                                                                                                                                                        Italian-style bread pudding is a delightful dessert made from stale bread soaked in a rich custard mixture, flavored with vanilla and citrus zest. It\'s baked until golden and slightly crispy on the outside while remaining soft and creamy inside. This comforting dessert is perfect for utilizing leftover bread and makes for a sweet end to any meal.                                                                                                                                                                                                                                                                    ', '                                                                                                                                                                                                                                                                                                                                                                                                     4 cups of stale Italian bread cubed ,need 2 cups of milk ,1 cup of heavy cream ,1 cup of granulated sugar ,4 large eggs ,one teaspoon of vanilla extract ,Zest of 1 lemon ,Zest of 1 orange ,1/2 cup of raisins (optional) ,1/4 teaspoon of ground nutmeg,Pinch of salt,2 tablespoons of unsalted butter, melted\r\nPowdered sugar, for dusting                                                                                                               ', '                                                                                                                                                                                                                                                                                                                                                                                                        Preheat your oven to 350°F (175°C). Grease a 9x13-inch baking dish with a little butter. In a large bowl, combine the milk, heavy cream, and granulated sugar. Whisk until the sugar is dissolved. Add the eggs, vanilla extract, lemon zest, orange zest, ground cinnamon, ground nutmeg, and a pinch of salt. Whisk until everything is well combined.                                                                                                                                                                                                                                                                        ', '                                                                                                                                                                                                                                                                                                                                                                                                                                    Add the cubed bread to the custard mixture, gently pressing the bread down to ensure it absorbs the liquid. Let it sit for about 10-15 minutes, allowing the bread to soak up the custard. If you\'re using raisins, fold them into the mixture after the soaking period.  \r\n                              \r\n                              \r\n                              \r\n                              \r\n                              \r\n                              \r\n                              \r\n                              \r\n                              \r\n                        ', '                                                                                                                                                                                                                                Transfer the bread mixture to the prepared baking dish, spreading it out evenly. Drizzle the melted butter over the top. Bake in the preheated oven for 45-50 minutes, or until the top is golden brown and a knife inserted into the center comes out clean. Let it cool slightly before serving. Dust with powdered sugar before serving.                                                                                                                                                                                                                                                                                            ', '                                                                                                                                                                                                                                For added flavor, you can sprinkle some chocolate chips or chopped nuts into the bread mixture.\r\nServe the bread pudding warm with a scoop of vanilla ice cream or a dollop of whipped cream.                                                                                                                                                                                                                                                                                        ', '0000-00-00'),
(12, 'Lasagna', 5, 1, '1721473886Lasagna.jpg', '1 hour 30 minutes', '30 minutes', '                                                                                                                                            Classic Italian comfort food, lasagna features layers of pasta, rich meat sauce, creamy béchamel, and melted cheese, baked to perfection.                                                                                                                                            ', '                                                                                                                                            2 teaspoons olive oil, 1 pound ground beef, 1 teaspoon salt, 1 (6 ounce) package no-boil lasagna noodles, broken into large pieces, 1 ½ cups marinara sauce, 2 cups fresh spinach, 1 (8 ounce) package shredded mozzarella cheese, 1 (8 ounce) package soft goat cheese                                                                                                                                            ', '                                                                                                                                            Turn on a multi-cooker (such as Instant Pot) and the select Saute function. Heat olive oil; add ground beef and salt. Cook, breaking it into clumps with a spatula, until thoroughly browned, about 6 minutes. Transfer beef to a bowl. Wash the pot and return it to the machine.Pour 1 1/2 cup water into the pot. Set the metal trivet inside.                                                                                                                                            ', '                                                                                                                                                      Arrange lasagna pieces over the bottom of a 6-inch springform pan. Ladle 1/3 the tomato sauce on top; add 1/3 of the cooked beef and 1/3 of the fresh spinach. Dollop 1/2 the mozzarella cheese on top. Repeat layers using 1/2 the goat cheese. Repeat once more, finishing with remaining mozzarella and goat cheese on top.\r\n\r\n  \r\n                              \r\n                              \r\n                              \r\n                              \r\n                            ', '                                                                                                                                                  Arrange lasagna pieces over the bottom of a 6-inch springform pan. Ladle 1/3 the tomato sauce on top; add 1/3 of the cooked beef and 1/3 of the fresh spinach. Dollop 1/2 the mozzarella cheese on top. Repeat layers using 1/2 the goat cheese. Repeat once more, finishing with remaining mozzarella and goat cheese on top.\r\n\r\n  \r\n                              \r\n                              \r\n                                                                                    ', '                                                                                                                                                  Arrange lasagna pieces over the bottom of a 6-inch springform pan. Ladle 1/3 the tomato sauce on top; add 1/3 of the cooked beef and 1/3 of the fresh spinach. Dollop 1/2 the mozzarella cheese on top. Repeat layers using 1/2 the goat cheese. Repeat once more, finishing with remaining mozzarella and goat cheese on top.\r\n\r\n  \r\n                              \r\n                              \r\n                                                                                    ', '0000-00-00'),
(13, 'Spaghetti Skillet', 7, 1, 'spaghetti.jpg', '20 minutes', '10 minutes', '                                                                                    Spaghetti skillet is a quick and flavorful Italian dish where spaghetti is cooked with a savory tomato sauce, ground beef (or sausage), and vegetables, all in one skillet.                                                                                                               ', '                            8 ounces spaghetti, 1 pound ground beef or Italian sausage, 1 onion, 2 cloves garlic,1 bell pepper, \r\n1 can (14.5 ounces) diced tomatoes,\r\n1 can (8 ounces) tomato sauce,\r\n1 teaspoon dried oregano,\r\n1 teaspoon dried basil,\r\nSalt and pepper to taste,\r\n1 cup shredded mozzarella cheese,\r\nFresh basil or parsley for garnish (optional)                                                                                    ', '                                                                                    Cook spaghetti according to package instructions until al dente. Drain and set aside.\r\nIn a large skillet, cook ground beef (or sausage) over medium-high heat until browned and cooked through, breaking it up with a spoon as it cooks.\r\nAdd diced onion, minced garlic, and diced bell pepper to the skillet. Cook for 3-4 minutes until vegetables are softened.                                                                                    ', '                                                                                          Stir in diced tomatoes (with juices) and tomato sauce into the skillet.\r\nSeason with dried oregano, dried basil, salt, and pepper. Stir well to combine.\r\nLet the sauce simmer for 5-7 minutes to blend flavors, stirring occasionally.                       \r\n                              \r\n                              \r\n                            ', '                                                                                    Add cooked spaghetti to the skillet with the sauce. Toss everything together until the spaghetti is well coated with the sauce.\r\nSprinkle shredded mozzarella cheese over the top of the spaghetti skillet.\r\nCover the skillet with a lid and let it sit for a few minutes until the cheese melts.\r\nGarnish with fresh basil or parsley if desired.                                                                                    ', '                                                                                    Feel free to customize the vegetables based on what you have or prefer. Mushrooms, zucchini, or spinach can be great additions.\r\nFor extra spice, add a pinch of red pepper flakes or a dash of hot sauce to the sauce.\r\nServe with a side of garlic bread or a simple green salad for a complete meal.                                                                                    ', '0000-00-00'),
(14, 'Authentic Miso Soup', 1, 15, 'miso.webp', '10 minutes', '5 minutes', '                                                        Miso soup is a traditional Japanese soup made with dashi broth and miso paste, typically containing tofu, seaweed, and green onions.                                                                              ', '                                                        4 cups dashi broth (you can use instant dashi powder),\r\n3 tablespoons miso paste (white or red to taste),\r\n1 block tofu cut into small cubes,\r\n2-3 tablespoons dried wakame seaweed,\r\n2 green onions thinly sliced\r\n                                                    ', '                                                        If using instant dashi powder, follow the package instructions to dissolve it in hot water. If making dashi from scratch, soak a piece of kombu (dried kelp) in 4 cups of water for at least 30 minutes, then bring to a simmer. Remove the kombu and add about a handful of bonito flakes. Simmer for 5 minutes, then strain.\r\n                                                              ', '                                                            Add the cubed tofu and rehydrated wakame seaweed to the dashi broth. Simmer gently for 2-3 minutes until tofu is heated through.\r\nIn a small bowl, dissolve the miso paste in a few tablespoons of hot broth from the pot. Stir until smooth and there are no lumps.  \r\n                              \r\n                            ', '                                                        Turn off the heat under the soup. Add the dissolved miso paste into the pot and gently stir to incorporate. Avoid boiling the soup once miso is added to preserve its flavor\r\nLadle the miso soup into bowls. Garnish with thinly sliced green onions and any additional toppings like mushrooms, shrimp, or spinach if desired.                                                        ', '                                                        Adjust the amount of miso paste to your taste preference. Start with less and add more gradually until you reach the desired flavor.\r\nDo not boil miso soup after adding miso paste as it can destroy its delicate flavor.\r\nFor a heartier version, you can add cooked soba noodles or udon noodles to the soup.\r\nMiso soup is best enjoyed fresh and hot, shortly after it\'s made.                                                        ', '0000-00-00'),
(15, 'Shrimp Fried Rice', 5, 15, 'Shrimp.webp', '20 minutes', '10 minutes', '                            A delicious fusion of Italian and Asian cuisines, this Shrimp Fried Rice combines the flavors of Italian herbs and spices with the classic elements of fried rice. It\'s a quick and flavorful dish perfect for a weeknight dinner or a special occasion.                                                                                                                                                       ', '                                                                                                                1 cup long-grain rice, \r\n1/2 pound medium shrimp,\r\n2 tablespoons olive oil,\r\n1 small onion finely chopped,\r\n2 cloves garlic minced,\r\n1 red bell pepper diced,\r\n1 zucchini diced,\r\n1 cup cherry tomatoes halved,\r\n1/2 cup frozen peas thawed,\r\n1/4 cup grated Parmesan cheese,\r\n1 teaspoon dried oregano,\r\n1 teaspoon dried basil,\r\nSalt and pepper to taste,\r\nFresh basil leaves for garn                            ', '                                                                                                                Heat 1 tablespoon of olive oil in a large skillet or wok over medium-high heat. Add the shrimp and cook for 2-3 minutes on each side until they are pink and opaque. Remove the shrimp from the skillet and set aside.\r\nIn the same skillet, add the remaining tablespoon of olive oil. Add the chopped onion and garlic, and sauté for 2-3 minutes until the onion is translucent.                                                                                                                          ', '                                                                                                                        Add the diced red bell pepper and zucchini to the skillet. Cook for another 4-5 minutes until the vegetables are tender.\r\nStir in the halved cherry tomatoes and thawed peas. Cook for an additional 2 minutes until the tomatoes are softened.  \r\n                              \r\n                              \r\n                              \r\n                            ', '                                                                                                                Add the cooked rice to the skillet, stirring to combine with the vegetables. Season with dried oregano, dried basil, salt, and pepper.\r\nReturn the cooked shrimp to the skillet and stir to combine. Cook for another 2-3 minutes until everything is heated through.\r\nSprinkle the grated Parmesan cheese over the top and stir to combine.\r\nGarnish with fresh basil leaves before serving.                                                                                                                   ', '                                                                                                                Use leftover rice or cook the rice ahead of time and let it cool completely. Cold rice works best for fried rice as it prevents clumping and sticking.\r\nFor a richer flavor, you can use Pecorino Romano cheese instead of Parmesan.                                                                                                                         ', '0000-00-00'),
(16, 'Simple Roasted Edamame', 5, 15, 'roastedEdamame.webp', '20 minutes', '5 minutes', '                            Simple Roasted Edamame is a crunchy and flavorful Japanese snack made from young soybeans, roasted with seasonings until crispy.                            ', '                            1 (12 ounce) package frozen edamame (soybeans) in their pods,\r\n2 tablespoons extra-virgin olive oil,\r\n2 cloves garlic minced,\r\n1 teaspoon sea salt,\r\n½ teaspoon ground black pepper ,                           ', '                            Preheat oven to 375 degrees F (190 degrees C).                            ', '                              Toss edamame, olive oil, garlic, sea salt, and black pepper together in a large bowl until well-coated. Spread in a single layer on a baking sheet.  \r\n                            ', '                            Roast in the preheated oven, stirring halfway through, until edamame shells start to brown, about 20 minutes. Serve whole, popping beans out of the shell to eat.                            ', '                            You can adjust the seasonings to your taste preferences. Try adding other spices like smoked paprika, cayenne pepper, or cumin for different flavor variations.                            ', '0000-00-00'),
(17, 'Ahi Tuna Poke', 7, 15, 'tunAP.webp', '2 hour', '15 minutes', '                            Ahi Tuna Poke is a popular Hawaiian and Japanese dish featuring fresh raw tuna marinated in a savory soy sauce-based sauce, served over rice with various toppings.                            ', '                            1 pound sushi-grade ahi tuna cubed,\r\n1/4 cup soy sauce,\r\n1 tablespoon sesame oil,\r\n1 tablespoon rice vinegar,\r\n1 teaspoon grated fresh ginger,\r\n2 green onions thinly sliced,\r\n1/2 teaspoon sesame seeds,\r\nOptional toppings: avocado slices, cucumber, edamame, seaweed salad, tobiko (flying fish roe), sliced radishes                            ', '                            n a small bowl, whisk together soy sauce, sesame oil, rice vinegar, and grated ginger.\r\nPour the marinade over the cubed tuna. Gently toss to coat the tuna evenly. Cover and refrigerate for about 15-30 minutes to let the flavors meld. (Note: Poke is typically served with minimal marinating time to maintain the freshness of the fish.)                            ', '                              While the tuna is marinating, prepare any additional toppings you\'d like to serve with your poke, such as sliced avocado, cucumber, or seaweed salad.  \r\n                            ', '                            To serve, place a scoop of cooked sushi rice or salad greens in a bowl or on a plate.\r\nArrange the marinated tuna cubes on top of the rice or greens.\r\nGarnish with sliced green onions, sesame seeds, and any other toppings you prepared.                            ', '                            Use high-quality sushi-grade tuna for the best flavor and texture.\r\nCustomize your poke bowl with your favorite toppings and additional sauces, like spicy mayo or sriracha aioli.\r\nServe Ahi Tuna Poke immediately after assembling for the freshest taste and texture.\r\nYou can adjust the marinade to your taste preferences by adding more or less soy sauce, sesame oil, or vinegar.                            ', '0000-00-00'),
(18, 'Chicken Wings', 5, 2, 'chickenWings.webp', '35-40 minutes', '15 minutes', '                            Korean Chicken Wings are crispy fried wings coated in a sticky, spicy-sweet sauce, typically made with ingredients like gochujang (Korean chili paste), soy sauce, honey, and garlic.                            ', '                            2 pounds chicken wings, \r\n1/4 cup soy sauce,\r\n2 tablespoons gochujang (Korean chili paste),\r\n2 tablespoons honey,\r\n2 cloves garlic minced,\r\n1 tablespoon sesame oil,\r\n1 tablespoon rice vinegar,\r\n1 tablespoon sesame seeds for garnish,\r\nSliced green onions for garnish,\r\nVegetable oil for frying,\r\nSalt and pepper to taste,                            ', '                            Pat the chicken wings dry with paper towels. Season with salt and pepper\r\nIn a bowl, whisk together soy sauce, gochujang, honey, minced garlic, sesame oil, and rice vinegar until well combined.                            ', '                              Heat vegetable oil in a large skillet or deep fryer to 350°F (175°C).\r\nCarefully add the chicken wings in batches and fry until golden brown and cooked through, about 8-10 minutes per batch. Drain on paper towels.\r\nIn a large bowl, toss the fried chicken wings with the prepared sauce until evenly coated.  \r\n                            ', '                            Transfer the coated wings to a serving plate.\r\nSprinkle sesame seeds and sliced green onions over the top for garnish.                            ', '                            Adjust the amount of gochujang to your spice preference. Add more for a spicier kick or reduce for a milder flavor.\r\nFor a healthier alternative, you can bake the chicken wings instead of frying them. Arrange seasoned wings on a baking sheet lined with parchment paper, and bake in a preheated oven at 400°F (200°C) for about 40-45 minutes or until crispy and cooked through. Toss with the sauce after baking.                            ', '0000-00-00'),
(19, 'Tteokbokki', 1, 2, 'tokebboki.webp', '30 minutes', '10 minutes', '                            Tteokbokki is a popular Korean street food made with chewy rice cakes simmered in a spicy, savory sauce made primarily from gochujang (Korean chili paste) and other seasonings.                            ', '                            1 pound Korean rice cakes (tteok) cylindrical shape preferred,\r\n4 cups water,\r\n1/2 cup Korean fish cakes (optional) sliced into bite-sized pieces,\r\n1/2 cup cabbage or napa cabbage, thinly sliced,\r\n2-3 green onions cut into 2-inch lengths,\r\n1 tablespoon vegetable oil,\r\n1 tablespoon gochujang (Korean chili paste),\r\n1 tablespoon soy sauce,\r\n1 tablespoon sugar,\r\n1 teaspoon minced garlic,\r\n1 teaspoon gochugaru (Korean chili flakes, optional for additional spice),\r\n1 teaspoon sesame oil,\r\nSesame seeds', '                            Soak the rice cakes in cold water for about 10-15 minutes to soften them slightly.\r\nIn a bowl, mix together gochujang, soy sauce, sugar, minced garlic, gochugaru (if using), and sesame oil until smooth. Adjust spice level to taste.\r\nHeat vegetable oil in a large pan or wok over medium heat. Add the Korean fish cakes (if using) and stir-fry for 1-2 minutes.                            ', '                              Add the sliced cabbage and green onions to the pan. Stir-fry for another 2-3 minutes until slightly softened.\r\nDrain the soaked rice cakes and add them to the pan along with 4 cups of water. Bring to a boil.\r\nReduce the heat to medium-low. Pour the prepared sauce over the rice cakes and stir gently to coat everything evenly.  \r\n                            ', '                            Simmer uncovered for about 10-15 minutes, stirring occasionally, until the rice cakes are tender and the sauce has thickened to your desired consistency.\r\nTransfer the Tteokbokki to a serving dish. Garnish with sesame seeds and extra green onions.                            ', '                            Adjust the sweetness and spiciness of the sauce by varying the amount of sugar and gochugaru.\r\nIf you prefer a thicker sauce, mix a tablespoon of cornstarch with water and add it to the simmering Tteokbokki until it thickens.\r\nTteokbokki is traditionally served hot as a snack or light meal. It pairs well with a side of kimchi and can be enjoyed with a refreshing drink like Korean barley tea (boricha).                            ', '0000-00-00'),
(20, 'Kimchi', 7, 2, 'Kimchi.webp', '4 days 6 hrs(additinal time)', '1 hr', '                             Kimchi is a traditional Korean side dish made from fermented vegetables, typically Napa cabbage and Korean radishes, seasoned with chili pepper flakes, garlic, ginger, and other spices.                            ', '                            1 large Napa cabbage (about 2 pounds),\r\n1/2 cup coarse sea salt,\r\n4 cups water (for brining),\r\n1 small Korean radish (or daikon radish) peeled and julienned,\r\n4 green onions cut into 1-inch pieces,\r\n1/4 cup fish sauce (or Korean salted shrimp paste for traditional version),\r\n1/4 cup Korean red chili pepper flakes (gochugaru),\r\n3 cloves garlic minced,\r\n1 teaspoon grated fresh ginger,\r\n1 tablespoon sugar,\r\n1 tablespoon soy sauce (optional),\r\n1 teaspoon salt                            ', '                            Cut cabbages in half lengthwise and trim the ends. Rinse and cut into pieces about 2 inch square. Place cabbage into large resealable bags; sprinkle salt evenly over leaves to coat. Use your hands to rub salt into cabbage. Seal the bags and leave at room temperature for 6 hours.                            ', '                              Rinse cabbage leaves under cold water, at least 2 to 3 times, to remove most of the salt; drain and squeeze out any excess liquid.\r\nPlace rinsed cabbage in a large container with a tight fitting lid. Stir in fish sauce, green onions, white onion, garlic, sugar, and ginger. Sprinkle Korean chile powder over mixture.; wear plastic gloves to protect your hands and rub chile powder into cabbage leaves until evenly coated.\r\n  \r\n                            ', '                            Seal the container and set in a cool dry place. Leave undisturbed for 4 days. Refrigerate before serving, and store in the refrigerator for up to 1 month (if it lasts that long!).                            ', '                            Use gloves when handling chili pepper flakes (gochugaru) to avoid irritation.\r\nAdjust the amount of chili pepper flakes to your desired spice level.\r\nKimchi improves in flavor with age. It can be kept in the refrigerator for several weeks to months, developing deeper flavors as it ferments.                            ', '0000-00-00'),
(21, 'Mohingar', 1, 16, 'Mohingar.webp', '1 hour', '30 minutes', '                            Mohingar is a popular Burmese breakfast dish consisting of rice noodles in a fish-based broth, flavored with lemongrass, ginger, and other aromatics, topped with various garnishes.                            ', '                            1 pound rice vermicelli noodles,\r\n1 pound fish (such as catfish or snakehead fish),\r\n6 cups water,\r\n4 stalks lemongrass bruised and chopped into segments,\r\n1 inch piece of ginger,\r\n4 cloves garlic,\r\n1 onion,\r\n3 tablespoons fish sauce,\r\n1 teaspoon turmeric powder,\r\n1 teaspoon paprika powder,\r\n1/2 teaspoon chili powder (adjust to taste),\r\nSalt,\r\nCooking oil,\r\nGarnishes: hard-boiled eggs (sliced), fried chickpea fritters (pè byouk), sliced onions                             ', '                            In a large pot, heat some cooking oil over medium heat. Add minced garlic, sliced ginger, and sliced onion. Sauté until fragrant.\r\nAdd the fish chunks to the pot and cook for about 5 minutes until lightly browned.\r\nPour in 6 cups of water and bring to a boil. Reduce the heat and simmer for 30-40 minutes until the fish is fully cooked and tender.                            ', '                              While the broth is simmering, cook the rice vermicelli noodles according to the package instructions. Drain and set aside.\r\nRemove the cooked fish from the broth and set aside. Add fish sauce, turmeric powder, paprika powder, chili powder, and salt to taste to the broth. Stir well and simmer for another 10-15 minutes to blend flavors.  \r\n                            ', '                            To serve, divide the cooked noodles into bowls. Ladle the hot fish broth over the noodles.\r\nTop each bowl with pieces of cooked fish, sliced hard-boiled eggs, fried chickpea fritters, sliced onions, cilantro, a squeeze of lime juice, fried garlic, and crispy fried yellow split peas.                            ', '                            Mohingar is traditionally eaten for breakfast in Myanmar but can be enjoyed at any time of day.                            ', '0000-00-00'),
(22, 'Nga Htamin (Fish Rice)', 7, 16, 'NgaHtamin.jfif', '30 minutes', ' 20 minutes', '                            Nga Htamin is a traditional Burmese dish that combines steamed rice with fish, flavored with turmeric, garlic, and a variety of spices. This savory and aromatic dish is typically garnished with crispy onions, fresh herbs, and sometimes served with a side of pickled vegetables.                            ', '                            2 cups jasmine rice,\r\n2 cups water,\r\n1 cup coconut milk,\r\n1 lb fish fillets (tilapia or any white fish),\r\n1 teaspoon turmeric powder,\r\n1 teaspoon salt,\r\n1 tablespoon fish sauce,\r\n1 tablespoon vegetable oil,\r\n1 medium onion,\r\n4 cloves garlic,\r\n1-inch piece of ginger,\r\n2 green chilies,\r\n1 bunch fresh cilantro,\r\n1 bunch fresh mint,\r\n1 lime cut into wedges                           ', '                            Rinse the jasmine rice under cold water until the water runs clear.\r\nIn a pot, combine the rice, water, and coconut milk. Bring to a boil, then reduce the heat to low, cover, and simmer for 15-20 minutes until the rice is cooked and the liquid is absorbed. Set aside.                            ', '                              While the rice is cooking, season the fish fillets with turmeric powder and salt.\r\nIn a large skillet, heat the vegetable oil over medium heat. Add the fish fillets and cook for 3-4 minutes on each side until the fish is cooked through and flakes easily. Remove the fish from the skillet and set aside.  \r\n                            ', '                            In the same skillet, add the sliced onion, minced garlic, and minced ginger. Sauté until the onions are soft and golden brown.\r\nAdd the cooked rice to the skillet with the onions, garlic, and ginger. Gently fold in the fish fillets, breaking them into bite-sized pieces.\r\nStir in the fish sauce and sliced green chilies. Cook for another 2-3 minutes until everything is heated through.                            ', '                            For an extra burst of flavor, garnish the dish with fresh cilantro, mint, and a squeeze of lime juice just before serving.\r\nFried onions and garlic can be added on top for added texture and flavor.\r\nAdjust the amount of green chilies according to your spice preference.\r\nNga Htamin can be served with a side of fresh vegetables or a simple salad for a complete meal.                            ', '0000-00-00'),
(24, 'Pub Burger', 5, 1, 'Burgers.png', '25 minutes', '15 minutes', '                            Italian Pub Burgers are a delightful fusion of classic American burgers and rich Italian flavors. These burgers are made with ground beef mixed with Italian herbs and spices, topped with melted mozzarella cheese, fresh basil, and a tangy marinara sauce, all nestled in a toasted ciabatta bun. Perfect for a casual meal with a gourmet twist!                            ', '                            1 lb ground beef,\r\n1/4 cup grated Parmesan cheese,\r\n2 cloves garlic,\r\n1 tablespoon Italian seasoning,\r\n1/2 teaspoon salt,\r\n1/4 teaspoon black pepper,\r\n4 slices mozzarella cheese,\r\n4 ciabatta buns,\r\n1 cup marinara sauce,\r\nFresh basil leaves,\r\nOlive oil for brushing buns                            ', '                            In a large bowl, combine the ground beef, grated Parmesan cheese, minced garlic, Italian seasoning, salt, and black pepper.\r\nMix well until all ingredients are evenly incorporated.\r\nDivide the mixture into 4 equal portions and shape each into a patty.                            ', '                              Preheat a grill or skillet over medium-high heat.\r\nCook the patties for about 5-6 minutes on each side, or until they reach your desired level of doneness.\r\nDuring the last minute of cooking, place a slice of mozzarella cheese on each patty to melt.  \r\n                            ', '                            While the patties are cooking, brush the ciabatta buns with olive oil and toast them on the grill or in a skillet until golden brown.\r\nSpread a generous amount of marinara sauce on the bottom half of each toasted bun.\r\nPlace the cooked patties with melted cheese on top of the marinara sauce.\r\nAdd fresh basil leaves on top of the patties.\r\nCover with the top half of the ciabatta buns.                            ', '                            Use high-quality ground beef with an 80/20 lean-to-fat ratio for juicy and flavorful burgers.                            ', '0000-00-00'),
(25, 'Pickled Tea Leaves (Lahpet)', 1, 16, 'tea.webp', '10 minutes', '30 minutes (excluding fermentation time)', 'Lahpet, or Burmese pickled tea leaves, is a traditional and unique Burmese delicacy often used in salads and as a condiment. This tangy, slightly bitter, and savory treat is made from fermented tea leaves and is a quintessential part of Burmese cuisine. It is typically enjoyed in a dish known as Lahpet Thoke (Tea Leaf Salad).', '1 cup dried green tea leaves,\r\n2 cups water,\r\n1 teaspoon salt,\r\n2 tablespoons vegetable oil,\r\n1 tablespoon lime juice,\r\n1 tablespoon fish sauce,\r\n1 tablespoon minced garlic,\r\n1 teaspoon grated ginger,\r\n1 teaspoon chili flakes (optional),\r\n1 tablespoon toasted sesame seeds,\r\n1 tablespoon fried garlic,\r\n1 tablespoon fried shallots,\r\n1 tablespoon roasted peanuts, ', 'Rinse the dried green tea leaves thoroughly under cold water to remove any dust or impurities.\r\nIn a medium saucepan, bring the water to a boil. Add the tea leaves and simmer for about 10 minutes until they are tender.\r\nDrain the tea leaves and rinse them under cold water. Squeeze out any excess water and finely chop the leaves.', 'In a mixing bowl, combine the chopped tea leaves with salt, vegetable oil, lime juice, fish sauce, minced garlic, and grated ginger. Mix well to ensure the tea leaves are evenly coated.\r\nTransfer the mixture to a clean, airtight container. Press the mixture down firmly to remove any air pockets.\r\nLet the tea leaves ferment at room temperature for at least 2-3 days. For a more intense flavor, you can ferment them for up to a week.', 'Once the tea leaves have fermented, they are ready to be used in salads or as a condiment.\r\nTo serve, mix the pickled tea leaves with toasted sesame seeds, fried garlic, fried shallots, roasted peanuts, and chili flakes (if using).\r\nEnjoy Lahpet as part of a traditional Burmese meal or use it to make Lahpet Thoke (Tea Leaf Salad).', 'Ensure that the container used for fermentation is clean and airtight to prevent any unwanted bacteria from contaminating the tea leaves.', '2024-07-22'),
(26, 'Sushi', 7, 15, 'sushi.jpg', '15 minutes (for preparing sushi rice)', '45 minutes', '                            Makizushi, or sushi rolls, are a popular Japanese dish consisting of seasoned rice, fresh seafood, vegetables, and other fillings wrapped in seaweed (nori). It\'s a versatile dish that can be customized with various ingredients to suit your taste.                            ', '                            2 cups sushi rice,2 1/2 cups water,1/2 cup rice vinegar,2 tablespoons sugar,1 teaspoon salt,10 sheets nori (seaweed),1/2 pound sushi-grade tuna or salmon,1 cucumber,1 avocado, 1/2 pound crab meat or imitation crab, Pickled ginger and wasabi for serving                            ', '                            Rinse the sushi rice under cold water until the water runs clear. This removes excess starch.\r\nIn a rice cooker or a pot, combine the rinsed rice and water. Cook according to the rice cooker\'s instructions or bring to a boil, then cover and simmer on low heat for 15 minutes. Let it sit for 10 minutes after cooking.\r\nIn a small saucepan, combine the rice vinegar, sugar, and salt. Heat gently until the sugar and salt are dissolved.\r\nTransfer the cooked rice to a large bowl and gently fold in the vinegar mixture. Allow the rice to cool to room temperature.                            ', '                              Place a bamboo sushi mat on a clean surface and cover it with plastic wrap to prevent sticking.\r\nPlace a sheet of nori, shiny side down, on the bamboo mat. Wet your hands to prevent sticking, then spread a thin, even layer of sushi rice over the nori, leaving about 1 inch of nori at the top edge.\r\nArrange your desired fillings (tuna, cucumber, avocado, crab meat) in a line across the center of the rice.  \r\n                            ', '                            Carefully lift the edge of the bamboo mat closest to you and begin rolling the sushi away from you, pressing gently to shape the roll.\r\nOnce you reach the exposed edge of the nori, use a little water to seal the roll.\r\nUse a sharp knife to slice the roll into bite-sized pieces. Wipe the knife with a damp cloth between cuts to prevent sticking.                            ', '                            Make sure the sushi rice is at room temperature before using it to prevent the nori from becoming soggy.\r\nFeel free to customize the fillings according to your preferences. Other popular fillings include cooked shrimp, pickled vegetables, or tofu.                            ', '0000-00-00'),
(27, 'Nan Gyi Thoke', 1, 16, '1721729511nanGyiT.webp', '15 minutes', '20 minutes', '                                                        Nan Gyi Thoke is a popular Burmese dish consisting of thick rice noodles mixed with chicken curry, chickpea flour, and a variety of flavorful toppings. This salad is often enjoyed as a light lunch or dinner and is known for its rich and complex flavors.                                                        ', '                                                        400g thick rice noodles,\r\n300g chicken breast boiled and shredded,\r\n1/2 cup chickpea flour roasted,\r\n1/4 cup vegetable oil,\r\n1 medium onion finely chopped,\r\n3 cloves garlic minced,\r\n1 teaspoon turmeric powder,\r\n1 teaspoon chili powder,\r\n2 tablespoons fish sauce,\r\n2 tablespoons lime juice,\r\n1/2 cup roasted peanuts crushed,\r\n2 hard-boiled eggs sliced,\r\n1/2 cup fresh cilantro chopped,\r\n1/2 cup fresh bean sprouts,\r\n1/2 cup cabbage finely shredded,\r\nSalt and pepper to taste,                                                        ', '                                                        Boil the thick rice noodles according to package instructions. Drain and rinse with cold water to stop the cooking process. Set aside.\r\nIn a large pan, heat the vegetable oil over medium heat. Add the chopped onion and minced garlic, and sauté until fragrant and golden brown.                                                        ', '                                                            Add the turmeric powder, chili powder, and a pinch of salt. Stir well.\r\nAdd the boiled and shredded chicken to the pan, mixing it with the spices and onions.\r\nStir in the fish sauce and cook for another 2-3 minutes, ensuring the chicken is well-coated with the spice mixture. Remove from heat.\r\n  \r\n                              \r\n                            ', '                                                        In a large mixing bowl, combine the cooked rice noodles with the chicken curry mixture.\r\nAdd the roasted chickpea flour, lime juice, crushed peanuts, bean sprouts, shredded cabbage, and fresh cilantro. Mix thoroughly to ensure all ingredients are well combined.\r\nAdjust the seasoning with salt and pepper to taste.                                                        ', '                                                        For an extra kick of flavor, you can add a spoonful of chili oil or chili flakes to the salad.\r\nRoasting the chickpea flour adds a nutty flavor to the dish, so don\'t skip this step.\r\nServe with additional lime wedges and fish sauce on the side for those who prefer a tangier or saltier taste.                                                        ', '0000-00-00'),
(28, 'Chicken Curry', 5, 16, 'chicken curry.webp', '45 minutes', '15 minutes', 'Burmese Chicken Curry, also known as \"Kyethar Hin,\" is a flavorful and aromatic dish that combines tender chicken with a rich blend of spices. This traditional Burmese recipe offers a unique taste experience, balancing savory and spicy elements, perfect for any curry lover.', '1 kg (2.2 lbs) chicken,\r\n2 large onions finely chopped,\r\n4 cloves garlic minced,\r\n1-inch piece ginger grated,\r\n2 tomatoes chopped,\r\n2 tablespoons vegetable oil,\r\n1 teaspoon turmeric powder,\r\n2 teaspoons paprika,\r\n1 teaspoon chili powder (adjust to taste),\r\n1 teaspoon cumin powder,\r\n1 teaspoon coriander powder,\r\n1 teaspoon garam masala,\r\n1 cup coconut milk,\r\n1 cup water,\r\nSalt to taste,\r\nFresh cilantro chopped (for garnish)', 'Heat the vegetable oil in a large pot over medium heat.\r\nAdd the finely chopped onions and sauté until they turn golden brown.\r\nStir in the minced garlic and grated ginger, and cook for another 2 minutes until fragrant.', 'Add the chicken pieces to the pot, cooking until they are browned on all sides.\r\nMix in the chopped tomatoes, turmeric powder, paprika, chili powder, cumin powder, and coriander powder.\r\nCook for about 5 minutes, stirring occasionally, until the tomatoes break down and the spices are well incorporated.', 'Pour in the coconut milk and water, stirring to combine.\r\nBring the mixture to a boil, then reduce the heat to low and let it simmer for about 30 minutes, or until the chicken is cooked through and tender.\r\nStir in the garam masala and adjust the salt to taste.', 'For a richer flavor, marinate the chicken with a bit of turmeric and salt for 30 minutes before cooking.\r\nIf you prefer a thicker curry, let it simmer uncovered to reduce the sauce.', '2024-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `save_recipe`
--

CREATE TABLE `save_recipe` (
  `id` int(11) NOT NULL,
  `foodId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `is_saved` int(11) NOT NULL,
  `is_fav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `save_recipe`
--

INSERT INTO `save_recipe` (`id`, `foodId`, `userId`, `is_saved`, `is_fav`) VALUES
(18, 11, 15, 0, 0),
(19, 12, 15, 0, 0),
(20, 13, 15, 0, 0),
(21, 18, 15, 0, 0),
(22, 14, 15, 0, 0),
(23, 19, 15, 0, 0),
(24, 11, 23, 0, 0),
(25, 22, 23, 0, 0),
(26, 14, 23, 0, 0),
(27, 17, 15, 0, 0),
(28, 24, 15, 1, 0),
(29, 24, 26, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_image` varchar(225) NOT NULL,
  `role` int(11) NOT NULL,
  `is_confirmed` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_login` int(11) NOT NULL,
  `token` varchar(225) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_image`, `role`, `is_confirmed`, `is_active`, `is_login`, `token`, `date`) VALUES
(14, 'MyaMyaHtun', 'myamyahtun.1234@gmail.com', 'QWRtaW5AMTIz', 'default_profile.jpg', 1, 0, 0, 1, '94c9859d01a19e2a155824661636170b94d7011a938f21a7e8191711dd0428e2ff8a4dbd13cb4a0d49c86287d6cf0fe5a423', '2024-07-12'),
(15, 'Elise', 'Elise@gmail.com', 'RWxpc2VAMTIz', 'default_profile.jpg', 0, 0, 0, 0, '99d117341646c499d455f3b4dff8a0bd097b8bcb6b7b5db38f0c5d8a0269316b7db83db478963957a82d9d76bea7fb15735d', '2024-07-12'),
(23, 'Nandar Tun', 'nandar@gmail.com', 'QWRtaW5AMTIz', 'default_profile.jpg', 0, 0, 0, 0, '3576c76d34d00b162d406807a4c221ff162950097ece529d392082e2fd73aa338636eb44e54a1011b041830bfc4c18c4664a', '2024-07-20'),
(28, 'EliseElise', 'elise.582001@gmail.com', 'RWxpc2VAMTIz', 'default_profile.jpg', 0, 0, 0, 0, 'f2d0e3c969d63a1da1e248466e7384c84e8cacf239c2d315dcb5586f4886abf25ee6f14a169cf37fe0e42d68cbdfd8fb3da6', '2024-07-24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_saved_recipes`
-- (See below for the actual view)
--
CREATE TABLE `user_saved_recipes` (
`user_name` varchar(225)
,`user_id` int(11)
,`food_name` varchar(225)
,`food_id` int(11)
,`imagefile` varchar(225)
,`food_description` varchar(1000)
,`categoryId` int(11)
,`category_name` varchar(225)
,`cuisineId` int(11)
,`cuisine_name` varchar(225)
,`is_saved` int(11)
,`is_fav` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_foods`
-- (See below for the actual view)
--
CREATE TABLE `view_foods` (
`id` int(11)
,`name` varchar(225)
,`category_name` varchar(225)
,`cuisine_name` varchar(225)
,`imagefile` varchar(225)
,`totaltime` varchar(225)
,`preparetime` varchar(225)
,`description` varchar(1000)
,`ingredient` varchar(1000)
,`step1` varchar(1000)
,`step2` varchar(1000)
,`step3` varchar(1000)
,`tips` varchar(1000)
,`date` date
);

-- --------------------------------------------------------

--
-- Structure for view `user_saved_recipes`
--
DROP TABLE IF EXISTS `user_saved_recipes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_saved_recipes`  AS SELECT `u`.`name` AS `user_name`, `u`.`id` AS `user_id`, `f`.`name` AS `food_name`, `f`.`id` AS `food_id`, `f`.`imagefile` AS `imagefile`, `f`.`description` AS `food_description`, `f`.`categoryId` AS `categoryId`, `c`.`name` AS `category_name`, `f`.`cuisineId` AS `cuisineId`, `cu`.`cuisineName` AS `cuisine_name`, `sr`.`is_saved` AS `is_saved`, `sr`.`is_fav` AS `is_fav` FROM ((((`save_recipe` `sr` join `users` `u` on(`sr`.`userId` = `u`.`id`)) join `foods` `f` on(`sr`.`foodId` = `f`.`id`)) left join `categories` `c` on(`f`.`categoryId` = `c`.`id`)) left join `cuisines` `cu` on(`f`.`cuisineId` = `cu`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_foods`
--
DROP TABLE IF EXISTS `view_foods`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_foods`  AS SELECT `f`.`id` AS `id`, `f`.`name` AS `name`, `c`.`name` AS `category_name`, `cu`.`cuisineName` AS `cuisine_name`, `f`.`imagefile` AS `imagefile`, `f`.`totaltime` AS `totaltime`, `f`.`preparetime` AS `preparetime`, `f`.`description` AS `description`, `f`.`ingredient` AS `ingredient`, `f`.`step1` AS `step1`, `f`.`step2` AS `step2`, `f`.`step3` AS `step3`, `f`.`tips` AS `tips`, `f`.`date` AS `date` FROM ((`foods` `f` join `categories` `c` on(`f`.`categoryId` = `c`.`id`)) join `cuisines` `cu` on(`f`.`cuisineId` = `cu`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisines`
--
ALTER TABLE `cuisines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_recipe`
--
ALTER TABLE `save_recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cuisines`
--
ALTER TABLE `cuisines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `save_recipe`
--
ALTER TABLE `save_recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
