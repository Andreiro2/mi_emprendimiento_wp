# Joyas Kofran · Sitio WordPress

- **Sitio en producción:** https://joyaskofran.infinityfree.me/
- **Prototipo en Stitch:** https://stitch.withgoogle.com/projects/17675665430477937727
- **Repo del Parcial 02:** https://github.com/Andreiro2/mi-emprendimiento
- **Autor/a:** Franco Reyes (sección)

Las instrucciones del curso están en [`indicaciones/README.md`](indicaciones/README.md).

## Contexto de la web

Joyas Kofran es un emprendimiento de Valparaíso que vende joyas de plata 925 auténtica (anillos, cadenas y collares, aros, pulseras y dijes) por Instagram ([@joyaskofran](https://www.instagram.com/joyaskofran/)). Le vende a mujeres jóvenes de la región, como mi proto-persona Camila (28 años, Viña del Mar), que compran para darse un gusto o para regalar, y que desconfían de las joyas que se oscurecen y de los perfiles que no responden. El sitio resuelve esa desconfianza: muestra la marca, explica la plata 925, enseña a cuidarla y a elegir la talla en el blog, y lleva a la persona a **pedir asesoría en la página Contacto**. La tienda online queda para la etapa 2 ([`plan-de-continuidad.md`](proyecto/plan-de-continuidad.md)).

## Mi tema

- [x] **Tema propio:** `kofran-joyeria` (carpeta [`proyecto/kofran-joyeria/`](proyecto/kofran-joyeria/))

Es un tema clásico hecho a partir de `tema-base/`, con la paleta y las fuentes de mi `DESIGN.md` (azul #1F4E79, plata #C9CDD3, fondo #FAF8F5; Cormorant Garamond e Inter). El detalle de cada archivo está en el [README del tema](proyecto/kofran-joyeria/README.md).

---

## Instrucciones para instalar mi tema

Cómo instalar mi tema en un WordPress limpio:

1. **Descarga el tema:** descarga este repo (**Code > Download ZIP**), descomprímelo y vuelve a comprimir solo la carpeta `proyecto/kofran-joyeria/`. Así queda un `kofran-joyeria.zip` con la carpeta del tema en la raíz. Desde la terminal también sirve: `git archive --format=zip --prefix=kofran-joyeria/ -o kofran-joyeria.zip HEAD:proyecto/kofran-joyeria`.
2. **Instálalo:** en WordPress, **Apariencia > Temas > Añadir nuevo > Subir tema**, elige el `.zip` y pulsa **Instalar ahora**.
3. **Actívalo:** pulsa **Activar**.
4. **Configura la portada:** **Ajustes > Lectura > Una página estática**, con Portada = **Inicio** y Página de entradas = **Blog**.
5. **Crea el menú:** **Apariencia > Menús**, con Inicio, Nosotros, Blog y Contacto, y asígnalo a «Menú principal». El mismo menú aparece en el footer.
6. **Instala los plugins** de la tabla de abajo.
7. **Crea las páginas y entradas** de la lista de abajo. La página Contacto lleva el shortcode del formulario de Contact Form 7.

**Qué debe tener el servidor:** lo probé con **WordPress 7.1.4 y PHP 8.4** (InfinityFree, MariaDB 11.4) y también en un WordPress local de pruebas. Contact Form 7 6.2.5 pide **WordPress 7.1 o superior y PHP 8.3 o superior**, así que esos son los mínimos del sitio completo.

---

## Respaldo y reinstalación en otro servidor

**Qué respaldar:**

- **Los archivos:** la carpeta `wp-content/` (tema `kofran-joyeria`, plugins e imágenes subidas en `uploads/`).
- **La base de datos:** páginas, entradas, menú, ajustes y configuración de los plugins.

**Cómo respaldo mi sitio:**

- **BackWPup (configurado):** hay un trabajo «Archivos y bases de datos» que respalda los archivos y la base de datos **una vez al mes** y guarda el `.zip` en el servidor, en `wp-content/uploads/backwpup/…/backups/`, conservando las 3 últimas copias. Cuando el trabajo corre, la copia se descarga desde **BackWPup > Copias de seguridad > Descargar** y se guarda **fuera del sitio** (mi computador o Google Drive).
- **Limitación de InfinityFree:** en el hosting gratis, BackWPup no alcanza a ejecutarse. Muestra el aviso «WP-Cron parece no estar funcionando» y la copia manual no avanza, porque el plugin arranca sus tareas con una petición del servidor hacia sí mismo y InfinityFree la bloquea. En un hosting pagado este método sí funciona.
- **Respaldo manual (el que funciona en InfinityFree):**
  1. **Base de datos:** en el panel de InfinityFree, **MySQL Databases > phpMyAdmin** de la base del sitio > pestaña **Exportar** > formato SQL > **Continuar**. Se descarga un archivo `.sql`.
  2. **Archivos:** en el **Online File Manager** de InfinityFree (o por FTP con FileZilla), descarga la carpeta `htdocs/wp-content/` completa.
  3. **Contenido (copia extra):** en WordPress, **Herramientas > Exportar > Todo el contenido**. Se descarga un `.xml` con páginas, entradas, menús e imágenes enlazadas.
  4. Guarda los tres archivos juntos, fuera del hosting, con la fecha en el nombre (por ejemplo `kofran-2026-11-23`).
- **Cada cuánto:** antes de cada cambio grande (actualizar WordPress, instalar un plugin o cambiar el tema) y al menos una vez al mes.

**Cómo lo reinstalo en un servidor nuevo:**

1. **Requisitos del servidor:** PHP 8.3 o superior, MySQL 8 o MariaDB 10.6 o superior, WordPress 7.1 o superior, HTTPS y unos 200 MB de espacio libre (el sitio pesa poco; el espacio extra es para las copias).
2. **Instalar WordPress limpio:** con el instalador del hosting (Softaculous, como en InfinityFree) o subiendo WordPress desde wordpress.org y creando una base de datos vacía.
3. **Restaurar el respaldo:**
   - **Con BackWPup** (si la copia se generó): descomprime el `.zip`, sube `wp-content/` por FTP, e importa el `.sql` que viene dentro con phpMyAdmin.
   - **Con el respaldo manual:** sube la carpeta `wp-content/` por FTP (reemplaza la del WordPress limpio) e importa el `.sql` en phpMyAdmin, en la base de datos del servidor nuevo.
   - Revisa que `wp-config.php` tenga el nombre, usuario y contraseña de la base de datos **nueva** y el mismo prefijo de tablas del respaldo.
4. **Ajustar:**
   - Si cambia el dominio, actualiza `siteurl` y `home` en la tabla `wp_options` (o en **Ajustes > Generales**) y reemplaza la URL antigua en el contenido con un plugin como Better Search Replace.
   - Ve a **Ajustes > Enlaces permanentes** y pulsa **Guardar** para regenerar los enlaces.
   - Revisa **Ajustes > Lectura** (portada Inicio y entradas en Blog) y **Apariencia > Menús** («Menú principal»).
   - En **WP Mail SMTP > Ajustes**, vuelve a escribir la contraseña del SMTP si el formulario no envía.
5. **Probar:** abre Inicio, Nosotros, Blog, una entrada y Contacto, en el computador y en el celular; revisa que carguen las imágenes; envía un **mensaje de prueba** desde Contacto y confirma que llega al correo.

**Problemas que tuve y cómo los resolví:**

- **Contact Form 7 pedía WordPress 7.1** y el sitio tenía 7.0.2: actualicé WordPress a 7.1.4 antes de instalarlo.
- **InfinityFree gratis no envía correos con `mail()` de PHP:** instalé WP Mail SMTP y lo configuré con Gmail (smtp.gmail.com, TLS, puerto 587). Gmail exige una **contraseña de aplicación** (con la verificación en 2 pasos activa); con la contraseña normal responde «535 Username and Password not accepted». **Prueba del 23 de noviembre:** el formulario mostró «¡Gracias por escribirnos!…» y el mensaje llegó a francoandreiro@gmail.com con el asunto «Joyas Kofran "Otra consulta"».
- **BackWPup no corre en InfinityFree** por el bloqueo de WP-Cron y de las peticiones internas: documenté el respaldo manual con phpMyAdmin y el File Manager.
- **El CSS nuevo no se veía en mi navegador** después de actualizar el tema, porque `functions.php` carga `style.css` siempre con la versión 0.1 y el navegador lo guarda en caché: se soluciona con **Ctrl+F5**, y además vacío la caché de W3 Total Cache después de cada cambio.

## Plugins instalados

| Plugin | Para qué lo uso | Gratis o de pago | Versión |
|---|---|---|---|
| Yoast SEO | SEO: título, meta descripción y mapa del sitio | Gratis (tiene versión Premium) | 28.9 |
| Contact Form 7 | Formulario de la página Contacto (mensajes de confirmación y error en español) | Gratis | 6.2.5 |
| WP Mail SMTP | Enviar los correos del formulario por SMTP (Gmail) | Gratis (tiene versión Pro) | 4.10.4 |
| BackWPup | Respaldo programado de archivos y base de datos | Gratis (tiene versión Pro) | 5.7.8 |
| Loginizer | Limita los intentos de inicio de sesión (viene con InfinityFree) | Gratis | 2.1.3 |
| W3 Total Cache | Caché del sitio (viene con InfinityFree) | Gratis | 2.11.0 |

Borré los plugins y temas que no usaba (Akismet, Hello Dolly, Colibri Page Builder, Silverstorm y Zino), como pide la guía de seguridad.

## Páginas y entradas

- **Páginas:** Inicio, Nosotros, Blog, Contacto
- **Entradas del blog:**
  - Cómo cuidar tus joyas de plata para que duren años
  - Cómo elegir la talla de anillo correcta
  - Ideas de regalo en plata para cada ocasión

## Cómo me organicé

Mi plan y mi plan B están en [`decisiones.md`](proyecto/decisiones.md). Seguí con el tema propio: empecé el 12 de noviembre en vez del 5, pero lo terminé y lo probé ese mismo día, así que no activé el plan B. Las páginas Autenticidad de la plata y Preguntas frecuentes, y los plugins Joinchat y AddToAny, pasaron a la etapa 2.

## Plan de continuidad y rendimiento

- **Plan de continuidad (etapa 2 de mi web):** [`plan-de-continuidad.md`](proyecto/plan-de-continuidad.md)
- **Análisis de rendimiento con Lighthouse:** [`lighthouse.md`](proyecto/lighthouse.md)

## Uso de IA

- **Claude (Anthropic):** lo usé para escribir el código del tema `kofran-joyeria` a partir de `tema-base/` y de mi `DESIGN.md`; para configurar WordPress (páginas, menú, Contact Form 7, Yoast SEO, WP Mail SMTP y BackWPup); para correr y analizar Lighthouse; y para redactar los borradores de `decisiones.md`, `plan-de-continuidad.md`, `lighthouse.md` y este README. Yo elegí el emprendimiento, las páginas, el tema propio y los cambios de contenido (por ejemplo, reemplazar «6 meses de garantía» por «Plata 925 auténtica»), revisé cada paso y configuré la contraseña de aplicación de Gmail.
