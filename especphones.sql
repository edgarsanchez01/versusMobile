-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2023 a las 16:46:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `espectelefonos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especphones`
--

CREATE TABLE `especphones` (
  `id_dispositivo` int(11) NOT NULL,
  `titulo` varchar(125) DEFAULT NULL,
  `descripcion` varchar(2500) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(250) DEFAULT NULL,
  `DisplayType` varchar(30) DEFAULT NULL,
  `Size` varchar(250) DEFAULT NULL,
  `Resolution` varchar(250) DEFAULT NULL,
  `Protection` varchar(250) DEFAULT NULL,
  `Cardslot` varchar(250) DEFAULT NULL,
  `Internal` varchar(250) DEFAULT NULL,
  `RAM` varchar(250) DEFAULT NULL,
  `RAMType` varchar(250) DEFAULT NULL,
  `MainCamera` varchar(250) DEFAULT NULL,
  `SelfieCamera` varchar(250) DEFAULT NULL,
  `Loudspeaker` varchar(250) DEFAULT NULL,
  `Jack3_5` varchar(250) DEFAULT NULL,
  `BatteryType` varchar(250) DEFAULT NULL,
  `BatteryCharging` varchar(250) DEFAULT NULL,
  `WLAN` varchar(250) DEFAULT NULL,
  `Bluetooth` varchar(250) DEFAULT NULL,
  `Positioning` varchar(250) DEFAULT NULL,
  `NFC` varchar(250) DEFAULT NULL,
  `InfraredPort` varchar(50) DEFAULT NULL,
  `Radio` varchar(50) DEFAULT NULL,
  `USB` varchar(250) DEFAULT NULL,
  `Technology` varchar(250) DEFAULT NULL,
  `Dimensions` varchar(250) DEFAULT NULL,
  `BodyWeight` varchar(250) DEFAULT NULL,
  `Build` varchar(250) DEFAULT NULL,
  `SIM` varchar(250) DEFAULT NULL,
  `Certifications` varchar(250) DEFAULT NULL,
  `OS` varchar(250) DEFAULT NULL,
  `Chipset` varchar(250) DEFAULT NULL,
  `CPU` varchar(250) DEFAULT NULL,
  `GPU` varchar(250) DEFAULT NULL,
  `Colors` varchar(250) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Announced` date DEFAULT NULL,
  `LaunchStatus` varchar(250) DEFAULT NULL,
  `PerformanceAntutu` int(10) DEFAULT NULL,
  `Sensors` varchar(250) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `imgP` varchar(255) DEFAULT NULL,
  `imgC` varchar(255) DEFAULT NULL,
  `visitas` int(11) DEFAULT 0,
  `amazon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especphones`
--

INSERT INTO `especphones` (`id_dispositivo`, `titulo`, `descripcion`, `marca`, `modelo`, `DisplayType`, `Size`, `Resolution`, `Protection`, `Cardslot`, `Internal`, `RAM`, `RAMType`, `MainCamera`, `SelfieCamera`, `Loudspeaker`, `Jack3_5`, `BatteryType`, `BatteryCharging`, `WLAN`, `Bluetooth`, `Positioning`, `NFC`, `InfraredPort`, `Radio`, `USB`, `Technology`, `Dimensions`, `BodyWeight`, `Build`, `SIM`, `Certifications`, `OS`, `Chipset`, `CPU`, `GPU`, `Colors`, `Price`, `Announced`, `LaunchStatus`, `PerformanceAntutu`, `Sensors`, `categoria`, `imgP`, `imgC`, `visitas`, `amazon`) VALUES
(1, 'Poco F5', NULL, 'Poco', 'F5', 'AMOLED, 68B colors, Dolby Visi', '6.67 inches, 107.4 cm2 (~88.9% screen-to-body ratio)', '1080 x 2400 pixels, 20:9 ratio (~395 ppi density)', 'Corning Gorilla Glass 5', NULL, '256GB ', '8, 12 GB', 'LPDDR5', '64 MP, f/1.8, (wide), 1/2\", 0.7µm, PDAF, OIS\n8 MP, f/2.2, 120˚ (ultrawide), 1/4\", 1.12µm\n2 MP, f/2.4, (macro)', '16 MP, f/2.5, (wide)', 'Yes, with stereo speakers\n3.5mm jack\n24-bit/192kHz audio', 'Yes', 'Li-Po 5000 mAh, non-removable', '67W wired, PD3, QC4, 100% in 46 min (advertised)', 'Wi-Fi 802.11 a/b/g/n/ac/6, dual-band', '5.3, A2DP, LE', 'GPS (L1), GLONASS (G1), BDS (B1I), GALILEO (E1), QZSS (L1)', 'Yes (market/region dependent)', 'Yes', 'No', 'USB Type-C 2.0, OTG', 'GSM / HSPA / LTE / 5G', '161.1 x 75 x 7.9 mm (6.34 x 2.95 x 0.31 in)', '181 g (6.38 oz)', 'Glass front (Gorilla Glass 5), plastic back, plastic frame', 'Dual SIM (Nano-SIM, dual stand-by)\nIP53, dust and splash resistant', NULL, 'Android 13, MIUI 14 for POCO', 'Qualcomm SM7475-AB Snapdragon 7+ Gen 2 (4 nm)', 'Octa-core (1x2.91 GHz Cortex-X2 & 3x2.49 GHz Cortex-A710 & 4x1.8 GHz Cortex-A510)', 'Adreno 725', 'Black, Blue, White', 371, '2023-05-09', 'Available. Released 2023, May', 931174, 'Fingerprint (side-mounted), accelerometer, gyro, proximity, compass\n', 'calidadprecio', 'https://i.blogs.es/002280/img_1504-en-tamano-grande/1366_2000.jpeg', NULL, 0, NULL),
(2, 'Asus ROG Phone 7 Ultimate', NULL, 'Asus', 'ROG Phone 7 Ultimate', 'AMOLED, 1B colors, 165Hz, HDR1', '6.78 inches, 109.5 cm2 (~82.2% screen-to-body ratio)', '1080 x 2448 pixels (~395 ppi density)', 'Corning Gorilla Glass Victus', NULL, '512GB ', '16 GB', 'LPDDR5', '50 MP, f/1.9, 24mm (wide), 1/1.56\", 1.0µm, PDAF\n13 MP, f/2.2, 13mm, 120˚ (ultrawide)\n5 MP, f/2.0, (macro)', '32 MP, f/2.5, 29mm (wide), 1/3.2\", 0.7µm', 'Yes, with stereo speakers (2 amplifiers)', 'Yes', 'Li-Po 6000 mAh, non-removable', '65W wired, PD3.0, QC5, 100% in 42 min (advertised)\n10W reverse wired', 'Wi-Fi 802.11 a/b/g/n/ac/6e/7, tri-band, Wi-Fi Direct', '5.3, A2DP, LE, aptX Adaptive', 'GPS (L1+L5), GLONASS (L1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC (L5)', 'Yes', NULL, 'No', 'USB Type-C 3.1 (side), DisplayPort 1.4; USB Type-C 2.0 (bottom), OTG, accessory connector', 'GSM / CDMA / HSPA / LTE / 5G', '173 x 77 x 10.3 mm (6.81 x 3.03 x 0.41 in)', '239 g (8.43 oz)', 'Glass front (Gorilla Glass Victus), glass back (Gorilla Glass 3), aluminum frame', 'Dual SIM (Nano-SIM, dual stand-by)\nBuilt-in motorized cooling air vent (AeroActive Portal)\nIP54, dust and splash resistant\n2\" OLED display (on the back)\nPressure-sensitive zones (Gaming triggers)', NULL, 'Android 13', 'Qualcomm SM8550-AB Snapdragon 8 Gen 2 (4 nm)', 'Octa-core (1x3.2 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A510)', 'Adreno 740', 'Storm White', 629, '2023-04-13', 'Available. Released 2023, May', 1325105, NULL, 'calidadprecio\ninfravalorado ', 'https://strapi-storage-s3-bucket.s3.us-east-2.amazonaws.com/asus_rog_phone_7_phantom_black_storm_white_dfafdd2aaf.webp', NULL, 16, NULL),
(3, 'Samsung S23 Ultra', NULL, 'Samsung', 'S23 Ultra', 'Dynamic AMOLED 2X, 120Hz, HDR1', '6.8 inches, 114.7 cm2 (~89.9% screen-to-body ratio)', '1440 x 3088 pixels, 19.3:9 ratio (~500 ppi density)', 'Corning Gorilla Glass Victus 2\nAlways-on display', NULL, '256, 512, 1TB ', '8, 12 GB', 'LPDDR5', '200 MP, f/1.7, 24mm (wide), 1/1.3\", 0.6µm, multi-directional PDAF, Laser AF, OIS\n10 MP, f/4.9, 230mm (periscope telephoto), 1/3.52\", 1.12µm, Dual Pixel PDAF, OIS, 10x optical zoom\n10 MP, f/2.4, 70mm (telephoto), 1/3.52\", 1.12µm, Dual Pixel PDAF, OIS,', '12 MP, f/2.2, 26mm (wide), Dual Pixel PDAF', 'Yes, with stereo speakers', 'No', 'Li-Ion 5000 mAh, non-removable', '45W wired, PD3.0, 65% in 30 min (advertised)\n15W wireless (Qi/PMA)\n4.5W reverse wireless', 'Wi-Fi 802.11 a/b/g/n/ac/6e, tri-band, Wi-Fi Direct', '5.3, A2DP, LE', 'GPS, GLONASS, BDS, GALILEO', 'Yes', NULL, 'No', 'USB Type-C 3.2, OTG', 'GSM / CDMA / HSPA / EVDO / LTE / 5G', '163.4 x 78.1 x 8.9 mm (6.43 x 3.07 x 0.35 in)', '234 g (8.25 oz)', 'Glass front (Gorilla Glass Victus 2), glass back (Gorilla Glass Victus 2), aluminum frame', 'Nano-SIM and eSIM or Dual SIM (2 Nano-SIMs and eSIM, dual stand-by)\nIP68 dust/water-resistant (up to 1.5m for 30 min)\nArmor aluminum frame with tougher drop and scratch resistance (advertised)\nStylus (Bluetooth integration, accelerometer, gyro)', NULL, 'Android 13, One UI 5.1', 'Qualcomm SM8550-AC Snapdragon 8 Gen 2 (4 nm)', 'Octa-core (1x3.36 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A510)', 'Adreno 740', 'Phantom Black, Green, Cream, Lavender, Graphite, Sky Blue, Lime, Red, BMW M Edition', 859, '2023-02-01', 'Available. Released 2023, February 17', 1241531, NULL, 'redomendado\ninfravalorado', 'https://www.digitaltrends.com/wp-content/uploads/2023/02/samsung-galaxy-s23-ultra-green-back-6.jpg?p=1', NULL, 0, NULL),
(4, 'Google Pixel 7 Pro', NULL, 'Google', 'Pixel 7 Pro', 'LTPO AMOLED, 120Hz, HDR10+, 10', '6.7 inches, 110.6 cm2 (~88.7% screen-to-body ratio)', '1440 x 3120 pixels, 19.5:9 ratio (~512 ppi density)', 'Corning Gorilla Glass Victus', NULL, '128,  256,  512 GB ', '8, 12 GB', NULL, '50 MP, f/1.9, 25mm (wide), 1/1.31\", 1.2µm, multi-directional PDAF, Laser AF, OIS\n48 MP, f/3.5, 120mm (telephoto), 1/2.55\", 0.7µm, multi-directional PDAF, OIS, 5x optical zoom\n12 MP, f/2.2, 126˚ (ultrawide), 1/2.9\", 1.25µm, AF', '10.8 MP, f/2.2, 21mm (ultrawide), 1/3.1\", 1.22µm', 'Yes, with stereo speakers', 'No', 'Li-Ion 5000 mAh, non-removable', '23W wired, PD3.0, 50% in 30 min (advertised)\n23W wireless\nReverse wireless', 'Wi-Fi 802.11 a/b/g/n/ac/6e, tri-band, Wi-Fi Direct', '5.2, A2DP, LE, aptX HD', 'GPS (L1+L5), GLONASS (G1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5)', 'Yes', NULL, 'No', 'USB Type-C 3.2', 'GSM / CDMA / HSPA / EVDO / LTE / 5G', '162.9 x 76.6 x 8.9 mm (6.41 x 3.02 x 0.35 in)', '212 g (7.48 oz)', 'Glass front (Gorilla Glass Victus), glass back (Gorilla Glass Victus), aluminum frame', 'Nano-SIM and eSIM\nIP68 dust/water resistant (up to 1.5m for 30 min)', NULL, 'Android 13', 'Google Tensor G2 (5 nm)', 'Octa-core (2x2.85 GHz Cortex-X1 & 2x2.35 GHz Cortex-A78 & 4x1.80 GHz Cortex-A55)', 'Mali-G710 MP7', 'Obsidian, Snow, Hazel', 725, '2022-10-06', 'Available. Released 2022, October 13', 796369, NULL, 'infravalorado\nrecomendado', 'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/10/11/16655123851628.jpg', NULL, 4, NULL),
(5, 'iPhone 14 Pro Max', NULL, 'iPhone', '14 Pro Max', 'LTPO Super Retina XDR OLED, 12', '6.7 inches, 110.2 cm2 (~88.3% screen-to-body ratio)', '1290 x 2796 pixels, 19.5:9 ratio (~460 ppi density)', 'Ceramic Shield glass', NULL, '128, 256, 512, 1TB ', '6 GB', NULL, '48 MP, f/1.8, 24mm (wide), 1/1.28\", 1.22µm, dual pixel PDAF, sensor-shift OIS\n12 MP, f/2.8, 77mm (telephoto), 1/3.5\", PDAF, OIS, 3x optical zoom\n12 MP, f/2.2, 13mm, 120˚ (ultrawide), 1/2.55\", 1.4µm, dual pixel PDAF\nTOF 3D LiDAR scanner (depth)', '12 MP, f/1.9, 23mm (wide), 1/3.6\", PDAF, OIS (unconfirmed)\nSL 3D, (depth/biometrics sensor)', 'Yes, with stereo speakers', 'No', 'Li-Ion 4323 mAh, non-removable (16.68 Wh)', 'Wired, PD2.0, 50% in 30 min (advertised)\n15W wireless (MagSafe)\n7.5W wireless (Qi)', 'Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot', '5.3, A2DP, LE', 'GPS (L1+L5), GLONASS, GALILEO, BDS, QZSS', 'Yes', NULL, 'No', 'Lightning, USB 2.0', 'GSM / CDMA / HSPA / EVDO / LTE / 5G', '160.7 x 77.6 x 7.9 mm (6.33 x 3.06 x 0.31 in)', '240 g (8.47 oz)', 'Glass front (Corning-made glass), glass back (Corning-made glass), stainless steel frame', 'Nano-SIM and eSIM - International\nDual eSIM with multiple numbers - USA\nDual SIM (Nano-SIM, dual stand-by) - China', NULL, 'iOS 16, upgradable to iOS 16.5, planned upgrade to iOS 17', 'Apple A16 Bionic (4 nm)', 'Hexa-core (2x3.46 GHz Everest + 4x2.02 GHz Sawtooth)', 'Apple GPU (5-core graphics)', 'Space Black, Silver, Gold, Deep Purple', 1100, '2022-09-07', 'Available. Released 2022, September 16', 955884, NULL, 'recomendado\ncalidadprecio', 'https://i.blogs.es/9e6baf/img_0805/450_1000.jpg', NULL, 0, NULL),
(6, 'Huawei P60 Pro', NULL, 'Huawei', 'P60 Pro', 'LTPO OLED, 1B colors, 120Hz', '6.67 inches, 107.7 cm2 (~89.8% screen-to-body ratio)', '1220 x 2700 pixels (~444 ppi density)', 'Kunlun Glass', NULL, '256GB 8GB RAM, 512GB 12GB RAM\nUFS', NULL, NULL, '48 MP, f/1.4-f/4.0, 25mm (wide), PDAF, Laser AF, OIS\n48 MP, f/2.1, 90mm (telephoto), PDAF, sensor-shift OIS, 3.5x optical zoom\n13 MP, f/2.2, 13mm (ultrawide), AF', '13 MP, f/2.4, (ultrawide)', 'Yes, with stereo speakers', 'No', 'Li-Po 4815 mAh, non-removable', '88W wired\n50W wireless\nReverse wireless', 'Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct', '5.2, A2DP, LE', 'GPS (L1+L5), GLONASS (B1I+B1c+B2a), BDS (B1I+B1c+B2a), GALILEO (E1+E5a), QZSS (L1+L5), NavIC', 'Yes; NFC-SIM, HCE', 'Yes', 'No', 'USB Type-C 3.1, OTG', 'GSM / CDMA / HSPA / CDMA2000 / LTE', '161 x 74.5 x 8.3 mm (6.34 x 2.93 x 0.33 in)', '200 g (7.05 oz)', NULL, 'Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)', NULL, 'HarmonyOS 3.1 (China), EMUI 13.1 (Europe), no Google Play Services', 'Qualcomm SM8475 Snapdragon 8+ Gen 1 4G (4 nm)', 'Octa-core (1x3.19 GHz Cortex-X2 & 3x2.75 GHz Cortex-A710 & 4x2.0 GHz Cortex-A510)', 'Adreno 730', 'Black, Green, Violet, Rococo Pearl', 910, '2023-03-23', 'Available. Released 2023, March 31', 1030473, NULL, 'calidadprecio\nrecomendado\ninfravalorado', 'https://s1.eestatic.com/2023/05/09/omicrono/analisis-prueba-productos/762433963_233007524_1706x960.jpg', NULL, 0, NULL),
(7, 'Honor Magic5 Pro', NULL, 'Honor', 'Magic5 Pro', 'LTPO OLED, 1B colors, 120Hz, H', '6.81 inches, 113.7 cm2 (~91.0% screen-to-body ratio)', '1312 x 2848 pixels, 19.5:9 ratio (~460 ppi density)', 'Kunlun Glass', NULL, '256GB 8GB RAM, 256GB 12GB RAM, 512GB 12GB RAM, 512GB 16GB RAM\nUFS 4.0', NULL, NULL, '50 MP, f/1.6, 23mm (wide), 1/1.12\" 1.4µm, multi-directional PDAF, Laser AF, OIS\n50 MP, f/3.0, 90mm (periscope telephoto), PDAF, OIS, 3.5x optical zoom\n50 MP, f/2.0, 13mm, 122˚ (ultrawide), 1/2.76\", AF', '12 MP, f/2.4, 100˚ (ultrawide), 1.22µm', 'Yes, with stereo speakers', 'No', 'Li-Po 5100 mAh, non-removable - International\nSilicon-carbon 5450 mAh, non-removable - China only', '66W wired\n50W wireless\nReverse wireless\n5W reverse wired', 'Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct', '5.2, A2DP, LE, aptX HD', 'GPS (L1+L5), GLONASS (L1), BDS (B1I+B1c+B2a), GALILEO (E1+E5a)', 'Yes, HCE, NFC-SIM', 'Yes', 'Yes', 'USB Type-C 3.1, DisplayPort 1.2, OTG', 'GSM / CDMA / HSPA / EVDO / LTE / 5G', '162.9 x 76.7 x 8.8 mm (6.41 x 3.02 x 0.35 in)', '219 g (7.72 oz)', NULL, 'Single SIM (Nano-SIM, eSIM) or Dual SIM (2xNano-SIM, eSIM, dual stand-by)', NULL, 'Android 13, MagicOS 7.1', 'Qualcomm SM8550-AB Snapdragon 8 Gen 2 (4 nm)', 'Octa-core (1x3.2 GHz Cortex-X3 & 2x2.8 GHz Cortex-A715 & 2x2.8 GHz Cortex-A710 & 3x2.0 GHz Cortex-A510)', 'Adreno 740', 'Black, Meadow Green, Blue, Purple, Orange', 1149, '2023-02-27', 'Available. Released 2023, March 31', 1006378, 'Fingerprint (under display, optical), Face ID, accelerometer, gyro, proximity, compass, color spectrum', 'recomendado\ninfravalorado', 'https://soyacincau.com/wp-content/uploads/2023/02/230227-honor-magic-5-pro-01.jpg', NULL, 0, NULL),
(8, 'OPPO Reno10 Pro', NULL, 'OPPO', 'Reno10 Pro', 'AMOLED, 1B colors, 120Hz, HDR1', '6.7 inches, 108.0 cm2 (~89.7% screen-to-body ratio)', '1080 x 2412 pixels, 20:9 ratio (~394 ppi density)', 'Asahi Glass AGC DT-Star2', NULL, '256GB 12GB RAM\nUFS 2.2', NULL, NULL, '50 MP, f/1.8, 24mm (wide), 1/1.56\", 1.0µm, multi-directional PDAF, OIS\n32 MP, f/2.0, 47mm (telephoto), 1/2.74\", 0.8µm, PDAF, 2x optical zoom\n8 MP, f/2.2, 112˚ (ultrawide), 1/4.0\", 1.12µm', '32 MP, f/2.4, 22mm (wide), 1/2.74\", 0.8µm, AF', 'Yes', 'No', 'Li-Po 4600 mAh, non-removable', '80W wired, PD3, QC3\nReverse wired', 'Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, Wi-Fi Direct', '5.2, A2DP, LE, aptX HD', 'GPS, GLONASS, GALILEO, BDS, QZSS', 'Yes', 'Yes', 'No', 'USB Type-C 2.0, OTG', 'GSM / HSPA / LTE / 5G', '162.3 x 74.2 x 7.9 mm (6.39 x 2.92 x 0.31 in)', '185 g (6.53 oz)', NULL, 'Dual SIM (Nano-SIM, dual stand-by)', NULL, 'Android 13, ColorOS 13.1', 'Qualcomm SM7325 Snapdragon 778G 5G (6 nm)', 'Octa-core (1x2.4 GHz Cortex-A78 & 3x2.2 GHz Cortex-A78 & 4x1.9 GHz Cortex-A55)', 'Adreno 642L', 'Silvery Grey, Glossy Purple', 39999, '2023-07-08', 'Available. Released 2023, July 13', 495040, 'Fingerprint (under display, optical), accelerometer, gyro, proximity, compass\n', 'recomendado\ncalidadprecio', 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2023/07/oppo-reno-10-pro-5g-3073456.jpg?tf=3840x', NULL, 0, 'Fingerprint (under display, optical), accelerometer, gyro, proximity, compass');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especphones`
--
ALTER TABLE `especphones`
  ADD PRIMARY KEY (`id_dispositivo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especphones`
--
ALTER TABLE `especphones`
  MODIFY `id_dispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
