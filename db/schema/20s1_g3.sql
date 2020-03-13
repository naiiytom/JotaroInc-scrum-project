
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

-- --------------------------------------------------------

--
-- Table structure for table `tbaccess`
--

CREATE TABLE `tbaccess` (
  `AccessID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AccessName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `AccessDetial` varchar(50) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbaccess`
--

INSERT INTO `tbaccess` (`AccessID`, `AccessName`, `AccessDetial`) VALUES
('0', 'admin', 'Access all'),
('1', 'Staff', 'Add, Edit, Delete'),
('2', 'Teacher', 'Borrow, Maintenance'),
('3', 'Student', 'Borrow, Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `tbaccount`
--

CREATE TABLE `tbaccount` (
  `AccountID` int(5) NOT NULL,
  `AUserName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `APassWord` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccessID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbborrow`
--

CREATE TABLE `tbborrow` (
  `BOID` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ItemSN` varchar(50) CHARACTER SET tis620 NOT NULL,
  `BorrowDate` date DEFAULT NULL,
  `ReturnScheduled` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `Reason` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory`
--

CREATE TABLE `tbcategory` (
  `CatID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CatName` varchar(30) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbcategory`
--

INSERT INTO `tbcategory` (`CatID`, `CatName`) VALUES
('01', 'อาคารถาวร'),
('02', 'อาคารชั่วคราว,โรงเรียน'),
('03', 'สิ่งก่อสร้าง'),
('04', 'ครุภัณฑ์สำนักงาน'),
('05', 'ครุภัณฑ์ยานพาหนะและขนส่ง'),
('06', 'ครุภัณฑ์ไฟฟ้าและวิทยุ'),
('07', 'ครุภัณฑ์โฆษณาและเผยแพร่'),
('08', 'ครุภัณฑ์การเกษตร'),
('09', 'ครุภัณฑ์โรงงาน'),
('10', 'ครุภัณฑ์ก่อสร้าง'),
('11', 'ครุภัณฑ์สำรวจ'),
('12', 'ครุภัณฑ์วิทยาศาสตร์การแพทย์'),
('13', 'ครุภัณฑ์คอมพิวเตอร์'),
('14', 'ครุภัณฑ์การศึกษา'),
('15', 'ครุภัณฑ์งานบ้านงานครัว'),
('16', 'ครุภัณฑ์กีฬา'),
('17', 'ครุภัณฑ์ดนตรีและนาฏศิลป์'),
('18', 'ครุภัณฑ์อาวุธ'),
('19', 'ครุภัณฑ์สนาม');

-- --------------------------------------------------------

--
-- Table structure for table `tbhastiness`
--

CREATE TABLE `tbhastiness` (
  `HID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HName` varchar(20) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbhastiness`
--

INSERT INTO `tbhastiness` (`HID`, `HName`) VALUES
('0', 'ไม่ด่วน'),
('1', 'ด่วน');

-- --------------------------------------------------------

--
-- Table structure for table `tbitem`
--

CREATE TABLE `tbitem` (
  `ItemID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `ItemModel` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `ItemSN` varchar(50) CHARACTER SET tis620 NOT NULL,
  `ItemBrand` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `ItemImage` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ItemYear` year(4) DEFAULT NULL,
  `ItemDescript` varchar(255) CHARACTER SET tis620 DEFAULT NULL,
  `LocalID` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CatID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `StatusID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbitem`
--

INSERT INTO `tbitem` (`ItemID`, `itemName`, `ItemModel`, `ItemSN`, `ItemBrand`, `ItemImage`, `ItemYear`, `ItemDescript`, `LocalID`, `CatID`, `StatusID`, `isActive`) VALUES
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-12', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-2', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-20', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-23', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-24', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-26', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-27', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-28', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-3', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-5', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-6', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-7', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-8', 'DELL', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0', 1),
('5602130000207', 'ระบบเชื่อมสัญญาณเครือข่าย(Switching)', '-', '5602130000207-1', 'Cisco', '', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '3', 1),
('5702130000239', 'โปรแกรมประมวลผลภาพระดับสูง', 'V.8', '5702130000239-1', 'eCognition Developer', '', 2014, 'โปรแกรมประมวลผลภาพระดับสูง eCognition Developer v.8', '03', '13', '3', 1),
('5802070000025', 'ชุดนำเสนอผลงาน', '-', '5802070000025-1', 'Epson', '', 2015, 'ฉายภาพขนาดใหญ่ได้สูงสุดถึง 300 นิ้ว', '02', '13', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblocation`
--

CREATE TABLE `tblocation` (
  `LocalID` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LocalName` varchar(10) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblocation`
--

INSERT INTO `tblocation` (`LocalID`, `LocalName`) VALUES
('01', '6301'),
('02', '6324'),
('03', '6707'),
('04', 'GIS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_token_auth`
--

CREATE TABLE `tbl_token_auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbmaintenance`
--

CREATE TABLE `tbmaintenance` (
  `MTID` int(7) NOT NULL,
  `ItemSN` varchar(50) CHARACTER SET tis620 NOT NULL,
  `InformDate` date DEFAULT NULL,
  `MtDetail` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `MtImage` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `HID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbstaff`
--

CREATE TABLE `tbstaff` (
  `StaffID` varchar(5) NOT NULL,
  `StPrefix` varchar(10) CHARACTER SET tis620 DEFAULT NULL,
  `StFristName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `StLastName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `StPosition` varchar(30) CHARACTER SET tis620 DEFAULT NULL,
  `StEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `StTel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbstatus`
--

CREATE TABLE `tbstatus` (
  `StatusID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `StatusName` varchar(20) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbstatus`
--

INSERT INTO `tbstatus` (`StatusID`, `StatusName`) VALUES
('0', 'ว่าง'),
('1', 'ถูกยืม'),
('2', 'ซ่อมแซม'),
('3', 'รอดำเนินการซ่อมแซม'),
('4', 'ซ่อมสำเร็จ');

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `StudentID` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SPrefix` varchar(10) CHARACTER SET tis620 DEFAULT NULL,
  `SFristName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `SLastName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `Smajor` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `Slevel` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `SEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `STel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbteacher`
--

CREATE TABLE `tbteacher` (
  `TeacherID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TPrefix` varchar(10) CHARACTER SET tis620 DEFAULT NULL,
  `TFristName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `TLastName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `TPosition` varchar(30) CHARACTER SET tis620 DEFAULT NULL,
  `TEmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TTel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewlistitem`
-- (See below for the actual view)
--
CREATE TABLE `viewlistitem` (
`ItemID` varchar(20)
,`itemName` varchar(50)
,`ItemSN` varchar(50)
,`ItemModel` varchar(50)
,`ItemBrand` varchar(50)
,`ItemImage` longtext
,`ItemYear` year(4)
,`ItemDescript` varchar(255)
,`LocalName` varchar(10)
,`CatName` varchar(30)
,`StatusName` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `viewlistitem`
--
DROP TABLE IF EXISTS `viewlistitem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`20S1_g3`@`%` SQL SECURITY DEFINER VIEW `viewlistitem`  AS  select `tbitem`.`ItemID` AS `ItemID`,`tbitem`.`itemName` AS `itemName`,`tbitem`.`ItemSN` AS `ItemSN`,`tbitem`.`ItemModel` AS `ItemModel`,`tbitem`.`ItemBrand` AS `ItemBrand`,`tbitem`.`ItemImage` AS `ItemImage`,`tbitem`.`ItemYear` AS `ItemYear`,`tbitem`.`ItemDescript` AS `ItemDescript`,`tblocation`.`LocalName` AS `LocalName`,`tbcategory`.`CatName` AS `CatName`,`tbstatus`.`StatusName` AS `StatusName` from (((`tbitem` join `tblocation`) join `tbcategory`) join `tbstatus`) where ((`tbitem`.`LocalID` = `tblocation`.`LocalID`) and (`tbitem`.`CatID` = `tbcategory`.`CatID`) and (`tbitem`.`StatusID` = `tbstatus`.`StatusID`)) group by `tbitem`.`ItemSN` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbaccess`
--
ALTER TABLE `tbaccess`
  ADD PRIMARY KEY (`AccessID`);

--
-- Indexes for table `tbaccount`
--
ALTER TABLE `tbaccount`
  ADD PRIMARY KEY (`AccountID`),
  ADD KEY `FK_TBAccountTBAccess` (`AccessID`);

--
-- Indexes for table `tbborrow`
--
ALTER TABLE `tbborrow`
  ADD PRIMARY KEY (`BOID`),
  ADD KEY `FK_TBBorrowTBAccount` (`AccountID`),
  ADD KEY `FK_TBBorrowTBItem` (`ItemSN`);

--
-- Indexes for table `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `tbhastiness`
--
ALTER TABLE `tbhastiness`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `tbitem`
--
ALTER TABLE `tbitem`
  ADD PRIMARY KEY (`ItemSN`),
  ADD KEY `FK_TBItemTBlocation` (`LocalID`),
  ADD KEY `FK_TBItemTBCategory` (`CatID`),
  ADD KEY `FK_TBItemTBStatus` (`StatusID`);

--
-- Indexes for table `tblocation`
--
ALTER TABLE `tblocation`
  ADD PRIMARY KEY (`LocalID`);

--
-- Indexes for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbmaintenance`
--
ALTER TABLE `tbmaintenance`
  ADD PRIMARY KEY (`MTID`),
  ADD KEY `FK_TBMaintenanceTBAccount` (`AccountID`),
  ADD KEY `FK_TBMaintenanceTBHastiness` (`HID`),
  ADD KEY `FK_TBMaintenanceTBItem` (`ItemSN`);

--
-- Indexes for table `tbstaff`
--
ALTER TABLE `tbstaff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `FK_TBStaffTBAccount` (`AccountID`);

--
-- Indexes for table `tbstatus`
--
ALTER TABLE `tbstatus`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `FK_TBStudentTBAccount` (`AccountID`);

--
-- Indexes for table `tbteacher`
--
ALTER TABLE `tbteacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `FK_TBTeacherTBAccount` (`AccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbaccount`
--
ALTER TABLE `tbaccount`
  MODIFY `AccountID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_token_auth`
--
ALTER TABLE `tbl_token_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `tbmaintenance`
--
ALTER TABLE `tbmaintenance`
  MODIFY `MTID` int(7) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbaccount`
--
ALTER TABLE `tbaccount`
  ADD CONSTRAINT `FK_TBAccountTBAccess` FOREIGN KEY (`AccessID`) REFERENCES `tbaccess` (`AccessID`);

--
-- Constraints for table `tbborrow`
--
ALTER TABLE `tbborrow`
  ADD CONSTRAINT `FK_TBBorrowTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`),
  ADD CONSTRAINT `FK_TBBorrowTBItem` FOREIGN KEY (`ItemSN`) REFERENCES `tbitem` (`ItemSN`);

--
-- Constraints for table `tbitem`
--
ALTER TABLE `tbitem`
  ADD CONSTRAINT `FK_TBItemTBCategory` FOREIGN KEY (`CatID`) REFERENCES `tbcategory` (`CatID`),
  ADD CONSTRAINT `FK_TBItemTBlocation` FOREIGN KEY (`LocalID`) REFERENCES `tblocation` (`LocalID`),
  ADD CONSTRAINT `FK_TBItemTBStatus` FOREIGN KEY (`StatusID`) REFERENCES `tbstatus` (`StatusID`);

--
-- Constraints for table `tbmaintenance`
--
ALTER TABLE `tbmaintenance`
  ADD CONSTRAINT `FK_TBMaintenanceTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`),
  ADD CONSTRAINT `FK_TBMaintenanceTBHastiness` FOREIGN KEY (`HID`) REFERENCES `tbhastiness` (`HID`),
  ADD CONSTRAINT `FK_TBMaintenanceTBItem` FOREIGN KEY (`ItemSN`) REFERENCES `tbitem` (`ItemSN`);

--
-- Constraints for table `tbstaff`
--
ALTER TABLE `tbstaff`
  ADD CONSTRAINT `FK_TBStaffTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`);

--
-- Constraints for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD CONSTRAINT `FK_TBStudentTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`);

--
-- Constraints for table `tbteacher`
--
ALTER TABLE `tbteacher`
  ADD CONSTRAINT `FK_TBTeacherTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`);
COMMIT;
