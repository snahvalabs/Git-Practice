SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `datauser` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(2, 'yon', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'sani', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 'sania', '7c4a8d09ca3762af61e59520943dc26494f8941b');

ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
