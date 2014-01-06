-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2014 a las 06:41:08
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `roles_codeigniter`
--
CREATE DATABASE IF NOT EXISTS `roles_codeigniter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `roles_codeigniter`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `ruta` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`ruta`, `titulo`) VALUES
('Tabla7.pdf', ''),
('Tabla8.pdf', ''),
('Prueba_Ensayo_DSC_-_Ayudantia.pdf', ''),
('89632_tarea_1_ayudantia.pdf', ''),
('Guia_de_Ejercicios_con_Nota.pdf', ''),
('Presentacion_Hashing.pdf', ''),
('89159_Tarea1ING.pdf', ''),
('Tabla.pdf', ''),
('90685_puntosxfuncion.pdf', ''),
('Prueba_Ensayo_DSC_-_Ayudantia.pdf', ''),
('ficha.pdf', ''),
('ficha1.pdf', 'super');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectotitulo`
--

CREATE TABLE IF NOT EXISTS `proyectotitulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `fecha_r` date NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `resumen` text NOT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Volcado de datos para la tabla `proyectotitulo`
--

INSERT INTO `proyectotitulo` (`id`, `titulo`, `autor`, `carrera`, `fecha_r`, `fecha`, `descripcion`, `resumen`, `ruta`, `hora`) VALUES
(137, 'Sistema de administración de canales de televisión “GTD MyChannel” para la empresa GTD Imagen', 'Macarena Cerda', 'Ingieneria en Informatica', '2014-01-06', '2012-10-18', 'Gtd MyChannel vídeos  televisión telefonía data center internet', 'Grupo Gtd es una compañía que ofrece servicios de telecomunicaciones, tales como televisión, telefonía, data center, internet, entre otros. En el contexto de sus servicios de televisión, se caracteriza por ser la primera compañía en incluir interactividad en la televisión digital HD.\r\nAdemás, existen canales corporativos de televisión, que contratan los servicios de Gtd para salir al aire y ser vistos por todos sus tele videntes, por lo tanto, cada canal debe entregar su propio contenido a transmitir a través de videos.\r\nPara tal efecto, a través del sistema Gtd MyChannel, se pretende administrar éstos canales de televisión, permitiendo a cada canal, elegir la programación horaria de sus vídeos y el orden en que serán transmitidos.', '90734_tesis0503MCerda7.pdf', '00:34:30'),
(138, 'VALORACIÓN DE UN CENTRO DE  HELICICULTURA', 'Ricardo Cofre', 'Ingeniería Comercial', '2014-01-06', '2011-08-06', 'mercados internacionales de carne de caracol pequeño empresario nacional  evaluación financiera del proyecto', 'En la actualidad, la necesidad de satisfacer los mercados internacionales de carne de caracol ha provocado un aumento considerable de las exportaciones chilenas de este molusco. Ante esta situación, el pequeño empresario nacional ha visto una nueva oportunidad de inversión. Estas inversiones se realizan sin el adecuado estudio de las condiciones del mercado y sin una evaluación financiera del proyecto.\r\n De lo anterior surge la inquietud de analizar y presentar a continuación la factibilidad de realizar la crianza de caracoles en nuestro país.\r\n La principal característica de este seminario es que está enfocado al pequeño helicicultor que desea criar caracoles a mediana escala y de manera semiprofesional.\r\n A partir de las característica anteriores, y en función de un supuesto de 8 años como periodo de evaluación, se concluyó que este es un proyecto rentable, estimando un aumento acelerado de la demanda a lo largo del proyecto.\r\n Cabe destacar que el proyecto aumenta en rentabilidad a medida que aumenta la inversión y profesionalización de la crianza, esta profesionalización se ve reflejada en una menor mortandad de las crías y mejor aprovechamiento de los recursos.\r\n Finalmente, se debe considerar que, si bien es cierto, el proyecto es un negocio rentable, nada asegura que las condiciones del mercado se mantengan en el tiempo ni que los supuestos utilizados no se cumplan totalmente', 'valoracion_Cofre_Ricardo.pdf', '00:49:40'),
(139, 'REDUCCIÓN DEL CONTENIDO DE ACRILAMIDA EN PAPAS  CHIPS MEDIANTE EMPLEO DE PRETRATAMIENTO Y FRITURA  A', 'Rodrigo Cardenas', 'Ingeniería en Industria Alimentaria', '2014-01-06', '2010-02-27', 'acrilamida altas temperaturas en alimentos  ricos en almidón Cáncer papas chips', 'Investigadores de la Universidad de Estocolmo, Suecia, informaron en el 2002 que \r\nla acrilamida se formaba durante el calentamiento a altas temperaturas en alimentos \r\nricos en almidón a través de la reacción de Maillard. Efectivamente se comprobó su \r\npresencia en un número importante de alimentos, entre ellos las papas chips. De esta \r\nevidencia se desencadenó un número importante de investigaciones a nivel mundial ya \r\nque la Agencia Internacional para Investigación en Cáncer ha clasificado a la \r\nacrilamida como un probable carcinogénico para los humanos. \r\nEl objetivo de esta investigación se centró en obtener papas chips con bajo \r\ncontenido de acrilamida a partir de papas variedad Panda. Para ello, se disminuyeron y \r\nmodificaron los precursores (azúcares directamente reductores y asparragina libre) \r\nmediante empleo de una etapa inicial de lavado y una etapa de pretratamiento \r\nconsistente en un escaldado a 90°C, seguido de una inmersión en ácido cítrico al \r\n0,25%. Además, se empleó fritura a presión reducida con el fin de bajar las \r\ntemperaturas de fritura (150°C, 160°C y 170°C) y disminuir los tiempos de proceso. \r\nPara evaluar los efectos de las variables empleadas, se trabajó con un grupo de \r\npapas chips blanco (MB) y con un grupo de papas chips ensayo (MT). Ambos grupos \r\nfueron sometidos a fritura a presión reducida (48 mm Hg absolutos) a tres \r\ntemperaturas distintas (150°C, 160°C y 170°C). Además, se realizó una evaluación \r\nsensorial para saber que muestra tuvo una mejor aceptabilidad según un panel de \r\nconsumidores. \r\nLos resultados de esta investigación determinaron que el empleo secuencial y \r\ncomplementario de la etapa inicial seguida de la etapa de pretratamiento disminuyeron \r\nsignificativamente el contenido de precursores de la formación de acrilamida en las \r\npapas chips, produciendo papas chips prácticamente libres de acrilamida. La muestra \r\n150 MT tuvo los mejores parámetros químicos evaluados (<5 ppb de acrilamida, 33,9% \r\nmateria grasa y cerca de un 2% de humedad), mientras que la muestra 160 MB, tuvo \r\nuna aceptabilidad promedio de 5,33 con un 79% de agrado de los consumidores, \r\nsuperando incluso a una muestra comercial', 'encina_Rodrigo_Cardenas.pdf', '01:01:20'),
(140, 'Modelación numérica, diseño, construcción y análisis experimental del desempeño de un motor Stirling', 'Daniel Abrilot', 'Ingeniería en Mecánica', '2014-01-06', '2009-03-19', 'energías renovables motores Stirling baja entalpía', 'En la línea de la generación energética en Chile, existe un gran potencial aprovechable de energías renovables. De estos potenciales destaca la existencia fuentes geotérmicas de baja entalpía, donde el uso de motores Stirling resulta atractivo por su versatilidad y autonomía.\r\n Sin embargo, actualmente son escasos las trabajos de motores Stirling que aprovechen fuentes de baja entalpía. Asimismo, el uso de fluidos de trabajo distintos al aire con estos gradientes o referidos a fuentes geotérmicas es aún menor.\r\n El presente trabajo tiene como objetivo el diseño, tanto termodinámico como mecánico, construcción y posterior análisis experimental de un prototipo de motor Stirling de baja entalpía que aporte con nueva información respecto al uso de bajos gradientes térmicos con fluidos de trabajo como aire y helio. \r\n Se confeccionó una plataforma numérica, con la que se realizó la modelación y posterior optimización de un prototipo de motor Stirling en función de parámetros dimensionales representativos. Con el modelo numérico, se procedió al diseño mecánico y construcción del prototipo. En paralelo, se conformó un banco de pruebas para medir parámetros de desempeño, tales como presión, temperaturas, torque, rpm y potencia. \r\n Con el banco de pruebas se obtuvieron las curvas de potencia y torque con uso de aire y para una temperatura de la sección caliente de 220 C, 280 C y 310 C donde se obtuvieron potencias máximas de 0.4, 0.9 y 1.46 Watts respectivamente y para el caso de helio se utilizaron temperaturas de la sección caliente de 170 C, 238 C y 287 C que llevaron a potencias máximas de 0.87, 2.41 y 2.76 Watts respectivamente. También se realizó un balance de energía por medio del diagrama indicador para aire a 310 C y helio a 170 C. Por último, se contrastaron los resultados experimentales con la modelación numérica del prototipo.\r\n Con los resultados experimentales se comprobaron las tendencias de desempeño del prototipo respecto al modelo numérico para distintos gradientes térmicos, y también para el uso de aire y helio como fluidos de trabajo. Por otro lado, las pérdidas conductivas no ponderadas por la carcasa del prototipo real mermaron la eficiencia térmica global y provocaron la falta de ajuste con el modelo numérico. Se ha contribuido también al conocimiento de motores Stirling de baja entalpía, por medio de la metodología de análisis, y la experiencia relativa a la construcción, toma de datos y estudio práctico del funcionamiento del motor. Entregando con este trabajo un referente y una base para futuros trabajos experimentales en prototipos de motores Stirling de baja entalpía.', 'cf-Daniel_Abrilot.pdf', '01:35:10'),
(141, 'Desarrollo de un sistema constructivo de reparación de pavimentos de hormigón con losas prefabricada', 'Fernando Guerrero', 'Ingeniería Civil en Obras Civiles', '2014-01-06', '2013-12-02', 'hormigón sistema barra-ranura pavimentos fabricación', 'El trabajo consistió en un estudio de carácter exploratorio sobre sistemas constructivos para pavimentos utilizando losas prefabricadas de hormigón. \r\n Como primera etapa se investigó acerca de las soluciones implementadas fuera del país y respaldadas por parte de Departamentos de Transporte o Centros Universitarios Norteamericanos principalmente, para dar paso a la definición de dos soluciones que fueron evaluadas para su implementación como alternativa para la reposición de paños de pavimento agrietados en vías urbanas, y puesta en servicio, con pocas horas de interrupción de la vía.\r\n En una segunda etapa, se trabajó en el diseño estructural y modelación de las dos soluciones definidas. La modelación se efectuó utilizando el programa ANSYS de elementos finitos, para verificar el comportamiento de los sistemas diseñados en cuanto a niveles de tensiones y deformaciones del conjunto de paneles ensamblados ante el paso de un eje vehicular simulado como un tren de carga.\r\n Con los modelos de losas y con la participación de la empresa Constructora Pehuenche que impulsó esta investigación a través de un Proyecto Corfo junto a IDIEM como centro de investigación, se comenzó con la etapa 3, fabricando los moldajes que dieron forma a los distintos paneles con los que se probaron los paneles con los dos tipos de conexión. El lugar en donde se montaron los moldajes lo facilitó IDIEM, disponiendo de sus dependencias en Cerrillos, donde se confeccionaron las ocho losas que darían forma posteriormente al tramo de prueba. \r\n La etapa 4, que consistió en construir un tramo de prueba para poder instalar las losas en él y así testear el comportamiento de los sistemas bajo altas cargas de uso, derivó en una serie de observaciones que llevaron a recomendar modificaciones al sistema, especialmente en el método de conexión machihembrado, puntos que se deberán tener presentes para un próximo trabajo.\r\n Como resultado de estas experiencias se pudo constatar que el sistema barra-ranura fue el que arrojó los resultados más auspiciosos a la hora de realizar la modelación, obteniéndose un mejor traspaso de carga entre paneles que otorga mejor continuidad en el tramo, lo cual no quita que no pueda presentar alguna falla en las juntas debido a ciclos de carga. Durante la instalación, hubo losas que presentaron en algunos casos problemáticas para el ensamblaje, esencialmente por un tema de falta de compatibilidad en las dimensiones respecto al tramo de prueba construido, pero a la vez hubo losas cuyo montaje resultó sin contratiempos, llegando a instalarse en tiempos de alrededor de 3 minutos. \r\n La reparación de pavimentos de hormigón mediante las losas prefabricadas estudiadas requiere de la estandarización del proceso de fabricación y a un cierto grado de experiencia en lo que a montaje e instalación refiere. Si bien el estudio tuvo un carácter de exploración, se pudieron materializar dos soluciones que deberán perfeccionarse a futuro, pero que demostraron que es factible analizar esta solución a la hora de definir una metodología de trabajo de reparación de pavimentos rígidos.', 'cf-Fernando_Guerrero.pdf', '01:43:43'),
(142, 'Democratización de la impresión 3D con fotopolímeros', 'Erick Acuña', 'Ingeniería en Mecánica', '2014-01-06', '2008-07-10', 'impresoras 3D BeamMaker fotopolímeros  máquina  tecnología a los hogares.', 'Las impresoras 3D son máquinas que permiten producir objetos tridimensionales físicos a partir de un modelo virtual o sólido, diseñado desde algún programa CAD.\r\n Un movimiento de crear impresoras 3D de tipo Open (libres de ser reproducidas o modificadas), ha permitido un desarrollo de parte de comunidades que han visto cómo la tecnología mejora, esto también ha atraído a empresas a tener su propia oferta de impresoras 3D, como resultado se ha visto una baja en el precio considerable además de un menor tamaño, que ha permitido crear el concepto de impresora de escritorio para el hogar.\r\n En esta memoria se diseña y construye a BeamMaker, una impresora 3D que utiliza fotopolímeros para la creación de piezas, junto con ella se desarrolla un software para utilizar con la misma. Se requiere que la máquina sea de carácter Open con el objetivo de su fácil masificación y modificación, además de un precio bajo (menos de 500 dólares), ya que el objetivo es llevar esta tecnología a los hogares.\r\n La tecnología de polimerización utiliza una fuente de luz, que va curando capa a capa el objeto a crear, se utiliza un fotopolímero que es sensible a una longitud de onda de luz visible, para así utilizar un proyector como fuente de luz, esto permite bajar los costos considerablemente.\r\n Durante el diseño de la impresora se observan una serie de problemas que se han de solucionar para así lograr imprimir de manera correcta, entre estos problemas se encuentra la adherencia del objeto a la bandeja móvil de polimerización y a la piscina de polímero, además de problemas por la viscosidad del material para refrescar una capa nueva.\r\n Con el objetivo de conocer las mejoras que tiene BeamMaker con respecto a las impresoras actuales, se hace una comparación imprimiendo la misma pieza, para 2 tipos de impresora y BeamMaker, los resultados muestran mejoras tanto a simple vista como en las medidas del objeto, la figura impresa con BeamMaker tuvo un error medio en las medidas de 0.03 mm, mientras que las otras impresoras tuvieron errores de 0.4 y 0.3 mm, mostrando que efectivamente BeamMaker es un aporte respecto al desarrollo de esta tecnología.', 'cf-erick_acuña.pdf', '01:49:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `perfil`, `username`, `password`) VALUES
(26, 'administrador', 'admin', '57bc5965853d13c30aa1944b1b8644a3096a46da'),
(34, 'administrador', 'admin2', '57bc5965853d13c30aa1944b1b8644a3096a46da'),
(36, 'administrador', 'maurocastillo', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(37, 'administrador', 'luisherrera', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(38, 'administrador', 'hectorpincheira', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(39, 'administrador', 'CamiloMartinez', '57bc5965853d13c30aa1944b1b8644a3096a46da');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
