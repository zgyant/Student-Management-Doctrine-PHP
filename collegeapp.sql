-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 01:05 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collegeapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `privilage`
--

CREATE TABLE IF NOT EXISTS `privilage` (
`pid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `adddetail` tinyint(1) NOT NULL,
  `updatedetail` tinyint(1) NOT NULL,
  `deletedetail` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `privilage`
--

INSERT INTO `privilage` (`pid`, `id`, `adddetail`, `updatedetail`, `deletedetail`) VALUES
(3, 1, 1, 1, 0),
(23, 8, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`student_id` int(11) NOT NULL,
  `card_num` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `card_num`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE IF NOT EXISTS `student_detail` (
`card_num` int(11) NOT NULL,
  `student_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `contact_num` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `activity` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`card_num`, `student_name`, `address`, `contact_num`, `level`, `details`, `activity`) VALUES
(1, 'Jayant Mishra', 'Balaju,Nepaltar', '009779841254888', 'L5DC', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(71, 'Megan Fox', 'Nepal', '009779841254255', 'CCNA', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(72, 'Sunik Shakya', 'Kuleshwor', '009779841254686', 'L4DC', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 0),
(73, 'Sita Shakya', 'Koteshwor', '009779848254888', 'BSc Hons', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(74, 'Prashant Khanal', 'Maitidevi', '009779841256565', 'CCNA', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 0),
(75, 'Prayas Kiran Sharma', 'Seshmati', '54564656', 'CEH', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(77, 'Zlatan ibrahimovic', 'Sweden', '212336566', 'L4DC', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(78, 'Wayne Rooney', 'Manchester', '4564646', 'CCNA', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(79, 'Manchester United', 'Manchester', '200000', 'CCNA', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(80, 'Eddie Vedder', 'Evanston', '565656', 'CCNA', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(81, 'Shreejesh Sthapit', 'Melbourne', '454656565', 'BSc Hons', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(82, 'Nishan Gurung', 'Melbourne', '56565', 'BSc Hons', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 1),
(83, 'Nabin Paudyal', 'Makalbari', '454545', 'L5DC', 'Lorem ipsum dolor sit amet, mundi expetendis disputando quo no, choro scaevola aliquando at vix, conceptam intellegat vix at. Et omnis ipsum feugait quo, graeco mentitum percipit ea per, ad elit pericula complectitur eos. Mea omnis audire eloquentiam in. Decore commune complectitur in duo, ex sed partiendo suscipiantur. Et ipsum dicunt sed. Delicata accusamus similique eos in.', 0),
(84, 'Sushmita Mishra', 'Bypass', '2654644', 'L4DC', 'That is because All functions in PHP have the global scope - they can be called outside a function even if they were defined inside and vice versa.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privilage`
--
ALTER TABLE `privilage`
 ADD PRIMARY KEY (`pid`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_id`), ADD UNIQUE KEY `card_num` (`card_num`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
 ADD PRIMARY KEY (`card_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilage`
--
ALTER TABLE `privilage`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_detail`
--
ALTER TABLE `student_detail`
MODIFY `card_num` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `privilage`
--
ALTER TABLE `privilage`
ADD CONSTRAINT `privilage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `stddetailfk` FOREIGN KEY (`card_num`) REFERENCES `student_detail` (`card_num`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
