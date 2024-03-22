-- Table structure for table `musicDb`
CREATE TABLE `musicDb` (
  `music_id` int(2) NOT NULL,
  `title` varchar(33) DEFAULT NULL,
  `artist` varchar(31) DEFAULT NULL,
  `album_title` varchar(55) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `length` varchar(6) DEFAULT NULL,
  `album_cover` varchar(138) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `musicDb`

INSERT INTO `musicDb` (`music_id`, `title`, `artist`, `album_title`, `genre`, `release_date`, `length`, `album_cover`) VALUES
(1, 'Isn\'t That Good?', 'YUDABINBAND', 'GREAT SEOUL INVASION Semi Final - EP', 'ROCK', '2022-09-29', ':03:33', 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/99/cc/6b/99cc6b16-dcce-1fec-de5f-f888b18af14f/887928019617.jpg/600x600bb-60.jpg'),
(2, 'Be Alright', 'John K', 'Be Alright // U Sometimes - Single', 'POP', '2022-11-18', ':02:36', 'https://is1-ssl.mzstatic.com/image/thumb/Music112/v4/5d/61/97/5d61970f-5ef6-b395-fe8e-4798d01f89ef/196589658104.jpg/600x600bb-60.jpg'),
(3, 'Don\'t Trip', 'Justus Bennetts & GAYLE', 'Don\'t Trip - Single', 'POP', '2022-02-25', ':02:27', 'https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/aa/38/b9/aa38b9e4-09f1-cfcb-bd03-6865576fba12/22UMGIM14831.rgb.jpg/600x600bb-60.jpg'),
(4, 'Cocktails', 'doVicente & NVRT', 'Cocktails - Single', 'POP', '2021-07-23', ':02:54', 'https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/1f/29/8e/1f298e1e-9460-890e-8cec-766e144dad4b/cover.jpg/600x600bb-60.jpg'),
(5, 'Steal The Show', 'Lauv', 'Elemental (Original Motion Picture Soundtrack)', 'Soundtrack', '2023-06-02', ':03:13', 'https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/28/78/d8/2878d8b6-91d6-495a-73e0-ae022da66196/23UMGIM84718.rgb.jpg/600x600bb-60.jpg'),
(6, 'I Don\'t Think That I Like Her', 'Charlie Puth', 'CHARLIE', 'POP', '2022-09-16', ':03:09', 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/7e/5f/22/7e5f2239-6143-7cf4-dfe1-d9b53d47c4c0/075679736307.jpg/600x600bb-60.jpg'),
(7, 'Get A Guitar', 'RIIZE', 'Get A Guitar - Single', 'K-POP', '2023-09-04', ':02:40', 'https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/00/06/8a/00068a27-d5f9-f7a3-c593-d564a8c0e709/888735944703.jpg/600x600cc-60.jpg'),
(8, 'blessing in disguise', 'HUH YUNJIN', 'blessing in disguise - Single', 'K-POP', '2023-08-14', ':03:47', 'https://is1-ssl.mzstatic.com/image/thumb/Music126/v4/25/d1/8b/25d18b1d-55e6-1dde-295e-79e55aee3b86/196922586767_Cover.jpg/600x600bb-60.jpg'),
(9, 'Find My Own Way(feat. Wiz Califa)', 'GRiZ', 'Ride Waves', 'Electronic', '2019-04-05', ':05:03', 'https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/a6/28/21/a628210f-dc09-8589-78a5-755e1ead910b/192641247729_Cover.jpg/600x600bb-60.jpg'),
(10, 'Nothing Lasts Forever', 'Maroon 5', 'It Won\'t Be Soon Before Long', 'POP', '2007-01-01', ':03:09', 'https://is1-ssl.mzstatic.com/image/thumb/Music112/v4/d1/f6/02/d1f602c4-e185-4ce5-c361-23af7c857628/07UMGIM06094.rgb.jpg/600x600bb-60.jpg'),
(11, 'Sucker for You', 'Matt Terry', 'Trouble', 'POP', '2017-10-13', ':03:24', 'https://is1-ssl.mzstatic.com/image/thumb/Music125/v4/b7/8b/de/b78bdef0-3138-6959-5492-8a8eb4061ff0/886446658087.jpg/600x600bb-60.jpg'),
(12, 'Lift Me Up', 'ANYA', 'Faith', 'POP', '2018-11-02', ':03:23', 'https://is1-ssl.mzstatic.com/image/thumb/Music114/v4/05/4c/8d/054c8dae-3038-b1da-9a66-cebb97bdb0c5/886447590355.jpg/600x600bb-60.jpg'),
(13, 'Still New York', 'MAX, Leslie Grace & Joey Bada$$', 'Still New York - Single', 'POP', '2018-11-07', ':03:49', 'https://is1-ssl.mzstatic.com/image/thumb/Music128/v4/8e/5d/28/8e5d2801-f499-3709-0e1f-e664cf321921/886447381588.jpg/600x600bb-60.jpg'),
(14, 'Event Horizon', 'Younha', 'YOUNHA 6th Album Repackage \'END THEORY : Final Edition\'', 'K-POP', '2022-03-30', ':05:01', 'https://is1-ssl.mzstatic.com/image/thumb/Music122/v4/43/cd/c8/43cdc862-d91b-de64-9d21-e6f6a16fbf61/cover_KM0014976_1.jpg/600x600bb-60.jpg'),
(15, 'Broke Boy', 'Malia Civetz', 'Broke Boy - Single', 'POP', '2020-02-28', ':02:53', 'https://is1-ssl.mzstatic.com/image/thumb/Music124/v4/a9/4e/19/a94e1934-8a57-50bc-c951-f07848321478/054391942173.jpg/600x600bb-60.jpg'),
(16, 'Eyes On You', 'Nicky Youre', 'Good Times Go', 'POP', '2022-11-18', ':02:57', 'https://is1-ssl.mzstatic.com/image/thumb/Music116/v4/1e/7d/78/1e7d788c-4cc7-4bb5-0e82-913d4b55ae58/196871151153.jpg/600x600bb-60.jpg');


-- Table structure for table `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `dateAdded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Indexes for table `music`

ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for table `music`

ALTER TABLE `music`
  MODIFY `music_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

-- AUTO_INCREMENT for table `users`

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;