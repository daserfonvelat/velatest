<?php
  $page_title = 'Cuestionario Infantil — velat_.studio';
  $page_desc  = 'Cuestionario para comprender cómo habitan los niños sus espacios.';
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
    Queremos entender cómo vives, como compartes, cómo te recoges.<br>
    A través de tus hábitos, intuimos las formas.<br>
    Responde con calma. tu hogar ya está hablando 
  </p>

  <form action="guardar_respuestas_infantil.php" method="POST">

    <!-- SOCIABILIDAD -->
    <h2>SOCIABILIDAD</h2>
    <div class="pregunta">
      <label>¿Sueles organizar fiestas para ver pelis o jugar a videojuegos con amigos?</label>
      <input type="radio" name="fiestas_amigos" value="Sí, es uno de mis rituales favoritos"> Sí, es uno de mis rituales favoritos<br>
      <input type="radio" name="fiestas_amigos" value="No, prefiero otro tipo de planes"> No, prefiero otro tipo de planes<br>
      <input type="radio" name="fiestas_amigos" value="A veces, depende del momento"> A veces, depende del momento
    </div>

    <div class="pregunta">
      <label>¿Te gusta invitar a gente a comer a casa?</label>
      <input type="radio" name="invitar_comer" value="Sí, me encanta que organicen comidas"> Sí, me encanta que organicen comidas<br>
      <input type="radio" name="invitar_comer" value="No mucho, prefiero que me sorprendan a mí"> No mucho, prefiero que me sorprendan a mí<br>
      <input type="radio" name="invitar_comer" value="Solo en ocasiones especiales"> Solo en ocasiones especiales
    </div>

    <div class="pregunta">
      <label>¿Suelen quedarse amigos a dormir en tu casa?</label>
      <input type="radio" name="duermen_amigos" value="Cada semana se quedan a dormir conmigo"> Cada semana se quedan a dormir conmigo<br>
      <input type="radio" name="duermen_amigos" value="Al menos una vez al mes tengo compañeros de casa"> Al menos una vez al mes tengo compañeros de casa<br>
      <input type="radio" name="duermen_amigos" value="Rara vez dejo que me roben el desayuno"> Rara vez dejo que me roben el desayuno
    </div>

    <div class="pregunta">
      <label>¿Qué espacio de la casa te gustaría para estar con tus amigas?</label>
      <input type="text" name="espacio_amigas">
    </div>

    <!-- COCINA Y ALMACENAMIENTO -->
    <h2>COCINA Y ALMACENAMIENTO</h2>
    <div class="pregunta">
      <label>Cuando alguien está cocinando...</label>
      <input type="radio" name="companero_cocina" value="Me gusta hacerle compañía"> Me gusta hacerle compañía<br>
      <input type="radio" name="companero_cocina" value="A veces me gusta hablar con quien está cocinando, pero también me molesta el ruido y los olores"> A veces me gusta hablar con quien está cocinando, pero también me molesta el ruido y los olores<br>
      <input type="radio" name="companero_cocina" value="No me gusta estar en la cocina cuando están cocinando"> No me gusta estar en la cocina cuando están cocinando
    </div>

    <div class="pregunta">
      <label>¿Cómo usas la despensa en casa?</label>
      <input type="radio" name="despensa" value="Me gusta tener mi espacio para mis cosas"> Me gusta tener mi espacio para mis cosas<br>
      <input type="radio" name="despensa" value="Siempre lo comparto con los demás, como lo mismo que mis padres"> Siempre lo comparto con los demás, como lo mismo que mis padres<br>
      <input type="radio" name="despensa" value="Me da igual, yo no me encargo de eso"> Me da igual, yo no me encargo de eso
    </div>

    <div class="pregunta">
      <label>¿Te gusta cocinar?</label>
      <input type="radio" name="gustar_cocinar" value="Me encanta cocinar, quiero aprender a hacer muchos platos"> Me encanta cocinar, quiero aprender a hacer muchos platos<br>
      <input type="radio" name="gustar_cocinar" value="Me gusta cocinar con mis padres alguna vez, pero no siempre me apetece"> Me gusta cocinar con mis padres alguna vez, pero no siempre me apetece<br>
      <input type="radio" name="gustar_cocinar" value="No me gusta demasiado cocinar"> No me gusta demasiado cocinar
    </div>

    <!-- MI HABITACIÓN -->
    <h2>MI HABITACIÓN</h2>
    <div class="pregunta">
      <label>¿Te gusta la ropa?</label>
      <input type="radio" name="ropa" value="Muchísimo, disfruto eligiendome los outfits"> Muchísimo, disfruto eligiendome los outfits<br>
      <input type="radio" name="ropa" value="Me gusta tener de todo pero me da un poco igual"> Me gusta tener de todo pero me da un poco igual<br>
      <input type="radio" name="ropa" value="No tengo mucha ropa"> No tengo mucha ropa
    </div>

    <div class="pregunta">
      <label>¿Tienes muchos juguetes?</label>
      <input type="radio" name="juguetes" value="Demasiados y de todo tipo, ya no se dónde guardarlos"> Demasiados y de todo tipo, ya no se dónde guardarlos<br>
      <input type="radio" name="juguetes" value="Los que cualquier niño tendría"> Los que cualquier niño tendría<br>
      <input type="radio" name="juguetes" value="No me gusta tener demasiados"> No me gusta tener demasiados
    </div>

    <div class="pregunta">
      <label>¿Con cuál de estas opciones te identificas más?</label>
      <input type="radio" name="luz_dormir" value="Me gusta dormir a oscuras"> Me gusta dormir a oscuras<br>
      <input type="radio" name="luz_dormir" value="Me gusta un poco de luz para dormir"> Me gusta un poco de luz para dormir
    </div>

    <!-- BAÑO Y RELAJACIÓN -->
    <h2>BAÑO Y RELAJACIÓN</h2>
    <div class="pregunta">
      <label>¿Cómo te gustaría tener el baño en casa?</label>
      <input type="radio" name="bano" value="Baños separados: uno para los papás, otro para mi"> Baños separados: uno para los papás, otro para mi<br>
      <input type="radio" name="bano" value="Baño compartido para toda la familia, me da igual"> Baño compartido para toda la familia, me da igual<br>
      <input type="radio" name="bano" value="Otro"> Otro: <input type="text" name="bano_otro" style="width:auto;">
    </div>

    <div class="pregunta">
      <label>¿Qué importancia le das al momento de la ducha?</label>
      <input type="radio" name="ducha" value="Solo ducha, rápida y directa"> Solo ducha, rápida y directa<br>
      <input type="radio" name="ducha" value="Equipo bañera, me gusta relajarme"> Equipo bañera, me gusta relajarme<br>
      <input type="radio" name="ducha" value="Ni blanco ni negro, una ducha relajante es lo que me gusta"> Ni blanco ni negro, una ducha relajante es lo que me gusta
    </div>

    <!-- ESTUDIAR Y HACER DEBERES -->
    <h2>ESTUDIAR Y HACER DEBERES</h2>
    <div class="pregunta">
      <label>¿Qué necesitas para concentrarte?</label>
      <input type="radio" name="concentracion" value="Que todo esté ordenado y en silencio… zen total"> Que todo esté ordenado y en silencio… zen total<br>
      <input type="radio" name="concentracion" value="Un poco de ruido no me molesta"> Un poco de ruido no me molesta<br>
      <input type="radio" name="concentracion" value="Me gusta cambiar de sitio para hacer los deberes"> Me gusta cambiar de sitio para hacer los deberes
    </div>

    <div class="pregunta">
      <label>¿Con qué luz te sientes más agusto para hacer deberes?</label>
      <input type="radio" name="luz_deberes" value="Me gusta la luz del día"> Me gusta la luz del día<br>
      <input type="radio" name="luz_deberes" value="Prefiero ponerme un flexo para ver mejor"> Prefiero ponerme un flexo para ver mejor
    </div>

    <div class="pregunta">
      <label>¿Cómo te gusta expresar tu creatividad?</label>
      <input type="radio" name="creatividad" value="Me encantan las manualidades, hago muchas cosas distintas con las manos"> Me encantan las manualidades, hago muchas cosas distintas con las manos<br>
      <input type="radio" name="creatividad" value="Soy más de leer, escribir y buscar cosas en internet"> Soy más de leer, escribir y buscar cosas en internet<br>
      <input type="radio" name="creatividad" value="Otro"> Otro: <input type="text" name="creatividad_otro" style="width:auto;">
    </div>

    <!-- HOBBIES Y DECORACIÓN -->
    <h2>HOBBIES Y DECORACIÓN</h2>
    <div class="pregunta">
      <label>¿Qué plantas prefieres tener en casa?</label>
      <input type="radio" name="plantas" value="Muchas plantas, casi una jungla urbana"> Muchas plantas, casi una jungla urbana<br>
      <input type="radio" name="plantas" value="Algunas plantas sueltas"> Algunas plantas sueltas<br>
      <input type="radio" name="plantas" value="Me da igual"> Me da igual
    </div>

    <div class="pregunta">
      <label>¿Dónde te gusta ensayar música?</label>
      <input type="radio" name="musica_ensayar" value="En el salón, en compañia de mis padres"> En el salón, en compañia de mis padres<br>
      <input type="radio" name="musica_ensayar" value="En mi habitación, me gusta hacerlo sola"> En mi habitación, me gusta hacerlo sola<br>
      <input type="radio" name="musica_ensayar" value="Otro"> Otro: <input type="text" name="musica_ensayar_otro" style="width:auto;">
    </div>

    <div class="pregunta">
      <label>¿Qué cosas te gustaría coleccionar o tener para decorar?</label>
      <input type="radio" name="coleccionar" value="Pintura o fotografías"> Pintura o fotografías<br>
      <input type="radio" name="coleccionar" value="Figuras u objetos para exponer"> Figuras u objetos para exponer<br>
      <input type="radio" name="coleccionar" value="No me gusta la decoración"> No me gusta la decoración<br>
      <input type="radio" name="coleccionar" value="Otro"> Otro: <input type="text" name="coleccionar_otro" style="width:auto;">
    </div>

    <div class="pregunta">
      <label>¿Te gustan los libros?</label>
      <input type="radio" name="libros" value="Me encanta leer, prefiero el formato físico"> Me encanta leer, prefiero el formato físico<br>
      <input type="radio" name="libros" value="Todo lo que leo es digital"> Todo lo que leo es digital<br>
      <input type="radio" name="libros" value="Solo me leo los manuales de instrucciones"> Solo me leo los manuales de instrucciones
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
      <label>¿Qué parte de ti aún no tiene un lugar en tu casa?</label>
      <input type="text" name="sin_lugar">
    </div>

    <p style="font-style: italic; color: #888; margin-top: 34px;">
      Las respuestas llegan al observar cómo se habita.<br>GRACIAS
    </p>

    <button type="submit">Enviar</button>
  </form>
</main>

<?php include __DIR__.'/partials/footer.php'; ?>
</body>
</html>
