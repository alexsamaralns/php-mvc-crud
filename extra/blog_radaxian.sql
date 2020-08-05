-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 05-Ago-2020 às 21:31
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_radaxian`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `content`) VALUES
(1, 'First Title', 'First Subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae suscipit tellus mauris a diam. Tortor id aliquet lectus proin. Lectus magna fringilla urna porttitor rhoncus dolor purus. Sed augue lacus viverra vitae congue. Nunc vel risus commodo viverra maecenas accumsan. Bibendum at varius vel pharetra vel. Aliquam malesuada bibendum arcu vitae. Interdum velit laoreet id donec ultrices. In eu mi bibendum neque egestas congue quisque egestas diam.\r\n\r\nQuam id leo in vitae turpis massa sed elementum tempus. Mauris a diam maecenas sed enim ut sem viverra. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Praesent elementum facilisis leo vel fringilla. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Facilisis magna etiam tempor orci. Lobortis mattis aliquam faucibus purus in massa. A cras semper auctor neque. Aliquet porttitor lacus luctus accumsan tortor. Posuere morbi leo urna molestie at.\r\n\r\nFermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Accumsan in nisl nisi scelerisque eu ultrices vitae. Ornare lectus sit amet est placerat. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget arcu. Donec pretium vulputate sapien nec sagittis aliquam malesuada. Luctus accumsan tortor posuere ac ut. Nulla facilisi etiam dignissim diam quis. Pellentesque id nibh tortor id aliquet. Placerat in egestas erat imperdiet. Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Consectetur purus ut faucibus pulvinar elementum. Arcu cursus vitae congue mauris.\r\n\r\nArcu risus quis varius quam quisque id diam vel. Habitasse platea dictumst quisque sagittis. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Laoreet suspendisse interdum consectetur libero. Nullam non nisi est sit amet. Orci a scelerisque purus semper eget duis at. Eget felis eget nunc lobortis mattis aliquam faucibus purus in. Et malesuada fames ac turpis. Ullamcorper morbi tincidunt ornare massa. Sem fringilla ut morbi tincidunt augue interdum velit. Vel pretium lectus quam id leo in vitae turpis. Interdum varius sit amet mattis. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Non sodales neque sodales ut etiam sit amet nisl purus. Venenatis lectus magna fringilla urna porttitor. Venenatis lectus magna fringilla urna porttitor. Dui sapien eget mi proin sed libero enim sed. Consectetur purus ut faucibus pulvinar elementum integer.\r\n\r\nFeugiat vivamus at augue eget arcu dictum varius. Est placerat in egestas erat imperdiet sed euismod nisi porta. Praesent tristique magna sit amet purus gravida. Risus commodo viverra maecenas accumsan. Elit pellentesque habitant morbi tristique senectus et netus et. Dui ut ornare lectus sit. Pellentesque nec nam aliquam sem et tortor consequat id porta. Sit amet mattis vulputate enim nulla aliquet. Et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Sed augue lacus viverra vitae. Consectetur lorem donec massa sapien faucibus et.'),
(2, 'Second Title', 'Second Subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae suscipit tellus mauris a diam. Tortor id aliquet lectus proin. Lectus magna fringilla urna porttitor rhoncus dolor purus. Sed augue lacus viverra vitae congue. Nunc vel risus commodo viverra maecenas accumsan. Bibendum at varius vel pharetra vel. Aliquam malesuada bibendum arcu vitae. Interdum velit laoreet id donec ultrices. In eu mi bibendum neque egestas congue quisque egestas diam.\r\n\r\nQuam id leo in vitae turpis massa sed elementum tempus. Mauris a diam maecenas sed enim ut sem viverra. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Praesent elementum facilisis leo vel fringilla. Arcu vitae elementum curabitur vitae nunc sed velit dignissim. Urna cursus eget nunc scelerisque viverra mauris in aliquam. Facilisis magna etiam tempor orci. Lobortis mattis aliquam faucibus purus in massa. A cras semper auctor neque. Aliquet porttitor lacus luctus accumsan tortor. Posuere morbi leo urna molestie at.\r\n\r\nFermentum odio eu feugiat pretium nibh ipsum consequat nisl vel. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Accumsan in nisl nisi scelerisque eu ultrices vitae. Ornare lectus sit amet est placerat. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget arcu. Donec pretium vulputate sapien nec sagittis aliquam malesuada. Luctus accumsan tortor posuere ac ut. Nulla facilisi etiam dignissim diam quis. Pellentesque id nibh tortor id aliquet. Placerat in egestas erat imperdiet. Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Consectetur purus ut faucibus pulvinar elementum. Arcu cursus vitae congue mauris.\r\n\r\nArcu risus quis varius quam quisque id diam vel. Habitasse platea dictumst quisque sagittis. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed. Nec tincidunt praesent semper feugiat nibh sed pulvinar. Laoreet suspendisse interdum consectetur libero. Nullam non nisi est sit amet. Orci a scelerisque purus semper eget duis at. Eget felis eget nunc lobortis mattis aliquam faucibus purus in. Et malesuada fames ac turpis. Ullamcorper morbi tincidunt ornare massa. Sem fringilla ut morbi tincidunt augue interdum velit. Vel pretium lectus quam id leo in vitae turpis. Interdum varius sit amet mattis. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Non sodales neque sodales ut etiam sit amet nisl purus. Venenatis lectus magna fringilla urna porttitor. Venenatis lectus magna fringilla urna porttitor. Dui sapien eget mi proin sed libero enim sed. Consectetur purus ut faucibus pulvinar elementum integer.\r\n\r\nFeugiat vivamus at augue eget arcu dictum varius. Est placerat in egestas erat imperdiet sed euismod nisi porta. Praesent tristique magna sit amet purus gravida. Risus commodo viverra maecenas accumsan. Elit pellentesque habitant morbi tristique senectus et netus et. Dui ut ornare lectus sit. Pellentesque nec nam aliquam sem et tortor consequat id porta. Sit amet mattis vulputate enim nulla aliquet. Et sollicitudin ac orci phasellus egestas tellus rutrum tellus. Sed augue lacus viverra vitae. Consectetur lorem donec massa sapien faucibus et.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
