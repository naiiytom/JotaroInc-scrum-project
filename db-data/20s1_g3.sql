

CREATE TABLE `admin` (
  `AID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AID` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `IID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `BOID` varchar(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `BorrowDate` date NOT NULL,
  `ReturnDate` date DEFAULT NULL,
  `ReturnScheduled` date NOT NULL,
  `Reason` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `BUID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `RID` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `SIN` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Brand` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Model` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `AID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `RID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `IID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `MID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` longblob,
  `Des` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `BUID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `RID` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `SID` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `IID` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `TID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`BOID`),
  ADD KEY `borrow_fk_user` (`UID`),
  ADD KEY `borrow_fk_admin` (`AID`),
  ADD KEY `borrow_fk_item` (`RID`,`IID`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`BUID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `item_fk_room` (`RID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`MID`),
  ADD KEY `maintenance_fk_user` (`UID`),
  ADD KEY `maintenance_fk_item` (`RID`,`IID`),
  ADD KEY `maintenance_fk_admin` (`AID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TID`),
  ADD KEY `type_fk_item` (`IID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_fk_user` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `borrow_fk_admin` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`),
  ADD CONSTRAINT `borrow_fk_item` FOREIGN KEY (`RID`,`IID`) REFERENCES `item` (`RID`, `IID`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_fk_room` FOREIGN KEY (`RID`) REFERENCES `room` (`RID`);

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_fk_user` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `maintenance_fk_item` FOREIGN KEY (`RID`,`IID`) REFERENCES `item` (`RID`, `IID`),
  ADD CONSTRAINT `maintenance_fk_admin` FOREIGN KEY (`AID`) REFERENCES `admin` (`AID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_fk_building` FOREIGN KEY (`BUID`) REFERENCES `building` (`BUID`);


--
-- Constraints for table `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_fk_item` FOREIGN KEY (`IID`) REFERENCES `item` (`IID`);
COMMIT;



-----------------------------------------------------------------
--insert data into table
insert into building values('SC09', 'อาคารวิทยวิภาส');
insert into building values('SC06', 'สาขาวิชาวิทยาการคอมพิวเตอร์');


insert into room values('SC09', '9227', 'ห้องปฎิบัติการ 7');
insert into room values('SC06', '6601', 'ห้องปฎบัติการทางฐานข้อมูล');


insert into status values('01', 'Available');
insert into status values('02', 'Borrowed');
insert into status values('03', 'Reserved');
insert into status values('04', 'Defect');
insert into status values('05', 'Checking');


insert into item values('6601', '0000001', '01', 'Projector 42 Inches', 'Samsung', 'AF4U');
insert into item(`iid`, `sin`, `name`) values('0000002', '04', 'Server Racket Octa-Core CPU');

insert into maintenance(`iid`, `mid`, `des`) values('0000002', '001', 'Server does not bootup');