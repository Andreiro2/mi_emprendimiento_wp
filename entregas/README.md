# Instrucciones del proyecto · Mi emprendimiento en WordPress

> Proyecto de la **Evaluación 03 — Sitios Web y Landing Pages (MKA1203, DUOC)**. Parte de tu repo `mi-emprendimiento` del Parcial 02 y lo convierte en un sitio WordPress en producción.

## Qué vas a lograr

No se trata solo de levantar un sitio. En este proyecto aprendes a:

- **Organizarte:** decides qué vas a construir y en qué tiempos, con una carta Gantt.
- **Planificar:** eliges plugins, páginas y tema a partir de las funcionalidades de tu emprendimiento.
- **Mitigar riesgos:** escribes un plan B para cuando algo no funciona y lo usas si hace falta.

**La meta:** al terminar, tienes un sitio WordPress **en producción, funcional y listo para migrar a un servidor profesional**.

## Cómo está organizado este repo

| Carpeta o archivo | Qué es | ¿Lo editas? |
|---|---|---|
| `entregas/` (esta carpeta) | Una carpeta por entrega, con su pauta y sus guías | **No**: es la instrucción. El docente puede actualizarla. |
| [`tema-base/`](../tema-base/README.md) | Tema de WordPress en blanco para partir | **No**: cópialo a `mi-tema/` y trabaja ahí. |
| [`README.md`](../README.md) (raíz) | El README **de tu proyecto**: contexto de tu sitio e instrucciones para instalarlo | **Sí**: lo completas tú (ver abajo). |
| `decisiones.md` | Tu documento de decisiones (Sumativa 2) | **Sí**: lo creas tú desde la plantilla. |
| `mi-tema/` | Tu propio tema, si decides hacerlo | **Sí**: lo creas tú copiando `tema-base/`. |

> **Regla para que no se te enrede el repo:** no modifiques `entregas/` ni `tema-base/`. Así, cuando se actualice el material, puedes traer los cambios sin conflictos. Tu trabajo va en el `README.md` de la raíz, en `decisiones.md`, en `mi-tema/` y en archivos nuevos que crees tú.

## Tu propio README

El `README.md` de la raíz del repo **es tuyo**: ahí explicas tu proyecto. Ya trae una plantilla con lo que debe tener:

1. **Contexto de tu web:** qué es tu emprendimiento y qué resuelve el sitio.
2. **Instrucciones para instalarlo**, según lo que elegiste:
   - **Tema propio:** cómo instalar tu tema en WordPress.
   - **Tema descargado:** qué requisitos tiene el tema y cómo exportar los datos de Local a producción con plugins.
3. **Plugins y páginas** de tu sitio, y **cómo usaste IA**.

Se completa a medida que construyes. El docente no modificará el `README.md` de la raíz después de que lo copies, para que no haya conflictos al sincronizar.

## Las entregas

Todo el trabajo es **individual**. Los puntos coinciden con el porcentaje: 15 + 25 + 30 + 30 = 100.

| # | Entrega | Fecha | Puntos | Carpeta |
|---|---|---|---|---|
| 1 | Publica tu sitio | Vie 30 oct | 15 | [`01-publica-tu-sitio`](01-publica-tu-sitio/README.md) |
| 2 | Decisiones de tu sitio | Mié 4 nov | 25 | [`02-decisiones`](02-decisiones/README.md) |
| 3 | Avance | Mié 18 nov | 30 | [`03-avance`](03-avance/README.md) |
| 4 | Entrega final | Mié 25 nov | 30 | [`04-entrega-final`](04-entrega-final/README.md) |

La construcción de tu sitio va del **jueves 5 al miércoles 25 de noviembre**. El martes 24 hay una revisión final en clase, sin nota.

## Cómo empezar

1. **Haz un fork** de este repo a tu cuenta de GitHub (botón *Fork*).
2. Clona tu fork en tu computador.
3. Lee la pauta de la entrega que corresponde.

## Cómo traer las actualizaciones del docente

Si el docente actualiza este repo, tu fork no se entera solo. Para traer los cambios:

**Opción A · desde GitHub (la más simple):**

1. Entra a tu fork en GitHub.
2. Si dice que tu rama está atrasada, pulsa **Sync fork** y luego **Update branch**.
3. En tu computador, ejecuta `git pull`.

**Opción B · desde la terminal:**

```bash
git remote add upstream https://github.com/carocromatica/mi_emprendimiento_wp.git
git fetch upstream
git merge upstream/main
```

Lo de `git remote add upstream` se hace una sola vez. Después basta con `git fetch upstream` y `git merge upstream/main`.

**Si hay conflictos:** casi siempre es porque editaste algo dentro de `entregas/` o `tema-base/`. Vuelve a la versión del docente con `git checkout upstream/main -- ruta/del/archivo`, y pasa tus cambios a `decisiones.md` o a `mi-tema/`.

## Reglas

- La documentación es en **Markdown** (`.md`).
- Puedes usar IA y tutoriales, pero debes poder explicar lo que entregas.
- **Cambiar de idea no se penaliza** si lo documentas (ver la entrega 3).
- Un cambio a la vez; si funciona, haces commit.
