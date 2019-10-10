CREATE TABLE surat(
	id int PRIMARY KEY AUTO_INCREMENT,
	tanggal date NOT NULL,
	jenis_surat varchar(255) NOT NULL,
	id_user int NOT NULL,
	id_penduduk int NOT NULL,
	keperluan varchar(255) NULL,
	file varchar(255) NULL
);