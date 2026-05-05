<?php
  $page_title = 'Cuestionario — velat_.studio';
  $page_desc  = 'Cuestionario personal para comprender tus hábitos y tu manera de habitar.';
  $active     = '';
?>
<!DOCTYPE html>
<html lang="es">
<head><?php include __DIR__.'/partials/head.php'; ?></head>
<body>
<?php include __DIR__.'/partials/header.php'; ?>

<main>
  <style>
    @font-face {
      font-family: 'ABCGaisyr';
      src: url('assets/fonts/Gaisyr.woff2') format('woff2');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }
    :root{
      --fg:#232323; --bg:#ffffff; --muted:#666; --line:#ddd;
      --chip:#eee; --chip-h:#ddd;
    }
    *{ box-sizing:border-box; }
    body{
      font-family: 'ABCGaisyr', 'Courier New', Courier, monospace;
      background:var(--bg); color:var(--fg);
      margin:0; min-height:100vh;
    }
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 120px;
      height: 38px;
      z-index: 200;
      background: none;
      display: flex;
      align-items: flex-start;
      justify-content: flex-start;
      padding: 0;
    }
    .logo {
      display: block;
      width: 120px;
      height: 30px;
      background: url('assets/logo40.png') no-repeat center center;
      background-size: contain;
      cursor: pointer;
      margin: 0;
    }
    main {
      max-width: 720px;
      margin: 80px auto 100px auto;
      padding: 0 8px;
    }
    h1 {
      font-size: 1.18em;
      font-weight: bold;
      letter-spacing: 2px;
      color: #222;
      margin-top: 0;
      margin-bottom: 28px;
    }
    h2 {
      font-size: 1em;
      font-weight: bold;
      color: #181818;
      margin-top: 36px;
      margin-bottom: 16px;
      letter-spacing: 1px;
    }
    p, label, .pregunta, input, textarea, select {
      font-size: 1em;
      line-height: 1.7;
      color: #232323;
    }
    form { margin: 0; }
    .pregunta { margin-bottom: 22px; }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
      letter-spacing: 0.1px;
    }
    input[type="text"],
    input[type="email"],
    textarea,
    select {
      width: 100%;
      padding: 7px 10px;
      margin-top: 2px;
      margin-bottom: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-family: inherit;
      background: #fafafa;
      color: #232323;
      transition: border 0.16s;
    }
    input:focus, textarea:focus, select:focus {
      border-color: #7cc7ec;
      outline: none;
    }
    input[type="radio"], input[type="checkbox"] {
      margin-right: 8px;
      accent-color: #232323;
    }
    button[type="submit"] {
      background: #eee;
      color: #222;
      border: none;
      padding: 11px 30px;
      border-radius: 8px;
      font-family: inherit;
      font-size: 1em;
      cursor: pointer;
      transition: background 0.2s, color 0.2s;
      margin-top: 24px;
      margin-bottom: 22px;
      display: block;
    }
    button[type="submit"]:hover {
      background: #ddd;
      color: #000;
    }
    /* Menú inferior original (no se usa porque ahora hay footer global, pero lo conservo por si lo necesitas) */
    .menu-bottom-bar { display:none; }
    @media (max-width: 900px) {
      header { width: 80px; height: 22px; }
      .logo { width: 80px; height: 20px; }
      main { margin: 60px auto 90px auto; }
    }
    @media (max-width: 600px) {
      header { width: 58px; height: 15px; }
      .logo { width: 58px; height: 15px; }
      main { margin: 40px auto 70px auto; }
    }
  </style>

  <h1>Cuestionario</h1>
  <p>
    Este cuestionario no busca respuestas rápidas, sino señales.<br>
    Queremos entender cómo vives, cómo compartes, cómo te recoges.<br>
    A través de tus hábitos, intuimos las formas.<br>
    Responde con calma. Tu hogar ya está hablando.
  </p>

  <form action="guardar_respuestas.php" method="POST">
    <!-- DATOS BÁSICOS -->
    <div class="pregunta">
      <label for="nombre">Tu nombre</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>

    <!-- SOCIABILIDAD -->
    <h2>SOCIABILIDAD</h2>
    <div class="pregunta">
      <label>¿Sueles organizar eventos o reuniones alrededor del televisor con amigos o familiares?</label>
      <input type="radio" name="eventos_tv" value="Sí, es uno de mis rituales favoritos"> Sí, es uno de mis rituales favoritos<br>
      <input type="radio" name="eventos_tv" value="No, prefiero otro tipo de encuentros"> No, prefiero otro tipo de encuentros<br>
      <input type="radio" name="eventos_tv" value="A veces, depende del momento"> A veces, depende del momento
    </div>

    <div class="pregunta">
      <label>¿Te gusta ser el anfitrión de comidas o cenas en casa?</label>
      <input type="radio" name="anfitrion" value="Sí, me encanta organizar eventos"> Sí, me encanta organizar eventos<br>
      <input type="radio" name="anfitrion" value="No mucho, prefiero que me sorprendan a mí"> No mucho, prefiero que me sorprendan a mí<br>
      <input type="radio" name="anfitrion" value="Solo en ocasiones especiales"> Solo en ocasiones especiales
    </div>

    <div class="pregunta">
      <label>¿Suelen quedarse personas a dormir en tu casa?</label>
      <input type="radio" name="pernoctan" value="Tengo ocupas constantemente"> Tengo ocupas constantemente<br>
      <input type="radio" name="pernoctan" value="Al menos una vez al mes tengo compañeros de casa"> Al menos una vez al mes tengo compañeros de casa<br>
      <input type="radio" name="pernoctan" value="Rara vez dejo que me roben el desayuno"> Rara vez dejo que me roben el desayuno
    </div>

    <div class="pregunta">
      <label>¿Qué espacio de la casa prefieres para socializar?</label>
      <input type="text" name="espacio_socializar">
    </div>

    <!-- COCINA Y ALMACENAMIENTO -->
    <h2>COCINA Y ALMACENAMIENTO</h2>
    <div class="pregunta">
      <label>¿Cómo es tu relación con la cocina?</label>
      <input type="radio" name="relacion_cocina" value="Íntima, soy un/a cocinitas y uso mucho espacio"> Íntima, soy un/a cocinitas y uso mucho espacio<br>
      <input type="radio" name="relacion_cocina" value="Depende del día, de vez en cuando me pongo creativo/a"> Depende del día, de vez en cuando me pongo creativo/a<br>
      <input type="radio" name="relacion_cocina" value="Esporádica, lo justo y necesario para sobrevivir"> Esporádica, lo justo y necesario para sobrevivir
    </div>

    <div class="pregunta">
      <label>¿Cómo sueles gestionar el almacenamiento de comida?</label>
      <input type="radio" name="almacenamiento" value="Acumulo provisiones e intento tener de todo."> Acumulo provisiones e intento tener de todo.<br>
      <input type="radio" name="almacenamiento" value="Compro y consumo al día, poco almacenamiento"> Compro y consumo al día, poco almacenamiento<br>
      <input type="radio" name="almacenamiento" value="Mezcla de ambos, según la temporada"> Mezcla de ambos, según la temporada
    </div>

    <div class="pregunta">
      <label>¿Cómo concibes el momento de cocinar?</label>
      <input type="radio" name="momento_cocinar" value="Prefiero no tener compañía, soy de concentrarme cuando cocino"> Prefiero no tener compañía, soy de concentrarme cuando cocino<br>
      <input type="radio" name="momento_cocinar" value="Me gusta entretenerme mientras cocino, la compañía es bienvenida a veces"> Me gusta entretenerme mientras cocino, la compañía es bienvenida a veces<br>
      <input type="radio" name="momento_cocinar" value="Cocinar es un acto social en el que todo el mundo participa"> Cocinar es un acto social en el que todo el mundo participa
    </div>

    <!-- DORMITORIO E INTIMIDAD -->
    <h2>DORMITORIO E INTIMIDAD</h2>
    <div class="pregunta">
      <label>¿Cuál es tu relación con la ropa?</label>
      <input type="radio" name="relacion_ropa" value="Soy un poco fashion victim"> Soy un poco fashion victim<br>
      <input type="radio" name="relacion_ropa" value="Término medio, me gusta tener de todo pero tampoco me paso"> Término medio, me gusta tener de todo pero tampoco me paso<br>
      <input type="radio" name="relacion_ropa" value="Minimalismo absoluto, Marie Kondo es mi pasión"> Minimalismo absoluto, Marie Kondo es mi pasión
    </div>

    <div class="pregunta">
      <label>¿Qué importancia le das al maquillaje y accesorios?</label>
      <input type="radio" name="maquillaje" value="Muy importante, forman parte de mi rutina diaria"> Muy importante, forman parte de mi rutina diaria<br>
      <input type="radio" name="maquillaje" value="Los uso solo cuando es necesario"> Los uso solo cuando es necesario<br>
      <input type="radio" name="maquillaje" value="No les doy mucha importancia"> No les doy mucha importancia
    </div>

    <div class="pregunta">
      <label>¿Con cuál de estas opciones te identificas más?</label>
      <input type="radio" name="luz_dormir" value="Oscuridad absoluta, cualquier rayo de luz me perturba"> Oscuridad absoluta, cualquier rayo de luz me perturba<br>
      <input type="radio" name="luz_dormir" value="Un poco de luz no me molesta para dormir"> Un poco de luz no me molesta para dormir<br>
      <input type="radio" name="luz_dormir" value="Podría dormir a plena luz del sol sin problema"> Podría dormir a plena luz del sol sin problema
    </div>

    <div class="pregunta">
      <label>¿Cómo evoluciona vuestra actividad a lo largo del día?</label>
      <input type="radio" name="actividad_dia" value="Estamos sincronizados en horarios, somos más de madrugar"> Estamos sincronizados en horarios, somos más de madrugar<br>
      <input type="radio" name="actividad_dia" value="Nos gusta trasnochar un poco"> Nos gusta trasnochar un poco<br>
      <input type="radio" name="actividad_dia" value="Somos polos opuestos de actividad"> Somos polos opuestos de actividad
    </div>

    <!-- BAÑO Y RELAJACIÓN -->
    <h2>BAÑO Y RELAJACIÓN</h2>
    <div class="pregunta">
      <label>Dentro de mi baño…</label>
      <input type="radio" name="bano" value="Tengo mil aparatos, jabones, cremas, toallas… el baño es mi templo"> Tengo mil aparatos, jabones, cremas, toallas… el baño es mi templo<br>
      <input type="radio" name="bano" value="Tengo las cosas necesarias, no uso muchos productos"> Tengo las cosas necesarias, no uso muchos productos<br>
      <input type="radio" name="bano" value="Tengo lo mínimo, no me gustan los trastos dentro del baño"> Tengo lo mínimo, no me gustan los trastos dentro del baño
    </div>

    <div class="pregunta">
      <label>¿Cómo prefieres la distribución del baño en casa?</label>
      <input type="radio" name="distribucion_bano" value="Baños separados: uno para padres, otro para hijos"> Baños separados: uno para padres, otro para hijos<br>
      <input type="radio" name="distribucion_bano" value="Baño compartido para toda la familia"> Baño compartido para toda la familia<br>
      <input type="radio" name="distribucion_bano" value="Otro"> Otro: <input type="text" name="distribucion_bano_otro" style="width:auto;">
    </div>

    <div class="pregunta">
      <label>¿Qué importancia le das al momento de la ducha?</label>
      <input type="radio" name="ducha" value="Solo ducha, rápida y directa"> Solo ducha, rápida y directa<br>
      <input type="radio" name="ducha" value="Equipo bañera, me gusta relajarme"> Equipo bañera, me gusta relajarme<br>
      <input type="radio" name="ducha" value="Ni blanco ni negro, una ducha relajante es mi rollo"> Ni blanco ni negro, una ducha relajante es mi rollo
    </div>

    <div class="pregunta">
      <label>¿Cómo te sientes respecto a tu desnudez en casa?</label>
      <input type="radio" name="desnudez" value="Totalmente cómodo, sin preocupaciones"> Totalmente cómodo, sin preocupaciones<br>
      <input type="radio" name="desnudez" value="Me gusta la privacidad, me preocupa si me ven desde alguna ventana o patio"> Me gusta la privacidad, me preocupa si me ven desde alguna ventana o patio
    </div>

    <!-- ESTUDIO Y FLUJO DE TRABAJO -->
    <h2>ESTUDIO Y FLUJO DE TRABAJO</h2>
    <div class="pregunta">
      <label>¿Qué activa tu concentración?</label>
      <input type="radio" name="concentracion" value="Cuando todo está ordenado y en silencio… zen total"> Cuando todo está ordenado y en silencio… zen total<br>
      <input type="radio" name="concentracion" value="Un poco de ruido no me molesta, me pone en marcha"> Un poco de ruido no me molesta, me pone en marcha<br>
      <input type="radio" name="concentracion" value="Cambio de espacio según la tarea, no soy de ataduras"> Cambio de espacio según la tarea, no soy de ataduras
    </div>

    <div class="pregunta">
      <label>¿Qué espacio o elementos facilitan entrar en modo trabajo?</label>
      <input type="text" name="espacio_trabajo">
    </div>

    <div class="pregunta">
      <label>¿Qué tipo de iluminación prefieres para tu espacio de trabajo?</label>
      <input type="radio" name="luz_trabajo" value="Luz natural abundante"> Luz natural abundante<br>
      <input type="radio" name="luz_trabajo" value="Luz cálida y tenue"> Luz cálida y tenue<br>
      <input type="radio" name="luz_trabajo" value="Luz directa y funcional"> Luz directa y funcional
    </div>

    <div class="pregunta">
      <label>Mi trabajo en el estudio es…</label>
      <input type="radio" name="trabajo_estudio" value="Totalmente digital, no uso mucho espacio"> Totalmente digital, no uso mucho espacio<br>
      <input type="radio" name="trabajo_estudio" value="Físico, hago mucho trabajo manual y necesito un espacio amplio"> Físico, hago mucho trabajo manual y necesito un espacio amplio<br>
      <input type="radio" name="trabajo_estudio" value="Una combinación, me gusta cambiar"> Una combinación, me gusta cambiar
    </div>

    <!-- HOBBIES Y DECORACIÓN -->
    <h2>HOBBIES Y DECORACIÓN</h2>
    <div class="pregunta">
      <label>¿Qué plantas prefieres tener en casa?</label>
      <input type="radio" name="plantas" value="Muchas plantas, casi una jungla urbana"> Muchas plantas, casi una jungla urbana<br>
      <input type="radio" name="plantas" value="Algunas plantas sueltas para dar vida"> Algunas plantas sueltas para dar vida<br>
      <input type="radio" name="plantas" value="Prefiero no tener plantas, no consigo que sobrevivan"> Prefiero no tener plantas, no consigo que sobrevivan
    </div>

    <div class="pregunta">
      <label>¿Qué formato de música sueles usar?</label>
      <input type="radio" name="musica" value="Digital, todo en streaming y playlists"> Digital, todo en streaming y playlists<br>
      <input type="radio" name="musica" value="Vinilos, me gusta lo analógico y coleccionarlos"> Vinilos, me gusta lo analógico y coleccionarlos<br>
      <input type="radio" name="musica" value="Mezcla de ambos, según el momento"> Mezcla de ambos, según el momento
    </div>

    <div class="pregunta">
      <label>¿Qué tipo de arte o coleccionismo forma parte de tu vida?</label>
      <input type="radio" name="arte" value="Pintura o fotografía"> Pintura o fotografía<br>
      <input type="radio" name="arte" value="Esculturas, figuras u objetos para exponer"> Esculturas, figuras u objetos para exponer<br>
      <input type="radio" name="arte" value="Minimalismo, menos es más"> Minimalismo, menos es más<br>
      <input type="radio" name="arte" value="Otro"> Otro: <input type="text" name="arte_otro" style="width:auto;">
    </div>

    <div class="pregunta">
      <label>¿Qué relación tienes con la lectura?</label>
      <input type="radio" name="lectura" value="Me encanta leer, prefiero el formato físico"> Me encanta leer, prefiero el formato físico<br>
      <input type="radio" name="lectura" value="Todo lo que leo es en formato digital"> Todo lo que leo es en formato digital<br>
      <input type="radio" name="lectura" value="Solo me leo los manuales de instrucciones"> Solo me leo los manuales de instrucciones
    </div>

    <div class="pregunta">
      <label>¿Tienes algún tipo de hobbie que desarrolles o te gustaría desarrollar (pintura, música, costura…)?</label>
      <input type="text" name="hobbies">
    </div>

    <!-- CAPAS OCULTAS -->
    <h2>CAPAS OCULTAS</h2>
    <div class="pregunta">
      <label>¿Qué objeto nunca tirarías, aunque no tenga sentido?</label>
      <input type="text" name="objeto_nunca_tirarias">
    </div>

    <div class="pregunta">
      <label>¿Alguna manía o ritual que mantienes en secreto?</label>
      <input type="text" name="mania_ritual">
    </div>

    <div class="pregunta">
      <label>¿Qué cosas hacen sentir tu casa acogedora?</label>
      <input type="text" name="casa_acogedora">
    </div>

    <div class="pregunta">
      <label>¿Qué parte de ti aún no tiene un lugar en tu hogar?</label>
      <input type="text" name="sin_lugar">
    </div>

    <!-- FINAL -->
    <p style="font-style: italic; color: #888; margin-top: 34px;">
      Las respuestas llegan al observar cómo se habita.
    </p>
    <button type="submit">Enviar</button>
  </form>
</main>

<?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>
