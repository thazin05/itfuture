-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 16, 2017 at 11:58 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `VueSinglePage`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2017_07_21_062940_create_recipes_table', 1),
(3, '2017_07_21_063008_create_recipe_ingredients_table', 1),
(4, '2017_07_21_063109_create_recipe_directions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `user_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(11, 11, 'Potato and Pepper Frittata', 'This rustic egg pie was invented for late summer\'s vegetable bounty', '9zsUjabUw0Jl7VvkzN1s7xkYicNEGFuT.jpeg', '2017-08-15 23:35:08', '2017-08-15 23:35:08'),
(12, 11, 'Lemon Blueberry Bread', 'A quick bread that is one of my family\'s favorites.', 'WYg6F3P4jKMF5r8mHrdzhdRXWf7zYbsr.jpeg', '2017-08-16 00:13:25', '2017-08-16 00:13:25'),
(13, 11, 'Grilled Salmon with Avocado Dip', 'This dip fits perfectly with grilled salmon. Serve with rice. Greek style yogurt is a bit more sour than regular plain yogurt.', 'LmYzOv4XdV2xCXlUon6Otdy3ZmwtKfNG.jpeg', '2017-08-16 00:28:45', '2017-08-16 00:28:45'),
(14, 11, 'Bird\'s Nest Breakfast Cups', 'I got the basics of this recipe from a friend of mine and thought it was a great idea since these little nests can be made ahead, which I love. They are delicious, easy to make, and can be customized to your own tastes. I not only use the recipe as a delicious grab-and-go breakfast, but serve it to guests nestled into some lovely cheese grits, alongside fresh fruits and French toast made on a panini press. Oh, and don\'t forget the mimosas!', 'HSML8Ja2pe8iSr5ndPto3cTrcNJB9POR.jpeg', '2017-08-16 00:45:06', '2017-08-16 00:45:06'),
(15, 11, 'Chipotle Beef Tostadas', 'Tostadas with some spicy flavorful beef topped with some sour cream and cheese.', 'puFPsvOwlxNqRDYHrdkFzqDR621UbeXj.jpeg', '2017-08-16 01:13:03', '2017-08-16 01:13:03'),
(16, 11, 'Bacon Avocado Salad', 'This salad is a favorite during the hot summer months. Serve it on a bed of your favorite leafy greens with some garlic bread, and everyone is a happy camper.', 'ggHNApr9nwVLZcFzqVbjcJACSVZPcVle.jpeg', '2017-08-16 01:54:03', '2017-08-16 01:54:03'),
(17, 11, 'Avocado and Tuna Tapas', 'Living in Spain I have come across a literal plethora of tapas. This is a light, healthy tapa that goes best with crisp white wines and crunchy bread. This recipe is great for experimenting with a variety of different vegetables, spices, and vinegars.', 'sFtWSu5Sjst20qjLKRjv9XkdG1SvSrmE.jpeg', '2017-08-16 02:00:34', '2017-08-16 02:00:34'),
(18, 11, 'Baked Coconut Shrimp', 'This crunchy coconut shrimp is baked instead of fried, and so easy! Great for dinner or as an appetizer. I serve with orange marmalade for dipping.', 'fKi7SRjZhqt4BYxXRhNhsz2LZqkOfHIw.jpeg', '2017-08-16 02:05:06', '2017-08-16 02:05:06'),
(19, 11, 'Kentucky Butter Cake', 'Moist and buttery cake made from readily available ingredients with a luscious butter sauce.', 'pNJFzdbL9lDT1mEBr2R833ApCrkdJJDs.jpeg', '2017-08-16 02:08:58', '2017-08-16 02:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_directions`
--

CREATE TABLE `recipe_directions` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_directions`
--

INSERT INTO `recipe_directions` (`id`, `recipe_id`, `description`) VALUES
(9, 11, 'Place bacon and olive oil in a large skillet over medium heat. Cook until bacon is nearly crisp, 5 to 7 minutes. Add peppers; cook and stir over medium heat until softened, about 3 minutes. Remove from heat and drain excess grease from the pan. Season with salt, black pepper, and red pepper flakes; stir to combine.'),
(10, 11, 'Return pan to medium heat, add potatoes and stir until warmed through, about 2 minutes. Pour in eggs and slowly stir to form large, soft curds, about 5 minutes. Sprinkle feta cheese over the top and stir gently to incorporate.'),
(11, 11, 'Set oven rack about 6 inches from the heat source and preheat the oven\'s broiler.'),
(12, 11, 'Place pan under the preheated broiler and cook until the top is set and feta cheese is browned, about 5 minutes.'),
(13, 12, 'Preheat oven to 350 degrees F (175 degrees C). Lightly grease an 8x4 inch loaf pan.'),
(14, 12, 'In a mixing bowl, beat together butter, 1 cup sugar, juice and eggs. Combine flour, baking powder and salt; stir into egg mixture alternately with milk. Fold in lemon zest, nuts, and blueberries. Pour batter into prepared pan.'),
(15, 12, 'Bake in preheated oven for 60 to 70 minutes, until a toothpick inserted into center of the loaf comes out clean. Cool bread in pan for 10 minutes. Meanwhile, combine lemon juice and 1/4 cup sugar in a small bowl. Remove bread from pan and drizzle with glaze. Cool on a wire rack.'),
(16, 13, 'Preheat an outdoor grill for high heat, and lightly oil grate.'),
(17, 13, 'In a medium bowl, mash together avocados, garlic, yogurt, and lemon juice. Season with salt and pepper.'),
(18, 13, 'Rub salmon with dill, lemon pepper, and salt. Place on the prepared grill, and cook 15 minutes, turning once, until easily flaked with a fork. Serve with the avocado mixture.'),
(19, 14, 'Preheat oven to 425 degrees F (220 degrees C). Grease 24 muffin cups.'),
(20, 14, 'Mix hash brown potatoes, salt, black pepper, olive oil, and 2/3 cup shredded Cheddar cheese in a bowl. Divide mixture between prepared muffin cups and use your fingers to shape potato mixture into nests with hollows in the middle.'),
(21, 14, 'Bake in the preheated oven until hash browns are browned on the edges and cheese has melted, 15 to 18 minutes. Remove hash brown nests.'),
(22, 14, 'Reduce oven temperature to 350 degrees F (175 degrees C).'),
(23, 14, 'Whisk eggs and water in a bowl until thoroughly combined; season with salt and black pepper. Pour equal amount of egg mixture into each nest; sprinkle with bacon crumbles and 1 teaspoon Cheddar cheese.'),
(24, 14, 'Bake in the oven until eggs are set, 13 to 16 minutes. Let cool in pans and remove by sliding a knife between potato crust and muffin cup.'),
(25, 15, 'Heat oil in a large skillet over medium heat; cook and stir potatoes, onion, and garlic in the hot oil until onion is softened, about 7 minutes. Add ground beef, seasoned salt, and garlic salt; cook and stir until ground beef is browned and crumbly, 10 to 15 minutes.'),
(26, 15, 'Blend chipotle peppers in adobo sauce and water in a blender until sauce is smooth. Pour sauce into ground beef mixture; cook and stir until potatoes are tender, 10 to 15 more minutes.'),
(27, 15, 'Layer each tostada with chipotle beef, sour cream, and Mexican cheese blend.'),
(28, 16, 'Place bacon in a large skillet and cook over medium-high heat, turning occasionally, until evenly browned, about 10 minutes. Drain bacon on paper towels.'),
(29, 16, 'Stir cucumber, tomatoes, rice vinegar, salt, and pepper together in a bowl. Gently stir bacon, avocado, cilantro, and green onions into cucumber mixture.'),
(30, 17, 'Stir together tuna, mayonnaise, green onions, red pepper, and balsamic vinegar in a bowl. Season with pepper and garlic salt, then pack the avocado halves with the tuna mixture. Garnish with reserved green onions and a dash of black pepper before serving.'),
(31, 18, 'Preheat an oven to 400 degrees F (200 degrees C). Lightly coat a baking sheet with cooking spray.'),
(32, 18, 'Rinse and dry shrimp with paper towels. Mix cornstarch, salt, and cayenne pepper in a shallow bow; pour coconut flakes in a separate shallow bowl. Working with one shrimp at a time, dredge it in the cornstarch mixture, then dip it in the egg white, and roll it in the coconut, making sure to coat the shrimp well. Place on the prepared baking sheet, and repeat with the remaining shrimp.'),
(33, 18, 'Bake the shrimp until they are bright pink on the outside and the meat is no longer transparent in the center and the coconut is browned, 15 to 20 minutes, flipping the shrimp halfway through.'),
(34, 19, 'Preheat oven to 325 degrees F (165 degrees C). Grease and flour a 10 inch Bundt pan.'),
(35, 19, 'In a large bowl, mix the flour, 2 cups sugar, salt, baking powder and baking soda. Blend in buttermilk, 1 cup of butter, 2 teaspoons of vanilla and 4 eggs. Beat for 3 minutes at medium speed. Pour batter into prepared pan.'),
(36, 19, 'Bake in preheated oven for 60 minutes, or until a wooden toothpick inserted into center of cake comes out clean. Prick holes in the still warm cake. Slowly pour sauce over cake. Let cake cool before removing from pan.'),
(37, 19, 'To Make Butter Sauce: In a saucepan combine the remaining 3/4 cups sugar, 1/3 cup butter, 2 teaspoons vanilla, and the water. Cook over medium heat, until fully melted and combined, but do not boil.');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`id`, `recipe_id`, `name`, `qty`) VALUES
(90, 11, '6 slices bacon or pancetta, chopped', '.2g'),
(91, 11, '1 tablespoon olive oil', '.2g'),
(92, 11, '1 1/2 cups chopped hot and sweet peppers', '.3g'),
(93, 11, 'salt and ground black pepper to taste', '.1g'),
(94, 12, '1/3 cup melted butter', '.3g'),
(95, 12, '1 cup white sugar', '.1g'),
(96, 12, '3 tablespoons lemon juice', '.2g'),
(97, 12, '2 eggs', '.2g'),
(98, 12, '1 1/2 cups all-purpose flour', '.1g'),
(99, 12, '1 teaspoon baking powder', '.2g'),
(100, 12, '1 teaspoon salt', '.1g'),
(101, 12, '1/2 cup milk', '.1g'),
(102, 12, '2 tablespoons grated lemon zest', '.1g'),
(103, 12, '1/2 cup chopped walnuts', '.1g'),
(104, 12, '1 cup fresh or frozen blueberries', '.1g'),
(105, 12, '2 tablespoons lemon juice', '.1g'),
(106, 12, '1/4 cup white sugar', '.1g'),
(107, 12, 'Add all ingredients to list', '.1g'),
(108, 13, '2 avocados - peeled, pitted and diced', '1g'),
(109, 13, '2 cloves garlic, peeled and minced', '1g'),
(110, 13, '3 tablespoons Greek-style yogurt', '1g'),
(111, 13, '1 tablespoon fresh lemon juice', '1g'),
(112, 13, 'salt and pepper to taste', '1g'),
(113, 13, '2 pounds salmon steaks', '1g'),
(114, 13, '2 teaspoons dried dill weed', '1g'),
(115, 13, '2 teaspoons lemon pepper', '1g'),
(116, 13, 'salt to taste', '1g'),
(117, 14, '1 (30 ounce) package frozen shredded hash brown potatoes, thawed', '1g'),
(118, 14, '2 1/2 teaspoons salt', '1g'),
(119, 14, '1 teaspoon ground black pepper', '1g'),
(120, 14, '2 1/2 tablespoons olive oil', '1g'),
(121, 14, '2/3 cup shredded Cheddar cheese', '1g'),
(122, 14, '12 eggs', '1g'),
(123, 14, '2 tablespoons water', '1g'),
(124, 14, '8 slices cooked bacon, crumbled - divided', '1g'),
(125, 14, '1/4 cup shredded Cheddar cheese, divided', '1g'),
(126, 15, '1 tablespoon canola oil', '1g'),
(127, 15, '4 small potatoes, cut into very small cubes', '1g'),
(128, 15, '1 onion, chopped', '1g'),
(129, 15, '4 cloves garlic, minced', '1g'),
(130, 15, '2 pounds ground beef', '1g'),
(131, 15, '1 teaspoon seasoned salt', '.1g'),
(132, 15, '1 teaspoon garlic salt', '.1g'),
(133, 15, '2 chipotle peppers in adobo sauce', '.1g'),
(134, 15, '1/2 cup water', '.1g'),
(135, 15, '8 crispy tostada shells', '.1g'),
(136, 15, '1/4 cup sour cream, or to taste', '.1g'),
(137, 15, '1/4 cup shredded Mexican cheese blend, or to taste', '.1g'),
(138, 16, '1 pound bacon, chopped', '1g'),
(139, 16, '1 cucumber, diced', '1g'),
(140, 16, '1 cup quartered cherry tomatoes', '1g'),
(141, 16, '1/4 cup seasoned rice vinegar', '1g'),
(142, 16, 'salt and ground black pepper to taste', '1g'),
(143, 16, '5 avocados - peeled, pitted, and diced', '1g'),
(144, 16, '1/2 cup chopped fresh cilantro', '1g'),
(145, 16, '4 green onions, chopped', '1g'),
(146, 17, '1 (12 ounce) can solid white tuna packed in water, drained', '1g'),
(147, 17, '1 tablespoon mayonnaise', '1g'),
(148, 17, '3 green onions, thinly sliced, plus additional for garnish', '1g'),
(149, 17, '1/2 red bell pepper, chopped', '1g'),
(150, 17, '1 dash balsamic vinegar', '1g'),
(151, 17, 'black pepper to taste', '1g'),
(152, 17, '1 pinch garlic salt, or to taste', '1g'),
(153, 17, '2 ripe avocados, halved and pitted', '1g'),
(154, 18, '1 pound large shrimp, peeled and deveined', '1g'),
(155, 18, '1/3 cup cornstarch', '1g'),
(156, 18, '1 teaspoon salt', '1g'),
(157, 18, '3/4 teaspoon cayenne pepper', '1g'),
(158, 18, '2 cups flaked sweetened coconut', '1g'),
(159, 18, '3 egg whites, beaten until foamy', '1g'),
(160, 19, '3 cups unbleached all-purpose flour', '1g'),
(161, 19, '2 cups white sugar', '1g'),
(162, 19, '1 teaspoon salt', '1g'),
(163, 19, '1 teaspoon baking powder', '1g'),
(164, 19, '1/2 teaspoon baking soda', '1g'),
(165, 19, '1 cup buttermilk', '1g'),
(166, 19, '1 cup butter', '1g'),
(167, 19, '2 teaspoons vanilla extract', '1g'),
(168, 19, '4 eggs', '1g'),
(169, 19, '3/4 cup white sugar', '1g'),
(170, 19, '1/3 cup butter', '1g'),
(171, 19, '3 tablespoons water', '1g'),
(172, 19, '2 teaspoons vanilla extract', '1g');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fredy Bashirian Jr.', 'henri.lebsack@trantow.com', '$2y$10$.4uXpRga7jOyfccNpvfid.15QnazvFYU5apPCu2KPxj0iLBfFc1PC', 'g6Kj7Pqycb9GzwN6obXUBLeDXC91hFsXym2Tm2GU76uJfsUjqUy8mTQbRGGL', NULL, '2017-08-15 23:03:03', '2017-08-15 23:03:03'),
(2, 'Alia Koss', 'oreilly.camille@medhurst.info', '$2y$10$cErcV94v.HU68CRxW6BsW.O/n5VbEu2IOvRH3wqOAc0jaNac2zMAq', 'p7B8NE5M4CDc5hccewStyU0eleCE4ifRVqmDFZvTPOJ9ZnpwY3GPkIdEdwl3', NULL, '2017-08-15 23:03:03', '2017-08-15 23:03:03'),
(3, 'Rocio Streich', 'kaitlin43@conroy.info', '$2y$10$mras3ZCfOhr9UwIwmRsL/.nRt0GSkgZYS/A8yQYZWctuxQXo6eZt.', 'IF6zFtmJ3OntjSJwOSMJTAsvLL1SVNWNc4LMvPRo6LN3LdiVLoJVbbLn0PPP', NULL, '2017-08-15 23:03:03', '2017-08-15 23:03:03'),
(4, 'Geovanny McCullough', 'juliet.wyman@hotmail.com', '$2y$10$78rTXV0U7ALJfm8ufPkpyeDzSDNifhTHVsiRMYe8vOa6A9p2WSMyO', 'k9G7i8JGL9YaAckkyPyeUs4PXt8rEI8hgcKI3sq2MHLglddv4ctak7cuKD9K', NULL, '2017-08-15 23:03:03', '2017-08-15 23:03:03'),
(5, 'Mireya Jakubowski', 'skyla77@gmail.com', '$2y$10$zROY/ah9L4oQBaiwwGXk8uR0N9nmBT4lHqvM9GBWPok8Kqj8Waxb2', 'W1U5MnEQpZGiuXCLMaXYBNRkk4AYQS5jnKtSem1iB7y9GADbLXVYnKBCma4V', NULL, '2017-08-15 23:03:03', '2017-08-15 23:03:03'),
(6, 'Paolo Schiller IV', 'matt.franecki@zboncak.com', '$2y$10$/JS.0JZ/eTnnEoac.GNEteIBitkvRthMLM70oyfRksOI49GMkXD7y', 'opb4nqe8mJ93zSqsPb83NB2tPVK4A6RsijfZrHZf7nKodKOYAIlFSJIbg7VF', NULL, '2017-08-15 23:03:04', '2017-08-15 23:03:04'),
(7, 'Rasheed Hayes', 'jaskolski.burdette@gmail.com', '$2y$10$DyBOYMSclQIO4KYHimNBsuDK9X4P9OpJTemTGRpk42SFFhnK5oGUy', 'A29OMdXExbR9cKJ6TyxXDTdMXTKOhMLoATB62CxjGHD8q13tnIBID1jrkWlj', NULL, '2017-08-15 23:03:04', '2017-08-15 23:03:04'),
(8, 'Prof. Garfield Bechtelar Sr.', 'tcarroll@yahoo.com', '$2y$10$Ro4tNDZSv7fSrGHhO.zkxughMzJVhmxOs.7kPYytI6e09gDIIfuKu', 'RUmRpdWX4csqYuf2XKNhp42pDA5aAA1OMFBHe07fHcTJgcR4UqaiYdTgcFwY', NULL, '2017-08-15 23:03:04', '2017-08-15 23:03:04'),
(9, 'Emilia Smith', 'jhayes@wilderman.net', '$2y$10$HIzqzHvoWDZ/z.MuwSgKvu.mUT.x0lWn5c6Ke1P1SN6pPPU6uUKeu', 'NUu3d2voQx9oFHdET6fuwNn0TYbXOL2qncc6E4ucZHydiMkEwQQNpEqlBwui', NULL, '2017-08-15 23:03:04', '2017-08-15 23:03:04'),
(10, 'Webster Schultz', 'krajcik.chanelle@gmail.com', '$2y$10$48C7Eq8mREIHBhFXtg.uKeHJ2aQbneqt6xxlZpQjWU6MIBqmjt9ya', '8zPXpG9aAksS2YlUZhsz5oSaue4qKMFXUufkVlyPhcctfGcsb6VggTGeFyE5', NULL, '2017-08-15 23:03:04', '2017-08-15 23:03:04'),
(11, 'Cho Thazin Win', 'ttthazinthazin@gmail.com', '$2y$10$62V9f7IbOUdvx91LIER7Aud/iiSueSFAts8lu20Br2PJ7kgaPA/uC', NULL, NULL, '2017-08-15 23:04:20', '2017-08-16 02:59:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `recipe_directions`
--
ALTER TABLE `recipe_directions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `recipe_directions`
--
ALTER TABLE `recipe_directions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
