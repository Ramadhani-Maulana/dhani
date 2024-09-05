
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE registrasi (
  id int(6) NOT NULL,
  nama varchar(50) NOT NULL,
  nim bigint(20) NOT NULL,
  kelas varchar(5) NOT NULL,
  email varchar(50) NOT NULL,
  jenis_kelamin varchar(10) NOT NULL,
  saran text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO registrasi (id, nama, nim, kelas, email, jenis_kelamin, saran) VALUES
(30, 'Ramadhani', 233140701111025, 'T3-E', 'ramadhani@gmail.com', 'Laki-laki', 'Bismilah');

ALTER TABLE registrasi
  ADD PRIMARY KEY (id);
ALTER TABLE registrasi
  MODIFY id int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;
