

CREATE TABLE `user` (
  `UID` varchar(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  CONSTRAINT user_pk 			PRIMARY KEY(UID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` varchar(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  CONSTRAINT admin_pk 			PRIMARY KEY(AID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--


--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `BUID` varchar(3)  NOT NULL,
  `Name` varchar(10)  NOT NULL,
  CONSTRAINT building_pk 			PRIMARY KEY(BUID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--



-- --------------------------------------------------------

--

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `BUID` varchar(3)  NOT NULL,
  `RID` varchar(3) NOT NULL,
  `Name` varchar(10) NOT NULL,
  CONSTRAINT room_pk 			PRIMARY KEY(BUID,RID),
  CONSTRAINT room_fk_building	FOREIGN KEY(BUID)
  REFERENCES building(BUID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `item` (
  `BUID` varchar(3)  ,
  `RID` varchar(3) ,
  `IID` varchar(3)  NOT NULL,
  `SIN` varchar(10)  ,
  `Name` varchar(20)  NOT NULL,
  `Brand` varchar(20)  ,
  `Model` varchar(20) ,
  CONSTRAINT item_pk 			PRIMARY KEY(IID),
  CONSTRAINT item_fk_room	FOREIGN KEY(BUID,RID)
  REFERENCES room(BUID,RID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `IID` varchar(3)  NOT NULL,
  `SID` char(4)  NOT NULL,
  `Status` varchar(10) NOT NULL,
  CONSTRAINT status_pk 			PRIMARY KEY(SID),
  CONSTRAINT status_fk_item	FOREIGN KEY(IID)
  REFERENCES item(IID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `IID` varchar(3)  NOT NULL,
  `TID` varchar(5) NOT NULL,
  `Name` varchar(20)  NOT NULL,
  CONSTRAINT type_pk 			PRIMARY KEY(TID),
  CONSTRAINT type_fk_item	FOREIGN KEY(IID)
  REFERENCES item(IID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `borrow` (
  `UID` varchar(11) NOT NULL,
  `AID` varchar(11) ,
  `BUID` varchar(3)  NOT NULL,
  `RID` varchar(3) NOT NULL,
  `IID` varchar(3)  NOT NULL,
  `BOID` varchar(7) ,
  `BorrowDate` date NOT NULL,
  `ReturnDate` date ,
  `ReturnScheduled` date NOT NULL,
  `Reason` varchar(50) NOT NULL,
  CONSTRAINT borrow_pk 			PRIMARY KEY(BOID),
  CONSTRAINT borrow_fk_user 	FOREIGN KEY(UID)
  REFERENCES user(UID),
  CONSTRAINT borrow_fk_admin 	FOREIGN KEY(AID)
  REFERENCES admin(AID),
  CONSTRAINT borrow_fk_item 	FOREIGN KEY(BUID,RID,IID)
  REFERENCES item(BUID,RID,IID)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

-- Table structure for table `maintain`
--

CREATE TABLE `maintenance` (
  `UID` varchar(11) NOT NULL,
  `AID` varchar(11) NOT NULL,
  `BUID` varchar(3)  NOT NULL,
  `RID` varchar(3) NOT NULL,
  `IID` varchar(3)  NOT NULL,
  `MID` varchar(7) NOT NULL,
  `Pic` varchar(20) NOT NULL,
  `Des` varchar(50) NOT NULL,
  CONSTRAINT maintenance_pk 		PRIMARY KEY(MID),
  CONSTRAINT maintenance_fk_user 	FOREIGN KEY(UID)
  REFERENCES user(UID),
  CONSTRAINT maintenance_fk_item 	FOREIGN KEY(BUID,RID,IID)
  REFERENCES item(BUID,RID,IID),
  CONSTRAINT maintenance_fk_admin 	FOREIGN KEY(AID)
  REFERENCES admin(AID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
