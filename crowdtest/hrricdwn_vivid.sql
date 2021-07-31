-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 03:49 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.3.7-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrricdwn_vivid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@123'),
(2, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `assign_project`
--

CREATE TABLE `assign_project` (
  `id` int(10) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `status` enum('ACCEPTED','REJECTED','PENDING','COMPLITED') NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_project`
--

INSERT INTO `assign_project` (`id`, `project_name`, `project_id`, `employee_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 'test-new', 3, 1, 'PENDING', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `tester_id` int(11) NOT NULL,
  `account_type` enum('indian','nonindian') DEFAULT NULL,
  `holder_name` varchar(255) DEFAULT NULL,
  `holder_account` varchar(100) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `paypal_email_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `tester_id`, `account_type`, `holder_name`, `holder_account`, `bank_branch`, `ifsc_code`, `paypal_email_id`) VALUES
(1, 6, 'indian', 'fsfsdf', ' fdsfsd ', 'fdsfsdfs', 'fdsfdsfsdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `call_detail`
--

CREATE TABLE `call_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_detail`
--

INSERT INTO `call_detail` (`id`, `name`, `mobile_no`) VALUES
(1, 'user', '0987654321'),
(2, 'Shri Yashvant Kumar punjabni ', '0987654321'),
(3, 'user', '0987654321');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(200) NOT NULL,
  `bussiness_email` varchar(200) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `bussiness_email`, `mobile_no`, `message`) VALUES
(1, 'user', 'a@gmail.com', 'y@gmail.com', '0987654321', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `device_name` varchar(90) NOT NULL,
  `type` varchar(200) NOT NULL,
  `platform` varchar(200) NOT NULL,
  `os_pc` varchar(100) NOT NULL,
  `manufacture_mobile` varchar(90) NOT NULL,
  `model_mobile` varchar(90) NOT NULL,
  `os_mobile` varchar(90) NOT NULL,
  `manufacture_tablet` varchar(100) NOT NULL,
  `model_tablet` varchar(100) NOT NULL,
  `os_tablet` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `device_name`, `type`, `platform`, `os_pc`, `manufacture_mobile`, `model_mobile`, `os_mobile`, `manufacture_tablet`, `model_tablet`, `os_tablet`) VALUES
(1, 'probook', '', 'basavan_batches.php', 'basavan_batches.php', '184', '2313', '546', '', '10', '546'),
(2, 'eeee', '', '', '', '546', '546', '546', '546', '', 'None'),
(3, 'Debesh', '', '', '', '546', '546', '546', '546', '', 'None'),
(4, 'Debesh', '', '', '', '546', '546', '546', '546', '', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE `employee_login` (
  `id` int(11) NOT NULL,
  `first_name` varchar(90) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` varchar(90) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `state`, `pincode`, `Address`) VALUES
(1, 'employee 1fsd', 'test 1', '1234567890', 'employee@gmail.com ', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'test       ', '123456', 'jfkdsj lfksdjfl sdjfk  '),
(2, 'employee1', 'employee2', '1234567890', 'employee1@gmail.com ', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'lkfjslk ', '234567', 'jfkl lkds jflsk  ');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'user', 'admin@gmail.com', '0987654321', 'jhjkjk'),
(2, 'user', 'admin@gmail.com', '0987654321', 'jhjkjk'),
(3, '', 'a@gmail.com', '0987654321', ''),
(4, '', 'admin@gmail.com', '0987654321', ''),
(5, '', 'o@gmail.com', '09089809', ''),
(6, 'user', 'a@gmail.com', '0987654321', 'yyuuin'),
(7, 'user', 'user12@gmail.com', '0987654321', ''),
(8, 'user', 'hhyogitagupta@gmail.com', '0987654321', ''),
(9, 'user', 'admin@gmail.com', '0987654321', ''),
(10, '', 'a@gmail.com', '232', ''),
(11, 'user', 'admin@gmail.com', '0987654321', ''),
(12, 'user', 'a@gmail.com', '0987654321', 'jkldj');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL,
  `device_name` varchar(90) NOT NULL,
  `manufacture` varchar(200) NOT NULL,
  `model` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `version` varchar(90) NOT NULL,
  `tester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `device_name`, `manufacture`, `model`, `os`, `browser`, `version`, `tester_id`) VALUES
(8, 'user222', 'Acer2222', 'Aquaris 5 HD222222', 'Android 8.1.0222222 ', 'Browser222222', '22222222222', 0),
(9, 'tkjfkls', '(Depreciated)', 'Aquaris 5 HD', 'Android 9.0', 'Browser', '10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pc_laptop`
--

CREATE TABLE `pc_laptop` (
  `id` int(11) NOT NULL,
  `device_name` varchar(90) NOT NULL,
  `platform` varchar(200) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `version` varchar(90) NOT NULL,
  `tester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_laptop`
--

INSERT INTO `pc_laptop` (`id`, `device_name`, `platform`, `os`, `browser`, `version`, `tester_id`) VALUES
(3, 'admin2222', 'Linux22222', 'Window Vista222222 ', ' Firefox (Win)222222', 'Version222222222', 0),
(4, 'HP', 'Windows', 'Window 7', 'Chrome (Win)', 'Version', 0),
(5, 'win', 'Windows', 'Windows XP', 'Chrome (Win)', 'Version', 0),
(6, 'fkksd', 'Windows', 'Windows XP', 'Internet Explorer', 'Version', 0),
(7, 'fdfsdf', 'Linux', 'Window Vista', 'Opera (Win)', 'Version', 0),
(8, 'shrote', 'Linux', 'Window Vista', ' Firefox (Win)', 'Version', 0),
(9, 'fdsfkjsdlk', 'Windows', 'Windows XP', 'Internet Explorer', '17', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `describe_yourself` varchar(255) NOT NULL,
  `service_1` text NOT NULL,
  `service_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `first_name`, `last_name`, `company`, `c_email`, `phone_no`, `job_title`, `describe_yourself`, `service_1`, `service_2`) VALUES
(1, 'test', 'test', 'test', 'test@gmail.com', '1234567890', 'test', 'Other', '', 'on'),
(2, 'test', 'test', 'test', 'test@gmail.com', '1234567890', 'test title', 'IT', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` enum('PENDING','INPROGRESS','COMPLETED') NOT NULL DEFAULT 'PENDING',
  `tester_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `date`, `price`, `status`, `tester_id`, `created_at`, `updated_at`) VALUES
(3, 'test-1', ' test project', '2019-08-11', 5000, 'PENDING', 0, NULL, NULL),
(4, 'dfdsf', ' fdsf dsf dsf dsf', '2019-07-26', 5345, 'PENDING', 0, NULL, NULL),
(5, 'fdsfd', ' fds f sd', '2019-07-09', 324324, 'PENDING', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quick_enquiry`
--

CREATE TABLE `quick_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `course` varchar(100) NOT NULL,
  `branch` varchar(90) NOT NULL,
  `message` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quick_enquiry`
--

INSERT INTO `quick_enquiry` (`id`, `name`, `email`, `contact`, `course`, `branch`, `message`) VALUES
(1, 'user', 'a@gmail.com', '0987654321', 'Function Testing', 'Khordha', 'jkl');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(90) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'panel', 'a@gmail.com', 'eeeeeee ', '0987654321'),
(2, 'admin', 'panel', 'admin@gmail.com', 'dddddd ', '0987654321'),
(3, 'user', 'lion', 'o@gmail.com', 'iuodiio ', '09089809'),
(4, 'admin', 'panel', 'a@gmail.com', 'vvvvvv ', '232'),
(5, 'deb', 'rout', 'test1@gmail.com', 'test1234@ ', '888888');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(90) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `state` varchar(90) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `state`, `pincode`, `Address`, `gender`, `about`, `photo`, `skype`) VALUES
(3, 'fsfsd fsdf', 'xyz', '0987654321', 'admin@gmail.com ', '21232f297a57a5a743894a0e4a801fc3', 'mp  ', '09299', 'iuoiduwo  ', 'male', '', 'uploads/1564299670_Kullu.jpg', ''),
(4, 'fdsfsdfsd', 'rout', '909090890 ', 'test2@gmail.com ', 'e6bca90b03bd84d95329f5a3e1f865d3', 'telangana ', '8888', ' hii ', 'male', '', '', ''),
(5, 'fdfsdfsd', 'kiran', '234567890 ', 'kiran@gmail.com ', 'bea67185d964e71c35c8be12b0690f50', 'kiransj sdkj ', 'fjsdl fjs', 'kj flsdkf jlkfjsdlf  ', 'male', '', '', ''),
(6, 'tester1', 'tester1', '1234567890', 'tester@gmail.com', 'bea67185d964e71c35c8be12b0690f50', 'tester   ', '123456', 'ej lkdj lfksdj flksdjlksd    ', 'male', 'sdfkljs lkfsd  ', 'uploads/1564299670_Kullu.jpg', 'skype '),
(7, 'tester2', 'tester', '1234567890', 'tester2@gmail.com ', 'f5d1278e8109edd94e1e4197e04873b9', 'tester', '456789', ' sdjlfjsd lf ', 'male', 'jfsldk js', 'uploads/1564298825_Kullu.jpg', ' skfjslk'),
(8, 'fsdfjlsk', 'kjfsl', '1234567890', 'test@gmail.com ', '098f6bcd4621d373cade4e832627b4f6', 'test', 'fkj sl', 'jfklsdj fls ', 'male', 'jlksdj flskj ls', 'uploads/1564298937_Kullu.jpg', 'fkslj fslk'),
(9, 'flsdflj', 'kjfsdlk', 'kjlkkfsdj', 'kjfsl@gmail.com ', 'ed918e448802bf2a4997528565140121', 'kjfsldkfj', 'kjfsl', 'kjdslf ', 'male', 'jdsklf jsdklf ', 'uploads/1564299016_Kullu.jpg', 'fksd jflksdfj s'),
(10, 'fsjkl', 'kjsdkl', 'kfjslk', 'kjsdlk@gmail.com ', '2b2943ca0e2a486c624cb942e99bc742', 'kfjsd', 'kljfssdl', 'kjfsl ', 'male', 'jfslkd ', 'uploads/1564299079_Kullu.jpg', 'kfjsd l'),
(11, 'kfjsdlk', 'kjfsl', 'jfsldjs', 'kjfsld@gmail.com ', '1e5ee63a08b0bfaf2f009ef7aec49954', 'kjfsdl', 'kfjsdl', 'klfjsdl ', 'male', 'jfsldf', 'uploads/1564299153_Kullu.jpg', 'kfsjdlkf'),
(12, 'fdfsdf', 'dsgfdg', '34567890', 'fjdks@gmail.com ', '099ebea48ea9666a7da2177267983138', 'jfk sj', 'kjfs lk', 'fk sjkdlfs ', 'male', 'kfjsd kl', '../uploads/1564299428_Kullu.jpg', 'kfjsd klfskd'),
(13, 'fdksj', 'kjfls', 'kjflds', 'kjkjf@gmail.com ', '5ccd5115249c57a97ffd8baa4e05240e', 'kjfsdlk', 'kjfsl', 'kljskld ', 'male', 'kjfkls ', 'uploads/1564299670_Kullu.jpg', 'kfjs klf'),
(14, 'fdjfkl', 'gkjdslk', 'kjslkfjs', 'jflsk@gmail.com ', 'e35cf7b66449df565f93c607d5a81d09', 'kfj slk', 'kjfsdl k', 'kjfdsk ', 'male', 'fksj lk', '', 'kfj slk');

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `device_name` varchar(90) NOT NULL,
  `manufacture` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `version` varchar(90) NOT NULL,
  `tester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`id`, `device_name`, `manufacture`, `model`, `os`, `browser`, `version`, `tester_id`) VALUES
(4, 'user', '', '', '', 'Browser', '', 0),
(5, 'admin222222', 'Aldi222222', 'Iconia One 10222222', 'Android 8.0.0222222 ', 'Browser22222222', '162222222222', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) NOT NULL,
  `task_name` varchar(255) DEFAULT NULL,
  `details` text,
  `duration` text,
  `status` enum('ACCEPTED','REJECTED','PENDING','COMPLETED') NOT NULL DEFAULT 'PENDING',
  `assignee_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `details`, `duration`, `status`, `assignee_id`, `created_at`, `updated_at`) VALUES
(1, 'jfdskl', 'kjfsdl ', 'kfjsdl', 'PENDING', 1, '2019-07-26 17:23:39', '2019-07-26 17:23:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_project`
--
ALTER TABLE `assign_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `call_detail`
--
ALTER TABLE `call_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_laptop`
--
ALTER TABLE `pc_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_enquiry`
--
ALTER TABLE `quick_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `assign_project`
--
ALTER TABLE `assign_project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `call_detail`
--
ALTER TABLE `call_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee_login`
--
ALTER TABLE `employee_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pc_laptop`
--
ALTER TABLE `pc_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quick_enquiry`
--
ALTER TABLE `quick_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
