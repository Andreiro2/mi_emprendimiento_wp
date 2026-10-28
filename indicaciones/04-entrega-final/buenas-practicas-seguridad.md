---
title: "Buenas prácticas de seguridad en WordPress"
type: theory
estimated_time: 10
---

# Buenas prácticas de seguridad en WordPress

**Para leer antes de la clase (10 minutos).** No instalamos herramientas de seguridad avanzadas: aprendemos los hábitos que evitan la mayoría de los problemas.

## Por qué importa

Un sitio publicado recibe visitas de personas y también de **programas automáticos** que prueban contraseñas y buscan puntos débiles. No es personal: pasa con todos los sitios, incluidos los pequeños. La mayoría de los ataques exitosos usan fallos conocidos y simples.

## Las siete prácticas

### 1. Mantén todo actualizado
WordPress, tu tema y tus plugins reciben arreglos de seguridad. Lo desactualizado es la puerta que más se aprovecha. En el panel, **Escritorio > Actualizaciones**.

### 2. Contraseñas fuertes y únicas
- Largas (12 caracteres o más), con letras, números y símbolos, o una frase larga.
- **Distinta** a la que usas en otros sitios.
- Guárdala en un gestor de contraseñas, no en un papel pegado al computador.

### 3. Usuario distinto de "admin"
"admin" es el primer nombre que prueban los programas automáticos. Crea tu usuario administrador con otro nombre y no uses el correo como nombre visible.

### 4. HTTPS
El candado en el navegador significa que la conexión va cifrada. En InfinityFree puede tardar unos días en aparecer (por la configuración del DNS). Cuando esté disponible, tu sitio debe cargarse con `https://`.

### 5. Pocos plugins, de fuentes confiables
- Instala solo desde **Plugins > Añadir nuevo** (el repositorio oficial).
- **Nunca** descargues plugins o temas "pirata" o "gratis desde un sitio raro": suelen traer código malicioso.
- Borra los plugins que no usas. Un plugin desactivado también puede tener fallos.

### 6. Copias de seguridad
Si algo sale mal (hackeo, un error tuyo, una actualización que rompe el sitio), una copia reciente te permite volver atrás. Se guarda **fuera** del sitio. La haremos con **BackWPup**.

### 7. Cuida lo que compartes
- No compartas tu contraseña de administrador.
- No pegues contraseñas ni claves en chats de IA ni en tu repositorio de GitHub.
- Desconfía de correos que te piden "verificar tu cuenta" de WordPress o del hosting (phishing).

## Qué amenazas cubre cada práctica

| Amenaza | Qué es | Práctica que ayuda |
|---|---|---|
| Fuerza bruta | Un programa prueba miles de contraseñas | 2 y 3 |
| Fallos conocidos | Aprovechan versiones viejas | 1 y 5 |
| Spam en comentarios | Mensajes automáticos con enlaces | Akismet |
| Pérdida de datos | Un error o ataque borra tu sitio | 6 |
| Phishing | Te engañan para que entregues tu clave | 7 |

## Revisa antes de publicar

- [ ] WordPress, tema y plugins actualizados.
- [ ] Contraseña fuerte y única.
- [ ] Usuario administrador distinto de "admin".
- [ ] Solo plugins que usas (Akismet, Yoast SEO, Contact Form 7, BackWPup).
- [ ] Copia de seguridad hecha y guardada fuera del sitio.
- [ ] Ninguna clave dentro de los archivos del tema ni del repo.

## Para pensar antes de la clase

¿Qué le pasaría a tu sitio si hoy se borrara todo? ¿Qué tendrías para recuperarlo?
