-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2020 a las 21:14:04
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arknightstool`
--
CREATE DATABASE IF NOT EXISTS `arknightstool` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arknightstool`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `ClassId` int(11) NOT NULL,
  `ClassName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `class`
--

INSERT INTO `class` (`ClassId`, `ClassName`) VALUES
(1, 'Caster'),
(2, 'Vanguard'),
(3, 'Defender'),
(4, 'Guard'),
(5, 'Supporter'),
(6, 'Sniper'),
(7, 'Medic'),
(8, 'Specialist');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operator`
--

CREATE TABLE `operator` (
  `Skill3` varchar(60) DEFAULT NULL,
  `Skill2` varchar(60) DEFAULT NULL,
  `OpName` varchar(30) NOT NULL,
  `OpImg` varchar(200) NOT NULL,
  `Skill1` varchar(60) NOT NULL,
  `Rarity` int(11) NOT NULL,
  `OpId` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `OpIcon` varchar(200) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operator`
--

INSERT INTO `operator` (`Skill3`, `Skill2`, `OpName`, `OpImg`, `Skill1`, `Rarity`, `OpId`, `ClassId`, `OpIcon`, `Description`) VALUES
('Overload Mode', 'Strafing Mode', 'Exusiai', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_103_angel_1.png', 'Assault Mode', 6, 1, 6, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_103_angel.png', 'Exusiai is a citizen of Laterano and as such, is entitled to the privileges listed in Clauses 1-13 of the Laterano Constitution. She is an employee of Penguin Logistics who specializes in covert communication, armed escort, and other undercover activities. We suspect she is a Messenger. While contracted with Penguin Logistics, she serves as a liaison to Rhodes Island, assisting us with our operations.'),
('Secret Staff Anti Gravity Mode', 'Secret Staff Particle Mode', 'Angelina', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_291_aglina_1.png', 'Secret Staff Speed Charge Mode', 6, 2, 1, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_291_aglina.png', 'Real name Angelina Ajimu, she was a transporter responsible for delivering intelligence and special cargo around Siracusa.\r\nAs an apprentice caster Operator, she now provides logistical support, battlefield assistance, and tactical coordination for Rhodes Island.'),
('Destreza', 'Protective Spikes', 'Thorns', 'https://gamepress.gg/arknights/sites/arknights/files/2020-08/char_293_thorns_1.png', 'ATK Up Y', 6, 3, 4, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_293_thorns.png', 'Thorns, a Rhodes Island frontline combat operator who is proficient in swordsmanship and potion making. Born in the hinterlands of Iberia, he left his hometown amidst the local religious turmoil. After leaving Iberia, he was invited to Rhodes Island.\r\n\r\nThe above information on the religious situation in Iberia is self-reported by Thorns, which has not been fully verified.\r\n\r\n'),
(NULL, 'Blade Demon', 'Flamebringer', 'https://gamepress.gg/arknights/sites/arknights/files/2019-11/char_131_flameb_1.png', 'Blood Pact', 5, 4, 4, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_131_flameb.png', 'Flamebringer, the self-professed Wandering Sarkaz Warrior, has no personal history besides that which he presented himself. The value of his document is rather limited, being only a list of the names of people who have died at his hands. However, the list does suggest that he is an outstanding swordsman.'),
(NULL, 'Delayed Concussive Parts', 'Sesa', 'https://gamepress.gg/arknights/sites/arknights/files/2020-03/char_379_sesa_1.png', 'ATK Up γ', 5, 5, 6, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_379_sesa.png', 'Rhodes Island Operator, Sesa, born in Sargon, provided modification services for local black market weaponry. The resume he provided was murky and proved impossible to follow up upon. After coming into direct contact with Rhodes Island in his line of work and confirming its existence, he voluntarily came to Rhodes Island to apply for a job.'),
(NULL, 'Fatal Shuriken', 'Shirayuki', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_118_yuki_1.png', 'Shuriken', 4, 8, 6, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_118_yuki.png', 'Formerly the personal bodyguard of Lady Fumizuki, wife of Lungmen\'s Chief Wei Yenwu, ShiraYuki was sent to Rhodes Island to serve the Doctor in the same role, after the Lungmen Guard Department partnered with the company. She uses large shurikens as her weapons of choice, and is well-versed in covert ops and intelligence gathering. She protects the Doctor from behind the scenes.'),
(NULL, 'Radar Sweep', 'Ambriel', 'https://gamepress.gg/arknights/sites/arknights/files/2019-12/char_302_glaze_1_0.png', 'Snaring Shell', 4, 9, 6, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_302_glaze.png', 'Ambriel is a citizen of Laterano. After many tests, she was allowed to join Rhodes Island, where her skills in ambushing and long-range sniping helped her perform well in asymmetric operations.She now serves in the Rhodes Island sniper team, providing long-range support.'),
(NULL, 'Pegasian Sight', 'Platinum', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_204_platnm_1.png', 'ATK Up γ', 5, 10, 6, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_204_platnm.png', 'Platinum was previously an assassin for the Kazimierz Armorless Union. The rest of her background is unknown. She has demonstrated considerable talent and special tactical accomplishments in high-mobility operations, clearance, and urban warfare.\r\nUnder the leadership of Dr. Kal\'tsit, she is a Sniper Operator for Rhodes Island.'),
(NULL, 'Deconstruct and Detonate', 'Leonhardt', 'https://gamepress.gg/arknights/sites/arknights/files/2020-06/char_373_lionhd_1.png', 'ATK Up γ', 5, 11, 1, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_373_lionhd.png', 'Leonhardt, a Catastrophe Messenger, has served many times as a consultant Catastrophe Messenger to various mining teams in the Eureka Autonomous Prefecture of Rim Billiton. His experience in geological topographic exploration gives him an edge in missions that require the destruction of fortified or entrenched targets.\r\nNow, in addition to serving as a Caster Operator in Rhodes Island, Leonhardt also surveys Catastrophe-prone regions and provides early warning services.'),
(NULL, NULL, 'Plume', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_192_falco_1.png', 'Swift Strike α\r\n', 3, 12, 2, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_192_falco.png', 'Plume is a Liberi from Laterano, and former member of the Laterano Guard who bumbled her way out of Laterano and into Rhodes Island. She performs security, inspection, and loss prevention duties.'),
(NULL, 'Cross Suuspension', 'Ethan', 'https://gamepress.gg/arknights/sites/arknights/files/2019-11/char_355_ethan_1.png', 'Fancy Maneuver', 4, 13, 8, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_355_ethan.png', 'Operator Ethan\'s place of birth remains unknown. He hopped around between several different underground Infected groups before finally separating himself from the Reunion Movement. A thorough investigation has determined Ethan\'s goals are not a threat and he is indeed worth hiring. Tactical analysis shows that he is particularly skilled in battlefield infiltration and solo operations.\r\nHe currently serves Rhodes Island in a special ops team, providing specialist support.'),
(NULL, 'Landing Strike Doorbreaker', 'Utage', 'https://gamepress.gg/arknights/sites/arknights/files/2020-03/char_337_utage_1.png', 'Distracted', 4, 14, 4, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_337_utage.png', 'An ordinary student from Higashi who came to study in Lungmen, Utage contracted Oripathy after getting pulled into an incident with Infected persons. After coming to Rhodes Island per physician\'s advice, Utage passed the evaluation to become an Operator.\r\nShe is level-headed in her view of Oripathy, living life largely the same as before she became Infected. However, when she is working, she exhibits a terrifying demeanor.'),
(NULL, 'Vision Trap', 'Deepcolor', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_110_deepcl_1.png', 'Tentacles of Lights & Shadow', 4, 15, 8, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_110_deepcl.png', 'Deepcolor\'s origin is shrouded in mystery, with large gaps in her background missing. She is remarkably gifted in the use of Originium abilities, Arts support and combat coordination.\r\nDeepcolor is currently a special ops Operator for Rhodes Island.'),
(NULL, NULL, 'Melantha', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_208_melan_1.png', 'Attack Strengthening Type a', 3, 16, 4, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_208_melan.png', 'Melantha is the captain of Op Reserve Team A4 and a citizen of Victoria. Before she took up her current post, she was a typical jobless Infected. After an exceptional performance on her tests, she received an offer to join Rhodes Island.'),
(NULL, NULL, 'Hibiscus', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_120_hibisc_1.png', 'Healing Strengthening Type a', 3, 17, 7, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_120_hibisc.png', 'Born in Londinium in Victoria, Hibiscus is the older twin sister of her fellow Operator, Lava. After contracting Oripathy, she came to Rhodes Island for treatment. While undergoing that treatment, she began to dream of helping others. Her passion for caring for others, as well as her hard work, have led Hibiscus to become a Rhodes Island Medic.'),
('Crimson Firmament Shadow Assault', 'Crimson Firmament Quick Draw', 'Ch\'en', 'https://gamepress.gg/arknights/sites/arknights/files/2019-10/char_010_chen_1_0.png', 'Sheath Strike', 6, 18, 4, 'https://aceship.github.io/AN-EN-Tags/img/avatars/char_010_chen.png', 'Ch\'en, head of the Lungmen Guard Department\'s Special Inspection Unit, graduated from the Royal Victorian Guard School with superb grades and outstanding achievements. During her time with the Department, she cracked down on crime, fought violent offenders, tracked down armed fugitives, and brought down international criminals.\r\nNow works at Rhodes Island, providing on-site tactical command.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `optag`
--

CREATE TABLE `optag` (
  `OpId` int(11) NOT NULL,
  `TagId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE `tag` (
  `TagName` varchar(30) NOT NULL,
  `TagId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`TagName`, `TagId`) VALUES
('DP-Recovery', 1),
('AoE', 2),
('Starter', 3),
('Slow', 4),
('Shift', 5),
('Robot', 6),
('Nuker', 7),
('Healing', 8),
('Fast-Redeploy', 9),
('DPS', 10),
('Defense', 11),
('Debuff', 12),
('Crowd-Control', 13),
('Summon', 14),
('Support', 15),
('Survival', 16),
('Ranged', 17),
('Melee', 18),
('Top Operator', 19),
('Senior Operator', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `UsId` int(11) NOT NULL,
  `UsName` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`UsId`, `UsName`, `Email`, `Password`) VALUES
(1, 'Moha', 'Moha@arkyoru.com', '6682b8f224f38e54cce0c400c75c58'),
(2, 'admin5', 'admin@admin.com', 'admin'),
(3, 'prueba', 'prueba@gmail.com', '123'),
(10, 'Javi', 'javivi115@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ClassId`);

--
-- Indices de la tabla `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`OpId`),
  ADD KEY `ClassId` (`ClassId`);

--
-- Indices de la tabla `optag`
--
ALTER TABLE `optag`
  ADD PRIMARY KEY (`OpId`,`TagId`),
  ADD KEY `TagId` (`TagId`);

--
-- Indices de la tabla `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`TagId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UsId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
  MODIFY `ClassId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `operator`
--
ALTER TABLE `operator`
  MODIFY `OpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tag`
--
ALTER TABLE `tag`
  MODIFY `TagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `UsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`ClassId`) REFERENCES `class` (`ClassId`);

--
-- Filtros para la tabla `optag`
--
ALTER TABLE `optag`
  ADD CONSTRAINT `optag_ibfk_1` FOREIGN KEY (`OpId`) REFERENCES `operator` (`OpId`),
  ADD CONSTRAINT `optag_ibfk_2` FOREIGN KEY (`TagId`) REFERENCES `tag` (`TagId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
