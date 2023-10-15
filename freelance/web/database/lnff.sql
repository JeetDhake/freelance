-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230125.6665289780
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 06:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lnff`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, 'graphics and design'),
(2, 'digital marketing'),
(3, 'writing and translation'),
(4, 'video & animation'),
(5, 'music and audio'),
(6, 'programming and tech'),
(7, 'data'),
(8, 'business'),
(9, 'lifestyle'),
(10, 'photography');

-- --------------------------------------------------------

--
-- Table structure for table `gig`
--

CREATE TABLE `gig` (
  `id` int(11) NOT NULL,
  `gig_title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `file_format` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gig`
--

INSERT INTO `gig` (`id`, `gig_title`, `category`, `sub_category`, `file_format`, `price`, `description`, `requirements`, `image`, `username`) VALUES
(2, 'I will create illustration and vector graphics', 'graphics and design', 'illustration', '.ai .svg .png', '$10', 'create illustration based on description and vector tracing and do image to vector and create animation video', 'idea ', 'graphics.jpg', 'martin garrix'),
(3, 'edit video and clips, make music videos', 'video & animation', 'video editing', '.prproj .prproj .ae', '$50', 'edit video and merge clips put in fx and transition, sync to beat', 'raw clips and audio', 'video edit.jpg', 'martin garrix'),
(4, 'produce record and album ', 'music and audio', 'producers & composers', '.flp .wav', '$30 +royalty splits  ', 'will produce music and compose rhythm and melody, rec vocals and make beat including mix and master ', 'no requirements', 'music prod.jpg', 'martin garrix'),
(5, 'play guitar provide midi and samples', 'music and audio', 'session musicians', '.midi .zip', '$30', 'create guitar loops and make royalty free samples for tracks and provide one shots', 'recording studio', 'musician.jpg', 'martin garrix'),
(6, 'mix and master tracks', 'music and audio', 'mixing & mastering', '.flp .wav', '$100', 'mixing and mastering music projects in fl studio, provide master and premaster mix audio files', 'key & bpm', 'mix n master.jpg', 'martin garrix'),
(7, 'create a photos album and video ', 'photography', 'all in photography', '.psd .prproj .png', '$50', 'come to event bring all equipment take pictures and video and make an cover album and video', 'no requirements', 'videography.jpg', 'martin garrix'),
(8, 'create a responsive website', 'programming and tech', 'website development', '.html .css .js', '$90', 'create website using html  css js for front end and php for backend', 'images and content', 'coding.jpg', 'martin garrix'),
(11, 'i will create a website with front end and back end ', 'programming and tech', 'website development', '.html .css .php .sql', '1000$', 'a website with front end and back end  with cloud based hosting, 24/7 support and monthly maintenance, and life time support', 'topic and description', 'cod1 (1).jpg', 'chainsmokers'),
(12, 'program any web / android application ', 'programming and tech', 'development for streamers', '.exe .zip', '500$', 'can create any web application and android app with javascript, html css ', 'technology and idea', 'cod2.jpg', 'chainsmokers'),
(13, 'fix your bugs and solve error in code', 'programming and tech', 'online coding session', 'same as it is', '200$', 'debugging, software testing, and updating software according to new web tech with adding new features ', 'error report', 'cod3.jpg', 'chainsmokers'),
(14, 'data analytics and research', 'data', 'data analytics', '.sql url() .docs ', '900$', 'study and research company fundamentals and analyse business and increase growth and profits', 'data', 'cod1.png', 'chainsmokers');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `upi` varchar(255) NOT NULL,
  `accountno` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `upi`, `accountno`, `ifsc`, `name`) VALUES
(1, 'martin garrix', '101010101010', '12345', '0000', 'martin garrix'),
(2, 'chainsmokers', '00000111111', '1234567890', '1101', 'chainsmokers');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `age` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `username`, `name`, `skills`, `specialization`, `age`, `email`, `phone`, `image`) VALUES
(1, 'martin garrix', 'martin garrix', 'graphics & music', 'music producer & designer', '2022-01-09', 'garrix@gmail.com', 1234567890, 'profile1.png'),
(2, 'chainsmokers', 'chainsmokers', 'web development ', 'full stack web dev', '2023-10-01', 'chain@smokers.com', 2147483647, 'profile2.png');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`) VALUES
(1, 'martin garrix', '$2y$10$KSOCU.OLhor1RrYTqPP7iul4zlsdBtpJ7AC8mUtycsL/RJGRZ2Sda'),
(2, 'chainsmokers', '$2y$10$oyg7lHepGia5C.lkdwJk2OUV9B.qcjpYyiJXmddv/gZXTPWuHnmIG'),
(3, 'marshmello', '$2y$10$ZLcQ2fe9hiBQPrfcGjWZIe57Vk3Q.EJTx20zLOEXoCd71ClRkOGm.');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category_title`) VALUES
(1, 'logo design'),
(2, 'brand style guide'),
(3, 'game art'),
(4, 'graphics for streamers'),
(5, 'business card and ststionery'),
(6, 'web design'),
(7, 'app design'),
(8, 'ux design'),
(9, 'landing page design'),
(10, 'resume design'),
(11, 'illustration'),
(12, 'nft art'),
(13, 'pattern design'),
(14, 'font & typography'),
(15, 'brochure design'),
(16, 'poster design'),
(17, 'flyers design'),
(18, 'book design'),
(19, 'album cover art'),
(20, 'podcast cover art'),
(21, 'packaging and label design'),
(22, 'storyboard'),
(23, 'social media design'),
(24, 'catalog design'),
(25, 'menu design'),
(26, 'invitation design'),
(27, 'portraits & caricature'),
(28, 'cartoon & comics'),
(29, 'tattoo design'),
(30, 'signage editing'),
(31, 'web banner'),
(32, 'image editing'),
(33, 'architecture & interior design'),
(34, 'landscape design'),
(35, 'building engineering '),
(36, 'building info model'),
(37, 'character modeling'),
(38, 'industrial & product design'),
(39, 'trade booth design'),
(40, 't-shirt & merchandise'),
(41, 'fashion design '),
(42, 'jewelry design'),
(43, 'presentation design'),
(44, 'email design'),
(45, 'icon design'),
(46, 'info graphic design'),
(47, 'car wraps'),
(48, 'vector tracing'),
(49, 'twitch store'),
(50, 'design advice'),
(51, 'all in graphics and design'),
(52, 'other'),
(53, 'social media advertising'),
(54, 'social media marketing'),
(55, 'guest posting'),
(56, 'search engine optimization'),
(57, 'public relation'),
(58, 'book & ebook marketing'),
(59, 'podcast marketing'),
(60, 'video marketing'),
(61, 'email marketing'),
(62, 'text message marketing'),
(63, 'crowdfunding'),
(64, 'search engine marketing'),
(65, 'display advertising'),
(66, 'web traffic'),
(67, 'web analytics'),
(68, 'marketing advices'),
(69, 'influencer marketing'),
(70, 'marketing strategy'),
(71, 'community management'),
(72, 'local seo'),
(73, 'e-commerce marketing'),
(74, 'affiliate marketing'),
(75, 'mobile app marketing'),
(76, 'music promotion'),
(77, 'all in digital marketing'),
(78, 'other'),
(79, 'articles & blog posts'),
(80, 'proofreading & editing'),
(81, 'translation'),
(82, 'website content'),
(83, 'product description'),
(84, 'boo & ebook writing'),
(85, 'book editing'),
(86, 'resume writing'),
(87, 'brand voice & tone'),
(88, 'ux writing'),
(89, 'email copy'),
(90, 'technical writng'),
(91, 'white paper'),
(92, 'sales copy'),
(93, 'social media copy'),
(94, 'podcast writing'),
(95, 'ad copy'),
(96, 'cover letter'),
(97, 'press release'),
(98, 'case study'),
(99, 'linkedin profile'),
(100, 'job description'),
(101, 'creative writing'),
(102, 'beta reading'),
(103, 'scripting'),
(104, 'business names & slogans'),
(105, 'elearning content development'),
(106, 'speech writing'),
(107, 'grand writing'),
(108, 'transcription'),
(109, 'research & summaries'),
(110, 'writing advice'),
(111, 'all in writing & translation'),
(112, 'other'),
(113, 'animated explainers'),
(114, 'video editing'),
(115, 'video ads & commercials'),
(116, 'animated gifs'),
(117, 'logo aniamtion'),
(118, 'intro & outro videoes'),
(119, 'character animation'),
(120, '3D product animation'),
(121, 'social media videos'),
(122, 'music videos'),
(123, 'nft animation'),
(124, 'animation for kids'),
(125, 'animation for streamers'),
(126, 'live action explainers'),
(127, 'filmed video production'),
(128, 'videography'),
(129, 'e-commerce product video'),
(130, 'spokespersons video'),
(131, 'subtitle & caption'),
(132, 'visual effects'),
(133, 'lottie & web animation'),
(134, 'elearning video production'),
(135, 'article to video'),
(136, 'unboxing video'),
(137, 'screen casting video'),
(138, 'rigging'),
(139, 'corporate vidoes'),
(140, 'crowd funding'),
(141, 'video templates editing'),
(142, 'app & website previews'),
(143, 'book trailers'),
(144, 'game trailers'),
(145, 'video advice'),
(146, 'all in video and animation'),
(147, 'other'),
(148, 'voice over'),
(149, 'mixing & mastering'),
(150, 'producers & composers'),
(151, 'singers & vocalists'),
(152, 'session musicians'),
(153, 'songwriter'),
(154, 'beat maker'),
(155, 'online music lessons'),
(156, 'podcast production'),
(157, 'audiobook production'),
(158, 'audio ads production'),
(159, 'sound design'),
(160, 'audio editing'),
(161, 'music transcription'),
(162, 'vocal tuning'),
(163, 'dj drops & tags'),
(164, 'remixing& mashups'),
(165, 'synth presets'),
(166, 'meditation music'),
(167, 'jingles & intro'),
(168, 'audio logo & sonic branding'),
(169, 'music & audio advice'),
(170, 'all in music & audio'),
(171, 'other'),
(172, 'website development'),
(173, 'website maintenance'),
(174, 'game development'),
(175, 'development for streamers'),
(176, 'web programming'),
(177, 'e-commerce development'),
(178, 'mobile apps'),
(179, 'desktop application'),
(180, 'blockchain & cryptocurrency'),
(181, 'nft development'),
(182, 'electronics engineering'),
(183, 'devops & cloud'),
(184, 'cybersecurity & data protection'),
(185, 'support & it'),
(186, 'online coding session'),
(187, 'chatbots'),
(188, 'convert files'),
(189, 'user testing'),
(190, 'qa & reviews'),
(191, 'all in programming & tech'),
(192, 'other'),
(193, 'database'),
(194, 'data processing'),
(195, 'data engineering'),
(196, 'data analytics'),
(197, 'data visualization'),
(198, 'data science'),
(199, 'data entry'),
(200, 'all in data'),
(201, 'other'),
(202, 'epr management'),
(203, 'crm management'),
(204, 'sales'),
(205, 'virtual assistant'),
(206, 'market research'),
(207, 'business plans'),
(208, 'customer car'),
(209, 'project management'),
(210, 'hr consulting'),
(211, 'e-commerce management'),
(212, 'event management'),
(213, 'legal consulting'),
(214, 'financial consulting'),
(215, 'business consulting'),
(216, 'supply chain management'),
(217, 'presentation'),
(218, 'game concept design'),
(219, 'all in business'),
(220, 'other'),
(221, 'gaming'),
(222, 'game coaching'),
(223, 'online tutoring'),
(224, 'life coaching'),
(225, 'astrology & psychics'),
(226, 'career counseling'),
(227, 'modeling & acting'),
(228, 'fitness lessons'),
(229, 'dance lessons'),
(230, 'personal stylists'),
(231, 'cooking lessons'),
(232, 'arts & crafts'),
(233, 'wellness'),
(234, 'family & genealogy'),
(235, 'greeting cards & video'),
(236, 'puzzle & game creation'),
(237, 'collectibles'),
(238, 'travelling'),
(239, 'all in lifestyle'),
(240, 'other'),
(241, 'product photographers'),
(242, 'portrait photographers'),
(243, 'lifestyle & fashion photographers'),
(244, 'real estate photographers'),
(245, 'event photographers'),
(246, 'food photographers'),
(247, 'aerial photographers'),
(248, 'photography advice'),
(249, 'all in photography'),
(250, 'other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gig`
--
ALTER TABLE `gig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gig`
--
ALTER TABLE `gig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
