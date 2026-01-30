INSERT INTO regions (region_code, name) VALUES
(1, 'Nairobi'),
(2, 'Central'),
(3, 'Eastern'),
(4, 'Nyanza'),
(5, 'Rift Valley'),
(6, 'Western'),
(7, 'Coast'),
(8, 'North Eastern');

-- Mombasa
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'MOMBASA', 1, 1);

INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(1, 'CHANGAMWE', 1, 1),
(1, 'JOMVU', 2, 1),
(1, 'KISAUNI', 3, 1),
(1, 'NYALI', 4, 1),
(1, 'LIKONI', 5, 1),
(1, 'MVITA', 6, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(1, 'PORT REITZ', 1, 1),
(1, 'KIPEVU', 2, 1),
(1, 'AIRPORT', 3, 1),
(1, 'CHANGAMWE', 4, 1),
(1, 'CHAANI', 5, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(2, 'JOMVU KUU', 6, 1),
(2, 'MIRITINI', 7, 1),
(2, 'MIKINDANI', 8, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(3, 'MJAMBERE', 9, 1),
(3, 'JUNDA', 10, 1),
(3, 'BAMBURI', 11, 1),
(3, 'MWAKIRUNGE', 12, 1),
(3, 'MTOPANGA', 13, 1),
(3, 'MAGOGONI', 14, 1),
(3, 'SHANZU', 15, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(4, 'FRERE TOWN', 16, 1),
(4, 'ZIWA LA NG''OMBE', 17, 1),
(4, 'MKOMANI', 18, 1),
(4, 'KONGOWEA', 19, 1),
(4, 'KADZANDANI', 20, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(5, 'MTONGWE', 21, 1),
(5, 'SHIKA ADABU', 22, 1),
(5, 'BOFU', 23, 1),
(5, 'LIKONI', 24, 1),
(5, 'TIMBWANI', 25, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(6, 'MJI WA KALE/MAKADARA', 26, 1),
(6, 'TUDOR', 27, 1),
(6, 'TONONOKA', 28, 1),
(6, 'SHIMANZI/GANJONI', 29, 1),
(6, 'MAJENGO', 30, 1);




-- =========================================================
-- Kwale County (Region Code 7 - Coast)
-- =========================================================

INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'KWALE', 2, 1);

INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(2, 'MSAMBWENI', 7, 1),
(2, 'LUNGALUNGA', 8, 1),
(2, 'MATUGA', 9, 1),
(2, 'KINANGO', 10, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(7, 'GOMBATO BONGWE', 31, 1),
(7, 'UKUNDA', 32, 1),
(7, 'KINONDO', 33, 1),
(7, 'RAMISI', 34, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(8, 'PONGWE/KIKONENI', 35, 1),
(8, 'DZOMBO', 36, 1),
(8, 'MWERENI', 37, 1),
(8, 'VANGA', 38, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(9, 'TSIMBA GOLINI', 39, 1),
(9, 'WAA', 40, 1),
(9, 'TIWI', 41, 1),
(9, 'KUBO SOUTH', 42, 1),
(9, 'MKONGANI', 43, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(10, 'NDAVAYA', 44, 1),
(10, 'PUMA', 45, 1),
(10, 'KINANGO', 46, 1),
(10, 'MACKINNON ROAD', 47, 1),
(10, 'CHENGONI/SAMBURU', 48, 1),
(10, 'MWAVUMBO', 49, 1),
(10, 'KASEMENI', 50, 1);



-- =========================================================
-- Kilifi County (Region Code 7 - Coast)
-- =========================================================

INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'KILIFI', 3, 1);

INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(3, 'KILIFI NORTH', 11, 1),
(3, 'KILIFI SOUTH', 12, 1),
(3, 'KALOLENI', 13, 1),
(3, 'RABAI', 14, 1),
(3, 'GANZE', 15, 1),
(3, 'MALINDI', 16, 1),
(3, 'MAGARINI', 17, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(11, 'TEZO', 51, 1),
(11, 'SOKONI', 52, 1),
(11, 'KIBARANI', 53, 1),
(11, 'DABASO', 54, 1),
(11, 'MATSANGONI', 55, 1),
(11, 'WATAMU', 56, 1),
(11, 'MNARANI', 57, 1);

INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(12, 'JUNJU', 58, 1),
(12, 'MWARAKAYA', 59, 1),
(12, 'SHIMO LA TEWA', 60, 1),
(12, 'CHASIMBA', 61, 1),
(12, 'MTEPENI', 62, 1);

-- 5️⃣ Insert Wards for KALOLENI (subcounty_code = 13)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(13, 'MARIAKANI', 63, 1),
(13, 'KAYAFUNGO', 64, 1),
(13, 'KALOLENI', 65, 1),
(13, 'MWANAMWINGA', 66, 1);

-- 6️⃣ Insert Wards for RABAI (subcounty_code = 14)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(14, 'MWAWESA', 67, 1),
(14, 'RURUMA', 68, 1),
(14, 'KAMBE/RIBE', 69, 1),
(14, 'RABAI/KISURUTINI', 70, 1);

-- 7️⃣ Insert Wards for GANZE (subcounty_code = 15)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(15, 'GANZE', 71, 1),
(15, 'BAMBA', 72, 1),
(15, 'JARIBUNI', 73, 1),
(15, 'SOKOKE', 74, 1);

-- 8️⃣ Insert Wards for MALINDI (subcounty_code = 16)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(16, 'JILORE', 75, 1),
(16, 'KAKUYUNI', 76, 1),
(16, 'GANDA', 77, 1),
(16, 'MALINDI TOWN', 78, 1),
(16, 'SHELLA', 79, 1);

-- 9️⃣ Insert Wards for MAGARINI (subcounty_code = 17)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(17, 'MARAFA', 80, 1),
(17, 'MAGARINI', 81, 1),
(17, 'GONGONI', 82, 1),
(17, 'ADU', 83, 1),
(17, 'GARASHI', 84, 1),
(17, 'SABAKI', 85, 1);




-- =========================================================
-- Tana River County (Region Code 7 - Coast)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'TANA RIVER', 4, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(4, 'GARSEN', 18, 1),
(4, 'GALOLE', 19, 1),
(4, 'BURA', 20, 1);

-- 3️⃣ Insert Wards for GARSEN (subcounty_code = 18)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(18, 'KIPINI EAST', 86, 1),
(18, 'GARSEN SOUTH', 87, 1),
(18, 'KIPINI WEST', 88, 1),
(18, 'GARSEN CENTRAL', 89, 1),
(18, 'GARSEN WEST', 90, 1),
(18, 'GARSEN NORTH', 91, 1);

-- 4️⃣ Insert Wards for GALOLE (subcounty_code = 19)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(19, 'KINAKOMBA', 92, 1),
(19, 'MIKINDUNI', 93, 1),
(19, 'CHEWANI', 94, 1),
(19, 'WAYU', 95, 1);

-- 5️⃣ Insert Wards for BURA (subcounty_code = 20)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(20, 'CHEWELE', 96, 1),
(20, 'HIRIMANI', 97, 1),
(20, 'BANGALE', 98, 1),
(20, 'SALA', 99, 1),
(20, 'MADOGO', 100, 1);


-- =========================================================
-- Lamu County (Region Code 7 - Coast)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'LAMU', 5, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(5, 'LAMU EAST', 21, 1),
(5, 'LAMU WEST', 22, 1);

-- 3️⃣ Insert Wards for LAMU EAST (subcounty_code = 21)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(21, 'FAZA', 101, 1),
(21, 'KIUNGA', 102, 1),
(21, 'BASUBA', 103, 1);

-- 4️⃣ Insert Wards for LAMU WEST (subcounty_code = 22)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(22, 'SHELLA', 104, 1),
(22, 'MKOMANI', 105, 1),
(22, 'HINDI', 106, 1),
(22, 'MKUNUMBI', 107, 1),
(22, 'HONGWE', 108, 1),
(22, 'WITU', 109, 1),
(22, 'BAHARI', 110, 1);


-- =========================================================
-- Taita Taveta County (Region Code 7 - Coast)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(7, 'TAITA TAVETA', 6, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(6, 'TAVETA', 23, 1),
(6, 'WUNDANYI', 24, 1),
(6, 'MWATATE', 25, 1),
(6, 'VOI', 26, 1);

-- 3️⃣ Insert Wards for TAVETA (subcounty_code = 23)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(23, 'CHALA', 111, 1),
(23, 'MAHOO', 112, 1),
(23, 'BOMANI', 113, 1),
(23, 'MBOGHONI', 114, 1),
(23, 'MATA', 115, 1);

-- 4️⃣ Insert Wards for WUNDANYI (subcounty_code = 24)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(24, 'WUNDANYI/MBALE', 116, 1),
(24, 'WERUGHA', 117, 1),
(24, 'WUMINGU/KISHUSHE', 118, 1),
(24, 'MWANDA/MGANGE', 119, 1);

-- 5️⃣ Insert Wards for MWATATE (subcounty_code = 25)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(25, 'RONG''E', 120, 1),
(25, 'MWATATE', 121, 1),
(25, 'BURA', 122, 1),
(25, 'CHAWIA', 123, 1),
(25, 'WUSI/KISHAMBA', 124, 1);

-- 6️⃣ Insert Wards for VOI (subcounty_code = 26)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(26, 'MBOLOLO', 125, 1),
(26, 'SAGALLA', 126, 1),
(26, 'KALOLENI', 127, 1),
(26, 'MARUNGU', 128, 1),
(26, 'KASIGAU', 129, 1),
(26, 'NGOLIA', 130, 1);




-- =========================================================
-- Garissa County (Region Code 8 - North Eastern)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(8, 'GARISSA', 7, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(7, 'GARISSA TOWNSHIP', 27, 1),
(7, 'BALAMBALA', 28, 1),
(7, 'LAGDERA', 29, 1),
(7, 'DADAAB', 30, 1),
(7, 'FAFI', 31, 1),
(7, 'IJARA', 32, 1);

-- 3️⃣ Insert Wards for GARISSA TOWNSHIP (subcounty_code = 27)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(27, 'WABERI', 131, 1),
(27, 'GALBET', 132, 1),
(27, 'TOWNSHIP', 133, 1),
(27, 'IFTIN', 134, 1);

-- 4️⃣ Insert Wards for BALAMBALA (subcounty_code = 28)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(28, 'BALAMBALA', 135, 1),
(28, 'DANYERE', 136, 1),
(28, 'JARA JARA', 137, 1),
(28, 'SAKA', 138, 1),
(28, 'SANKURI', 139, 1);

-- 5️⃣ Insert Wards for LAGDERA (subcounty_code = 29)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(29, 'MODOGASHE', 140, 1),
(29, 'BENANE', 141, 1),
(29, 'GOREALE', 142, 1),
(29, 'MAALIMIN', 143, 1),
(29, 'SABENA', 144, 1),
(29, 'BARAKI', 145, 1);

-- 6️⃣ Insert Wards for DADAAB (subcounty_code = 30)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(30, 'DERTU', 146, 1),
(30, 'DADAAB', 147, 1),
(30, 'LABASIGALE', 148, 1),
(30, 'DAMAJALE', 149, 1),
(30, 'LIBOI', 150, 1),
(30, 'ABAKAILE', 151, 1);

-- 7️⃣ Insert Wards for FAFI (subcounty_code = 31)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(31, 'BURA', 152, 1),
(31, 'DEKAHARIA', 153, 1),
(31, 'JARAJILA', 154, 1),
(31, 'FAFI', 155, 1),
(31, 'NANIGHI', 156, 1);

-- 8️⃣ Insert Wards for IJARA (subcounty_code = 32)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(32, 'HULUGHO', 157, 1),
(32, 'SANGAILU', 158, 1),
(32, 'IJARA', 159, 1),
(32, 'MASALANI', 160, 1);



-- =========================================================
-- Wajir County (Region Code 8 - North Eastern)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(8, 'WAJIR', 8, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(8, 'WAJIR NORTH', 33, 1),
(8, 'WAJIR EAST', 34, 1),
(8, 'TARBAJ', 35, 1),
(8, 'WAJIR WEST', 36, 1),
(8, 'ELDAS', 37, 1),
(8, 'WAJIR SOUTH', 38, 1);

-- 3️⃣ Insert Wards for WAJIR NORTH (subcounty_code = 33)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(33, 'GURAR', 161, 1),
(33, 'BUTE', 162, 1),
(33, 'KORONDILE', 163, 1),
(33, 'MALKAGUFU', 164, 1),
(33, 'BATALU', 165, 1),
(33, 'DANABA', 166, 1),
(33, 'GODOMA', 167, 1);

-- 4️⃣ Insert Wards for WAJIR EAST (subcounty_code = 34)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(34, 'WAGBERI', 168, 1),
(34, 'TOWNSHIP', 169, 1),
(34, 'BARWAGO', 170, 1),
(34, 'KHOROF/HARAR', 171, 1);

-- 5️⃣ Insert Wards for TARBAJ (subcounty_code = 35)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(35, 'ELBEN', 172, 1),
(35, 'SARMAN', 173, 1),
(35, 'TARBAJ', 174, 1),
(35, 'WARGADUD', 175, 1);

-- 6️⃣ Insert Wards for WAJIR WEST (subcounty_code = 36)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(36, 'ARBAJAHAN', 176, 1),
(36, 'HADADO/ATHIBOHOL', 177, 1),
(36, 'ADAMASAJIDE', 178, 1),
(36, 'GANYURE/WAGALLA', 179, 1);

-- 7️⃣ Insert Wards for ELDAS (subcounty_code = 37)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(37, 'ELDAS', 180, 1),
(37, 'DELLA', 181, 1),
(37, 'LAKOLEY SOUTH/BASIR', 182, 1),
(37, 'ELNUR/TULA TULA', 183, 1);

-- 8️⃣ Insert Wards for WAJIR SOUTH (subcounty_code = 38)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(38, 'BENANE', 184, 1),
(38, 'BURDER', 185, 1),
(38, 'DADAJA BULLA', 186, 1),
(38, 'HABASSWEIN', 187, 1),
(38, 'LAGBOGHOL SOUTH', 188, 1),
(38, 'IBRAHIM URE', 189, 1),
(38, 'DIIF', 190, 1);


-- =========================================================
-- Mandera County (Region Code 8 - North Eastern)
-- =========================================================

-- 1️⃣ Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(8, 'MANDERA', 9, 1);

-- 2️⃣ Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(9, 'MANDERA WEST', 39, 1),
(9, 'BANISSA', 40, 1),
(9, 'MANDERA NORTH', 41, 1),
(9, 'MANDERA SOUTH', 42, 1),
(9, 'MANDERA EAST', 43, 1),
(9, 'LAFEY', 44, 1);

-- 3️⃣ Insert Wards for MANDERA WEST (subcounty_code = 39)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(39, 'TAKABA SOUTH', 191, 1),
(39, 'TAKABA', 192, 1),
(39, 'LAGSURE', 193, 1),
(39, 'DANDU', 194, 1),
(39, 'GITHER', 195, 1);

-- 4️⃣ Insert Wards for BANISSA (subcounty_code = 40)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(40, 'BANISSA', 196, 1),
(40, 'DERKHALE', 197, 1),
(40, 'GUBA', 198, 1),
(40, 'MALKAMARI', 199, 1),
(40, 'KILIWEHIRI', 200, 1);

-- 5️⃣ Insert Wards for MANDERA NORTH (subcounty_code = 41)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(41, 'ASHABITO', 201, 1),
(41, 'GUTICHA', 202, 1),
(41, 'MOROTHILE', 203, 1),
(41, 'RHAMU', 204, 1),
(41, 'RHAMU-DIMTU', 205, 1);

-- 6️⃣ Insert Wards for MANDERA SOUTH (subcounty_code = 42)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(42, 'WARGADUD', 206, 1),
(42, 'KUTULO', 207, 1),
(42, 'ELWAK SOUTH', 208, 1),
(42, 'ELWAK NORTH', 209, 1),
(42, 'SHIMBIR FATUMA', 210, 1);

-- 7️⃣ Insert Wards for MANDERA EAST (subcounty_code = 43)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(43, 'ARABIA', 211, 1),
(43, 'TOWNSHIP', 212, 1),
(43, 'NEBOI', 213, 1),
(43, 'KHALALIO', 214, 1),
(43, 'LIBEHIA', 215, 1);

-- 8️⃣ Insert Wards for LAFEY (subcounty_code = 44)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(44, 'SALA', 216, 1),
(44, 'FINO', 217, 1),
(44, 'LAFEY', 218, 1),
(44, 'WARANQARA', 219, 1),
(44, 'ALANGO GOF', 220, 1);




-- =========================================================
-- Marsabit County (Region Code 3 - Eastern)
-- =========================================================

-- 1️⃣ Insert County: MARSABIT
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'MARSABIT', 10, 1);

-- 2️⃣ Insert Subcounties for MARSABIT
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(10, 'MOYALE', 45, 1),
(10, 'NORTH HORR', 46, 1),
(10, 'SAKU', 47, 1),
(10, 'LAISAMIS', 48, 1);

-- 3️⃣ Insert Wards for MOYALE (subcounty_code = 45)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(45, 'BUTIYE', 221, 1),
(45, 'SOLOLO', 222, 1),
(45, 'HEILLU/MANYATTA', 223, 1),
(45, 'GOLBO', 224, 1),
(45, 'MOYALE TOWNSHIP', 225, 1),
(45, 'URAN', 226, 1),
(45, 'OBBU', 227, 1);

-- 4️⃣ Insert Wards for NORTH HORR (subcounty_code = 46)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(46, 'DUKANA', 228, 1),
(46, 'MAIKONA', 229, 1),
(46, 'TURBI', 230, 1),
(46, 'NORTH HORR', 231, 1),
(46, 'ILLERET', 232, 1);

-- 5️⃣ Insert Wards for SAKU (subcounty_code = 47)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(47, 'SAGANTE/JALDESA', 233, 1),
(47, 'KARARE', 234, 1),
(47, 'MARSABIT CENTRAL', 235, 1);

-- 6️⃣ Insert Wards for LAISAMIS (subcounty_code = 48)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(48, 'LOIYANGALANI', 236, 1),
(48, 'KARGI/SOUTH HORR', 237, 1),
(48, 'KORR/NGURUNIT', 238, 1),
(48, 'LOGO LOGO', 239, 1),
(48, 'LAISAMIS', 240, 1);


-- =========================================================
-- Isiolo County (Region Code 3 - Eastern)
-- =========================================================

-- 1️⃣ Insert County: ISIOLO
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'ISIOLO', 11, 1);

-- 2️⃣ Insert Subcounties for ISIOLO
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(11, 'ISIOLO NORTH', 49, 1),
(11, 'ISIOLO SOUTH', 50, 1);

-- 3️⃣ Insert Wards for ISIOLO NORTH (subcounty_code = 49)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(49, 'WABERA', 241, 1),
(49, 'BULLA PESA', 242, 1),
(49, 'CHARI', 243, 1),
(49, 'CHERAB', 244, 1),
(49, 'NGARE MARA', 245, 1),
(49, 'BURAT', 246, 1),
(49, 'OLDO/NYIRO', 247, 1);

-- 4️⃣ Insert Wards for ISIOLO SOUTH (subcounty_code = 50)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(50, 'GARBATULLA', 248, 1),
(50, 'KINNA', 249, 1),
(50, 'SERICHO', 250, 1);



-- =========================================================
-- Meru County (Region Code 3 - Eastern)
-- =========================================================

-- 1️⃣ Insert County: MERU
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'MERU', 12, 1);

-- 2️⃣ Insert Subcounties for MERU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(12, 'IGEMBE SOUTH', 51, 1),
(12, 'IGEMBE CENTRAL', 52, 1),
(12, 'IGEMBE NORTH', 53, 1),
(12, 'TIGANIA WEST', 54, 1),
(12, 'TIGANIA EAST', 55, 1),
(12, 'NORTH IMENTI', 56, 1),
(12, 'BUURI', 57, 1),
(12, 'CENTRAL IMENTI', 58, 1),
(12, 'SOUTH IMENTI', 59, 1);

-- 3️⃣ Insert Wards for IGEMBE SOUTH (subcounty_code = 51)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(51, 'MAUA', 251, 1),
(51, 'KIEGOI/ANTUBOCHIU', 252, 1),
(51, 'ATHIRU GAITI', 253, 1),
(51, 'AKACHIU', 254, 1),
(51, 'KANUNI', 255, 1);

-- 4️⃣ Insert Wards for IGEMBE CENTRAL (subcounty_code = 52)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(52, 'AKIRANG''ONDU', 256, 1),
(52, 'ATHIRU RUUJINE', 257, 1),
(52, 'IGEMBE EAST', 258, 1),
(52, 'NJIA', 259, 1),
(52, 'KANGETA', 260, 1);

-- 5️⃣ Insert Wards for IGEMBE NORTH (subcounty_code = 53)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(53, 'ANTUAMBUI', 261, 1),
(53, 'NTUNENE', 262, 1),
(53, 'ANTUBETWE KIONGO', 263, 1),
(53, 'NAATHU', 264, 1),
(53, 'AMWATHI', 265, 1);

-- 6️⃣ Insert Wards for TIGANIA WEST (subcounty_code = 54)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(54, 'ATHWANA', 266, 1),
(54, 'AKITHII', 267, 1),
(54, 'KIANJAI', 268, 1),
(54, 'NKOMO', 269, 1),
(54, 'MBEU', 270, 1);

-- 7️⃣ Insert Wards for TIGANIA EAST (subcounty_code = 55)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(55, 'THANGATHA', 271, 1),
(55, 'MIKINDURI', 272, 1),
(55, 'KIGUCHWA', 273, 1),
(55, 'MUTHARA', 274, 1),
(55, 'KARAMA', 275, 1);

-- 8️⃣ Insert Wards for NORTH IMENTI (subcounty_code = 56)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(56, 'MUNICIPALITY', 276, 1),
(56, 'NTIMA EAST', 277, 1),
(56, 'NTIMA WEST', 278, 1),
(56, 'NYAKI WEST', 279, 1),
(56, 'NYAKI EAST', 280, 1);

-- 9️⃣ Insert Wards for BUURI (subcounty_code = 57)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(57, 'TIMAU', 281, 1),
(57, 'KISIMA', 282, 1),
(57, 'KIIRUA/NAARI', 283, 1),
(57, 'RUIRI/RWARERA', 284, 1),
(57, 'KIBIRICHIA', 289, 1);

-- 🔟 Insert Wards for CENTRAL IMENTI (subcounty_code = 58)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(58, 'MWANGANTHIA', 285, 1),
(58, 'ABOTHUGUCHI CENTRAL', 286, 1),
(58, 'ABOTHUGUCHI WEST', 287, 1),
(58, 'KIAGU', 288, 1);

-- 1️⃣1️⃣ Insert Wards for SOUTH IMENTI (subcounty_code = 59)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(59, 'MITUNGUU', 290, 1),
(59, 'IGOJI EAST', 291, 1),
(59, 'IGOJI WEST', 292, 1),
(59, 'ABOGETA EAST', 293, 1),
(59, 'ABOGETA WEST', 294, 1),
(59, 'NKUENE', 295, 1);



-- =========================================================
-- Tharaka-Nithi County (Region Code 3 - Eastern)
-- =========================================================

-- Insert County: THARAKA-NITHI
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'THARAKA - NITHI', 13, 1);

-- Insert Subcounties for THARAKA-NITHI
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(13, 'MAARA', 60, 1),
(13, 'CHUKA/IGAMBANG''OMBE', 61, 1),
(13, 'THARAKA', 62, 1);

-- Insert Wards for MAARA (subcounty_code = 60)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(60, 'MITHERU', 296, 1),
(60, 'MUTHAMBI', 297, 1),
(60, 'MWIMBI', 298, 1),
(60, 'GANGA', 299, 1),
(60, 'CHOGORIA', 300, 1);

-- Insert Wards for CHUKA/IGAMBANG'OMBE (subcounty_code = 61)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(61, 'MARIANI', 301, 1),
(61, 'KARINGANI', 302, 1),
(61, 'MAGUMONI', 303, 1),
(61, 'MUGWE', 304, 1),
(61, 'IGAMBANG''OMBE', 305, 1);

-- Insert Wards for THARAKA (subcounty_code = 62)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(62, 'GATUNGA', 306, 1),
(62, 'MUKOTHIMA', 307, 1),
(62, 'NKONDI', 308, 1),
(62, 'CHIAKARIGA', 309, 1),
(62, 'MARIMANTI', 310, 1);

-- =========================================================
-- Embu County (Region Code 3 - Eastern)
-- =========================================================

-- Insert County: EMBU
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'EMBU', 14, 1);

-- Insert Subcounties for EMBU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(14, 'MANYATTA', 63, 1),
(14, 'RUNYENJES', 64, 1),
(14, 'MBEERE SOUTH', 65, 1),
(14, 'MBEERE NORTH', 66, 1);

-- Insert Wards for MANYATTA (subcounty_code = 63)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(63, 'RUGURU/NGANDORI', 311, 1),
(63, 'KITHIMU', 312, 1),
(63, 'NGINDA', 313, 1),
(63, 'MBETI NORTH', 314, 1),
(63, 'KIRIMARI', 315, 1),
(63, 'GATURI SOUTH', 316, 1);

-- Insert Wards for RUNYENJES (subcounty_code = 64)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(64, 'GATURI NORTH', 317, 1),
(64, 'KAGAARI SOUTH', 318, 1),
(64, 'CENTRAL WARD', 319, 1),
(64, 'KAGAARI NORTH', 320, 1),
(64, 'KYENI NORTH', 321, 1),
(64, 'KYENI SOUTH', 322, 1);

-- Insert Wards for MBEERE SOUTH (subcounty_code = 65)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(65, 'MWEA', 323, 1),
(65, 'MAKIMA', 324, 1),
(65, 'MBETI SOUTH', 325, 1),
(65, 'MAVURIA', 326, 1),
(65, 'KIAMBERE', 327, 1);

-- Insert Wards for MBEERE NORTH (subcounty_code = 66)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(66, 'NTHAWA', 328, 1),
(66, 'MUMINJI', 329, 1),
(66, 'EVURORE', 330, 1);



-- =========================================================
-- Kitui County (Region Code 3 - Eastern)
-- =========================================================

-- Insert County: KITUI
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'KITUI', 15, 1);

-- Insert Subcounties for KITUI
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(15, 'MWINGI NORTH', 67, 1),
(15, 'MWINGI WEST', 68, 1),
(15, 'MWINGI CENTRAL', 69, 1),
(15, 'KITUI WEST', 70, 1),
(15, 'KITUI RURAL', 71, 1),
(15, 'KITUI CENTRAL', 72, 1),
(15, 'KITUI EAST', 73, 1),
(15, 'KITUI SOUTH', 74, 1);

-- Insert Wards for MWINGI NORTH (subcounty_code = 67)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(67, 'NGOMENI', 331, 1),
(67, 'KYUSO', 332, 1),
(67, 'MUMONI', 333, 1),
(67, 'TSEIKURU', 334, 1),
(67, 'THARAKA', 335, 1);

-- Insert Wards for MWINGI WEST (subcounty_code = 68)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(68, 'KYOME/THAANA', 336, 1),
(68, 'NGUUTANI', 337, 1),
(68, 'MIGWANI', 338, 1),
(68, 'KIOMO/KYETHANI', 339, 1);

-- Insert Wards for MWINGI CENTRAL (subcounty_code = 69)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(69, 'CENTRAL', 340, 1),
(69, 'KIVOU', 341, 1),
(69, 'NGUNI', 342, 1),
(69, 'NUU', 343, 1),
(69, 'MUI', 344, 1),
(69, 'WAITA', 345, 1);

-- Insert Wards for KITUI WEST (subcounty_code = 70)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(70, 'MUTONGUNI', 346, 1),
(70, 'KAUWI', 347, 1),
(70, 'MATINYANI', 348, 1),
(70, 'KWA MUTONGA/KITHUMULA', 349, 1);

-- Insert Wards for KITUI RURAL (subcounty_code = 71)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(71, 'KISASI', 350, 1),
(71, 'MBITINI', 351, 1),
(71, 'KWAVONZA/YATTA', 352, 1),
(71, 'KANYANGI', 353, 1);

-- Insert Wards for KITUI CENTRAL (subcounty_code = 72)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(72, 'MIAMBANI', 354, 1),
(72, 'TOWNSHIP', 355, 1),
(72, 'KYANGWITHYA WEST', 356, 1),
(72, 'MULANGO', 357, 1),
(72, 'KYANGWITHYA EAST', 358, 1);

-- Insert Wards for KITUI EAST (subcounty_code = 73)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(73, 'ZOMBE/MWITIKA', 359, 1),
(73, 'NZAMBANI', 360, 1),
(73, 'CHULUNI', 361, 1),
(73, 'VOO/KYAMATU', 362, 1),
(73, 'ENDAU/MALALANI', 363, 1),
(73, 'MUTITO/KALIKU', 364, 1);

-- Insert Wards for KITUI SOUTH (subcounty_code = 74)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(74, 'IKANGA/KYATUNE', 365, 1),
(74, 'MUTOMO', 366, 1),
(74, 'MUTHA', 367, 1),
(74, 'IKUTHA', 368, 1),
(74, 'KANZIKO', 369, 1),
(74, 'ATHI', 370, 1);

-- =========================================================
-- Machakos County (Region Code 3 - Eastern)
-- =========================================================

-- Insert County: MACHAKOS
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'MACHAKOS', 16, 1);

-- Insert Subcounties for MACHAKOS
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(16, 'MASINGA', 75, 1),
(16, 'YATTA', 76, 1),
(16, 'KANGUNDO', 77, 1),
(16, 'MATUNGULU', 78, 1),
(16, 'KATHIANI', 79, 1),
(16, 'MAVOKO', 80, 1),
(16, 'MACHAKOS TOWN', 81, 1),
(16, 'MWALA', 82, 1);

-- Insert Wards for MASINGA (subcounty_code = 75)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(75, 'KIVAA', 371, 1),
(75, 'MASINGA CENTRAL', 372, 1),
(75, 'EKALAKALA', 373, 1),
(75, 'MUTHESYA', 374, 1),
(75, 'NDITHINI', 375, 1);

-- Insert Wards for YATTA (subcounty_code = 76)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(76, 'NDALANI', 376, 1),
(76, 'MATUU', 377, 1),
(76, 'KITHIMANI', 378, 1),
(76, 'IKOMBE', 379, 1),
(76, 'KATANGI', 380, 1);

-- Insert Wards for KANGUNDO (subcounty_code = 77)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(77, 'KANGUNDO NORTH', 381, 1),
(77, 'KANGUNDO CENTRAL', 382, 1),
(77, 'KANGUNDO EAST', 383, 1),
(77, 'KANGUNDO WEST', 384, 1);

-- Insert Wards for MATUNGULU (subcounty_code = 78)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(78, 'TALA', 385, 1),
(78, 'MATUNGULU NORTH', 386, 1),
(78, 'MATUNGULU EAST', 387, 1),
(78, 'MATUNGULU WEST', 388, 1),
(78, 'KYELENI', 389, 1);

-- Insert Wards for KATHIANI (subcounty_code = 79)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(79, 'MITABONI', 390, 1),
(79, 'KATHIANI CENTRAL', 391, 1),
(79, 'UPPER KAEWA/IVETI', 392, 1),
(79, 'LOWER KAEWA/KAANI', 393, 1);

-- Insert Wards for MAVOKO (subcounty_code = 80)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(80, 'ATHI RIVER', 394, 1),
(80, 'KINANIE', 395, 1),
(80, 'MUTHWANI', 396, 1),
(80, 'SYOKIMAU/MULOLONGO', 397, 1);

-- Insert Wards for MACHAKOS TOWN (subcounty_code = 81)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(81, 'KALAMA', 398, 1),
(81, 'MUA', 399, 1),
(81, 'MUTITUNI', 400, 1),
(81, 'MACHAKOS CENTRAL', 401, 1),
(81, 'MUMBUNI NORTH', 402, 1),
(81, 'MUVUTI/KIIMA-KIMWE', 403, 1),
(81, 'KOLA', 404, 1);

-- Insert Wards for MWALA (subcounty_code = 82)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(82, 'MBIUNI', 405, 1),
(82, 'MAKUTANO/ MWALA', 406, 1),
(82, 'MASII', 407, 1),
(82, 'MUTHETHENI', 408, 1),
(82, 'WAMUNYU', 409, 1),
(82, 'KIBAUNI', 410, 1);



-- =========================================================
-- Makueni County (Region Code 3 - Eastern)
-- =========================================================

-- Insert County: MAKUENI
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(3, 'MAKUENI', 17, 1);

-- Insert Subcounties for MAKUENI
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(17, 'MBOONI', 83, 1),
(17, 'KILOME', 84, 1),
(17, 'KAITI', 85, 1),
(17, 'MAKUENI', 86, 1),
(17, 'KIBWEZI WEST', 87, 1),
(17, 'KIBWEZI EAST', 88, 1);

-- Insert Wards for MBOONI (subcounty_code = 83)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(83, 'TULIMANI', 411, 1),
(83, 'MBOONI', 412, 1),
(83, 'KITHUNGO/KITUNDU', 413, 1),
(83, 'KITETA/KISAU', 414, 1),
(83, 'WAIA-KAKO', 415, 1),
(83, 'KALAWA', 416, 1);

-- Insert Wards for KILOME (subcounty_code = 84)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(84, 'KASIKEU', 417, 1),
(84, 'MUKAA', 418, 1),
(84, 'KIIMA KIU/KALANZONI', 419, 1);

-- Insert Wards for KAITI (subcounty_code = 85)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(85, 'UKIA', 420, 1),
(85, 'KEE', 421, 1),
(85, 'KILUNGU', 422, 1),
(85, 'ILIMA', 423, 1);

-- Insert Wards for MAKUENI (subcounty_code = 86)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(86, 'WOTE', 424, 1),
(86, 'MUVAU/KIKUUMINI', 425, 1),
(86, 'MAVINDINI', 426, 1),
(86, 'KITISE/KITHUKI', 427, 1),
(86, 'KATHONZWENI', 428, 1),
(86, 'NZAUI/KILILI/KALAMBA', 429, 1),
(86, 'MBITINI', 430, 1);

-- Insert Wards for KIBWEZI WEST (subcounty_code = 87)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(87, 'MAKINDU', 431, 1),
(87, 'NGUUMO', 432, 1),
(87, 'KIKUMBULYU NORTH', 433, 1),
(87, 'KIKUMBULYU SOUTH', 434, 1),
(87, 'NGUU/MASUMBA', 435, 1),
(87, 'EMALI/MULALA', 436, 1);

-- Insert Wards for KIBWEZI EAST (subcounty_code = 88)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(88, 'MASONGALENI', 437, 1),
(88, 'MTITO ANDEI', 438, 1),
(88, 'THANGE', 439, 1),
(88, 'IVINGONI/NZAMBANI', 440, 1);



-- =========================================================
-- Nyandarua & Nyeri Counties (Region Code 2 - Central)
-- =========================================================

-- Insert Counties
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(2, 'NYANDARUA', 18, 1),
(2, 'NYERI', 19, 1);

-- Insert Subcounties for NYANDARUA
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(18, 'KINANGOP', 89, 1),
(18, 'KIPIPIRI', 90, 1),
(18, 'OL KALOU', 91, 1),
(18, 'OL JOROK', 92, 1),
(18, 'NDARAGWA', 93, 1);

-- Insert Wards for KINANGOP (subcounty_code = 89)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(89, 'ENGINEER', 441, 1),
(89, 'GATHARA', 442, 1),
(89, 'NORTH KINANGOP', 443, 1),
(89, 'MURUNGARU', 444, 1),
(89, 'NJABINI\\KIBURU', 445, 1),
(89, 'NYAKIO', 446, 1),
(89, 'GITHABAI', 447, 1),
(89, 'MAGUMU', 448, 1);

-- Insert Wards for KIPIPIRI (subcounty_code = 90)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(90, 'WANJOHI', 449, 1),
(90, 'KIPIPIRI', 450, 1),
(90, 'GETA', 451, 1),
(90, 'GITHIORO', 452, 1);

-- Insert Wards for OL KALOU (subcounty_code = 91)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(91, 'KARAU', 453, 1),
(91, 'KANJUIRI RANGE', 454, 1),
(91, 'MIRANGINE', 455, 1),
(91, 'KAIMBAGA', 456, 1),
(91, 'RURII', 457, 1);

-- Insert Wards for OL JOROK (subcounty_code = 92)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(92, 'GATHANJI', 458, 1),
(92, 'GATIMU', 459, 1),
(92, 'WERU', 460, 1),
(92, 'CHARAGITA', 461, 1);

-- Insert Wards for NDARAGWA (subcounty_code = 93)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(93, 'LESHAU/PONDO', 462, 1),
(93, 'KIRIITA', 463, 1),
(93, 'CENTRAL', 464, 1),
(93, 'SHAMATA', 465, 1);

-- Insert Subcounties for NYERI
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(19, 'TETU', 94, 1),
(19, 'KIENI', 95, 1),
(19, 'MATHIRA', 96, 1),
(19, 'OTHAYA', 97, 1),
(19, 'MUKURWEINI', 98, 1),
(19, 'NYERI TOWN', 99, 1);

-- Insert Wards for TETU (subcounty_code = 94)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(94, 'DEDAN KIMANTHI', 466, 1),
(94, 'WAMAGANA', 467, 1),
(94, 'AGUTHI-GAAKI', 468, 1);

-- Insert Wards for KIENI (subcounty_code = 95)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(95, 'MWEIGA', 469, 1),
(95, 'NAROMORU KIAMATHAGA', 470, 1),
(95, 'MWIYOGO/ENDARASHA', 471, 1),
(95, 'MUGUNDA', 472, 1),
(95, 'GATARAKWA', 473, 1),
(95, 'THEGU RIVER', 474, 1),
(95, 'KABARU', 475, 1),
(95, 'GAKAWA', 476, 1);

-- Insert Wards for MATHIRA (subcounty_code = 96)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(96, 'RUGURU', 477, 1),
(96, 'MAGUTU', 478, 1),
(96, 'IRIAINI', 479, 1),
(96, 'KONYU', 480, 1),
(96, 'KIRIMUKUYU', 481, 1),
(96, 'KARATINA TOWN', 482, 1);

-- Insert Wards for OTHAYA (subcounty_code = 97)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(97, 'MAHIGA', 483, 1),
(97, 'IRIA-INI', 484, 1),
(97, 'CHINGA', 485, 1),
(97, 'KARIMA', 486, 1);

-- Insert Wards for MUKURWEINI (subcounty_code = 98)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(98, 'GIKONDI', 487, 1),
(98, 'RUGI', 488, 1),
(98, 'MUKURWE-INI WEST', 489, 1),
(98, 'MUKURWE-INI CENTRAL', 490, 1);

-- Insert Wards for NYERI TOWN (subcounty_code = 99)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(99, 'KIGANJO/MATHARI', 491, 1),
(99, 'RWARE', 492, 1),
(99, 'GATITU/MURUGURU', 493, 1),
(99, 'RURINGU', 494, 1),
(99, 'KAMAKWA/MUKARO', 495, 1);



-- =========================================================
-- Kirinyaga County (Region Code 2 - Central)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(2, 'KIRINYAGA', 20, 1);

-- Insert Subcounties for KIRINYAGA
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(20, 'MWEA', 100, 1),
(20, 'GICHUGU', 101, 1),
(20, 'NDIA', 102, 1),
(20, 'KIRINYAGA CENTRAL', 103, 1);

-- Insert Wards for MWEA (subcounty_code = 100)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(100, 'MUTITHI', 496, 1),
(100, 'KANGAI', 497, 1),
(100, 'THIBA', 498, 1),
(100, 'WAMUMU', 499, 1),
(100, 'NYANGATI', 500, 1),
(100, 'MURINDUKO', 501, 1),
(100, 'GATHIGIRIRI', 502, 1),
(100, 'TEBERE', 503, 1);

-- Insert Wards for GICHUGU (subcounty_code = 101)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(101, 'KABARE', 504, 1),
(101, 'BARAGWI', 505, 1),
(101, 'NJUKIINI', 506, 1),
(101, 'NGARIAMA', 507, 1),
(101, 'KARUMANDI', 508, 1);

-- Insert Wards for NDIA (subcounty_code = 102)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(102, 'MUKURE', 509, 1),
(102, 'KIINE', 510, 1),
(102, 'KARITI', 511, 1);

-- Insert Wards for KIRINYAGA CENTRAL (subcounty_code = 103)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(103, 'MUTIRA', 512, 1),
(103, 'KANYEKINI', 513, 1),
(103, 'KERUGOYA', 514, 1),
(103, 'INOI', 515, 1);



-- =========================================================
-- Murang'a County (Region Code 3)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(2, 'MURANG\'A', 21, 1);

-- Insert Subcounties for MURANG'A
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(21, 'KANGEMA', 104, 1),
(21, 'MATHIOYA', 105, 1),
(21, 'KIHARU', 106, 1),
(21, 'KIGUMO', 107, 1),
(21, 'MARAGWA', 108, 1),
(21, 'KANDARA', 109, 1),
(21, 'GATANGA', 110, 1);

-- Insert Wards for KANGEMA (subcounty_code = 104)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(104, 'KANYENYA-INI', 516, 1),
(104, 'MUGURU', 517, 1),
(104, 'RWATHIA', 518, 1);

-- Insert Wards for MATHIOYA (subcounty_code = 105)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(105, 'GITUGI', 519, 1),
(105, 'KIRU', 520, 1),
(105, 'KAMACHARIA', 521, 1);

-- Insert Wards for KIHARU (subcounty_code = 106)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(106, 'WANGU', 522, 1),
(106, 'MUGOIRI', 523, 1),
(106, 'MBIRI', 524, 1),
(106, 'TOWNSHIP', 525, 1),
(106, 'MURARANDIA', 526, 1),
(106, 'GATURI', 527, 1);

-- Insert Wards for KIGUMO (subcounty_code = 107)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(107, 'KAHUMBU', 528, 1),
(107, 'MUTHITHI', 529, 1),
(107, 'KIGUMO', 530, 1),
(107, 'KANGARI', 531, 1),
(107, 'KINYONA', 532, 1);

-- Insert Wards for MARAGWA (subcounty_code = 108)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(108, 'KIMORORI/WEMPA', 533, 1),
(108, 'MAKUYU', 534, 1),
(108, 'KAMBITI', 535, 1),
(108, 'KAMAHUHA', 536, 1),
(108, 'ICHAGAKI', 537, 1),
(108, 'NGINDA', 538, 1);

-- Insert Wards for KANDARA (subcounty_code = 109)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(109, 'NGARARIA', 539, 1),
(109, 'MURUKA', 540, 1),
(109, 'KAGUNDU-INI', 541, 1),
(109, 'GAICHANJIRU', 542, 1),
(109, 'ITHIRU', 543, 1),
(109, 'RUCHU', 544, 1);

-- Insert Wards for GATANGA (subcounty_code = 110)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(110, 'ITHANGA', 545, 1),
(110, 'KAKUZI/MITUBIRI', 546, 1),
(110, 'MUGUMO-INI', 547, 1),
(110, 'KIHUMBU-INI', 548, 1),
(110, 'GATANGA', 549, 1),
(110, 'KARIARA', 550, 1);




-- =========================================================
-- Kiambu County (Region Code 2)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(2, 'KIAMBU', 22, 1);

-- Insert Subcounties for KIAMBU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(22, 'GATUNDU SOUTH', 111, 1),
(22, 'GATUNDU NORTH', 112, 1),
(22, 'JUJA', 113, 1),
(22, 'THIKA TOWN', 114, 1),
(22, 'RUIRU', 115, 1),
(22, 'GITHUNGURI', 116, 1),
(22, 'KIAMBU', 117, 1),
(22, 'KIAMBAA', 118, 1),
(22, 'KABETE', 119, 1),
(22, 'KIKUYU', 120, 1),
(22, 'LIMURU', 121, 1),
(22, 'LARI', 122, 1);

-- Insert Wards for GATUNDU SOUTH (subcounty_code = 111)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(111, 'KIAMWANGI', 551, 1),
(111, 'KIGANJO', 552, 1),
(111, 'NDARUGU', 553, 1),
(111, 'NGENDA', 554, 1);

-- Insert Wards for GATUNDU NORTH (subcounty_code = 112)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(112, 'GITUAMBA', 555, 1),
(112, 'GITHOBOKONI', 556, 1),
(112, 'CHANIA', 557, 1),
(112, 'MANGU', 558, 1);

-- Insert Wards for JUJA (subcounty_code = 113)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(113, 'MURERA', 559, 1),
(113, 'THETA', 560, 1),
(113, 'JUJA', 561, 1),
(113, 'WITEITHIE', 562, 1),
(113, 'KALIMONI', 563, 1);

-- Insert Wards for THIKA TOWN (subcounty_code = 114)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(114, 'TOWNSHIP', 564, 1),
(114, 'KAMENU', 565, 1),
(114, 'HOSPITAL', 566, 1),
(114, 'GATUANYAGA', 567, 1),
(114, 'NGOLIBA', 568, 1);

-- Insert Wards for RUIRU (subcounty_code = 115)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(115, 'GITOTHUA', 569, 1),
(115, 'BIASHARA', 570, 1),
(115, 'GATONGORA', 571, 1),
(115, 'KAHAWA SUKARI', 572, 1),
(115, 'KAHAWA WENDANI', 573, 1),
(115, 'KIUU', 574, 1),
(115, 'MWIKI', 575, 1),
(115, 'MWIHOKO', 576, 1);

-- Insert Wards for GITHUNGURI (subcounty_code = 116)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(116, 'GITHUNGURI', 577, 1),
(116, 'GITHIGA', 578, 1),
(116, 'IKINU', 579, 1),
(116, 'NGEWA', 580, 1),
(116, 'KOMOTHAI', 581, 1);

-- Insert Wards for KIAMBU (subcounty_code = 117)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(117, 'TING\'ANG\'A', 582, 1),
(117, 'NDUMBERI', 583, 1),
(117, 'RIABAI', 584, 1),
(117, 'TOWNSHIP', 585, 1);

-- Insert Wards for KIAMBAA (subcounty_code = 118)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(118, 'CIANDA', 586, 1),
(118, 'KARURI', 587, 1),
(118, 'NDENDERU', 588, 1),
(118, 'MUCHATHA', 589, 1),
(118, 'KIHARA', 590, 1);

-- Insert Wards for KABETE (subcounty_code = 119)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(119, 'GITARU', 591, 1),
(119, 'MUGUGA', 592, 1),
(119, 'NYADHUNA', 593, 1),
(119, 'KABETE', 594, 1),
(119, 'UTHIRU', 595, 1);

-- Insert Wards for KIKUYU (subcounty_code = 120)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(120, 'KARAI', 596, 1),
(120, 'NACHU', 597, 1),
(120, 'SIGONA', 598, 1),
(120, 'KIKUYU', 599, 1),
(120, 'KINOO', 600, 1);

-- Insert Wards for LIMURU (subcounty_code = 121)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(121, 'BIBIRIONI', 601, 1),
(121, 'LIMURU CENTRAL', 602, 1),
(121, 'NDEIYA', 603, 1),
(121, 'LIMURU EAST', 604, 1),
(121, 'NGECHA TIGONI', 605, 1);

-- Insert Wards for LARI (subcounty_code = 122)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(122, 'KINALE', 606, 1),
(122, 'KIJABE', 607, 1),
(122, 'NYANDUMA', 608, 1),
(122, 'KAMBURU', 609, 1),
(122, 'LARI/KIRENGA', 610, 1);




-- =========================================================
-- Turkana County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'TURKANA', 23, 1);

-- Insert Subcounties for TURKANA
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(23, 'TURKANA NORTH', 123, 1),
(23, 'TURKANA WEST', 124, 1),
(23, 'TURKANA CENTRAL', 125, 1),
(23, 'LOIMA', 126, 1),
(23, 'TURKANA SOUTH', 127, 1),
(23, 'TURKANA EAST', 128, 1);

-- Insert Wards for TURKANA NORTH (subcounty_code = 123)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(123, 'KAERIS', 611, 1),
(123, 'LAKE ZONE', 612, 1),
(123, 'LAPUR', 613, 1),
(123, 'KAALENG/KAIKOR', 614, 1),
(123, 'KIBISH', 615, 1),
(123, 'NAKALALE', 616, 1);

-- Insert Wards for TURKANA WEST (subcounty_code = 124)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(124, 'KAKUMA', 617, 1),
(124, 'LOPUR', 618, 1),
(124, 'LETEA', 619, 1),
(124, 'SONGOT', 620, 1),
(124, 'KALOBEYEI', 621, 1),
(124, 'LOKICHOGGIO', 622, 1),
(124, 'NANAAM', 623, 1);

-- Insert Wards for TURKANA CENTRAL (subcounty_code = 125)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(125, 'KERIO DELTA', 624, 1),
(125, 'KANGATOTHA', 625, 1),
(125, 'KALOKOL', 626, 1),
(125, 'LODWAR TOWNSHIP', 627, 1),
(125, 'KANAMKEMER', 628, 1);

-- Insert Wards for LOIMA (subcounty_code = 126)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(126, 'KOTARUK/LOBEI', 629, 1),
(126, 'TURKWEL', 630, 1),
(126, 'LOIMA', 631, 1),
(126, 'LOKIRIAMA/LORENGIPPI', 632, 1);

-- Insert Wards for TURKANA SOUTH (subcounty_code = 127)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(127, 'KAPUTIR', 633, 1),
(127, 'KATILU', 634, 1),
(127, 'LOBOKAT', 635, 1),
(127, 'KALAPATA', 636, 1),
(127, 'LOKICHAR', 637, 1);

-- Insert Wards for TURKANA EAST (subcounty_code = 128)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(128, 'KAPEDO/NAPEITOM', 638, 1),
(128, 'KATILIA', 639, 1),
(128, 'LOKORI/KOCHODIN', 640, 1);




-- =========================================================
-- West Pokot County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'WEST POKOT', 24, 1);

-- Insert Subcounties for WEST POKOT
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(24, 'KAPENGURIA', 129, 1),
(24, 'SIGOR', 130, 1),
(24, 'KACHELIBA', 131, 1),
(24, 'POKOT SOUTH', 132, 1);

-- Insert Wards for KAPENGURIA (subcounty_code = 129)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(129, 'RIWO', 641, 1),
(129, 'KAPENGURIA', 642, 1),
(129, 'MNAGEI', 643, 1),
(129, 'SIYOI', 644, 1),
(129, 'ENDUGH', 645, 1),
(129, 'SOOK', 646, 1);

-- Insert Wards for SIGOR (subcounty_code = 130)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(130, 'SEKERR', 647, 1),
(130, 'MASOOL', 648, 1),
(130, 'LOMUT', 649, 1),
(130, 'WEIWEI', 650, 1);

-- Insert Wards for KACHELIBA (subcounty_code = 131)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(131, 'SUAM', 651, 1),
(131, 'KODICH', 652, 1),
(131, 'KASEI', 653, 1),
(131, 'KAPCHOK', 654, 1),
(131, 'KIWAWA', 655, 1),
(131, 'ALALE', 656, 1);

-- Insert Wards for POKOT SOUTH (subcounty_code = 132)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(132, 'CHEPARERIA', 657, 1),
(132, 'BATEI', 658, 1),
(132, 'LELAN', 659, 1),
(132, 'TAPACH', 660, 1);

-- =========================================================
-- Samburu County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'SAMBURU', 25, 1);

-- Insert Subcounties for SAMBURU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(25, 'SAMBURU WEST', 133, 1),
(25, 'SAMBURU NORTH', 134, 1),
(25, 'SAMBURU EAST', 135, 1);

-- Insert Wards for SAMBURU WEST (subcounty_code = 133)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(133, 'LODOKEJEK', 661, 1),
(133, 'SUGUTA MARMAR', 662, 1),
(133, 'MARALAL', 663, 1),
(133, 'LOOSUK', 664, 1),
(133, 'PORO', 665, 1);

-- Insert Wards for SAMBURU NORTH (subcounty_code = 134)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(134, 'EL-BARTA', 666, 1),
(134, 'NACHOLA', 667, 1),
(134, 'NDOTO', 668, 1),
(134, 'NYIRO', 669, 1),
(134, 'ANGATA NANYOKIE', 670, 1),
(134, 'BAAWA', 671, 1);

-- Insert Wards for SAMBURU EAST (subcounty_code = 135)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(135, 'WASO', 672, 1),
(135, 'WAMBA WEST', 673, 1),
(135, 'WAMBA EAST', 674, 1),
(135, 'WAMBA NORTH', 675, 1);




-- =========================================================
-- Trans Nzoia County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'TRANS NZOIA', 26, 1);

-- Insert Subcounties for TRANS NZOIA
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(26, 'KWANZA', 136, 1),
(26, 'ENDEBESS', 137, 1),
(26, 'SABOTI', 138, 1),
(26, 'KIMININI', 139, 1),
(26, 'CHERANGANY', 140, 1);

-- Insert Wards for KWANZA (subcounty_code = 136)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(136, 'KAPOMBOI', 676, 1),
(136, 'KWANZA', 677, 1),
(136, 'KEIYO', 678, 1),
(136, 'BIDII', 679, 1);

-- Insert Wards for ENDEBESS (subcounty_code = 137)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(137, 'CHEPCHOINA', 680, 1),
(137, 'ENDEBESS', 681, 1),
(137, 'MATUMBEI', 682, 1);

-- Insert Wards for SABOTI (subcounty_code = 138)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(138, 'KINYORO', 683, 1),
(138, 'MATISI', 684, 1),
(138, 'TUWANI', 685, 1),
(138, 'SABOTI', 686, 1),
(138, 'MACHEWA', 687, 1);

-- Insert Wards for KIMININI (subcounty_code = 139)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(139, 'KIMININI', 688, 1),
(139, 'WAITALUK', 689, 1),
(139, 'SIRENDE', 690, 1),
(139, 'HOSPITAL', 691, 1),
(139, 'SIKHENDU', 692, 1),
(139, 'NABISWA', 693, 1);

-- Insert Wards for CHERANGANY (subcounty_code = 140)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(140, 'SINYERERE', 694, 1),
(140, 'MAKUTANO', 695, 1),
(140, 'KAPLAMAI', 696, 1),
(140, 'MOTOSIET', 697, 1),
(140, 'CHERANGANY/SUWERWA', 698, 1),
(140, 'CHEPSIRO/KIPTOROR', 699, 1),
(140, 'SITATUNGA', 700, 1);

-- =========================================================
-- Uasin Gishu County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'UASIN GISHU', 27, 1);

-- Insert Subcounties for UASIN GISHU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(27, 'SOY', 141, 1),
(27, 'TURBO', 142, 1),
(27, 'MOIBEN', 143, 1),
(27, 'AINABKOI', 144, 1),
(27, 'KAPSERET', 145, 1),
(27, 'KESSES', 146, 1);

-- Insert Wards for SOY (subcounty_code = 141)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(141, 'MOIS BRIDGE', 701, 1),
(141, 'KAPKURES', 702, 1),
(141, 'ZIWA', 703, 1),
(141, 'SEGERO/BARSOMBE', 704, 1),
(141, 'KIPSOMBA', 705, 1),
(141, 'SOY', 706, 1),
(141, 'KUINET/KAPSUSWA', 707, 1);

-- Insert Wards for TURBO (subcounty_code = 142)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(142, 'NGENYILEL', 708, 1),
(142, 'TAPSAGOI', 709, 1),
(142, 'KAMAGUT', 710, 1),
(142, 'KIPLOMBE', 711, 1),
(142, 'KAPSAOS', 712, 1),
(142, 'HURUMA', 713, 1);

-- Insert Wards for MOIBEN (subcounty_code = 143)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(143, 'TEMBELIO', 714, 1),
(143, 'SERGOIT', 715, 1),
(143, 'KARUNA/MEIBEKI', 716, 1),
(143, 'MOIBEN', 717, 1),
(143, 'KIMUMU', 718, 1);

-- Insert Wards for AINABKOI (subcounty_code = 144)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(144, 'KAPSOYA', 719, 1),
(144, 'KAPTAGAT', 720, 1),
(144, 'AINABKOI/OLARE', 721, 1);

-- Insert Wards for KAPSERET (subcounty_code = 145)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(145, 'SIMAT/KAPSERET', 722, 1),
(145, 'KIPKENYO', 723, 1),
(145, 'NGERIA', 724, 1),
(145, 'MEGUN', 725, 1),
(145, 'LANGAS', 726, 1);

-- Insert Wards for KESSES (subcounty_code = 146)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(146, 'RACECOURSE', 727, 1),
(146, 'CHEPTIRET/KIPCHAMO', 728, 1),
(146, 'TULWET/CHUIYAT', 729, 1),
(146, 'TARAKWA', 730, 1);




-- =========================================================
-- Elgeyo/Marakwet County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'ELGEYO/MARAKWET', 28, 1);

-- Insert Subcounties for ELGEYO/MARAKWET
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(28, 'MARAKWET EAST', 147, 1),
(28, 'MARAKWET WEST', 148, 1),
(28, 'KEIYO NORTH', 149, 1),
(28, 'KEIYO SOUTH', 150, 1);

-- Insert Wards for MARAKWET EAST (subcounty_code = 147)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(147, 'KAPYEGO', 731, 1),
(147, 'SAMBIRIR', 732, 1),
(147, 'ENDO', 733, 1),
(147, 'EMBOBUT / EMBULOT', 734, 1);

-- Insert Wards for MARAKWET WEST (subcounty_code = 148)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(148, 'LELAN', 735, 1),
(148, 'SENGWER', 736, 1),
(148, 'CHERANGANY/CHEBORORWA', 737, 1),
(148, 'MOIBEN/KUSERWO', 738, 1),
(148, 'KAPSOWAR', 739, 1),
(148, 'ARROR', 740, 1);

-- Insert Wards for KEIYO NORTH (subcounty_code = 149)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(149, 'EMSOO', 741, 1),
(149, 'KAMARINY', 742, 1),
(149, 'KAPCHEMUTWA', 743, 1),
(149, 'TAMBACH', 744, 1);

-- Insert Wards for KEIYO SOUTH (subcounty_code = 150)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(150, 'KAPTARAKWA', 745, 1),
(150, 'CHEPKORIO', 746, 1),
(150, 'SOY NORTH', 747, 1),
(150, 'SOY SOUTH', 748, 1),
(150, 'KABIEMIT', 749, 1),
(150, 'METKEI', 750, 1);

-- =========================================================
-- Nandi County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'NANDI', 29, 1);

-- Insert Subcounties for NANDI
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(29, 'TINDERET', 151, 1),
(29, 'ALDAI', 152, 1),
(29, 'NANDI HILLS', 153, 1),
(29, 'CHESUMEI', 154, 1),
(29, 'EMGWEN', 155, 1),
(29, 'MOSOP', 156, 1);

-- Insert Wards for TINDERET (subcounty_code = 151)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(151, 'SONGHOR/SOBA', 751, 1),
(151, 'TINDIRET', 752, 1),
(151, 'CHEMELIL/CHEMASE', 753, 1),
(151, 'KAPSIMOTWO', 754, 1);

-- Insert Wards for ALDAI (subcounty_code = 152)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(152, 'KABWARENG', 755, 1),
(152, 'TERIK', 756, 1),
(152, 'KEMELOI-MARABA', 757, 1),
(152, 'KOBUJOI', 758, 1),
(152, 'KAPTUMO-KABOI', 759, 1),
(152, 'KOYO-NDURIO', 760, 1);

-- Insert Wards for NANDI HILLS (subcounty_code = 153)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(153, 'NANDI HILLS', 761, 1),
(153, 'CHEPKUNYUK', 762, 1),
(153, 'OL LESSOS', 763, 1),
(153, 'KAPCHORUA', 764, 1);

-- Insert Wards for CHESUMEI (subcounty_code = 154)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(154, 'CHEMUNDU/KAPNG''ETUNY', 765, 1),
(154, 'KOSIRAI', 766, 1),
(154, 'LELMOKWO/NGECHEK', 767, 1),
(154, 'KAPTEL/KAMOIYWO', 768, 1),
(154, 'KIPTUYA', 769, 1);

-- Insert Wards for EMGWEN (subcounty_code = 155)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(155, 'CHEPKUMIA', 770, 1),
(155, 'KAPKANGANI', 771, 1),
(155, 'KAPSABET', 772, 1),
(155, 'KILIBWONI', 773, 1);

-- Insert Wards for MOSOP (subcounty_code = 156)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(156, 'CHEPTERWAI', 774, 1),
(156, 'KIPKAREN', 775, 1),
(156, 'KURGUNG/SURUNGAI', 776, 1),
(156, 'KABIYET', 777, 1),
(156, 'NDALAT', 778, 1),
(156, 'KABISAGA', 779, 1),
(156, 'SANGALO/KEBULONIK', 780, 1);



-- =========================================================
-- Baringo County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'BARINGO', 30, 1);

-- Insert Subcounties for BARINGO
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(30, 'TIATY', 157, 1),
(30, 'BARINGO NORTH', 158, 1),
(30, 'BARINGO CENTRAL', 159, 1),
(30, 'BARINGO SOUTH', 160, 1),
(30, 'MOGOTIO', 161, 1),
(30, 'ELDAMA RAVINE', 162, 1);

-- Insert Wards for TIATY (subcounty_code = 157)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(157, 'TIRIOKO', 781, 1),
(157, 'KOLOWA', 782, 1),
(157, 'RIBKWO', 783, 1),
(157, 'SILALE', 784, 1),
(157, 'LOIYAMOROCK', 785, 1),
(157, 'TANGULBEI/KOROSSI', 786, 1),
(157, 'CHURO/AMAYA', 787, 1);

-- Insert Wards for BARINGO NORTH (subcounty_code = 158)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(158, 'BARWESSA', 788, 1),
(158, 'KABARTONJO', 789, 1),
(158, 'SAIMO/KIPSARAMAN', 790, 1),
(158, 'SAIMO/SOI', 791, 1),
(158, 'BARTABWA', 792, 1);

-- Insert Wards for BARINGO CENTRAL (subcounty_code = 159)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(159, 'KABARNET', 793, 1),
(159, 'SACHO', 794, 1),
(159, 'TENGES', 795, 1),
(159, 'EWALEL/CHAPCHAP', 796, 1),
(159, 'KAPROPITA', 797, 1);

-- Insert Wards for BARINGO SOUTH (subcounty_code = 160)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(160, 'MARIGAT', 798, 1),
(160, 'ILCHAMUS', 799, 1),
(160, 'MOCHONGOI', 800, 1),
(160, 'MUKUTANI', 801, 1);

-- Insert Wards for MOGOTIO (subcounty_code = 161)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(161, 'MOGOTIO', 802, 1),
(161, 'EMINING', 803, 1),
(161, 'KISANANA', 804, 1);

-- Insert Wards for ELDAMA RAVINE (subcounty_code = 162)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(162, 'LEMBUS', 805, 1),
(162, 'LEMBUS KWEN', 806, 1),
(162, 'RAVINE', 807, 1),
(162, 'MUMBERES/MAJI MAZURI', 808, 1),
(162, 'LEMBUS/PERKERRA', 809, 1),
(162, 'KOIBATEK', 810, 1);



-- =========================================================
-- Laikipia County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'LAIKIPIA', 31, 1);

-- Insert Subcounties for LAIKIPIA
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(31, 'LAIKIPIA WEST', 163, 1),
(31, 'LAIKIPIA EAST', 164, 1),
(31, 'LAIKIPIA NORTH', 165, 1);

-- Insert Wards for LAIKIPIA WEST (subcounty_code = 163)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(163, 'OL-MORAN', 811, 1),
(163, 'RUMURUTI TOWNSHIP', 812, 1),
(163, 'GITHIGA', 813, 1),
(163, 'MARMANET', 814, 1),
(163, 'IGWAMITI', 815, 1),
(163, 'SALAMA', 816, 1);

-- Insert Wards for LAIKIPIA EAST (subcounty_code = 164)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(164, 'NGOBIT', 817, 1),
(164, 'TIGITHI', 818, 1),
(164, 'THINGITHU', 819, 1),
(164, 'NANYUKI', 820, 1),
(164, 'UMANDE', 821, 1);

-- Insert Wards for LAIKIPIA NORTH (subcounty_code = 165)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(165, 'SOSIAN', 822, 1),
(165, 'SEGERA', 823, 1),
(165, 'MUGOGODO WEST', 824, 1),
(165, 'MUGOGODO EAST', 825, 1);


-- =========================================================
-- Nakuru County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'NAKURU', 32, 1);

-- Insert Subcounties for NAKURU
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(32, 'MOLO', 166, 1),
(32, 'NJORO', 167, 1),
(32, 'NAIVASHA', 168, 1),
(32, 'GILGIL', 169, 1),
(32, 'KURESOI SOUTH', 170, 1),
(32, 'KURESOI NORTH', 171, 1),
(32, 'SUBUKIA', 172, 1),
(32, 'RONGAI', 173, 1),
(32, 'BAHATI', 174, 1),
(32, 'NAKURU TOWN WEST', 175, 1),
(32, 'NAKURU TOWN EAST', 176, 1);

-- MOLO (166)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(166, 'MARIASHONI', 826, 1),
(166, 'ELBURGON', 827, 1),
(166, 'TURI', 828, 1),
(166, 'MOLO', 829, 1);

-- NJORO (167)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(167, 'MAU NAROK', 830, 1),
(167, 'MAUCHE', 831, 1),
(167, 'KIHINGO', 832, 1),
(167, 'NESSUIT', 833, 1),
(167, 'LARE', 834, 1),
(167, 'NJORO', 835, 1);

-- NAIVASHA (168)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(168, 'BIASHARA', 836, 1),
(168, 'HELLS GATE', 837, 1),
(168, 'LAKE VIEW', 838, 1),
(168, 'MAI MAHIU', 839, 1),
(168, 'MAIELLA', 840, 1),
(168, 'OLKARIA', 841, 1),
(168, 'NAIVASHA EAST', 842, 1),
(168, 'VIWANDANI', 843, 1);

-- GILGIL (169)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(169, 'GILGIL', 844, 1),
(169, 'ELEMENTAITA', 845, 1),
(169, 'MBARUK/EBURU', 846, 1),
(169, 'MALEWA WEST', 847, 1),
(169, 'MURINDATI', 848, 1);

-- KURESOI SOUTH (170)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(170, 'AMALO', 849, 1),
(170, 'KERINGET', 850, 1),
(170, 'KIPTAGICH', 851, 1),
(170, 'TINET', 852, 1);

-- KURESOI NORTH (171)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(171, 'KIPTORORO', 853, 1),
(171, 'NYOTA', 854, 1),
(171, 'SIRIKWA', 855, 1),
(171, 'KAMARA', 856, 1);

-- SUBUKIA (172)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(172, 'SUBUKIA', 857, 1),
(172, 'WASEGES', 858, 1),
(172, 'KABAZI', 859, 1);

-- RONGAI (173)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(173, 'MENENGAI WEST', 860, 1),
(173, 'SOIN', 861, 1),
(173, 'VISOI', 862, 1),
(173, 'MOSOP', 863, 1),
(173, 'SOLAI', 864, 1);

-- BAHATI (174)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(174, 'DUNDORI', 865, 1),
(174, 'KABATINI', 866, 1),
(174, 'KIAMAINA', 867, 1),
(174, 'LANET/UMOJA', 868, 1),
(174, 'BAHATI', 869, 1);

-- NAKURU TOWN WEST (175)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(175, 'BARUT', 870, 1),
(175, 'LONDON', 871, 1),
(175, 'KAPTEMBWO', 872, 1),
(175, 'KAPKURES', 873, 1),
(175, 'RHODA', 874, 1),
(175, 'SHAABAB', 875, 1);

-- NAKURU TOWN EAST (176)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(176, 'BIASHARA', 876, 1),
(176, 'KIVUMBINI', 877, 1),
(176, 'FLAMINGO', 878, 1),
(176, 'MENENGAI', 879, 1),
(176, 'NAKURU EAST', 880, 1);



-- =========================================================
-- Narok County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'NAROK', 33, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(33, 'KILGORIS', 177, 1),
(33, 'EMURUA DIKIRR', 178, 1),
(33, 'NAROK NORTH', 179, 1),
(33, 'NAROK EAST', 180, 1),
(33, 'NAROK SOUTH', 181, 1),
(33, 'NAROK WEST', 182, 1);

-- KILGORIS (177)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(177, 'KILGORIS CENTRAL', 881, 1),
(177, 'KEYIAN', 882, 1),
(177, 'ANGATA BARIKOI', 883, 1),
(177, 'SHANKOE', 884, 1),
(177, 'KIMINTET', 885, 1),
(177, 'LOLGORIAN', 886, 1);

-- EMURUA DIKIRR (178)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(178, 'ILKERIN', 887, 1),
(178, 'OLOLMASANI', 888, 1),
(178, 'MOGONDO', 889, 1),
(178, 'KAPSASIAN', 890, 1);

-- NAROK NORTH (179)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(179, 'OLPUSIMORU', 891, 1),
(179, 'OLOKURTO', 892, 1),
(179, 'NAROK TOWN', 893, 1),
(179, 'NKARETA', 894, 1),
(179, 'OLORROPIL', 895, 1),
(179, 'MELILI', 896, 1);

-- NAROK EAST (180)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(180, 'MOSIRO', 897, 1),
(180, 'ILDAMAT', 898, 1),
(180, 'KEEKONYOKIE', 899, 1),
(180, 'SUSWA', 900, 1);

-- NAROK SOUTH (181)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(181, 'MAJIMOTO/NAROOSURA', 901, 1),
(181, 'OLOLULUNG''A', 902, 1),
(181, 'MELELO', 903, 1),
(181, 'LOITA', 904, 1),
(181, 'SOGOO', 905, 1),
(181, 'SAGAMIAN', 906, 1);

-- NAROK WEST (182)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(182, 'ILMOTIOK', 907, 1),
(182, 'MARA', 908, 1),
(182, 'SIANA', 909, 1),
(182, 'NAIKARRA', 910, 1);




-- =========================================================
-- Kajiado County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'KAJIADO', 34, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(34, 'KAJIADO NORTH', 183, 1),
(34, 'KAJIADO CENTRAL', 184, 1),
(34, 'KAJIADO EAST', 185, 1),
(34, 'KAJIADO WEST', 186, 1),
(34, 'KAJIADO SOUTH', 187, 1);

-- KAJIADO NORTH (183)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(183, 'OLKERI', 911, 1),
(183, 'ONGATA RONGAI', 912, 1),
(183, 'NKAIMURUNYA', 913, 1),
(183, 'OLOOLUA', 914, 1),
(183, 'NGONG', 915, 1);

-- KAJIADO CENTRAL (184)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(184, 'PURKO', 916, 1),
(184, 'ILDAMAT', 917, 1),
(184, 'DALALEKUTUK', 918, 1),
(184, 'MATAPATO NORTH', 919, 1),
(184, 'MATAPATO SOUTH', 920, 1);

-- KAJIADO EAST (185)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(185, 'KAPUTIEI NORTH', 921, 1),
(185, 'KITENGELA', 922, 1),
(185, 'OLOOSIRKON/SHOLINKE', 923, 1),
(185, 'KENYAWA-POKA', 924, 1),
(185, 'IMARORO', 925, 1);

-- KAJIADO WEST (186)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(186, 'KEEKONYOKIE', 926, 1),
(186, 'ILOODOKILANI', 927, 1),
(186, 'MAGADI', 928, 1),
(186, 'EWUASO OONKIDONG''I', 929, 1),
(186, 'MOSIRO', 930, 1);

-- KAJIADO SOUTH (187)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(187, 'ENTONET/LENKISIM', 931, 1),
(187, 'MBIRIKANI/ESELENKEI', 932, 1),
(187, 'KUKU', 933, 1),
(187, 'ROMBO', 934, 1),
(187, 'KIMANA', 935, 1);



-- =========================================================
-- Kericho County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'KERICHO', 35, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(35, 'KIPKELION EAST', 188, 1),
(35, 'KIPKELION WEST', 189, 1),
(35, 'AINAMOI', 190, 1),
(35, 'BURETI', 191, 1),
(35, 'BELGUT', 192, 1),
(35, 'SIGOWET/SOIN', 193, 1);

-- KIPKELION EAST (188)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(188, 'LONDIANI', 936, 1),
(188, 'KEDOWA/KIMUGUL', 937, 1),
(188, 'CHEPSEON', 938, 1),
(188, 'TENDENO/SORGET', 939, 1);

-- KIPKELION WEST (189)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(189, 'KUNYAK', 940, 1),
(189, 'KAMASIAN', 941, 1),
(189, 'KIPKELION', 942, 1),
(189, 'CHILCHILA', 943, 1);

-- AINAMOI (190)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(190, 'KAPSOIT', 944, 1),
(190, 'AINAMOI', 945, 1),
(190, 'KAPKUGERWET', 946, 1),
(190, 'KIPCHEBOR', 947, 1),
(190, 'KIPCHIMCHIM', 948, 1),
(190, 'KAPSAOS', 949, 1);

-- BURETI (191)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(191, 'KISIARA', 950, 1),
(191, 'TEBESONIK', 951, 1),
(191, 'CHEBOIN', 952, 1),
(191, 'CHEMOSOT', 953, 1),
(191, 'LITEIN', 954, 1),
(191, 'CHEPLANGET', 955, 1),
(191, 'KAPKATET', 956, 1);

-- BELGUT (192)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(192, 'WALDAI', 957, 1),
(192, 'KABIANGA', 958, 1),
(192, 'CHEPTORORIET/SERETUT', 959, 1),
(192, 'CHAIK', 960, 1),
(192, 'KAPSUSER', 961, 1);

-- SIGOWET/SOIN (193)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(193, 'SIGOWET', 962, 1),
(193, 'KAPLELARTET', 963, 1),
(193, 'SOLIAT', 964, 1),
(193, 'SOIN', 965, 1);


-- =========================================================
-- Bomet County (Region Code 5)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(5, 'BOMET', 36, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(36, 'SOTIK', 194, 1),
(36, 'CHEPALUNGU', 195, 1),
(36, 'BOMET EAST', 196, 1),
(36, 'BOMET CENTRAL', 197, 1),
(36, 'KONOIN', 198, 1);

-- SOTIK (194)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(194, 'NDANAI/ABOSI', 966, 1),
(194, 'CHEMAGEL', 967, 1),
(194, 'KIPSONOI', 968, 1),
(194, 'KAPLETUNDO', 969, 1),
(194, 'RONGENA/MANARET', 970, 1);

-- CHEPALUNGU (195)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(195, 'KONG''ASIS', 971, 1),
(195, 'NYANGORES', 972, 1),
(195, 'SIGOR', 973, 1),
(195, 'CHEBUNYO', 974, 1),
(195, 'SIONGIROI', 975, 1);

-- BOMET EAST (196)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(196, 'MERIGI', 976, 1),
(196, 'KEMBU', 977, 1),
(196, 'LONGISA', 978, 1),
(196, 'KIPRERES', 979, 1),
(196, 'CHEMANER', 980, 1);

-- BOMET CENTRAL (197)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(197, 'SILIBWET TOWNSHIP', 981, 1),
(197, 'NDARAWETA', 982, 1),
(197, 'SINGORWET', 983, 1),
(197, 'CHESOEN', 984, 1),
(197, 'MUTARAKWA', 985, 1);

-- KONOIN (198)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(198, 'CHEPCHABAS', 986, 1),
(198, 'KIMULOT', 987, 1),
(198, 'MOGOGOSIEK', 988, 1),
(198, 'BOITO', 989, 1),
(198, 'EMBOMOS', 990, 1);




-- =========================================================
-- Kakamega County (Region Code 6)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(6, 'KAKAMEGA', 37, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(37, 'LUGARI', 199, 1),
(37, 'LIKUYANI', 200, 1),
(37, 'MALAVA', 201, 1),
(37, 'LURAMBI', 202, 1),
(37, 'NAVAKHOLO', 203, 1),
(37, 'MUMIAS WEST', 204, 1),
(37, 'MUMIAS EAST', 205, 1),
(37, 'MATUNGU', 206, 1),
(37, 'BUTERE', 207, 1),
(37, 'KHWISERO', 208, 1),
(37, 'SHINYALU', 209, 1),
(37, 'IKOLOMANI', 210, 1);

-- LUGARI (199)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(199, 'MAUTUMA', 991, 1),
(199, 'LUGARI', 992, 1),
(199, 'LUMAKANDA', 993, 1),
(199, 'CHEKALINI', 994, 1),
(199, 'CHEVAYWA', 995, 1),
(199, 'LWANDETI', 996, 1);

-- LIKUYANI (200)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(200, 'LIKUYANI', 997, 1),
(200, 'SANGO', 998, 1),
(200, 'KONGONI', 999, 1),
(200, 'NZOIA', 1000, 1),
(200, 'SINOKO', 1001, 1);

-- MALAVA (201)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(201, 'WEST KABRAS', 1002, 1),
(201, 'CHEMUCHE', 1003, 1),
(201, 'EAST KABRAS', 1004, 1),
(201, 'BUTALI/CHEGULO', 1005, 1),
(201, 'MANDA-SHIVANGA', 1006, 1),
(201, 'SHIRUGU-MUGAI', 1007, 1),
(201, 'SOUTH KABRAS', 1008, 1);

-- LURAMBI (202)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(202, 'BUTSOTSO EAST', 1009, 1),
(202, 'BUTSOTSO SOUTH', 1010, 1),
(202, 'BUTSOTSO CENTRAL', 1011, 1),
(202, 'SHEYWE', 1012, 1),
(202, 'MAHIAKALO', 1013, 1),
(202, 'SHIRERE', 1014, 1);

-- NAVAKHOLO (203)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(203, 'INGOSTSE-MATHIA', 1015, 1),
(203, 'SHINOYI-SHIKOMARI-ESUMEYIA', 1016, 1),
(203, 'BUNYALA WEST', 1017, 1),
(203, 'BUNYALA EAST', 1018, 1),
(203, 'BUNYALA CENTRAL', 1019, 1);

-- MUMIAS WEST (204)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(204, 'MUMIAS CENTRAL', 1020, 1),
(204, 'MUMIAS NORTH', 1021, 1),
(204, 'ETENJE', 1022, 1),
(204, 'MUSANDA', 1023, 1);

-- MUMIAS EAST (205)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(205, 'LUSHEYA/LUBINU', 1024, 1),
(205, 'MALAHA/ISONGO/MAKUNGA', 1025, 1),
(205, 'EAST WANGA', 1026, 1);

-- MATUNGU (206)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(206, 'KOYONZO', 1027, 1),
(206, 'KHOLERA', 1028, 1),
(206, 'KHALABA', 1029, 1),
(206, 'MAYONI', 1030, 1),
(206, 'NAMAMALI', 1031, 1);

-- BUTERE (207)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(207, 'MARAMA WEST', 1032, 1),
(207, 'MARAMA CENTRAL', 1033, 1),
(207, 'MARENYO - SHIANDA', 1034, 1),
(207, 'MARAMA NORTH', 1035, 1),
(207, 'MARAMA SOUTH', 1036, 1);

-- KHWISERO (208)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(208, 'KISA NORTH', 1037, 1),
(208, 'KISA EAST', 1038, 1),
(208, 'KISA WEST', 1039, 1),
(208, 'KISA CENTRAL', 1040, 1);

-- SHINYALU (209)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(209, 'ISUKHA NORTH', 1041, 1),
(209, 'MURHANDA', 1042, 1),
(209, 'ISUKHA CENTRAL', 1043, 1),
(209, 'ISUKHA SOUTH', 1044, 1),
(209, 'ISUKHA EAST', 1045, 1),
(209, 'ISUKHA WEST', 1046, 1);

-- IKOLOMANI (210)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(210, 'IDAKHO SOUTH', 1047, 1),
(210, 'IDAKHO EAST', 1048, 1),
(210, 'IDAKHO NORTH', 1049, 1),
(210, 'IDAKHO CENTRAL', 1050, 1);


-- =========================================================
-- Vihiga County (Region Code 6)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(6, 'VIHIGA', 38, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(38, 'VIHIGA', 211, 1),
(38, 'SABATIA', 212, 1),
(38, 'HAMISI', 213, 1),
(38, 'LUANDA', 214, 1),
(38, 'EMUHAYA', 215, 1);

-- VIHIGA (211)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(211, 'LUGAGA-WAMULUMA', 1051, 1),
(211, 'SOUTH MARAGOLI', 1052, 1),
(211, 'CENTRAL MARAGOLI', 1053, 1),
(211, 'MUNGOMA', 1054, 1);

-- SABATIA (212)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(212, 'LYADUYWA/IZAVA', 1055, 1),
(212, 'WEST SABATIA', 1056, 1),
(212, 'CHAVAKALI', 1057, 1),
(212, 'NORTH MARAGOLI', 1058, 1),
(212, 'WODANGA', 1059, 1),
(212, 'BUSALI', 1060, 1);

-- HAMISI (213)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(213, 'SHIRU', 1061, 1),
(213, 'GISAMBAI', 1062, 1),
(213, 'SHAMAKHOKHO', 1063, 1),
(213, 'BANJA', 1064, 1),
(213, 'MUHUDU', 1065, 1),
(213, 'TAMBUA', 1066, 1),
(213, 'JEPKOYAI', 1067, 1);

-- LUANDA (214)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(214, 'LUANDA TOWNSHIP', 1068, 1),
(214, 'WEMILABI', 1069, 1),
(214, 'MWIBONA', 1070, 1),
(214, 'LUANDA SOUTH', 1071, 1),
(214, 'EMABUNGO', 1072, 1);

-- EMUHAYA (215)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(215, 'NORTH EAST BUNYORE', 1073, 1),
(215, 'CENTRAL BUNYORE', 1074, 1),
(215, 'WEST BUNYORE', 1075, 1);



-- =========================================================
-- Bungoma County (Region Code 6)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(6, 'BUNGOMA', 39, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(39, 'MT. ELGON', 216, 1),
(39, 'SIRISIA', 217, 1),
(39, 'KABUCHAI', 218, 1),
(39, 'BUMULA', 219, 1),
(39, 'KANDUYI', 220, 1),
(39, 'WEBUYE EAST', 221, 1),
(39, 'WEBUYE WEST', 222, 1),
(39, 'KIMILILI', 223, 1),
(39, 'TONGAREN', 224, 1);

-- MT. ELGON (216)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(216, 'CHEPTAIS', 1076, 1),
(216, 'CHESIKAKI', 1077, 1),
(216, 'CHEPYUK', 1078, 1),
(216, 'KAPKATENY', 1079, 1),
(216, 'KAPTAMA', 1080, 1),
(216, 'ELGON', 1081, 1);

-- SIRISIA (217)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(217, 'NAMWELA', 1082, 1),
(217, 'MALAKISI/SOUTH KULISIRU', 1083, 1),
(217, 'LWANDANYI', 1084, 1);

-- KABUCHAI (218)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(218, 'KABUCHAI/CHWELE', 1085, 1),
(218, 'WEST NALONDO', 1086, 1),
(218, 'BWAKE/LUUYA', 1087, 1),
(218, 'MUKUYUNI', 1088, 1);

-- BUMULA (219)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(219, 'SOUTH BUKUSU', 1089, 1),
(219, 'BUMULA', 1090, 1),
(219, 'KHASOKO', 1091, 1),
(219, 'KABULA', 1092, 1),
(219, 'KIMAETI', 1093, 1),
(219, 'WEST BUKUSU', 1094, 1),
(219, 'SIBOTI', 1095, 1);

-- KANDUYI (220)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(220, 'BUKEMBE WEST', 1096, 1),
(220, 'BUKEMBE EAST', 1097, 1),
(220, 'TOWNSHIP', 1098, 1),
(220, 'KHALABA', 1099, 1),
(220, 'MUSIKOMA', 1100, 1),
(220, 'EAST SANG\'ALO', 1101, 1),
(220, 'MARAKARU/TUUTI', 1102, 1),
(220, 'WEST SANG\'ALO', 1103, 1);

-- WEBUYE EAST (221)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(221, 'MIHUU', 1104, 1),
(221, 'NDIVISI', 1105, 1),
(221, 'MARAKA', 1106, 1);

-- WEBUYE WEST (222)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(222, 'MISIKHU', 1107, 1),
(222, 'SITIKHO', 1108, 1),
(222, 'MATULO', 1109, 1),
(222, 'BOKOLI', 1110, 1);

-- KIMILILI (223)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(223, 'KIBINGEI', 1111, 1),
(223, 'KIMILILI', 1112, 1),
(223, 'MAENI', 1113, 1),
(223, 'KAMUKUYWA', 1114, 1);

-- TONGAREN (224)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(224, 'MBAKALO', 1115, 1),
(224, 'NAITIRI/KABUYEFWE', 1116, 1),
(224, 'MILIMA', 1117, 1),
(224, 'NDALU/ TABANI', 1118, 1),
(224, 'TONGAREN', 1119, 1),
(224, 'SOYSAMBU/ MITUA', 1120, 1);




-- =========================================================
-- Busia County (Region Code 6)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(6, 'BUSIA', 40, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(40, 'TESO NORTH', 225, 1),
(40, 'TESO SOUTH', 226, 1),
(40, 'NAMBALE', 227, 1),
(40, 'MATAYOS', 228, 1),
(40, 'BUTULA', 229, 1),
(40, 'FUNYULA', 230, 1),
(40, 'BUDALANGI', 231, 1);

-- TESO NORTH (225)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(225, 'MALABA CENTRAL', 1121, 1),
(225, 'MALABA NORTH', 1122, 1),
(225, 'ANG\'URAI SOUTH', 1123, 1),
(225, 'ANG\'URAI NORTH', 1124, 1),
(225, 'ANG\'URAI EAST', 1125, 1),
(225, 'MALABA SOUTH', 1126, 1);

-- TESO SOUTH (226)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(226, 'ANG\'OROM', 1127, 1),
(226, 'CHAKOL SOUTH', 1128, 1),
(226, 'CHAKOL NORTH', 1129, 1),
(226, 'AMUKURA WEST', 1130, 1),
(226, 'AMUKURA EAST', 1131, 1),
(226, 'AMUKURA CENTRAL', 1132, 1);

-- NAMBALE (227)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(227, 'NAMBALE TOWNSHIP', 1133, 1),
(227, 'BUKHAYO NORTH/WALTSI', 1134, 1),
(227, 'BUKHAYO EAST', 1135, 1),
(227, 'BUKHAYO CENTRAL', 1136, 1);

-- MATAYOS (228)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(228, 'BUKHAYO WEST', 1137, 1),
(228, 'MAYENJE', 1138, 1),
(228, 'MATAYOS SOUTH', 1139, 1),
(228, 'BUSIBWABO', 1140, 1),
(228, 'BURUMBA', 1141, 1);

-- BUTULA (229)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(229, 'MARACHI WEST', 1142, 1),
(229, 'KINGANDOLE', 1143, 1),
(229, 'MARACHI CENTRAL', 1144, 1),
(229, 'MARACHI EAST', 1145, 1),
(229, 'MARACHI NORTH', 1146, 1),
(229, 'ELUGULU', 1147, 1);

-- FUNYULA (230)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(230, 'NAMBOBOTO NAMBUKU', 1148, 1),
(230, 'NANGINA', 1149, 1),
(230, 'AGENGA NANGUBA', 1150, 1),
(230, 'BWIRI', 1151, 1);

-- BUDALANGI (231)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(231, 'BUNYALA CENTRAL', 1152, 1),
(231, 'BUNYALA NORTH', 1153, 1),
(231, 'BUNYALA WEST', 1154, 1),
(231, 'BUNYALA SOUTH', 1155, 1);





-- =========================================================
-- Siaya County (Region Code 4)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'SIAYA', 41, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(41, 'UGENYA', 232, 1),
(41, 'UGUNJA', 233, 1),
(41, 'ALEGO USONGA', 234, 1),
(41, 'GEM', 235, 1),
(41, 'BONDO', 236, 1),
(41, 'RARIEDA', 237, 1);

-- UGENYA (232)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(232, 'WEST UGENYA', 1156, 1),
(232, 'UKWALA', 1157, 1),
(232, 'NORTH UGENYA', 1158, 1),
(232, 'EAST UGENYA', 1159, 1);

-- UGUNJA (233)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(233, 'SIDINDI', 1160, 1),
(233, 'SIGOMERE', 1161, 1),
(233, 'UGUNJA', 1162, 1);

-- ALEGO USONGA (234)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(234, 'USONGA', 1163, 1),
(234, 'WEST ALEGO', 1164, 1),
(234, 'CENTRAL ALEGO', 1165, 1),
(234, 'SIAYA TOWNSHIP', 1166, 1),
(234, 'NORTH ALEGO', 1167, 1),
(234, 'SOUTH EAST ALEGO', 1168, 1);

-- GEM (235)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(235, 'NORTH GEM', 1169, 1),
(235, 'WEST GEM', 1170, 1),
(235, 'CENTRAL GEM', 1171, 1),
(235, 'YALA TOWNSHIP', 1172, 1),
(235, 'EAST GEM', 1173, 1),
(235, 'SOUTH GEM', 1174, 1);

-- BONDO (236)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(236, 'WEST YIMBO', 1175, 1),
(236, 'CENTRAL SAKWA', 1176, 1),
(236, 'SOUTH SAKWA', 1177, 1),
(236, 'YIMBO EAST', 1178, 1),
(236, 'WEST SAKWA', 1179, 1),
(236, 'NORTH SAKWA', 1180, 1);

-- RARIEDA (237)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(237, 'EAST ASEMBO', 1181, 1),
(237, 'WEST ASEMBO', 1182, 1),
(237, 'NORTH UYOMA', 1183, 1),
(237, 'SOUTH UYOMA', 1184, 1),
(237, 'WEST UYOMA', 1185, 1);


-- =========================================================
-- Kisumu County (Region Code 4)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'KISUMU', 42, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(42, 'KISUMU EAST', 238, 1),
(42, 'KISUMU WEST', 239, 1),
(42, 'KISUMU CENTRAL', 240, 1),
(42, 'SEME', 241, 1),
(42, 'NYANDO', 242, 1),
(42, 'MUHORONI', 243, 1),
(42, 'NYAKACH', 244, 1);

-- KISUMU EAST (238)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(238, 'KAJULU', 1186, 1),
(238, 'KOLWA EAST', 1187, 1),
(238, 'MANYATTA B', 1188, 1),
(238, 'NYALENDA A', 1189, 1),
(238, 'KOLWA CENTRAL', 1190, 1);

-- KISUMU WEST (239)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(239, 'SOUTH WEST KISUMU', 1191, 1),
(239, 'CENTRAL KISUMU', 1192, 1),
(239, 'KISUMU NORTH', 1193, 1),
(239, 'WEST KISUMU', 1194, 1),
(239, 'NORTH WEST KISUMU', 1195, 1);

-- KISUMU CENTRAL (240)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(240, 'RAILWAYS', 1196, 1),
(240, 'MIGOSI', 1197, 1),
(240, 'SHAURIMOYO KALOLENI', 1198, 1),
(240, 'MARKET MILIMANI', 1199, 1),
(240, 'KONDELE', 1200, 1),
(240, 'NYALENDA B', 1201, 1);

-- SEME (241)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(241, 'WEST SEME', 1202, 1),
(241, 'CENTRAL SEME', 1203, 1),
(241, 'EAST SEME', 1204, 1),
(241, 'NORTH SEME', 1205, 1);

-- NYANDO (242)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(242, 'EAST KANO/WAWIDHI', 1206, 1),
(242, 'AWASI/ONJIKO', 1207, 1),
(242, 'AHERO', 1208, 1),
(242, 'KABONYO/KANYAGWAL', 1209, 1),
(242, 'KOBURA', 1210, 1);

-- MUHORONI (243)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(243, 'MIWANI', 1211, 1),
(243, 'OMBEYI', 1212, 1),
(243, 'MASOGO/NYANGOMA', 1213, 1),
(243, 'CHEMELIL', 1214, 1),
(243, 'MUHORONI/KORU', 1215, 1);

-- NYAKACH (244)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(244, 'SOUTH WEST NYAKACH', 1216, 1),
(244, 'NORTH NYAKACH', 1217, 1),
(244, 'CENTRAL NYAKACH', 1218, 1),
(244, 'WEST NYAKACH', 1219, 1),
(244, 'SOUTH EAST NYAKACH', 1220, 1);


-- =========================================================
-- Homa Bay County (Region Code 4)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'HOMA BAY', 43, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(43, 'KASIPUL', 245, 1),
(43, 'KABONDO KASIPUL', 246, 1),
(43, 'KARACHUONYO', 247, 1),
(43, 'RANGWE', 248, 1),
(43, 'HOMA BAY TOWN', 249, 1),
(43, 'NDHIWA', 250, 1),
(43, 'SUBA NORTH', 251, 1),
(43, 'SUBA SOUTH', 252, 1);

-- KASIPUL (245)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(245, 'WEST KASIPUL', 1221, 1),
(245, 'SOUTH KASIPUL', 1222, 1),
(245, 'CENTRAL KASIPUL', 1223, 1),
(245, 'EAST KAMAGAK', 1224, 1),
(245, 'WEST KAMAGAK', 1225, 1);

-- KABONDO KASIPUL (246)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(246, 'KABONDO EAST', 1226, 1),
(246, 'KABONDO WEST', 1227, 1),
(246, 'KOKWANYO/KAKELO', 1228, 1),
(246, 'KOJWACH', 1229, 1);

-- KARACHUONYO (247)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(247, 'WEST KARACHUONYO', 1230, 1),
(247, 'NORTH KARACHUONYO', 1231, 1),
(247, 'CENTRAL', 1232, 1),
(247, 'KANYALUO', 1233, 1),
(247, 'KIBIRI', 1234, 1),
(247, 'WANGCHIENG', 1235, 1),
(247, 'KENDU BAY TOWN', 1236, 1);

-- RANGWE (248)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(248, 'WEST GEM', 1237, 1),
(248, 'EAST GEM', 1238, 1),
(248, 'KAGAN', 1239, 1),
(248, 'KOCHIA', 1240, 1);

-- HOMA BAY TOWN (249)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(249, 'HOMA BAY CENTRAL', 1241, 1),
(249, 'HOMA BAY ARUJO', 1242, 1),
(249, 'HOMA BAY WEST', 1243, 1),
(249, 'HOMA BAY EAST', 1244, 1);

-- NDHIWA (250)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(250, 'KWABWAI', 1245, 1),
(250, 'KANYADOTO', 1246, 1),
(250, 'KANYIKELA', 1247, 1),
(250, 'KABUOCH NORTH', 1248, 1),
(250, 'KABUOCH SOUTH/PALA', 1249, 1),
(250, 'KANYAMWA KOLOGI', 1250, 1),
(250, 'KANYAMWA KOSEWE', 1251, 1);

-- SUBA NORTH (251)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(251, 'MFANGANO ISLAND', 1252, 1),
(251, 'RUSINGA ISLAND', 1253, 1),
(251, 'KASGUNGA', 1254, 1),
(251, 'GEMBE', 1255, 1),
(251, 'LAMBWE', 1256, 1);

-- SUBA SOUTH (252)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(252, 'GWASSI SOUTH', 1257, 1),
(252, 'GWASSI NORTH', 1258, 1),
(252, 'KAKSINGRI WEST', 1259, 1),
(252, 'RUMA-KAKSINGRI', 1260, 1);


-- =========================================================
-- Migori County (Region Code 4)
-- =========================================================

-- Insert County
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'MIGORI', 44, 1);

-- Insert Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(44, 'RONGO', 253, 1),
(44, 'AWENDO', 254, 1),
(44, 'SUNA EAST', 255, 1),
(44, 'SUNA WEST', 256, 1),
(44, 'URIRI', 257, 1),
(44, 'NYATIKE', 258, 1),
(44, 'KURIA WEST', 259, 1),
(44, 'KURIA EAST', 260, 1);

-- RONGO (253)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(253, 'NORTH KAMAGAMBO', 1261, 1),
(253, 'CENTRAL KAMAGAMBO', 1262, 1),
(253, 'EAST KAMAGAMBO', 1263, 1),
(253, 'SOUTH KAMAGAMBO', 1264, 1);

-- AWENDO (254)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(254, 'NORTH SAKWA', 1265, 1),
(254, 'SOUTH SAKWA', 1266, 1),
(254, 'WEST SAKWA', 1267, 1),
(254, 'CENTRAL SAKWA', 1268, 1);

-- SUNA EAST (255)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(255, 'GOD JOPE', 1269, 1),
(255, 'SUNA CENTRAL', 1270, 1),
(255, 'KAKRAO', 1271, 1),
(255, 'KWA', 1272, 1);

-- SUNA WEST (256)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(256, 'WIGA', 1273, 1),
(256, 'WASWETA II', 1274, 1),
(256, 'RAGANA-ORUBA', 1275, 1),
(256, 'WASIMBETE', 1276, 1);

-- URIRI (257)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(257, 'WEST KANYAMKAGO', 1277, 1),
(257, 'NORTH KANYAMKAGO', 1278, 1),
(257, 'CENTRAL KANYAMKAGO', 1279, 1),
(257, 'SOUTH KANYAMKAGO', 1280, 1),
(257, 'EAST KANYAMKAGO', 1281, 1);

-- NYATIKE (258)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(258, 'KACHIEN''G', 1282, 1),
(258, 'KANYASA', 1283, 1),
(258, 'NORTH KADEM', 1284, 1),
(258, 'MACALDER/KANYARWANDA', 1285, 1),
(258, 'KALER', 1286, 1),
(258, 'GOT KACHOLA', 1287, 1),
(258, 'MUHURU', 1288, 1);

-- KURIA WEST (259)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(259, 'BUKIRA EAST', 1289, 1),
(259, 'BUKIRA CENTRL/IKEREGE', 1290, 1),
(259, 'ISIBANIA', 1291, 1),
(259, 'MAKERERO', 1292, 1),
(259, 'MASABA', 1293, 1),
(259, 'TAGARE', 1294, 1),
(259, 'NYAMOSENSE/KOMOSOKO', 1295, 1);

-- KURIA EAST (260)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(260, 'GOKEHARAKA/GETAMBWEGA', 1296, 1),
(260, 'NTIMARU WEST', 1297, 1),
(260, 'NTIMARU EAST', 1298, 1),
(260, 'NYABASI EAST', 1299, 1),
(260, 'NYABASI WEST', 1300, 1);



-- =========================================================
-- Kisii County (Region Code 4)
-- =========================================================
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'KISII', 45, 1);

-- Kisii Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(45, 'BONCHARI', 261, 1),
(45, 'SOUTH MUGIRANGO', 262, 1),
(45, 'BOMACHOGE BORABU', 263, 1),
(45, 'BOBASI', 264, 1),
(45, 'BOMACHOGE CHACHE', 265, 1),
(45, 'NYARIBARI MASABA', 266, 1),
(45, 'NYARIBARI CHACHE', 267, 1),
(45, 'KITUTU CHACHE NORTH', 268, 1),
(45, 'KITUTU CHACHE SOUTH', 269, 1);

-- BONCHARI (261)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(261, 'BOMARIBA', 1301, 1),
(261, 'BOGIAKUMU', 1302, 1),
(261, 'BOMORENDA', 1303, 1),
(261, 'RIANA', 1304, 1);

-- SOUTH MUGIRANGO (262)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(262, 'TABAKA', 1305, 1),
(262, 'BOIKANG''A', 1306, 1),
(262, 'BOGETENGA', 1307, 1),
(262, 'BORABU / CHITAGO', 1308, 1),
(262, 'MOTICHO', 1309, 1),
(262, 'GETENGA', 1310, 1);

-- BOMACHOGE BORABU (263)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(263, 'BOMBABA BORABU', 1311, 1),
(263, 'BOOCHI BORABU', 1312, 1),
(263, 'BOKIMONGE', 1313, 1),
(263, 'MAGENCHE', 1314, 1);

-- BOBASI (264)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(264, 'MASIGE WEST', 1315, 1),
(264, 'MASIGE EAST', 1316, 1),
(264, 'BASI CENTRAL', 1317, 1),
(264, 'NYACHEKI', 1318, 1),
(264, 'BASI BOGETAORIO', 1319, 1),
(264, 'BOBASI CHACHE', 1320, 1),
(264, 'SAMETA/MOKWERERO', 1321, 1),
(264, 'BOBASI BOITANGARE', 1322, 1);

-- BOMACHOGE CHACHE (265)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(265, 'MAJOGE BASI', 1323, 1),
(265, 'BOOCHI/TENDERE', 1324, 1),
(265, 'BOSOTI/SENGERA', 1325, 1);

-- NYARIBARI MASABA (266)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(266, 'ICHUNI', 1326, 1),
(266, 'NYAMASIBI', 1327, 1),
(266, 'MASIMBA', 1328, 1),
(266, 'GESUSU', 1329, 1),
(266, 'KIAMOKAMA', 1330, 1);

-- NYARIBARI CHACHE (267)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(267, 'BOBARACHO', 1331, 1),
(267, 'KISII CENTRAL', 1332, 1),
(267, 'KEUMBU', 1333, 1),
(267, 'KIOGORO', 1334, 1),
(267, 'BIRONGO', 1335, 1),
(267, 'IBENO', 1336, 1);

-- KITUTU CHACHE NORTH (268)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(268, 'MONYERERO', 1337, 1),
(268, 'SENSI', 1338, 1),
(268, 'MARANI', 1339, 1),
(268, 'KEGOGI', 1340, 1);

-- KITUTU CHACHE SOUTH (269)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(269, 'BOGUSERO', 1341, 1),
(269, 'BOGEKA', 1342, 1),
(269, 'NYAKOE', 1343, 1),
(269, 'KITUTU CENTRAL', 1344, 1),
(269, 'NYATIEKO', 1345, 1);

-- =========================================================
-- Nyamira County (Region Code 4)
-- =========================================================
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(4, 'NYAMIRA', 46, 1);

-- Nyamira Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(46, 'KITUTU MASABA', 270, 1),
(46, 'WEST MUGIRANGO', 271, 1),
(46, 'NORTH MUGIRANGO', 272, 1),
(46, 'BORABU', 273, 1);

-- KITUTU MASABA (270)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(270, 'RIGOMA', 1346, 1),
(270, 'GACHUBA', 1347, 1),
(270, 'KEMERA', 1348, 1),
(270, 'MAGOMBO', 1349, 1),
(270, 'MANGA', 1350, 1),
(270, 'GESIMA', 1351, 1);

-- WEST MUGIRANGO (271)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(271, 'NYAMAIYA', 1352, 1),
(271, 'BOGICHORA', 1353, 1),
(271, 'BOSAMARO', 1354, 1),
(271, 'BONYAMATUTA', 1355, 1),
(271, 'TOWNSHIP', 1356, 1);

-- NORTH MUGIRANGO (272)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(272, 'ITIBO', 1357, 1),
(272, 'BOMWAGAMO', 1358, 1),
(272, 'BOKEIRA', 1359, 1),
(272, 'MAGWAGWA', 1360, 1),
(272, 'EKERENYO', 1361, 1);

-- BORABU (273)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(273, 'MEKENENE', 1362, 1),
(273, 'KIABONYORU', 1363, 1),
(273, 'NYANSIONGO', 1364, 1),
(273, 'ESISE', 1365, 1);


-- =========================================================
-- Nairobi City County (Region 1)
-- =========================================================
INSERT INTO counties (region_code, name, iebc_code, active) VALUES
(1, 'NAIROBI CITY', 47, 1);

-- Subcounties
INSERT INTO subcounties (county_code, name, iebc_code, active) VALUES
(47, 'WESTLANDS', 274, 1),
(47, 'DAGORETTI NORTH', 275, 1),
(47, 'DAGORETTI SOUTH', 276, 1),
(47, 'LANGATA', 277, 1),
(47, 'KIBRA', 278, 1),
(47, 'ROYSAMBU', 279, 1),
(47, 'KASARANI', 280, 1),
(47, 'RUARAKA', 281, 1),
(47, 'EMBAKASI SOUTH', 282, 1),
(47, 'EMBAKASI NORTH', 283, 1),
(47, 'EMBAKASI CENTRAL', 284, 1),
(47, 'EMBAKASI EAST', 285, 1),
(47, 'EMBAKASI WEST', 286, 1),
(47, 'MAKADARA', 287, 1),
(47, 'KAMUKUNJI', 288, 1),
(47, 'STAREHE', 289, 1),
(47, 'MATHARE', 290, 1);

-- WESTLANDS (274)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(274, 'KITISURU', 1366, 1),
(274, 'PARKLANDS/HIGHRIDGE', 1367, 1),
(274, 'KARURA', 1368, 1),
(274, 'KANGEMI', 1369, 1),
(274, 'MOUNTAIN VIEW', 1370, 1);

-- DAGORETTI NORTH (275)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(275, 'KILIMANI', 1371, 1),
(275, 'KAWANGWARE', 1372, 1),
(275, 'GATINA', 1373, 1),
(275, 'KILELESHWA', 1374, 1),
(275, 'KABIRO', 1375, 1);

-- DAGORETTI SOUTH (276)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(276, 'MUTU-INI', 1376, 1),
(276, 'NGANDO', 1377, 1),
(276, 'RIRUTA', 1378, 1),
(276, 'UTHIRU/RUTHIMITU', 1379, 1),
(276, 'WAITHAKA', 1380, 1);

-- LANGATA (277)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(277, 'KAREN', 1381, 1),
(277, 'NAIROBI WEST', 1382, 1),
(277, 'MUGUMU-INI', 1383, 1),
(277, 'SOUTH C', 1384, 1),
(277, 'NYAYO HIGHRISE', 1385, 1);

-- KIBRA (278)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(278, 'LAINI SABA', 1386, 1),
(278, 'LINDI', 1387, 1),
(278, 'MAKINA', 1388, 1),
(278, 'WOODLEY/KENYATTA GOLF COURSE', 1389, 1),
(278, 'SARANGOMBE', 1390, 1);

-- ROYSAMBU (279)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(279, 'GITHURAI', 1391, 1),
(279, 'KAHAWA WEST', 1392, 1),
(279, 'ZIMMERMAN', 1393, 1),
(279, 'ROYSAMBU', 1394, 1),
(279, 'KAHAWA', 1395, 1);

-- KASARANI (280)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(280, 'CLAY CITY', 1396, 1),
(280, 'MWIKI', 1397, 1),
(280, 'KASARANI', 1398, 1),
(280, 'NJIRU', 1399, 1),
(280, 'RUAI', 1400, 1);

-- RUARAKA (281)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(281, 'BABA DOGO', 1401, 1),
(281, 'UTALII', 1402, 1),
(281, 'MATHARE NORTH', 1403, 1),
(281, 'LUCKY SUMMER', 1404, 1),
(281, 'KOROGOCHO', 1405, 1);

-- EMBAKASI SOUTH (282)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(282, 'IMARA DAIMA', 1406, 1),
(282, 'KWA NJENGA', 1407, 1),
(282, 'KWA REUBEN', 1408, 1),
(282, 'PIPELINE', 1409, 1),
(282, 'KWARE', 1410, 1);

-- EMBAKASI NORTH (283)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(283, 'KARIOBANGI NORTH', 1411, 1),
(283, 'DANDORA AREA I', 1412, 1),
(283, 'DANDORA AREA II', 1413, 1),
(283, 'DANDORA AREA III', 1414, 1),
(283, 'DANDORA AREA IV', 1415, 1);

-- EMBAKASI CENTRAL (284)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(284, 'KAYOLE NORTH', 1416, 1),
(284, 'KAYOLE CENTRAL', 1417, 1),
(284, 'KAYOLE SOUTH', 1418, 1),
(284, 'KOMAROCK', 1419, 1),
(284, 'MATOPENI/SPRING VALLEY', 1420, 1);

-- EMBAKASI EAST (285)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(285, 'UPPER SAVANNAH', 1421, 1),
(285, 'LOWER SAVANNAH', 1422, 1),
(285, 'EMBAKASI', 1423, 1),
(285, 'UTAWALA', 1424, 1),
(285, 'MIHANGO', 1425, 1);

-- EMBAKASI WEST (286)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(286, 'UMOJA I', 1426, 1),
(286, 'UMOJA II', 1427, 1),
(286, 'MOWLEM', 1428, 1),
(286, 'KARIOBANGI SOUTH', 1429, 1);

-- MAKADARA (287)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(287, 'MARINGO/HAMZA', 1430, 1),
(287, 'VIWANDANI', 1431, 1),
(287, 'HARAMBEE', 1432, 1),
(287, 'MAKONGENI', 1433, 1);

-- KAMUKUNJI (288)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(288, 'PUMWANI', 1434, 1),
(288, 'EASTLEIGH NORTH', 1435, 1),
(288, 'EASTLEIGH SOUTH', 1436, 1),
(288, 'AIRBASE', 1437, 1),
(288, 'CALIFORNIA', 1438, 1);

-- STAREHE (289)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(289, 'NAIROBI CENTRAL', 1439, 1),
(289, 'NGARA', 1440, 1),
(289, 'PANGANI', 1441, 1),
(289, 'ZIWANI/KARIOKOR', 1442, 1),
(289, 'LANDIMAWE', 1443, 1),
(289, 'NAIROBI SOUTH', 1444, 1);

-- MATHARE (290)
INSERT INTO wards (subcounty_code, name, iebc_code, active) VALUES
(290, 'HOSPITAL', 1445, 1),
(290, 'MABATINI', 1446, 1),
(290, 'HURUMA', 1447, 1),
(290, 'NGEI', 1448, 1),
(290, 'MLANGO KUBWA', 1449, 1),
(290, 'KIAMAIKO', 1450, 1);
