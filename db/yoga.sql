-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 06:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `Email`, `password`) VALUES
(1, 'a', 'a@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `y_id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `Email`, `message`, `y_id`) VALUES
(1, 'krunal', 'krunal@gmaol.com', 'nice yoga', 42),
(2, 'harsh', 'harsh@gmail.com', 'very nice', 42),
(3, 'hiii', 'iiiii@gmail.com', 'okdk', 48);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone number` int(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone number`, `message`) VALUES
(1, 'k', 'k@gmail.com', 1234567890, 'hii how are you?'),
(2, 'a', 'a@gmail.com', 2147483647, 'HII \r\nHOOO\r\n\r\nERG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Security_que` varchar(100) NOT NULL,
  `Security_ans` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `Email`, `password`, `Security_que`, `Security_ans`) VALUES
(21, 'harsh patel', 'harsh@gmail.com', 'harsh12345', '', ''),
(23, 'a', 'a@gmail.com', 'a', 'father', 'a'),
(24, 'b', 'b@gmail.com', 'b', 'father', 'b'),
(25, 'c', 'c@gmail.com', 'c', 'father', 'c'),
(26, 'kruanl', 'k@gmail.com', 'k', 'father', 'sandipbhai'),
(27, 'b', 'b@gmail.com', 'B', 'father', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `yogas`
--

CREATE TABLE IF NOT EXISTS `yogas` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Approve` varchar(10) NOT NULL,
  `Benefits` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yogas`
--

INSERT INTO `yogas` (`id`, `name`, `des`, `image`, `Approve`, `Benefits`) VALUES
(42, 'Garurda Asana', '<p><strong>Instructions:</strong></p><p>1. Lie flat on the back in the shava-asana (corpse pose).</p><p>2. Stand with the feet together and the arms by your sides (see the tad-asana).</p><p>3. Draw the left foot upward bending the knee and wrap the left foot around your right leg as you rest the back of your left thigh on the right thigh.</p><p>4. Cross your arms at the elbows, left over right.</p><p>5. Join the palms of your hands together keeping the fingers pointed upward.</p><p>6. Inhale and hold the posture for the duration of the inhaled breath.</p><p>7. Exhale and return to the tada-asana. Repeat the posture on the opposite side, wrapping the right leg over the left and the right arm over left.</p>', 'Garudaasana.jpg', 'yes', '<p><strong>Benefits:</strong></p><p>1.Works into twelve major joints of the body</p><p>2.Good for central nervous system</p><p>3.Facilitates lymphatic function, improving immune system</p><p>4.Improves mobility of hip joint</p><p>5.Improves balance</p><p>6.Strengthens legs</p><p>7.Good for varicose veins</p>'),
(43, 'Dhanurasana', '<p><strong>Instructions:</strong> 1. Lie flat on the back in the shava-asana (corpse pose)</p><p>. 2. Lie on the stomach with the head turned to one side and the arms alongside the body with palms facing upward.</p><p>3. Turn the head and place the chin on the floor. Exhale, bend the knees, reach back with the arms and grasp the right ankle with the right hand and the left ankle with the left hand.</p><p>4. While inhaling, slowly raise the legs by pulling the ankles up and raising the knees off the floor while simultaneously lifting the chest off the floor. Hold the inhale breath. The weight of the body should be resting on the abdomen.</p><p>5. Tilt the head as far back as possible. Hold the posture as long as you can comfortably hold the inhale breath.</p><p>6. Slowly exhale bringing the knees to the floor, release the ankles, slowly bring the legs and arms straight down on the floor and turn the head to one side, assuming the prone posture you began with.</p>', 'Dhanurasana.jpg', 'yes', '<p><strong>Benefits:</strong></p><p>1.Increases circulation to heart and lungs, improves oxygen intake</p><p>2.Opens diaphragm and expands the chest region - improves respiratory conditions</p><p>3.Opens shoulder joint and helps frozen shoulder conditions</p><p>4.Increases spinal strength and flexibility and tone of spinal muscles</p><p>5.Revitalises spinal nerves by increasing circulation to spine</p><p>6.Strengthens, compresses and opens lower, mid and upper spine</p><p>7.Improves strength and balance Reduces abdominal fat and strengthens abdominal muscles</p><p>8.Helps regulate ovaries and prostate gland</p>'),
(44, 'Savasana', '<p><strong>Instructions:</strong></p><p>1. Lie flat on your back with your legs together but not touching, and your arms close to the body with the palms facing up.</p><p>2. Keep your eyes gently closed with the facial muscles relaxed and breath deeply and slowly through the nostrils.</p><p>3. Starting at the top of the head and working your way down to the feet, bring your attention to each part of your body, consciously relaxing it before proceeding on to the next.</p><p>4. Remain in the shava-asana for between 3 and 5 minutes or longer. If you become sleepy while in the shava-asana begin to breath a bit faster and deeper.</p>', 'Shavaasana.jpg', 'yes', '<p><strong>Benefits:</strong></p><p><strong>1.</strong> Returns cardiovascular circulation to normal</p><p>2.Slows heart rate, reduces blood pressure</p><p>3.Teaches complete relaxation</p><p>4.Stills and focuses the mind</p>'),
(45, 'Trikanasana', '<p><strong>Instructions:</strong></p><p>1. Stand with the feet together and the arms by your sides (see the tada-asana).</p><p>2. Separate the feet slightly further than shoulder distance apart. 3. Inhale and raise both arms straight out from the shoulders parallel to the floor with the palms facing down.</p><p>4. Exhale slowly while turning the torso to the left, bend at the waist and bring the right hand down to the left ankle. The palm of the right hand is placed along the outside of the left ankle. The left arm should be extended upward. Both legs and arms are kept straight without bending the knees and elbows.</p><p>5. Turn the head upward to the left and gaze up at the fingertips of the left hand. Inhale and return to a standing position with the arms outstretched.</p><p>6. Hold this position for the duration of the exhaled breath. Exhale and repeat steps 4 - 6 on the opposite side.</p>', 'Trikonaasana.jpg', 'yes', '<p><strong>Benefits :</strong></p><p><strong>1.</strong>An excellent cardiovascular workout</p><p>2.Intensely stretches each side of the body</p><p>3.Opens and increases flexibility of hip joints</p><p>4.Reduces saddle bags</p><p>5.Good for kidneys, thyroid and adrenal glands</p><p>6.Opens shoulder joint, good for frozen shoulder</p><p>7.Strengthen and tones legs and buttocks</p><p>8.Helps regulate hormone levels</p><p>9.Works all muscular groups simultaneously</p>'),
(46, 'Akarna Asan', '<p><strong>Introduction:</strong></p><p><strong>1.</strong></p>', 'Akarna.jpg', 'yes', '<p>nice&nbsp;</p>'),
(47, 'Hala Asan', '<p><strong>Introduction:</strong></p><p><strong>1.</strong></p>', 'Halasana.jpg', 'yes', '<p>dsgg</p>'),
(48, 'Hasta asan  ', '<p><strong>Introduction:</strong></p>', 'HastaPadaangusta.jpg', 'yes', '<p>fsdgs</p>'),
(49, 'Garurda Asana', '<p><strong>Instructions:</strong></p><p>1. Lie flat on the back in the shava-asana (corpse pose).</p><p>2. Stand with the feet together and the arms by your sides (see the tad-asana).</p><p>3. Draw the left foot upward bending the knee and wrap the left foot around your right leg as you rest the back of your left thigh on the right thigh.</p><p>4. Cross your arms at the elbows, left over right.</p><p>5. Join the palms of your hands together keeping the fingers pointed upward.</p><p>6. Inhale and hold the posture for the duration of the inhaled breath.</p><p>7. Exhale and return to the tada-asana. Repeat the posture on the opposite side, wrapping the right leg over the left and the right arm over left.</p>', 'Garudaasana.jpg', 'no', '<p><strong>Benefits:</strong></p><p>1.Works into twelve major joints of the body</p><p>2.Good for central nervous system</p><p>3.Facilitates lymphatic function, improving immune system</p><p>4.Improves mobility of hip joint</p><p>5.Improves balance</p><p>6.Strengthens legs</p><p>7.Good for varicose veins</p>'),
(51, 'a', '<p>escdrfv</p>', 'Tulips.jpg', 'no', '<p>xsedcfvg</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yogas`
--
ALTER TABLE `yogas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `yogas`
--
ALTER TABLE `yogas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
