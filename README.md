# surfsafe
Trabajo de utilidad social para la asignatura de ELP de la UCM (curso 2015/2016)

El objetivo de este trabajo es el de ayudar a la sociedad a navegar seguro. Está dirigido inicialmente a gente con poco o ningún conocimiento de las estafas en Internet (p.e. phishing).

Se trata de una aplicación web que incluye un sencillo test. Este test intenta tocar todos los palos de las estafas en la red, y premia al usuario con una puntuación final comparable al resto de usuarios que lo hayan realizado.

v 0.1 (BETA):
El test funciona correctamente y añadirle nuevas situaciones es sencillo. Basta con fijarse en la composición de las mismas (carpeta game), que es la siguiente:
  1. "<div class="pregunta" id="pregunta_N"> (Siendo N el número de la pregunta)": Aquí irá el enunciado de la situación, además de los botones con las respuestas. Cada botón sigue la siguiente combinación
  2. "<button type="button" onclick="answer('N', score)" /> Respuesta": Siendo N el número de la pregunta y score la puntuación dada por dar esa respuesta. "answer" es una llamada a una función javascript que se encarga de sumar la puntuación.
  3. "<div class="error" id="error_N_SCORE"> Descripción del error": Siendo N el número de la pregunta y SCORE la puntuación obtenida por la respuesta. Se han creado imágenes (en la carpeta img) para los casos en que el usuario gane 25, 50 y 100 puntos. Si se quieren añadir distintas puntuaciones deberá crearse la imagen. Si el usuario falla, no se muestra imagen.
  4. "<button type="button" onclick="next_question('id del div')" />": Es obligatorio añadir este botón en cada una de las respuestas (dentro del div del punto 3). "id del div" es, obviamente, el id del div en el que se encuadra el botón.
  5. "Más información": Es obligatorio añadir en cada respuesta un enlace que proporcione más información acerca del tema propuesto por la situación concreta.

Previsión v 0.2:
Se propone la creación un blog con información acerca de seguridad en la red. La idea es enlazar las situaciones (ver punto 5 de la versión 0.1) a dicho blog. Se recomienda usar un CMS para facilitar esta tarea (p.e. WordPress).

Se propone la creación de un foro enlazado al test donde los usuarios puedan intercambiar opiniones sobre seguridad.

Se propone mejorar el test para hacerlo escalable. Sería necesario añadir una nueva tabla a la base de datos donde almacenar las preguntas y poder clasificarlas por dificultad. Cuanto más difícil sea la pregunta, más puntos deberá dar.
