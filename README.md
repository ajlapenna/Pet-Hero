# Pet Hero


### Integrantes
* Agustin Lapenna
* Martin Cabrera
* Sofia Belber

### Narrativa 1
Se requiere realizar una aplicación cuyo modelo de negocio consiste en que
personas puedan brindar el servicio del cuidado de perros. Dicho cuidado se trata de una
estadía corta a cambio de una remuneración.

Los usuarios que se registren como Keepers, tienen un perfil en el sitio donde
exponen que tipo de perro están dispuestos a cuidar (pequeño, mediano o grande) y la
remuneración esperada por la estadía.

Por otro lado, existe el tipo de usuario Owner que registra un nuevo perfil en la
aplicación y será quien contrate el servicio de los Keepers. Una vez completado el
alojamiento del perro, los Owner tienen la habilidad de generar una review sobre el servicio.
Estas reviews generarán en el Keeper una mayor reputación dentro de la aplicación.
La aplicación les permite a los usuarios Keepers, definir los días específicos que
cuentan con disponibilidad para el cuidado de perros. Esta información será de utilidad para
los Owners al momento de reservar el servicio.

Con motivo de seguridad para las mascotas, un Keeper solamente puede cuidar a
un perro por estadía.

Los Owners deberán crearle un perfil a cada perro que poseen. Por cada perfil de
mascota, deben cargar: una foto, raza, tamaño, plan de vacunación (como imagen) y
observaciones generales de la misma. La aplicación también brinda la oportunidad de subir
un video del perro.

Cuando un Owner selecciona un Keeper de su agrado, se generará una reserva en
el sistema entre las fechas que requiere. El Keeper en cuestión, deberá aceptar o rechazar
esta nueva reserva.

En caso de que la reserva sea aceptada por el Keeper, se envía un cupón de pago
al Owner con el 50% del costo del total de la estadía. Al momento de efectuar el pago, la
reserva queda confirmada.

### Narrativa 2

Nuevos requisitos agregados:
Al tener un caso exitoso de desarrollo, se generarán nuevas validaciones para la
aplicación:

La aplicación ahora permite el cuidado de gatos. El perfil de un gato es exactamente
igual al de un perro. Permitiendo cargar: una foto, raza, tamaño, plan de vacunación
(como imagen), observaciones generales y un video (opcional).
Todos los Keepers están habilitados a cuidar tanto Gatos como Perros.
Se le habilita a un Keeper cuidar más de una mascota por estadía pero con una
condición. No se puede cuidar mascotas de distinta especie en el mismo día.

Requisitos no funcionales:
Programación en capas de la aplicación respetando la arquitectura de 3
capas lógicas vista durante la cursada. Esto implica el desarrollo de las
clases que representen las entidades del modelo y controladoras de los
casos de uso, las vistas y la capa de acceso a datos.
Utilización de versionado de código para el desarrollo