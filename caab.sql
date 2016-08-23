-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 09:08 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caab`
--

-- --------------------------------------------------------

--
-- Table structure for table `caab_basic_info`
--

CREATE TABLE `caab_basic_info` (
  `id` int(11) NOT NULL,
  `emp_dept` text,
  `lan` varchar(2) DEFAULT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `emp_name_eng` varchar(100) DEFAULT NULL,
  `emp_id_number` text,
  `emp_current_designation` varchar(100) DEFAULT NULL,
  `emp_appointment_designation` varchar(100) DEFAULT NULL,
  `emp_apointment_date` varchar(100) DEFAULT NULL,
  `emp_promotion_date` varchar(100) DEFAULT NULL,
  `emp_current_office` varchar(100) DEFAULT NULL,
  `emp_current_office_appointment_date` varchar(100) DEFAULT NULL,
  `emp_recent_prev_joining_place` varchar(350) DEFAULT NULL,
  `emp_recent_prev_designation` text,
  `emp_recent_prev_joining_date` varchar(100) DEFAULT NULL,
  `emp_nationality` varchar(100) DEFAULT NULL,
  `emp_nid_no` varchar(100) DEFAULT NULL,
  `emp_religion` varchar(100) DEFAULT NULL,
  `emp_passport_no` varchar(100) DEFAULT NULL,
  `emp_father_name` varchar(100) DEFAULT NULL,
  `emp_mother_name` varchar(100) DEFAULT NULL,
  `emp_birth_date` varchar(100) DEFAULT NULL,
  `emp_blood_group` varchar(100) DEFAULT NULL,
  `emp_sex` varchar(100) DEFAULT NULL,
  `emp_merital_status` varchar(100) DEFAULT NULL,
  `emp_spose` varchar(100) DEFAULT NULL,
  `emp_telephone_number` varchar(100) DEFAULT NULL,
  `emp_mobile_number` varchar(100) DEFAULT NULL,
  `emp_tin` varchar(100) DEFAULT NULL,
  `emp_email` varchar(100) DEFAULT NULL,
  `emp_add_village` varchar(100) DEFAULT NULL,
  `emp_add_post` varchar(100) DEFAULT NULL,
  `emp_add_po` varchar(100) DEFAULT NULL,
  `emp_add_district` varchar(100) DEFAULT NULL,
  `emp_per_add_house` varchar(100) DEFAULT NULL,
  `emp_per_add_road` varchar(100) DEFAULT NULL,
  `emp_per_add_village` varchar(100) DEFAULT NULL,
  `emp_per_add_post` varchar(100) DEFAULT NULL,
  `emp_per_add_po` varchar(100) DEFAULT NULL,
  `emp_per_add_district` varchar(100) DEFAULT NULL,
  `emp_computer_skill` varchar(500) DEFAULT NULL,
  `emp_retirement_date` varchar(25) DEFAULT NULL,
  `emp_children_amount` varchar(10) DEFAULT NULL,
  `emp_extra_experience` varchar(500) DEFAULT NULL,
  `emp_photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_basic_info`
--

INSERT INTO `caab_basic_info` (`id`, `emp_dept`, `lan`, `emp_name`, `emp_name_eng`, `emp_id_number`, `emp_current_designation`, `emp_appointment_designation`, `emp_apointment_date`, `emp_promotion_date`, `emp_current_office`, `emp_current_office_appointment_date`, `emp_recent_prev_joining_place`, `emp_recent_prev_designation`, `emp_recent_prev_joining_date`, `emp_nationality`, `emp_nid_no`, `emp_religion`, `emp_passport_no`, `emp_father_name`, `emp_mother_name`, `emp_birth_date`, `emp_blood_group`, `emp_sex`, `emp_merital_status`, `emp_spose`, `emp_telephone_number`, `emp_mobile_number`, `emp_tin`, `emp_email`, `emp_add_village`, `emp_add_post`, `emp_add_po`, `emp_add_district`, `emp_per_add_house`, `emp_per_add_road`, `emp_per_add_village`, `emp_per_add_post`, `emp_per_add_po`, `emp_per_add_district`, `emp_computer_skill`, `emp_retirement_date`, `emp_children_amount`, `emp_extra_experience`, `emp_photo`) VALUES
(39, 'চেয়ারম্যান-সচিবালয়', 'bn', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা 2582', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', '0', '1472061600', 'বাংলা test_01_august_5', '1472407200', 'বাংলা test_01_august_5', 'বাংলা খ) পদবী', '1472234400', 'Afghan', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', '1470506400', 'B_neg', 'পুরুষ', 'বিধবা', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'বরগুনা', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'বরগুনা', 'a:1:{i:0;s:14:"Microsoft Word";}', '1471543200', 'test_01_au', 'No experience0 11\r\n', NULL),
(40, 'সিভিল-সার্কেল', 'bn', 'শারোয়ার', 'SAROWRE JAHAN', '201521042048', 'ডেভলপার', 'ডিজাইনার', '1469988000', '1472666400', 'Versatile', '1469988000', 'ড্রিন্স', 'ডেভলপার', '1459447200', 'বাংলাদেশী', '199319931993', 'ইসলাম', '123456789', 'মো: মহিউদ্দিন', 'মোসা: মমতাজ মহাল', '719344800', 'A_pos', 'পুরুষ', 'অবিবাহিত', 'নাই', '01753945342', '01827775911', 'নাই', 'sarowerj@gmail.com', 'বেলেপুকুর ', 'নবাবগঞ্জ', 'সদর', 'নওয়াবগঞ্জ', '14', '02', 'কাদেরাবাদ হাউজিং', 'মো:পুর', 'মো:পুর', 'ঢাকা', '', '0', 'নাই.', 'নাই', NULL),
(41, 'সশস্ত্র-নিরাপত্তা-প্রহরী', 'bn', 'Sarower Jahan bangla', 'test_03_august_5', '5523', 'test_03_august_5', 'test_03_august_5', '1470765600', '1470679200', 'test_03_august_5', '1471284000', 'test_03_august_5', 'llm', '1471543200', 'Afghan', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', '1471665600', 'A_neg', 'পুরুষ', 'বিবাহিত', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'নওয়াবগঞ্জ', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'নওয়াবগঞ্জ', 'a:2:{i:0;s:17:"Internet Browsing";i:1;s:15:"Adobe Photoshop";}', '1470679200', 'test_03_au', '৩৪. বিশেষ দক্ষতা/পারদর্শিতা', NULL),
(42, 'সশস্ত্র-নিরাপত্তা-প্রহরী', 'bn', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', '1470765600', '1470679200', 'test_02_august_8', '1471284000', 'test_02_august_8', NULL, '1471543200', 'Argentinean', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', '1471665600', 'AB+', 'অন্যান্য', 'অবিবাহিত', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'পিরোজপুর', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'ঢাকা', 'a:3:{i:0;s:14:"Microsoft Word";i:1;s:20:"Microsoft Powerpoint";i:2;s:16:"Microsoft Access";}', '1470679200', 'test_02_au', 'test_02_august_8', NULL),
(43, 'রাজশাহী-বিমানবন্দর', 'bn', '০১. কর্মকর্তার নাম     25', '০২. নাম ইংরেজীতে     55555', '256', '০৪. বর্তমান পদবি     55555', '০৫. নিয়োগকালীন পদবি     55555', '1470765600', '1470679200', '০৯. বর্তমান কর্মস্থল     55555', '1471284000', 'ক) কর্মস্থল     55555', 'খ) পদবী     55555', '1471543200', 'Bangladeshi     55555', '১৩. জাতীয় পরিচয়পত্র নং     55555', '১৪. ধর্ম     55555', '১৫. পাসপোর্ট নম্বর     55555', '১৬. পিতার নাম     55555', '১৭. মাতার নাম     55555', '1471665600', 'B_pos', 'পুরুষ', 'বিধবা', '২২. স্বামী/স্ত্রীর নাম     55555', '২৩. টেলিফোন নম্বর     55555', '২৪. মোবাইল নম্বর (রেজিস্টার্ড)     55555', '২৫. টিআইএন (TIN)     55555', '২৬. ইমেইল     55555', '২৭. স্থায়ী ঠিকানা     55555', 'ডাকঘর     55555', 'থানা/উপজেলা     55555', 'ঝিনাইদহ', 'বাসা নং     55555', 'সড়ক নং     55555', 'গ্রাম     55555', 'ডাকঘর     55555', 'থানা / উপজেলা     55555', 'মেহেরপুর', 'a:4:{i:0;s:15:"Microsoft Excel";i:1;s:20:"Microsoft Powerpoint";i:2;s:16:"Microsoft Access";i:3;s:9:"Designing";}', '1470679200', '৩৩. সন্তান', '৩৪. বিশেষ দক্ষতা/পারদর্শিতা     55555', NULL),
(45, 'সদস্য-(পরিঃ)', 'bn', 'সারোয়ার  জাহান', 'SAROWRE JAHAN', '201521042014', 'ডেভলপার', 'ডিজাইনার', '1706205600', '1250010000', 'উত্তরা', '1471284000', 'আগারগাও', 'ডিজাইনার', '1075312800', 'Bangladeshi', '201521042048', 'ইসলাম', '123456789', 'মো: মহিউদ্দিন', '', '-21600', 'A_pos', 'পুরুষ', 'অবিবাহিত', 'নাই', '123456789', '01753945342', 'নাই', 'sarowerj@gmail.com', 'বেলেপুকুর ', 'নবাবগঞ্জ', 'সদর', 'নওয়াবগঞ্জ', '14', '02', 'কাদেরাবাদ হাউজিং', 'মো:পুর', 'মো:পুর', 'ঢাকা', 'a:4:{i:0;s:14:"Microsoft Word";i:1;s:20:"Microsoft Powerpoint";i:2;s:16:"Microsoft Access";i:3;s:9:"Designing";}', '1704909600', 'নাই', 'asdfdas\r\n', NULL),
(46, 'আইন-শাখা', 'bn', 'মো: আনোয়ার হোসেন', 'Md. Anwar Hossain', '201521042048', 'ডিজাইনার', 'ডিজাইনার', '1471370400', '1472061600', 'গ্রাফিক্স', '1471975200', 'চাঁপাই নবাবগঞ্জ', 'ছাত্র', '1470679200', 'Bangladeshi', '123456789', 'ইসলাম', '123456987', 'মো: সাইফুল ইসলাম', 'মোসা: আমেনা বেগম', '750880800', 'A_neg', 'পুরুষ', 'অবিবাহিত', 'নাই', '017539453425', '+8801753945342', 'নাই', 'anwar@gmail.com', 'অরুনবাড়ী', 'মহিপুর', 'সদর', 'নওয়াবগঞ্জ', '14', '02', 'কাদেরাবাদ হাউজিং', 'মো:পুর', 'মো:পুর', 'ঢাকা', 'a:2:{i:0;s:14:"Microsoft Word";i:1;s:15:"Microsoft Excel";}', '1470765600', 'নাই', 'ফটোশপ', NULL),
(47, 'সশস্ত্র-নিরাপত্তা-প্রহরী', 'bn', 'মো: আনোয়ার হোসেন', 'Md. Anwar Hossain', '201521042048', 'ডিজাইনার', 'ডিজাইনার', '1471370400', '1472061600', 'গ্রাফিক্স', '1471975200', 'চাঁপাই নবাবগঞ্জ', 'ছাত্র', '1470679200', 'Bangladeshi', '123456789', 'ইসলাম', '123456987', 'মো: সাইফুল ইসলাম', 'মোসা: আমেনা বেগম', '750880800', 'A_neg', 'পুরুষ', 'অবিবাহিত', 'নাই', '017539453425', '+8801753945342', 'নাই', 'anwar@gmail.com', 'অরুনবাড়ী', 'মহিপুর', 'সদর', 'নওয়াবগঞ্জ', '14', '02', 'কাদেরাবাদ হাউজিং', 'মো:পুর', 'মো:পুর', 'ঢাকা', 'a:2:{i:0;s:14:"Microsoft Word";i:1;s:15:"Microsoft Excel";}', '1470765600', 'নাই', 'ফটোশপ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `caab_basic_info_en`
--

CREATE TABLE `caab_basic_info_en` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(10) DEFAULT NULL,
  `emp_dept` text,
  `lan` varchar(2) DEFAULT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `emp_name_eng` varchar(100) DEFAULT NULL,
  `emp_id_number` text,
  `emp_current_designation` varchar(100) DEFAULT NULL,
  `emp_appointment_designation` varchar(100) DEFAULT NULL,
  `emp_apointment_date` varchar(100) DEFAULT NULL,
  `emp_promotion_date` varchar(100) DEFAULT NULL,
  `emp_current_office` varchar(100) DEFAULT NULL,
  `emp_current_office_appointment_date` varchar(100) DEFAULT NULL,
  `emp_recent_prev_joining_place` varchar(350) DEFAULT NULL,
  `emp_recent_prev_designation` text,
  `emp_recent_prev_joining_date` varchar(100) DEFAULT NULL,
  `emp_nationality` varchar(100) DEFAULT NULL,
  `emp_nid_no` varchar(100) DEFAULT NULL,
  `emp_religion` varchar(100) DEFAULT NULL,
  `emp_passport_no` varchar(100) DEFAULT NULL,
  `emp_father_name` varchar(100) DEFAULT NULL,
  `emp_mother_name` varchar(100) DEFAULT NULL,
  `emp_birth_date` varchar(100) DEFAULT NULL,
  `emp_blood_group` varchar(100) DEFAULT NULL,
  `emp_sex` varchar(100) DEFAULT NULL,
  `emp_merital_status` varchar(100) DEFAULT NULL,
  `emp_spose` varchar(100) DEFAULT NULL,
  `emp_telephone_number` varchar(100) DEFAULT NULL,
  `emp_mobile_number` varchar(100) DEFAULT NULL,
  `emp_tin` varchar(100) DEFAULT NULL,
  `emp_email` varchar(100) DEFAULT NULL,
  `emp_add_village` varchar(100) DEFAULT NULL,
  `emp_add_post` varchar(100) DEFAULT NULL,
  `emp_add_po` varchar(100) DEFAULT NULL,
  `emp_add_district` varchar(100) DEFAULT NULL,
  `emp_per_add_house` varchar(100) DEFAULT NULL,
  `emp_per_add_road` varchar(100) DEFAULT NULL,
  `emp_per_add_village` varchar(100) DEFAULT NULL,
  `emp_per_add_post` varchar(100) DEFAULT NULL,
  `emp_per_add_po` varchar(100) DEFAULT NULL,
  `emp_per_add_district` varchar(100) DEFAULT NULL,
  `emp_computer_skill` varchar(500) DEFAULT NULL,
  `emp_retirement_date` varchar(25) DEFAULT NULL,
  `emp_children_amount` varchar(10) DEFAULT NULL,
  `emp_extra_experience` varchar(500) DEFAULT NULL,
  `emp_photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_basic_info_en`
--

INSERT INTO `caab_basic_info_en` (`id`, `emp_id`, `emp_dept`, `lan`, `emp_name`, `emp_name_eng`, `emp_id_number`, `emp_current_designation`, `emp_appointment_designation`, `emp_apointment_date`, `emp_promotion_date`, `emp_current_office`, `emp_current_office_appointment_date`, `emp_recent_prev_joining_place`, `emp_recent_prev_designation`, `emp_recent_prev_joining_date`, `emp_nationality`, `emp_nid_no`, `emp_religion`, `emp_passport_no`, `emp_father_name`, `emp_mother_name`, `emp_birth_date`, `emp_blood_group`, `emp_sex`, `emp_merital_status`, `emp_spose`, `emp_telephone_number`, `emp_mobile_number`, `emp_tin`, `emp_email`, `emp_add_village`, `emp_add_post`, `emp_add_po`, `emp_add_district`, `emp_per_add_house`, `emp_per_add_road`, `emp_per_add_village`, `emp_per_add_post`, `emp_per_add_po`, `emp_per_add_district`, `emp_computer_skill`, `emp_retirement_date`, `emp_children_amount`, `emp_extra_experience`, `emp_photo`) VALUES
(39, '39', 'চেয়ারম্যান-সচিবালয়', 'en', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা 2582', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা test_01_august_5', 'বাংলা খ) পদবী', 'test_01_august_5', 'Afghan', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'B_neg', 'পুরুষ', 'বিধবা', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'বরগুনা', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'বরগুনা', 'a:1:{i:0;s:14:"Microsoft Word";}', 'বাংলা test_01_august_5', 'test_01_au', 'No experience0 11\r\n', NULL),
(40, '40', 'সম্পত্তি-শাখা', 'en', 'Golam Sharower Jahan', NULL, '2595 66', 'Web Developer', 'test_02_august_5', '0', '0', 'test_02_august_5', '0', 'test_02_august_5', 'খ) পদবী 55', '0', 'Afghan', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', '0', 'AB_pos', 'মহিলা', 'বিধবা', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'বরগুনা', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'বরগুনা', 'a:4:{i:0;s:14:"Microsoft Word";i:1;s:15:"Microsoft Excel";i:2;s:20:"Microsoft Powerpoint";i:3;s:16:"Microsoft Access";}', '0', 'test_02_au', 'fasdfdasf', NULL),
(41, '41', 'সশস্ত্র-নিরাপত্তা-প্রহরী', 'en', 'Sarower Jahan bangla', 'test_03_august_5', '5523', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'llm', 'test_03_august_5', 'Afghan', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'A_neg', 'পুরুষ', 'বিবাহিত', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'নওয়াবগঞ্জ', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'নওয়াবগঞ্জ', 'a:2:{i:0;s:17:"Internet Browsing";i:1;s:15:"Adobe Photoshop";}', 'test_03_august_5', 'test_03_au', '৩৪. বিশেষ দক্ষতা/পারদর্শিতা', NULL),
(42, '42', 'সশস্ত্র-নিরাপত্তা-প্রহরী', 'en', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', NULL, 'test_02_august_8', 'Argentinean', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'AB+', 'অন্যান্য', 'অবিবাহিত', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'পিরোজপুর', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'ঢাকা', 'a:3:{i:0;s:14:"Microsoft Word";i:1;s:20:"Microsoft Powerpoint";i:2;s:16:"Microsoft Access";}', 'test_02_august_8', 'test_02_au', 'test_02_august_8', NULL),
(43, '43', 'রাজশাহী-বিমানবন্দর', 'en', '০১. কর্মকর্তার নাম     25', '০২. নাম ইংরেজীতে     55555', '256', '০৪. বর্তমান পদবি     55555', '০৫. নিয়োগকালীন পদবি     55555', '12/08/2016     55555', '19/08/2016     55555', '০৯. বর্তমান কর্মস্থল     55555', '31/08/2016     55555', 'ক) কর্মস্থল     55555', 'খ) পদবী     55555', 'গ) যোগদানের তারিখ     55555', 'Bangladeshi     55555', '১৩. জাতীয় পরিচয়পত্র নং     55555', '১৪. ধর্ম     55555', '১৫. পাসপোর্ট নম্বর     55555', '১৬. পিতার নাম     55555', '১৭. মাতার নাম     55555', '01/08/2016     55555', 'B_pos', 'পুরুষ', 'বিধবা', '২২. স্বামী/স্ত্রীর নাম     55555', '২৩. টেলিফোন নম্বর     55555', '২৪. মোবাইল নম্বর (রেজিস্টার্ড)     55555', '২৫. টিআইএন (TIN)     55555', '২৬. ইমেইল     55555', '২৭. স্থায়ী ঠিকানা     55555', 'ডাকঘর     55555', 'থানা/উপজেলা     55555', 'ঝিনাইদহ', 'বাসা নং     55555', 'সড়ক নং     55555', 'গ্রাম     55555', 'ডাকঘর     55555', 'থানা / উপজেলা     55555', 'মেহেরপুর', 'a:4:{i:0;s:15:"Microsoft Excel";i:1;s:20:"Microsoft Powerpoint";i:2;s:16:"Microsoft Access";i:3;s:9:"Designing";}', '11/08/2016     55555', '৩৩. সন্তান', '৩৪. বিশেষ দক্ষতা/পারদর্শিতা     55555', NULL),
(44, '47', '', 'en', 'asdfasdf', NULL, 'sdafasdf', 'asdfdasf', '', '0', '0', '', '0', '', '', '0', '', '', '', '', '', '', '0', 'B_pos', NULL, 'বিবাহিত', '', '', '', '', '', '', '', '', 'বরগুনা', '', '', '', '', '', 'বরগুনা', '', '0', '', '', NULL),
(45, '00', NULL, 'en', 'Rajin', NULL, '135', '', '', '0', '1481133600', '', '0', '', '', '0', '', '', '', '', '', '', '0', 'A_neg', NULL, 'বিবাহিত', '', '', '', '', '', '', '', '', 'বরগুনা', '', '', '', '', '', 'বরগুনা', 'N;', '0', '', '', NULL),
(46, '00', NULL, 'en', 'MD. Anwar Hossain', NULL, '25', 'ডেভলপার', 'ডিজাইনার', '1471975200', '1471629600', 'উত্তরা', '0', '', '', '0', '', '', '', '', '', '', '0', 'A_neg', NULL, 'বিবাহিত', '', '', '', '', '', '', '', '', 'বরগুনা', '', '', '', '', '', 'বরগুনা', 'a:2:{i:0;s:15:"Microsoft Excel";i:1;s:16:"Microsoft Access";}', '1470852000', 'New Englis', 'New English', NULL),
(47, '00', NULL, 'en', 'MD. Anwar Hossain', NULL, '25', 'ডেভলপার', 'ডিজাইনার', '1470852000', '1472148000', 'উত্তরা', '1471629600', 'আগারগাও', 'llm', '1471456800', 'bangladeshi', '2012sdafdasf', 'ইসলাম', 'dasfdasf', 'মো: মহিউদ্দিন', '', '1471456800', 'AB_neg', 'মহিলা', 'বিধবা', 'নাই', '+8801753945342', '+8801753945342', 'নাই', 'sarowerj@gmail.com', 'বেলেপুকুর ', 'নবাবগঞ্জ', 'সদর', 'পটুয়াখালী', '14', '02', 'কাদেরাবাদ হাউজিং', 'মো:পুর', 'মো:পুর', 'চট্টগ্রাম', 'a:4:{i:0;s:14:"Microsoft Word";i:1;s:15:"Microsoft Excel";i:2;s:20:"Microsoft Powerpoint";i:3;s:17:"Internet Browsing";}', '1471629600', 'English', 'English', NULL),
(48, '46', '', 'en', 'MD. Anwar Hossain', NULL, '20', 'Designer', 'Designer', '1471370400', '1471456800', '', '1471543200', 'আগারগাও', 'ডিজাইনার', '1472148000', '', '', '', '', '', '', '0', 'B_neg', 'পুরুষ', 'অবিবাহিত', '', '', '', '', '', '', '', '', 'COMILLA', '', '', '', '', '', 'CHITTAGONG', 'a:2:{i:0;s:15:"Microsoft Excel";i:1;s:20:"Microsoft Powerpoint";}', '1471370400', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `caab_educational_qualification`
--

CREATE TABLE `caab_educational_qualification` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `edu_exam_name` varchar(200) NOT NULL,
  `edu_exam_dept` varchar(200) NOT NULL,
  `edu_passing_year` varchar(25) NOT NULL,
  `edu_university_board` varchar(50) NOT NULL,
  `edu_gpa_class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_educational_qualification`
--

INSERT INTO `caab_educational_qualification` (`id`, `lan`, `emp_id`, `edu_exam_name`, `edu_exam_dept`, `edu_passing_year`, `edu_university_board`, `edu_gpa_class`) VALUES
(89, 'bn', '39', 'test_01_august_5', 'test_01_august_5ddfd', 'test_01_august_5', 'test_01_august_5', 'test_01_au'),
(90, 'bn', '39', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_au'),
(91, 'bn', '39', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_au'),
(92, 'bn', '39', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_au'),
(93, 'en', '40', 'test_02_august_5 fdf LLM 225', 'test_02_august_5', 'test_02_august_5', 'test_02_august_5', 'test_02_au'),
(94, 'bn', '40', 'এস এস সি', 'কম্পিউটার', '2009', 'কারিগরি', '4.09'),
(95, 'bn', '40', '--', '', '', '', ''),
(96, NULL, '41', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_au'),
(97, NULL, '41', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_au'),
(98, NULL, '41', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_au'),
(99, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_au'),
(100, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_au'),
(101, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_au'),
(102, 'bn', '43', 'পরীক্ষার নাম	     55555', 'গ্রুপ/বিভাগ/বিষয়	     55555', 'পাসের সন	', 'বিশ্ববিদ্যালয়/বোর্ড	     55555', 'জিপিএ/গ্রে'),
(103, 'bn', '43', 'পরীক্ষার নাম	     55555', 'গ্রুপ/বিভাগ/বিষয়	     55555', 'পাসের সন	', 'বিশ্ববিদ্যালয়/বোর্ড	', 'জিপিএ/গ্রে'),
(104, 'bn', '43', 'পরীক্ষার নাম	     55555', 'গ্রুপ/বিভাগ/  55555', 'পাসের সন	', 'বিশ্ববিদ্যালয়/বোর্ড	     55555', 'জিপিএ/গ্রে'),
(105, 'bn', '43', 'নাম	     ', '55555', 'পাসের ', 'বিশ্ববিদ্যালয়', 'জিপিএ'),
(106, 'bn', '43', 'asdfdasf', 'asdfasd', 'fasdf', 'adfs', 'asdf'),
(107, 'bn', '39', 'test', 'test', 'test', 'test', 'test'),
(108, 'en', '40', 'test english', 'test english', 'test english', 'test english', 'test engli'),
(109, 'en', '39', 'test', 'test', 'test', 'test', 'test'),
(110, 'bn', '45', 'এসএসসি', 'কম্পিউটার', '2009', 'কারিগরি', '4.09'),
(111, 'bn', '46', 'এস এস সি', 'আর্টস', '2012', 'রাজশাহী', '4.00'),
(112, 'bn', '47', 'এস এস সি', 'আর্টস', '2012', 'রাজশাহী', '4.00'),
(113, 'en', '46', 'New English', 'New English', '2016', 'New English', 'New Englis'),
(114, 'en', '46', 'New English', 'New English', '2017', 'New English', 'New Englis'),
(115, 'en', '46', 'English', 'English', '2016', 'English', 'English'),
(116, 'en', '46', 'SSC', 'Arts', '2015', 'RAJ', '4.09'),
(117, 'en', '46', 'HSC', 'Arts', '2019', 'DK', '500'),
(118, 'en', '47', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `caab_functionss`
--

CREATE TABLE `caab_functionss` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `has_child` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_functionss`
--

INSERT INTO `caab_functionss` (`id`, `name`, `display_name`, `has_child`) VALUES
(1, 'user', 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `caab_functions_metas`
--

CREATE TABLE `caab_functions_metas` (
  `id` int(11) NOT NULL,
  `function_id` int(10) NOT NULL,
  `meta_key` varchar(100) NOT NULL,
  `meta_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_functions_metas`
--

INSERT INTO `caab_functions_metas` (`id`, `function_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'add_user', 'Add User'),
(2, 1, 'edit_user', 'Edit User');

-- --------------------------------------------------------

--
-- Table structure for table `caab_function_access_lists`
--

CREATE TABLE `caab_function_access_lists` (
  `id` int(20) NOT NULL,
  `function_id` int(20) NOT NULL,
  `function_meta_id` int(20) NOT NULL,
  `user_group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_function_access_lists`
--

INSERT INTO `caab_function_access_lists` (`id`, `function_id`, `function_meta_id`, `user_group_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `caab_info_training`
--

CREATE TABLE `caab_info_training` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `employeement_training_name` text,
  `employeement_training_institute` text,
  `employeement_training_from` text,
  `employeement_training_to` text,
  `employeement_training_duration` text,
  `employeement_training` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_info_training`
--

INSERT INTO `caab_info_training` (`id`, `lan`, `emp_id`, `employeement_training_name`, `employeement_training_institute`, `employeement_training_from`, `employeement_training_to`, `employeement_training_duration`, `employeement_training`) VALUES
(64, 'bn', '39', 'FF', 'employeement_training_institute', '1471284000', '1471284000', '', 'test_01_august_5'),
(65, 'bn', '39', '', '', '1472061600', '1472580000', '', 'test_01_august_6'),
(66, 'bn', '39', '', '', '1471284000', '1471284000', '', 'test_01_august_5'),
(67, 'en', '40', 'কোর্সের নাম	5\r\n', 'প্রতিষ্ঠান \r\n2', '0', '0', 'test_02_august_5', 'বিবরণ\r\n'),
(68, 'bn', '40', 'কোর্সের নাম	', 'প্রতিষ্ঠান', '1471284000', '1471975200', 'test_02_august_5', 'বিবরণ\r\n'),
(69, 'bn', '40', '--', 'প্রতিষ্ঠান', '0', '0', 'test_02_august_5', 'বিবরণ\r\n'),
(70, NULL, '41', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'বিবরণ\r\n'),
(71, NULL, '41', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'বিবরণ\r\n'),
(72, NULL, '41', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'বিবরণ\r\n'),
(73, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(74, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(75, NULL, '42', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(76, 'bn', '43', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', '18/08/2016', '19/08/2016', 'সময়কাল	', 'বিবরণ\r\n     55555'),
(77, 'bn', '43', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', '18/08/2016', '19/08/2016', 'সময়কাল	', 'বিবরণ\r\n     55555'),
(78, 'en', '43', 'কোর্সের নাম	', 'প্রতিষ্ঠান	', '18/08/2016', '19/08/2016', 'সময়কাল	', 'বিবরণ\r\n     55555'),
(79, 'bn', '40', '--', 'fadsf', '0', '0', 'asdf', 'ZXcxzc'),
(80, 'bn', '40', 'testt', 'test', '0', '0', 'test', 'test'),
(81, 'en', '40', 'fasdfdasf', 'asdfdasf', '0', '0', 'fasdfasdf', 'asdfasdf'),
(82, 'en', '39', 'gv', 'fv', '23/08/2016', '22/08/2016', 'fv', 'fv'),
(83, 'en', '41', 'safdasf', 'asdfasdf', '11/08/2016', '09/08/2016', 'sadfasdf', 'asdf'),
(84, 'bn', '45', 'পিএইচপি ', 'আইবিসিএস ', '2021047200', '1471888800', '2', 'জানি না'),
(85, 'bn', '47', 'নাই', 'নাই', '1470679200', '1471802400', '2', 'ুৃািৃিুাআব্বক'),
(86, 'en', '46', 'New English', 'New English', '1471370400', '1472148000', 'New English', 'New English'),
(87, 'en', '46', 'English', 'English', '1470679200', '1470765600', '2', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `caab_nominee_info_bema`
--

CREATE TABLE `caab_nominee_info_bema` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_bema_nomini_name_rel` varchar(200) NOT NULL,
  `bema_percent_amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_nominee_info_bema`
--

INSERT INTO `caab_nominee_info_bema` (`id`, `lan`, `emp_id`, `emp_bema_nomini_name_rel`, `bema_percent_amount`) VALUES
(79, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(80, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(81, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(82, 'bn', '40', 'মোসা: মমতাজ মহাল, মা ', '85'),
(83, 'bn', '40', '--', ''),
(84, 'bn', '40', '--', ''),
(85, NULL, '41', 'test_03_august_5', 'test_03_au'),
(86, NULL, '41', 'test_03_august_5', 'test_03_au'),
(87, NULL, '41', 'test_03_august_5', 'test_03_au'),
(88, NULL, '42', 'test_02_august_8', 'test_02_au'),
(89, NULL, '42', 'test_02_august_8', 'test_02_au'),
(90, NULL, '42', 'test_02_august_8', 'test_02_au'),
(91, 'bn', '40', '--', ''),
(92, 'en', '39', 'test', ''),
(93, 'bn', '45', 'মা', '100'),
(94, 'bn', '45', 'মা', '100%'),
(95, 'bn', '46', 'মোসা: আমেনা বেগম, মা', '65'),
(96, 'bn', '47', 'মোসা: আমেনা বেগম, মা', '65'),
(97, 'en', '46', 'English', '58'),
(98, 'en', '46', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `caab_nominee_info_dead_loss`
--

CREATE TABLE `caab_nominee_info_dead_loss` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_dead_loss_nomini_name_rel` varchar(200) NOT NULL,
  `emp_dead_loss_percent_amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_nominee_info_dead_loss`
--

INSERT INTO `caab_nominee_info_dead_loss` (`id`, `lan`, `emp_id`, `emp_dead_loss_nomini_name_rel`, `emp_dead_loss_percent_amount`) VALUES
(79, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(80, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(81, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(82, 'bn', '40', 'মোসা: মমতাজ মহাল, মা', '100'),
(83, 'bn', '40', '--', ''),
(84, 'bn', '40', '--', ''),
(85, NULL, '41', 'test_03_august_5', 'test_03_au'),
(86, NULL, '41', 'test_03_august_5', 'test_03_au'),
(87, NULL, '41', 'test_03_august_5', 'test_03_au'),
(88, NULL, '42', 'test_02_august_8', 'test_02_au'),
(89, NULL, '42', 'test_02_august_8', 'test_02_au'),
(90, NULL, '42', 'test_02_august_8', 'test_02_au'),
(91, 'bn', '40', '--', ''),
(92, 'en', '39', 'detgh', 'det'),
(93, 'bn', '45', 'মা', '100'),
(94, 'bn', '46', 'মোসা: আমেনা বেগম, মা', '85'),
(95, 'bn', '47', 'মোসা: আমেনা বেগম, মা', '85'),
(96, 'en', '46', 'English', '35'),
(97, 'en', '46', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `caab_nominee_info_gpf`
--

CREATE TABLE `caab_nominee_info_gpf` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_gpf_nomini_name_rel` varchar(100) NOT NULL,
  `gpf_percent_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_nominee_info_gpf`
--

INSERT INTO `caab_nominee_info_gpf` (`id`, `lan`, `emp_id`, `emp_gpf_nomini_name_rel`, `gpf_percent_amount`) VALUES
(81, 'bn', '39', 'test_01_august_5', 'test_01_august_5'),
(82, 'bn', '39', 'test_01_august_5', 'test_01_august_5'),
(83, 'bn', '39', 'test_01_august_5', 'test_01_august_5'),
(84, 'bn', '40', 'মোসা: মমতাজ মহাল, মা', '25'),
(85, 'bn', '40', '--', ''),
(86, 'bn', '40', '--', ''),
(87, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(88, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(89, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(90, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(91, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(92, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(93, 'bn', '40', '--', ''),
(94, 'bn', '43', 'test', '5'),
(95, 'en', '39', 'test', 'test'),
(96, 'bn', '45', 'মা', '100'),
(97, 'bn', '46', 'মোসা: আমেনা বেগম, মা', '50'),
(98, 'bn', '47', 'মোসা: আমেনা বেগম, মা', '50'),
(99, 'bn', '45', '--', '0'),
(100, 'en', '46', 'New English', '10'),
(101, 'en', '46', 'English', '50'),
(102, 'en', '46', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `caab_nominee_info_pention`
--

CREATE TABLE `caab_nominee_info_pention` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_pention_nomini_name_rel` varchar(200) NOT NULL,
  `pention_percent_amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_nominee_info_pention`
--

INSERT INTO `caab_nominee_info_pention` (`id`, `lan`, `emp_id`, `emp_pention_nomini_name_rel`, `pention_percent_amount`) VALUES
(82, 'bn', '39', 'test_01_august_5', 'test_01_august_5'),
(83, 'en', '39', 'test_01_august_5', 'test_01_august_5'),
(84, 'bn', '39', 'test_01_august_5', 'test_01_august_5'),
(85, 'bn', '40', 'মোসা: মমতাজ মহাল, মা', '55'),
(86, 'bn', '40', '--', ''),
(87, 'bn', '40', '--', ''),
(88, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(89, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(90, NULL, '41', 'test_03_august_5', 'test_03_august_5'),
(91, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(92, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(93, NULL, '42', 'test_02_august_8', 'test_02_august_8'),
(94, 'bn', '40', '--', ''),
(95, 'bn', '45', 'মা', '100'),
(96, 'bn', '46', 'মোসা: আমেনা বেগম, মা', '25'),
(97, 'bn', '47', 'মোসা: আমেনা বেগম, মা', '25'),
(98, 'en', '46', 'New English', ''),
(99, 'en', '46', 'English', '336'),
(100, 'en', '46', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `caab_nominee_info_walfare`
--

CREATE TABLE `caab_nominee_info_walfare` (
  `ID` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_walfare_nomini_name_rel` varchar(500) NOT NULL,
  `walfare_percent_amount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_nominee_info_walfare`
--

INSERT INTO `caab_nominee_info_walfare` (`ID`, `lan`, `emp_id`, `emp_walfare_nomini_name_rel`, `walfare_percent_amount`) VALUES
(74, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(75, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(76, 'bn', '39', 'test_01_august_5', 'test_01_au'),
(77, 'bn', '40', 'মোসা: মমতাজ মহাল, মা', '65'),
(78, 'bn', '40', '--', ''),
(79, 'bn', '40', '--', ''),
(80, NULL, '41', 'test_03_august_5', 'test_03_au'),
(81, NULL, '41', 'test_03_august_5', 'test_03_au'),
(82, NULL, '41', 'test_03_august_5', 'test_03_au'),
(83, NULL, '42', 'test_02_august_8', 'test_02_au'),
(84, NULL, '42', 'test_02_august_8', 'test_02_au'),
(85, NULL, '42', 'test_02_august_8', 'test_02_au'),
(86, 'bn', '40', '--', ''),
(87, 'en', '39', 'test', 'dfdf'),
(88, 'bn', '45', 'মা', '100'),
(89, 'bn', '46', 'মোসা: আমেনা বেগম, মা', '75'),
(90, 'bn', '47', 'মোসা: আমেনা বেগম, মা', '75'),
(91, 'en', '46', 'English', '15'),
(92, 'en', '46', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `caab_office_info`
--

CREATE TABLE `caab_office_info` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` int(10) NOT NULL,
  `emp_office_name` varchar(250) NOT NULL,
  `emp_office_from` varchar(250) NOT NULL,
  `emp_office_to` varchar(250) NOT NULL,
  `emp_office_duration` text,
  `emp_office_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_office_info`
--

INSERT INTO `caab_office_info` (`id`, `lan`, `emp_id`, `emp_office_name`, `emp_office_from`, `emp_office_to`, `emp_office_duration`, `emp_office_about`) VALUES
(89, 'bn', 39, 'test_01_august_5', '1471543200', '1231869600', 'সময়কাল', 'সময়কাল'),
(90, 'bn', 39, 'test_01_august_5', '1471975200', '1471284000', 'সময়কালসময়কাল', 'সময়কাল'),
(91, 'bn', 39, 'test_01_august_', '1471629600', '1471284000', 'সময়কালসমসময়কালয়কাল', 'সময়কাল'),
(92, 'bn', 40, 'ড্রিন্স', '1459447200', '1469901600', '4 মাস', 'নাই'),
(93, 'bn', 40, '--', '978285600', '978285600', '0 মাস', 'নাই ২'),
(94, 'bn', 40, '--', '1012586400', '1012586400', '1 বছর', 'নাই 3'),
(95, 'en', 41, 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', ''),
(96, 'en', 41, 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', ''),
(97, 'en', 41, 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', ''),
(98, 'en', 42, 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(99, 'en', 42, 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(100, 'en', 42, 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(101, 'bn', 43, 'কর্মস্থলের নাম	     55555', '09/08/2016', '16/08/2016     55555', 'সময়কাল     55555', 'মন্তব্য\r\n'),
(102, 'bn', 43, 'কর্মস্থলের নাম	', '19/08/2016     55555', '23/08/2016', 'সময়কাল 2', 'মন্তব্য     55555\r\n'),
(103, 'bn', 43, 'কর্মস্থলের নাম	     55555', '25/08/2016', '26/08/2016', 'সময়কাল', 'মন্তব্য\r\n'),
(104, 'bn', 43, 'asdf', '17/08/2016', '17/08/2016', 'dasfsdf', 'asdf\r\n'),
(106, 'en', 40, 'adsfdasf', '0', '0', 'dfdfd', 'asdf'),
(108, 'bn', 45, 'ক্রেবসল ', '1471370400', '1471370400', '2 বছর', 'নাই'),
(109, 'bn', 39, 'ক্রেবসল ', '1472580000', '1471284000', '', 'sdf'),
(110, 'bn', 46, 'নাই', '1471456800', '1471284000', '2', 'নাই'),
(111, 'bn', 47, 'নাই', '1471456800', '1471284000', '2', 'নাই'),
(112, 'en', 46, 'New English', '1470765600', '1470852000', '2', 'New English'),
(113, 'en', 46, 'English', '1471456800', '1470852000', '2', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `caab_salary_info`
--

CREATE TABLE `caab_salary_info` (
  `id` int(11) NOT NULL,
  `lan` varchar(10) DEFAULT NULL,
  `emp_id` varchar(10) DEFAULT NULL,
  `stp_4_nid` varchar(50) DEFAULT NULL,
  `stp_4_name_desig` varchar(100) DEFAULT NULL,
  `stp_4_office_name` varchar(300) DEFAULT NULL,
  `stp_4_mobile_no` varchar(50) DEFAULT NULL,
  `stp_4_date_of_birth` varchar(50) DEFAULT NULL,
  `stp_4_first_joining_date` varchar(50) DEFAULT NULL,
  `stp_4_first_joining_designation` varchar(200) DEFAULT NULL,
  `stp_4_employee_identy_number` varchar(100) DEFAULT NULL,
  `stp_4_taken_main_salary` varchar(100) DEFAULT NULL,
  `stp_4_pp` varchar(100) DEFAULT NULL,
  `stp_4_total_salary_7a_7b` varchar(100) DEFAULT NULL,
  `stp_4_grade_2009` varchar(100) DEFAULT NULL,
  `stp_4_grade_initial_salary_2009` varchar(100) DEFAULT NULL,
  `stp_4_total_distance_8_9B` varchar(100) DEFAULT NULL,
  `stp_4_grade_2015` varchar(50) DEFAULT NULL,
  `stp_4_grade_initial_salary_2015` varchar(50) DEFAULT NULL,
  `stp_4_total_salary_10_11b` varchar(50) DEFAULT NULL,
  `stp_4_got_step_from_2015` varchar(100) DEFAULT NULL,
  `stp_4_got_by_pp` varchar(50) DEFAULT NULL,
  `stp_4_main_salary_at_01_07_2015` varchar(50) DEFAULT NULL,
  `stp_4_total_salary_from_01_30` varchar(100) DEFAULT NULL,
  `stp_4_next_salary_increment_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_salary_info`
--

INSERT INTO `caab_salary_info` (`id`, `lan`, `emp_id`, `stp_4_nid`, `stp_4_name_desig`, `stp_4_office_name`, `stp_4_mobile_no`, `stp_4_date_of_birth`, `stp_4_first_joining_date`, `stp_4_first_joining_designation`, `stp_4_employee_identy_number`, `stp_4_taken_main_salary`, `stp_4_pp`, `stp_4_total_salary_7a_7b`, `stp_4_grade_2009`, `stp_4_grade_initial_salary_2009`, `stp_4_total_distance_8_9B`, `stp_4_grade_2015`, `stp_4_grade_initial_salary_2015`, `stp_4_total_salary_10_11b`, `stp_4_got_step_from_2015`, `stp_4_got_by_pp`, `stp_4_main_salary_at_01_07_2015`, `stp_4_total_salary_from_01_30`, `stp_4_next_salary_increment_date`) VALUES
(39, 'bn', '39', 'NID Number', NULL, 'test_01_august_5', 'test_01_august_5', '1471629600', '0', 'বাংলা test_01_august_5', 'test_01_august_5', '500', '350', NULL, '0200', '350', NULL, '400', '500', NULL, 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', 'test_01_august_5', '1472234400'),
(40, 'bn', '40', '199319931993', NULL, 'শাহজালাল ', '01753945342', '719344800', '1469988000', 'ডিজাইনার', '123456789', '500', '600', NULL, '400', '5000', NULL, '5000', '5000', NULL, 'জানি না', 'জানি না', '15000', 'জানি না', '1472234400'),
(41, NULL, '41', 'test_03_august_5', NULL, 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', NULL, 'test_03_august_5', 'test_03_august_5', NULL, 'test_03_august_5', 'test_03_august_5', NULL, 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5', 'test_03_august_5'),
(42, NULL, '42', 'test_02_august_8', NULL, 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', NULL, 'test_02_august_8', 'test_02_august_8', NULL, 'test_02_august_8', 'test_02_august_8', NULL, 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8', 'test_02_august_8'),
(43, 'bn', '43', '', NULL, '', '', '01/08/2016     55555', '12/08/2016     55555', '০৫. নিয়োগকালীন পদবি     55555', '', '0', '0', NULL, '', '0', NULL, '', '0', NULL, '', '', '', '', ''),
(47, 'en', '39', '201521042048', NULL, 'asdf jggh', 'asdf', '12/08/2016', '24/08/2016', '', '', '0', '0', NULL, '0', '0', NULL, '', '0', NULL, '', '', '', '', ''),
(48, 'bn', '44', '', NULL, '', '', '31/08/2016', '17/08/2016', 'ডিজাইনার', '', '0', '0', NULL, '', '0', NULL, '', '0', NULL, '', '', '', '', ''),
(49, 'bn', '45', 'ৃৃিুা', NULL, 'ৃুািৃুাি', 'fasdfৃুািৃুাি', '1471543200', '1706205600', 'ডিজাইনার', 'ুািৃিুা', '0', '0', NULL, '', '0', NULL, '', '0', NULL, '', '', '', '', '-21600'),
(50, 'bn', '46', '123456', NULL, 'ডেভলপমেন্ট+', '01753945342', '750880800', '1471370400', 'ডিজাইনার', 'নাই', '05000', '3000', NULL, '2500', '3800', NULL, '6000', '7000', NULL, 'বত্বাতক', '্বক্বাক', 'া্বক্বাক', 'া্বকা্বক', '1472148000'),
(51, 'bn', '47', '123456', NULL, '্বকক', '্িাব্িাব', '750880800', '1471370400', 'ডিজাইনার', '্িাব্িাব', '05000', '3000', NULL, '2500', '3800', NULL, '6000', '7000', NULL, 'বত্বাতক', '্বক্বাক', 'া্বক্বাক', 'া্বকা্বক', '1472148000'),
(52, 'en', '40', '', NULL, '', '', '0', '0', '', '', '0', '0', NULL, '0', '0', NULL, '', '0', NULL, '', '', '', '', '0'),
(53, 'en', '47', '', NULL, '', '', '0', '0', '', '', '0', '0', NULL, '0', '0', NULL, '', '0', NULL, '', '', '', '', '0'),
(54, 'en', '47', '', NULL, '', '', '0', '0', '', '', '', '', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '0'),
(57, 'en', '46', 'English', NULL, 'English', 'English', '1471456800', '1470852000', 'ডিজাইনার', 'English', '500', '500', NULL, '6900', '3000', NULL, '4800', '58000', NULL, '6500', 'English', 'English', 'English', '1471456800'),
(58, 'en', '46', '', NULL, '', '', '0', '1471370400', 'Designer', '', '', '', NULL, '', '', NULL, '', '', NULL, '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `caab_users`
--

CREATE TABLE `caab_users` (
  `id` bigint(20) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_nicename` varchar(500) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_activation_key` varchar(255) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_users`
--

INSERT INTO `caab_users` (`id`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_activation_key`, `user_status`, `user_type`) VALUES
(1, 'admin', '4cf9c835067e560dfdb60e028647c60b', 'Sarower Jahan', 'info@ishare.com', '', 1, 1),
(2, 'rashed', '4cf9c835067e560dfdb60e028647c60b', 'Rashedul', 'rashad@drinstech.com', '', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `caab_user_groups`
--

CREATE TABLE `caab_user_groups` (
  `id` int(11) NOT NULL,
  `gr_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `caab_user_groups`
--

INSERT INTO `caab_user_groups` (`id`, `gr_name`) VALUES
(1, 'admin'),
(2, 'editor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caab_basic_info`
--
ALTER TABLE `caab_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_basic_info_en`
--
ALTER TABLE `caab_basic_info_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_educational_qualification`
--
ALTER TABLE `caab_educational_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_functionss`
--
ALTER TABLE `caab_functionss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_functions_metas`
--
ALTER TABLE `caab_functions_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_function_access_lists`
--
ALTER TABLE `caab_function_access_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_info_training`
--
ALTER TABLE `caab_info_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_nominee_info_bema`
--
ALTER TABLE `caab_nominee_info_bema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_nominee_info_dead_loss`
--
ALTER TABLE `caab_nominee_info_dead_loss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_nominee_info_gpf`
--
ALTER TABLE `caab_nominee_info_gpf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_nominee_info_pention`
--
ALTER TABLE `caab_nominee_info_pention`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_nominee_info_walfare`
--
ALTER TABLE `caab_nominee_info_walfare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `caab_office_info`
--
ALTER TABLE `caab_office_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_salary_info`
--
ALTER TABLE `caab_salary_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_users`
--
ALTER TABLE `caab_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caab_user_groups`
--
ALTER TABLE `caab_user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caab_basic_info`
--
ALTER TABLE `caab_basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `caab_basic_info_en`
--
ALTER TABLE `caab_basic_info_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `caab_educational_qualification`
--
ALTER TABLE `caab_educational_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `caab_functionss`
--
ALTER TABLE `caab_functionss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `caab_functions_metas`
--
ALTER TABLE `caab_functions_metas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caab_function_access_lists`
--
ALTER TABLE `caab_function_access_lists`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caab_info_training`
--
ALTER TABLE `caab_info_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `caab_nominee_info_bema`
--
ALTER TABLE `caab_nominee_info_bema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `caab_nominee_info_dead_loss`
--
ALTER TABLE `caab_nominee_info_dead_loss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `caab_nominee_info_gpf`
--
ALTER TABLE `caab_nominee_info_gpf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `caab_nominee_info_pention`
--
ALTER TABLE `caab_nominee_info_pention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `caab_nominee_info_walfare`
--
ALTER TABLE `caab_nominee_info_walfare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `caab_office_info`
--
ALTER TABLE `caab_office_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `caab_salary_info`
--
ALTER TABLE `caab_salary_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `caab_users`
--
ALTER TABLE `caab_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `caab_user_groups`
--
ALTER TABLE `caab_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
