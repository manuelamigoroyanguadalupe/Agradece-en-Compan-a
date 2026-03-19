CREATE TABLE Alumnos (
    id_alumno TINYINT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Email VARCHAR(120) NOT NULL,
    Contraseña CHAR(20),
    pagina_web VARCHAR(100) NOT NULL,
    Nombre_jesuita CHAR(30) NOT NULL,
    Imagen BINARY NOT NULL,
    Mensaje VARCHAR(150) NOT NULL
);
