MENÚ. CARACTERÍSTICAS:

- Navegación adicional por teclado presionando la tecla alt + [letra resaltada]
- El mismo usuario puede configurar la letra de cada ítem desde el panel. Todo lo que tiene que hacer es encerrar la letra elegida entre corchetes, así: Gu[a]nzo (entonces el enlace se activa presionando Alt + A).

OPCIONES DEL MENÚ

Desarrollaré estas opciones al final, junto con las opciones generales del theme.

1: El usuario también definirá su propia combinación de teclas.
2: Habilitar / deshabilitar alternative de navegación con el atributo "accesskey" para quienes no deseen manejarlo con javascript.
3: Habilitar / deshabilitar la navegación por teclado.

El menú tiene una función tipo walker personalizada (encuentras el archivo en /inc/sg-class-walker-nav-menu.php), es un callback personalizado que sobrescribe las funciones por defecto de WordPress sólo para ese menú.

La gestión javascript de la navegación por teclado es bastante robusta y escalable. Después de probar varias opciones propias y de terceros elegí jQuery Keymap (https://github.com/dwachss/keymap)