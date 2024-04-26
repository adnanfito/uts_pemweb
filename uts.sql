CREATE TABLE `jadwal` (
`id_jadwal` int NOT NULL AUTO_INCREMENT,
`id_matakuliah` int NOT NULL,
`jam_mulai` time NOT NULL,
`jam_selesai` time NOT NULL,
`nama_ruang` varchar(100) NOT NULL,
`id_user` int NOT NULL,
PRIMARY KEY (`id_jadwal`)
);
CREATE TABLE `jadwal_mahasiswa` (
`id_jadwal_mahasiswa` int NOT NULL AUTO_INCREMENT,
`id_jadwal` int NOT NULL,
`nim` varchar(10) NOT NULL,
PRIMARY KEY (`id_jadwal_mahasiswa`)
);
CREATE TABLE `mahasiswa` (
`nim` varchar(10) NOT NULL,
`nama` varchar(100) NOT NULL,
`tanggal_lahir` date NOT NULL,
`alamat` varchar(100) NOT NULL,
`id_user` int NOT NULL,
PRIMARY KEY (`nim`)
);
CREATE TABLE `matakuliah` (
`id_matakuliah` int NOT NULL AUTO_INCREMENT,
`nama_matakuliah` varchar(100) NOT NULL,
PRIMARY KEY (`id_matakuliah`)
);
CREATE TABLE `users` (
`id_user` int NOT NULL AUTO_INCREMENT,
`username` varchar(100) NOT NULL,
`password` varchar(255) NOT NULL,
PRIMARY KEY (`id_user`)
);
