-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 11:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passport` text NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `passport`, `first_name`, `last_name`, `middle_name`) VALUES
(1, 'kester', '620061.kes', 'Nnamanikester@gmail.com', '20190729120710462_copashun.jpg', 'John', 'Nnamani', 'Kester'),
(2, 'leofizzy', '620061.kes', 'Nnamanikester@gmail.com', '20190724120737605_copashun tv.png', 'John', 'Nnamani', 'Kester');

-- --------------------------------------------------------

--
-- Table structure for table `card_type`
--

CREATE TABLE `card_type` (
  `card_type_id` int(255) NOT NULL,
  `card_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_type`
--

INSERT INTO `card_type` (`card_type_id`, `card_type`) VALUES
(1, 'Voters card'),
(2, 'National Id card'),
(3, 'Esut card'),
(4, 'nacoss card'),
(5, 'dsc card'),
(6, 'destreetboard card');

-- --------------------------------------------------------

--
-- Table structure for table `dob_verification`
--

CREATE TABLE `dob_verification` (
  `verification_id` int(255) NOT NULL,
  `verifcation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dob_verification`
--

INSERT INTO `dob_verification` (`verification_id`, `verifcation`) VALUES
(1, 'approximate'),
(2, 'declared'),
(3, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `education_level`
--

CREATE TABLE `education_level` (
  `education_level_id` int(255) NOT NULL,
  `education_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_level`
--

INSERT INTO `education_level` (`education_level_id`, `education_level`) VALUES
(1, 'none'),
(2, 'certification'),
(3, 'post graduate'),
(4, 'primary'),
(5, 'secondary'),
(6, 'tertiary');

-- --------------------------------------------------------

--
-- Table structure for table `employment_status`
--

CREATE TABLE `employment_status` (
  `employment_status_id` int(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_status`
--

INSERT INTO `employment_status` (`employment_status_id`, `employment_status`) VALUES
(1, 'employed'),
(2, 'unemployed'),
(3, 'self employed'),
(4, 'student'),
(5, 'pensioner');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender`) VALUES
(1, 'male'),
(2, 'female'),
(3, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `home_delivery`
--

CREATE TABLE `home_delivery` (
  `home_delivery_id` int(255) NOT NULL,
  `home_delivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_delivery`
--

INSERT INTO `home_delivery` (`home_delivery_id`, `home_delivery`) VALUES
(1, 'yes'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE `marital_status` (
  `marital_status_id` int(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`marital_status_id`, `marital_status`) VALUES
(1, 'single'),
(2, 'married'),
(3, 'divorced'),
(4, 'separated'),
(5, 'widowed');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religion_id` int(255) NOT NULL,
  `religion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_id`, `religion`) VALUES
(1, 'christianity'),
(2, 'islam'),
(3, 'traditional'),
(4, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `residence_status`
--

CREATE TABLE `residence_status` (
  `residence_status_id` int(255) NOT NULL,
  `residence_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residence_status`
--

INSERT INTO `residence_status` (`residence_status_id`, `residence_status`) VALUES
(1, 'birth'),
(2, 'naturalization'),
(3, 'registeration');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Approved'),
(2, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_Id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_Id`, `title`) VALUES
(1, 'mr'),
(2, 'mrs'),
(3, 'ms'),
(4, 'miss'),
(5, 'master');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `o_names` varchar(255) NOT NULL,
  `prev_l_name` varchar(255) NOT NULL,
  `prev_f_name` varchar(255) NOT NULL,
  `prev_m_name` varchar(255) NOT NULL,
  `town_of_res` varchar(255) NOT NULL,
  `country_of_res` varchar(255) NOT NULL,
  `state_of_res` varchar(255) NOT NULL,
  `lga_of_res` varchar(255) NOT NULL,
  `address_of_res` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `dob_verification` varchar(255) NOT NULL,
  `country_of_birth` varchar(255) NOT NULL,
  `state_of_birth` varchar(255) NOT NULL,
  `lga_of_birth` varchar(255) NOT NULL,
  `country_of_origin` varchar(255) NOT NULL,
  `state_of_origin` varchar(255) NOT NULL,
  `lga_of_origin` varchar(255) NOT NULL,
  `town_of_origin` varchar(255) NOT NULL,
  `fathers_country_of_origin` varchar(255) NOT NULL,
  `fathers_state_of_origin` varchar(255) NOT NULL,
  `fathers_lga_of_origin` varchar(255) NOT NULL,
  `fathers_town_of_origin` varchar(255) NOT NULL,
  `mothers_country_of_origin` varchar(255) NOT NULL,
  `mothers_state_of_origin` varchar(255) NOT NULL,
  `mothers_lga_of_origin` varchar(255) NOT NULL,
  `mothers_town_of_origin` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `residence_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `tribal_marks` varchar(255) NOT NULL,
  `hair_color` varchar(255) NOT NULL,
  `hunch_back` varchar(255) NOT NULL,
  `visible_scars` varchar(255) NOT NULL,
  `other_features` varchar(255) NOT NULL,
  `physical_challenges` varchar(255) NOT NULL,
  `identification_no` varchar(255) NOT NULL,
  `unique_code` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `card_type` varchar(255) NOT NULL,
  `issuing_bank` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `native_language` varchar(255) NOT NULL,
  `r_w_language` varchar(255) NOT NULL,
  `other_language` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `home_delivery` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fathers_l_name` varchar(255) NOT NULL,
  `fathers_f_name` varchar(255) NOT NULL,
  `fathers_m_name` varchar(255) NOT NULL,
  `mothers_l_name` varchar(255) NOT NULL,
  `mothers_f_name` varchar(255) NOT NULL,
  `mothers_m_name` varchar(255) NOT NULL,
  `mothers_maiden_name` varchar(255) NOT NULL,
  `guardians_l_name` varchar(255) NOT NULL,
  `guardians_f_name` varchar(255) NOT NULL,
  `guardians_m_name` varchar(255) NOT NULL,
  `nok_l_name` varchar(255) NOT NULL,
  `nok_f_name` varchar(255) NOT NULL,
  `nok_m_name` varchar(255) NOT NULL,
  `nok_relationship` varchar(255) NOT NULL,
  `nok_country` varchar(255) NOT NULL,
  `nok_state_of_res` varchar(255) NOT NULL,
  `nok_lga_of_res` varchar(255) NOT NULL,
  `nok_town_of_res` varchar(255) NOT NULL,
  `nok_address` varchar(255) NOT NULL,
  `nok_nin` varchar(255) NOT NULL,
  `nok_postal_code` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `year_of_admission` varchar(255) NOT NULL,
  `year_of_graduation` varchar(255) NOT NULL,
  `passport` text NOT NULL,
  `signature` text NOT NULL,
  `lga_cert` text NOT NULL,
  `birth_cert` text NOT NULL,
  `date_of_registeration` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `title`, `l_name`, `f_name`, `m_name`, `o_names`, `prev_l_name`, `prev_f_name`, `prev_m_name`, `town_of_res`, `country_of_res`, `state_of_res`, `lga_of_res`, `address_of_res`, `postal_code`, `dob`, `dob_verification`, `country_of_birth`, `state_of_birth`, `lga_of_birth`, `country_of_origin`, `state_of_origin`, `lga_of_origin`, `town_of_origin`, `fathers_country_of_origin`, `fathers_state_of_origin`, `fathers_lga_of_origin`, `fathers_town_of_origin`, `mothers_country_of_origin`, `mothers_state_of_origin`, `mothers_lga_of_origin`, `mothers_town_of_origin`, `gender`, `height`, `residence_status`, `nationality`, `tribal_marks`, `hair_color`, `hunch_back`, `visible_scars`, `other_features`, `physical_challenges`, `identification_no`, `unique_code`, `serial_no`, `card_type`, `issuing_bank`, `marital_status`, `native_language`, `r_w_language`, `other_language`, `education_level`, `religion`, `occupation`, `phone_no`, `employment_status`, `home_delivery`, `email`, `fathers_l_name`, `fathers_f_name`, `fathers_m_name`, `mothers_l_name`, `mothers_f_name`, `mothers_m_name`, `mothers_maiden_name`, `guardians_l_name`, `guardians_f_name`, `guardians_m_name`, `nok_l_name`, `nok_f_name`, `nok_m_name`, `nok_relationship`, `nok_country`, `nok_state_of_res`, `nok_lga_of_res`, `nok_town_of_res`, `nok_address`, `nok_nin`, `nok_postal_code`, `school_name`, `department`, `faculty`, `year_of_admission`, `year_of_graduation`, `passport`, `signature`, `lga_cert`, `birth_cert`, `date_of_registeration`, `status`) VALUES
(1, 'mr', 'Nnamani', 'Mmesoma', 'John', 'Kester', '', '', '', 'Enugu', 'Nigeria', 'Enugu State', 'Nkanu West', 'Okoro Street', '400252', '1999-11-22', '', 'Nigeria', 'Enugu', 'Enugu-south', 'Nigeria', 'Enugu', 'Nkanu', 'Akpugo', 'Nigeria', 'Enugu State', 'Nkanu West', 'Akpugo', 'Nigeria', 'Enugu State', 'Awkunanaw', 'Amaechi', '', '167.9', '', 'Nigeria', 'no', 'Black', 'no', 'no', '', '', '2018030519369', '14-05-09-009', '34703884', 'Voters card', '', '', 'Igbo', 'English, Igbo', 'French', '', '', 'Student', '08101584839', '', 'delivered', 'Nnamanikester@gmail.com', 'Nnamani', 'Edeh', 'John', 'Nnamani', 'Chinelo', 'Gladys', 'Ogbonna', 'Nnamani', 'Ogechukwu', 'Stephanie', 'Nnamani', 'Ogechukwu', 'Stephanie', 'Sister', 'Nigeria', 'Enugu State', 'Enugu South', 'Enugu', '21 Okoro Street, Meniru.', '34634543', '400252', 'Enugu State University Of Science And Technology', 'Computer Science', 'Faculty Of Applied Natural Science', '2018', '2022', 'kester.jpg', '', '', '', '2019-07-19', 'Approved'),
(3, 'master', 'Kester', 'John', 'Efrafref', 'Gkuv', 'Gotmag', 'DeStreetBoard', '', 'Enugu', 'Nigeria', 'Enugu', 'Jgjg', '21 Okoro Street Meniru', '400252', '1999-11-22', '', 'Nigeria', 'Enugu', 'Jhghjg', 'Nigeria', 'Enugu', 'Jhghgj', 'Enugu', 'Nigeria', 'Enugu', 'Gfcjghcv', 'Enugu', 'Nigeria', 'Enugu', 'Olvo', 'Hvkl', 'male', 'Voho', '', 'Nigeria', 'no', 'Black', 'no', 'no', '', '', '46CB87CB92CB59CB', '74-13-77-392', '48884573', 'National Id card', '', '', 'HVOPL', 'IOY', '', '', '', 'Student', '08101584839', '', 'delivered', 'Naijagotmag@gmail.com', 'Gotmag', 'Naija', 'HjvKJGCVjhgcjhCGJ', 'Kester', 'John', 'Yoiuvh', 'Jvh', 'Kester', 'John', 'JGH', 'Kester', 'John', 'Oyhvop', 'Sister', 'Nigeria', 'Enugu', 'Nkanu West', 'Enugu', '21 Okoro Street Meniru, Agbani Road', 'FCH', '400252', 'Naija Gotmag', 'Computer Science', 'Faculty Of Applied Natural Science', '2018-10-22', '2022-07-30', '20190726110754457_copashun.jpg', '20190726110754457_copashun.png', '20190726110754457_copashun.png', '20190726110754457_copashun.png', '2019-07-26', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_type`
--
ALTER TABLE `card_type`
  ADD PRIMARY KEY (`card_type_id`);

--
-- Indexes for table `dob_verification`
--
ALTER TABLE `dob_verification`
  ADD PRIMARY KEY (`verification_id`);

--
-- Indexes for table `education_level`
--
ALTER TABLE `education_level`
  ADD PRIMARY KEY (`education_level_id`);

--
-- Indexes for table `employment_status`
--
ALTER TABLE `employment_status`
  ADD PRIMARY KEY (`employment_status_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `home_delivery`
--
ALTER TABLE `home_delivery`
  ADD PRIMARY KEY (`home_delivery_id`);

--
-- Indexes for table `marital_status`
--
ALTER TABLE `marital_status`
  ADD PRIMARY KEY (`marital_status_id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `residence_status`
--
ALTER TABLE `residence_status`
  ADD PRIMARY KEY (`residence_status_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_Id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `card_type`
--
ALTER TABLE `card_type`
  MODIFY `card_type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dob_verification`
--
ALTER TABLE `dob_verification`
  MODIFY `verification_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education_level`
--
ALTER TABLE `education_level`
  MODIFY `education_level_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employment_status`
--
ALTER TABLE `employment_status`
  MODIFY `employment_status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_delivery`
--
ALTER TABLE `home_delivery`
  MODIFY `home_delivery_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marital_status`
--
ALTER TABLE `marital_status`
  MODIFY `marital_status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `residence_status`
--
ALTER TABLE `residence_status`
  MODIFY `residence_status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `title_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
