

CREATE TABLE `tbaccess` (
  `AccessID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AccessName` varchar(20) CHARACTER SET tis620 DEFAULT NULL,
  `AccessDetial` varchar(50) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbaccess`
--

INSERT INTO `tbaccess` (`AccessID`, `AccessName`, `AccessDetial`) VALUES
('0', 'admin', 'Access all'),
('1', 'Staff', 'Add,Edit.Delete'),
('2', 'Teacher', 'Borrow,Maintenance'),
('3', 'Student', 'Borrow,Maintenance');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbaccount`
--

CREATE TABLE `tbaccount` (
  `AccountID` int(5) NOT NULL,
  `AUserName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `APassWord` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccessID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbaccount`
--

INSERT INTO `tbaccount` (`AccountID`, `AUserName`, `APassWord`, `AccessID`) VALUES
(1, 'admin@mail.com', 'admin1234', '0');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbborrow`
--

CREATE TABLE `tbborrow` (
  `BOID` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BorrowDate` date DEFAULT NULL,
  `ReturnScheduled` date DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `Reason` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbcategory`
--

CREATE TABLE `tbcategory` (
  `CatID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CatName` varchar(30) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbcategory`
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
-- โครงสร้างตาราง `tbhastiness`
--

CREATE TABLE `tbhastiness` (
  `HID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HName` varchar(20) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbhastiness`
--

INSERT INTO `tbhastiness` (`HID`, `HName`) VALUES
('0', 'ไม่ด่วน'),
('1', 'ด่วน');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbitem`
--

CREATE TABLE `tbitem` (
  `ItemID` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `ItemModel` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `ItemSN` varchar(50) CHARACTER SET tis620 NOT NULL,
  `ItemBrand` varchar(50) CHARACTER SET tis620 DEFAULT NULL,
  `ItemImage` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ItemYear` year(4) DEFAULT NULL,
  `ItemDescript` varchar(255) CHARACTER SET tis620 DEFAULT NULL,
  `LocalID` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CatID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `StatusID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbitem`
--

INSERT INTO `tbitem` (`ItemID`, `itemName`, `ItemModel`, `ItemSN`, `ItemBrand`, `ItemImage`, `ItemYear`, `ItemDescript`, `LocalID`, `CatID`, `StatusID`) VALUES
('5602040000007', 'เครื่องทำลายเอกสาร', '3104', '5602040000007-1', 'IDEAL', 'https://www.janivisoffice.co.th/wp-content/uploads', 2013, 'ทำลายเอกสารได้ครั้งละ 30 ? 32 แผ่น', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-1', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-10', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-11', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-12', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-13', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-14', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-15', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-16', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-17', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-18', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-19', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-2', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-20', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-21', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-22', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-23', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-24', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-25', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-26', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-27', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-28', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-3', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-4', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-5', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-6', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-7', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-8', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000087', 'คอมพิวเตอร์ประมวลผลระดับสูง', '7010DT', '5602130000087-9', 'DELL', 'https://lh3.googleusercontent.com/proxy/UkXH3eCTZY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5602130000207', 'ระบบเชื่อมสัญญาณเครือข่าย(Switching)', '-', '5602130000207-1', 'Cisco', 'https://lh3.googleusercontent.com/proxy/EHM7p98HIY', 2013, 'Dell OptiPlex 7010 Desktop Computer - Intel Core i7 i7-3770 3.40 GHz - Mini-tower 462-5874 16', '01', '13', '0'),
('5702130000239', 'โปรแกรมประมวลผลภาพระดับสูง', 'V.8', '5702130000239-1', 'eCognition Developer', '', 2014, 'โปรแกรมประมวลผลภาพระดับสูง eCognition Developer v.8', '03', '13', '0'),
('5802070000025', 'ชุดนำเสนอผลงาน', '-', '5802070000025-1', 'Epson', 'https://www.techtalkthai.com/wp-content/uploads/20', 2015, 'ฉายภาพขนาดใหญ่ได้สูงสุดถึง 300 นิ้ว', '02', '13', '0');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tblocation`
--

CREATE TABLE `tblocation` (
  `LocalID` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LocalName` varchar(10) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tblocation`
--

INSERT INTO `tblocation` (`LocalID`, `LocalName`) VALUES
('01', '6301'),
('02', '6324'),
('03', '6707'),
('04', 'GIS');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbmaintenance`
--

CREATE TABLE `tbmaintenance` (
  `MTID` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `InformDate` date DEFAULT NULL,
  `MtDetail` varchar(100) CHARACTER SET tis620 DEFAULT NULL,
  `MtImage` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `HID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `AccountID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbstaff`
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
-- โครงสร้างตาราง `tbstatus`
--

CREATE TABLE `tbstatus` (
  `StatusID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `StatusName` varchar(20) CHARACTER SET tis620 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `tbstatus`
--

INSERT INTO `tbstatus` (`StatusID`, `StatusName`) VALUES
('0', 'ว่าง'),
('1', 'ถูกยืม'),
('2', 'ซ่อมแซม'),
('3', 'รอดำเนินการซ่อมแซม'),
('4', 'ซ่อมสำเร็จ');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tbstudent`
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
-- โครงสร้างตาราง `tbteacher`
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

--
-- Indexes for dumped tables
--

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
  ADD KEY `FK_TBBorrow` (`AccountID`);

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
-- Indexes for table `tbmaintenance`
--
ALTER TABLE `tbmaintenance`
  ADD PRIMARY KEY (`MTID`),
  ADD KEY `FK_TBMaintenanceTBAccount` (`AccountID`),
  ADD KEY `FK_TBMaintenanceTBHastiness` (`HID`);

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
  MODIFY `AccountID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `FK_TBBorrow` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`);

--
-- Constraints for table `tbitem`
--
ALTER TABLE `tbitem`
  ADD CONSTRAINT `FK_TBItemTBCategory` FOREIGN KEY (`CatID`) REFERENCES `tbcategory` (`CatID`),
  ADD CONSTRAINT `FK_TBItemTBStatus` FOREIGN KEY (`StatusID`) REFERENCES `tbstatus` (`StatusID`),
  ADD CONSTRAINT `FK_TBItemTBlocation` FOREIGN KEY (`LocalID`) REFERENCES `tblocation` (`LocalID`);

--
-- Constraints for table `tbmaintenance`
--
ALTER TABLE `tbmaintenance`
  ADD CONSTRAINT `FK_TBMaintenanceTBAccount` FOREIGN KEY (`AccountID`) REFERENCES `tbaccount` (`AccountID`),
  ADD CONSTRAINT `FK_TBMaintenanceTBHastiness` FOREIGN KEY (`HID`) REFERENCES `tbhastiness` (`HID`);

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
