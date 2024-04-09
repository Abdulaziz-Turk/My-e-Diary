
CREATE TABLE `tbl_diary` (
  `tbl_diary_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `tbl_diary` (`tbl_diary_id`, `title`, `content`, `date`) VALUES
(1, 'My Diary 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2024-04-09');

ALTER TABLE `tbl_diary`
  ADD PRIMARY KEY (`tbl_diary_id`);


ALTER TABLE `tbl_diary`
  MODIFY `tbl_diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
