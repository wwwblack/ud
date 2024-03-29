-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 23 2015 г., 04:44
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `youngstersdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `grouptype_id` int(11) NOT NULL,
  `closed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `teacher_id`, `startdate`, `enddate`, `grouptype_id`, `closed`) VALUES
(18, 'сми', 1, '2015-10-18 17:46:19', '0000-00-00 00:00:00', 2, 0),
(19, 'lsdjfnklsef', 1, '2015-10-19 03:06:36', '0000-00-00 00:00:00', 1, 0),
(20, 'Б8888а', 3, '2015-10-19 03:35:47', '0000-00-00 00:00:00', 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `grouptypes`
--

CREATE TABLE IF NOT EXISTS `grouptypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `grouptypes`
--

INSERT INTO `grouptypes` (`id`, `type`) VALUES
(1, 'Подготовительная'),
(2, 'Начальная'),
(3, 'Высшая');

-- --------------------------------------------------------

--
-- Структура таблицы `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=536 ;

--
-- Дамп данных таблицы `schools`
--

INSERT INTO `schools` (`id`, `name`) VALUES
(458, ''),
(459, 'МБОУ Гимназия №1 г.Владивостока'),
(460, 'МБОУ "Гимназия №2 г.Владивостока'),
(461, 'МБОУ "СОШ №2 с углубленным изучением предметов юридического профиля г.Владивостока'),
(462, 'МБОУ "СОШ №3 г.Владивостока"'),
(463, 'МБОУ "СОШ №5 г.Владивостока"'),
(464, 'МБОУ "СОШ №6 с углубленным изучением отдельных предметов г.Владивостока"'),
(465, 'МБОУ "СОШ №7 г.Владивостока"'),
(466, 'МБОУ "СОШ №8 г.Владивостока"'),
(467, 'МБОУ "СОШ №9 с углубленным изучением китайского языка г.Владивостока"'),
(468, 'МБОУ "НОШ №10 г.Владивостока"'),
(469, 'МБОУ "СОШ №11 г.Владивостока"'),
(470, 'МБОУ "СОШ №12 с углубленным изучением предметов эстетического цикла г.Владивостока"'),
(471, 'МБОУ "СОШ №13 с углубленным изучением английского языка г.Владивостока"'),
(472, 'МБОУ "СОШ №14 г.Владивостока"'),
(473, 'МБОУ "СОШ №15 г.Владивостока"'),
(474, 'МБОУ "СОШ №16 г.Владивостока"'),
(475, 'МБОУ "СОШ №17 г.Владивостока"'),
(476, 'МБОУ "СОШ №18 г.Владивостока"'),
(477, 'МБОУ "СОШ №19 г.Владивостока"'),
(478, 'МБОУ "СОШ №20 г.Владивостока"'),
(479, 'МБОУ "СОШ №21 г.Владивостока"'),
(480, 'МБОУ "СОШ №22 г.Владивостока"'),
(481, 'МБОУ "СОШ №23 с углубленным изучением предметов физико-математического профиля г.Владивостока"'),
(482, 'МБОУ "СОШ №25 г.Владивостока"'),
(483, 'МБОУ "СОШ №26 с углубленным изучением иностранных языков г.Владивостока"'),
(484, 'МБОУ "СОШ №27 г.Владивостока"'),
(485, 'МБОУ "СОШ №28 с углублённым изучением иностранных языков г.Владивостока"'),
(486, 'МБОУ "СОШ №29 г.Владивостока"'),
(487, 'МБОУ "СОШ №32 г.Владивостока"'),
(488, 'МБОУ "СОШ №33 г.Владивостока"'),
(489, 'МБОУ "СОШ №35 г.Владивостока"'),
(490, 'МБОУ "СОШ №37 г.Владивостока"'),
(491, 'МБОУ "СОШ №38 г.Владивостока"'),
(492, 'МБОУ "СОШ №39 г.Владивостока"'),
(493, 'МБОУ "СОШ №40 г.Владивостока"'),
(494, 'МБОУ "Лицей №41 г.Владивостока"'),
(495, 'МБОУ "СОШ №42 г.Владивостока"'),
(496, 'МБОУ "СОШ №43 г.Владивостока"'),
(497, 'МБОУ "СОШ №44 г.Владивостока"'),
(498, 'МБОУ "СОШ №45 с углубленным изучением предметов эстетического цикла г.Владивостока"'),
(499, 'МБОУ "СОШ №46 г.Владивостока"'),
(500, 'МБОУ "СОШ №47 г.Владивостока"'),
(501, 'МБОУ "СОШ №48 г.Владивостока"'),
(502, 'МБОУ "Основная общеобразовательная школа №49 г.Владивостока"'),
(503, 'МБОУ "СОШ №50 г.Владивостока"'),
(504, 'МБОУ "СОШ №51 с углубленным изучением японского языка г.Владивостока"'),
(505, 'МБОУ "СОШ №52 г.Владивостока"'),
(506, 'МБОУ "СОШ №53 г.Владивостока"'),
(507, 'МБОУ "СОШ №54 г.Владивостока"'),
(508, 'МБОУ "СОШ №55 г.Владивостока"'),
(509, 'МБОУ "СОШ №56 с углубленным изучением предметов художественно-эстетического цикла г.Владивостока"'),
(510, 'МБОУ "СОШ №57 с углубленным изучением английского языка г.Владивостока"'),
(511, 'МБОУ "СОШ №58 г.Владивостока"'),
(512, 'МБОУ "СОШ №59 г.Владивостока"'),
(513, 'МБОУ "СОШ №60 г.Владивостока"'),
(514, 'МБОУ "СОШ №61 г.Владивостока"'),
(515, 'МБОУ "СОШ №62 г.Владивостока"'),
(516, 'МБОУ "СОШ №63 с углубленным изучением китайского языка г.Владивостока"'),
(517, 'МБОУ "СОШ №64 г.Владивостока"'),
(518, 'МБОУ "СОШ №65 г.Владивостока"'),
(519, 'МБОУ "СОШ №66 г.Владивостока"'),
(520, 'МБОУ "СОШ №67 с углубленным изучением предметов художественно-эстетического цикла г.Владивостока"'),
(521, 'МБОУ "СОШ №68 г.Владивостока"'),
(522, 'МБОУ "СОШ №69 с углубленным изучением предметов художественно-эстетического цикла г.Владивостока"'),
(523, 'МБОУ "СОШ №70 г.Владивостока"'),
(524, 'МБОУ "СОШ №71 г.Владивостока"'),
(525, 'МБОУ "СОШ №72 г.Владивостока"'),
(526, 'МБОУ "СОШ №73 с углубленным изучением предметов эстетического цикла г.Владивостока"'),
(527, 'МБОУ "СОШ №74 с углубленным изучением предметов эстетического цикла г.Владивостока"'),
(528, 'МБОУ "СОШ №75 г.Владивостока"'),
(529, 'МБОУ "СОШ №76 с углубленным изучением восточных языков г.Владивостока"'),
(530, 'МБОУ "СОШ №77 г.Владивостока"'),
(531, 'МБОУ "СОШ №78 г.Владивостока"'),
(532, 'МБОУ "СОШ №79 г.Владивостока"'),
(533, 'МБОУ "СОШ №80 г.Владивостока"'),
(534, 'МБОУ "СОШ №81 г.Владивостока"'),
(535, 'МОУ "Лицей "Технический" г.Владивостока"');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(1000) NOT NULL,
  `grade` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `school_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `fio`, `grade`, `email`, `phone`, `school_id`, `active`) VALUES
(2, 'Исаенков Егор Евгеньевич', 10, 'Housewwwblack@yandex.ru', '89146907561', 0, 0),
(3, 'байда вован вованович', 11, 'Housewwwblack@yandex.ru', '89242433429', 0, 0),
(7, 'Пупкин Иван Иванович', 11, 'sdfkijh@mail.com', '902385', 0, 0),
(8, 'ыфва фыв фыв', 123, 'вчяп', '15', 472, 0),
(9, 'ksdjbf skvb skvjb', 12, 'ksvjb', '235', 472, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `students_groups`
--

CREATE TABLE IF NOT EXISTS `students_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `students_groups`
--

INSERT INTO `students_groups` (`id`, `student_id`, `group_id`, `startdate`, `enddate`) VALUES
(1, 2, 1, '2015-10-10', '0000-00-00'),
(2, 3, 2, '2015-10-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `subjects_students`
--

CREATE TABLE IF NOT EXISTS `subjects_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `taks_id` tinyint(1) NOT NULL,
  `work` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `subkect_id` int(11) NOT NULL,
  `weigth` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `subkect_id`, `weigth`, `days`, `description`) VALUES
(11, '234234', 0, 0, 234234, '234'),
(12, '234234', 0, 0, 234234, '234'),
(13, '234234', 0, 0, 234234, '234'),
(14, '234234', 0, 0, 234234, '234'),
(15, 'Задание бла бла', 0, 0, 10, 'Почти все иномарки (кроме бюджетных) уже давно имеют дисковые задние тормоза. И дело здесь не только в эффективности дисковых тормозов по отношению к барабанным.\r\nГлавный вопрос - обеспечить равномерность приложения тормозных усилий одновременно на всех колёсах. Отставание или опережение в работе любого из четырёх тормозных механизмов может привести к потере управляемости. '),
(16, 'Задание бла бла', 0, 0, 10, 'Почти все иномарки (кроме бюджетных) уже давно имеют дисковые задние тормоза. И дело здесь не только в эффективности дисковых тормозов по отношению к барабанным.\r\nГлавный вопрос - обеспечить равномерность приложения тормозных усилий одновременно на всех колёсах. Отставание или опережение в работе любого из четырёх тормозных механизмов может привести к потере управляемости. '),
(17, 'Задание бла бла', 0, 0, 10, 'Почти все иномарки (кроме бюджетных) уже давно имеют дисковые задние тормоза. И дело здесь не только в эффективности дисковых тормозов по отношению к барабанным.\r\nГлавный вопрос - обеспечить равномерность приложения тормозных усилий одновременно на всех колёсах. Отставание или опережение в работе любого из четырёх тормозных механизмов может привести к потере управляемости. '),
(18, 'уга', 0, 0, 23, 'ыфваываааааааааа'),
(19, 'nazvania', 0, 8, 0, 'bla blaaaaaaaa');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks_students`
--

CREATE TABLE IF NOT EXISTS `tasks_students` (
  `student_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `fio`, `email`, `photo`) VALUES
(1, 'Пупкин Василий Александрович', 'Pupa@yandeH.com', ''),
(2, 'Иванов Алексей Николаевич', 'Ivan@maul.ru', ''),
(3, 'Пупкин Василий Александрович', 'Pupa@yandeH.com', ''),
(4, 'Иванов Алексей Николаевич', 'Ivan@maul.ru', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `usertype_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `phone`, `usertype_id`) VALUES
(15, 'Kirill Shmorgun', 'run', 'shmorgun@yandex.ru', '', 3),
(16, 'admintest', 'test', 'test@mail.ru', '', 1),
(17, 'teacher', 'teacher', 'dsf', '', 2),
(21, 'egor isaenkov', 'admin', '', '', 3),
(22, 'admin', 'admin', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `usertypes`
--

CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `usertypes`
--

INSERT INTO `usertypes` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'teacher'),
(3, 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
